<?php

class likToolkit
{
    private static string $contents;
    private static string $site_domain;
    private static array $CLASS_EXCLUSIONS = ["toggle"];
    private static array $PARAM_EXCLUSIONS = ["trust", "tcpa", "00N1P00000A2CfC", "post_type", "chat_with_us", "location"];
    private static array $CHAR_EXCLUSIONS = ['.asp', '.ca', '.css', '.edu', '.gov', '.htm', '.jpeg', '.jpg', '.jsp', '.mp3', '.mp4', '.org', '.pdf', '.php', '.png', '.txt', '.us', '.xml', '.xsl', 'bloomberg', 'fanniemae', 'usclimatedata', 'wikipedia'];

    public function __construct()
    {
        if (
            !is_admin()
            && !is_user_logged_in()
            && !stripos($_SERVER['REQUEST_URI'], 'wp-admin')
            && !stripos($_SERVER['REQUEST_URI'], 'wp-json')
            && !stripos($_SERVER['REQUEST_URI'], '.xml')
        ) {
            /**
             * DON'T RUN IN ADMIN DASHBOARD.
             */
            add_action('init', array('likToolkit', 'start_buffer'));
            add_action('shutdown', array('likToolkit', 'dump_buffer'));
            $this->get_site_domain();
        }
    }

    public static function get_site_domain()
    {
        $siteurl = get_option('siteurl');
        $https = 'https://';
        $http = 'http://';
        likToolkit::$site_domain = (stripos($siteurl, $https) > -1) ? substr($siteurl, strlen($https)) : ((stripos($siteurl, $http) > -1) ? substr($siteurl, strlen($http)) : $siteurl);
    }

    private static function excluded_character_check($s)
    {
        $chars = ['#', '?'];
        $chars = array_merge($chars, likToolkit::$CHAR_EXCLUSIONS);
        foreach ($chars as $key => $value) {
            if (stripos($s, $value) !== false) :
                return true;
            endif;
        }
        return false;
    }

    public static function remove_css_spaces($c)
    {
        $c = likToolkit::add_forward_slash_to_wp_pathways($c);
        likToolkit::remove_line_breaks_from_plugins();
        return preg_replace_callback('/(<style(.*?)>)(.*?)(<\/style>)/s', function ($style_tags) {
            return $style_tags[1] . likToolkit::minify_css($style_tags[3]) . $style_tags[4];
        }, $c);
    }

    private static function is_link_internal($link)
    {
        if (substr($link, 0, 2) == '//') {
            return false;
        } else if (substr($link, 0, 1) == '/' || substr($link, 0, 1) == '#') {
            return true;
        }

        $link_no_query = substr($link, 0, strpos($link, '?'));
        $link = (!empty($link_no_query)) ? $link_no_query : $link;

        if (stripos($link, likToolkit::$site_domain) >= -1) {
            return true;
        }
        return false;
    }

    private static function add_forward_slash_to_wp_pathways($c)
    {
        return preg_replace_callback('/(?<=href=["|\'])[^tel|sms|mailto](.*?)(?=[\"|\'])/', function ($links) {
            if (
                likToolkit::is_link_internal($links[0]) === true
                && substr($links[0], -1) != '/'
                && likToolkit::excluded_character_check($links[0]) === false
            ) :
                $links[1] = $links[1] . '/';
            endif;
            return $links[0][0] . $links[1];
        }, $c);
    }

    private static function minify_css($css)
    {
        $css = preg_replace('/(\/\*)(.*?)(\*\/)/s', '', $css);  // REMOVE COMMENTS OF THIS FORMAT: /* */
        $css = preg_replace('/(\n\r|\n|\r|\t)/s', '', $css);    // REMOVE LINE BREAKS
        $css = preg_replace('/}\s*/', '}', $css);               // REMOVE ALL SPACES AFTER CLOSING BRACE
        $css = preg_replace('/\s*}/', '}', $css);               // REMOVE ALL SPACES PRECEDING CLOSING BRACE
        $css = preg_replace('/;}/', '}', $css);                 // REMOVE SEMICOLON AT END OF CSS RULE
        $css = preg_replace('/{\s*/', '{', $css);               // REMOVE ALL SPACES AFTER OPENING BRACE
        $css = preg_replace('/\s*{/', '{', $css);               // REMOVE ALL SPACES BEFORE OPENING BRACE
        $css = preg_replace('/;\s*/', ';', $css);               // REMOVE ALL SPACES AFTER SEMICOLON
        $css = preg_replace('/:\s*/', ':', $css);               // REMOVE ALL SPACES AFTER COLON
        $css = preg_replace('/,\s*/', ',', $css);               // REMOVE ALL SPACES AFTER COMMA
        $css = preg_replace('/\s*!/', '!', $css);               // REMOVE ALL SPACES BEFORE IMPORTANT CHARACTER
        $css = preg_replace('/\s*\(/', '(', $css);              // REMOVE ALL SPACES BEFORE OPENING PARENTHESIS
        $css = preg_replace('/and\(/', 'and (', $css);          // ADD SPACE AFTER and
        $css = preg_replace('/\(\s*/', '(', $css);              // REMOVE ALL SPACES AFTER OPENING PARENTHESIS
        $css = preg_replace('/\s*\)/', ')', $css);              // REMOVE ALL SPACES BEFORE CLOSING PARENTHESIS
        $css = preg_replace('/\)\s*(?!-|\+|\.)/', ')', $css);   // REMOVE ALL SPACES AFTER CLOSING PARENTHESIS EXPECT WHEN FOLLOWED BY - OR + OR .
        $css = preg_replace('/\s*>/', '>', $css);               // REMOVE ALL SPACES BEFORE GREATER-THAN SELECTOR
        $css = preg_replace('/>\s*/', '>', $css);               // REMOVE ALL SPACES AFTER GREATER-THAN SELECTOR
        return $css;
    }

    public static function remove_line_breaks_from_plugins()
    {
        $files_to_minify = [
            '/contact-form-7/includes/css/styles.css',
        ];
        foreach ($files_to_minify as $path) {
            $root_pathway = (file_exists(WP_PLUGIN_DIR . $path)) ? WP_PLUGIN_DIR : (file_exists(ABSPATH . $path) ? ABSPATH : null);
            if ($root_pathway == null) continue;
            if (stripos($path, '.css') > -1) :
                file_put_contents($root_pathway . $path, likToolkit::minify_css(file_get_contents($root_pathway . $path)));
            endif;
        }
    }

    private static function urlBasedExclusions($_href)
    {
        if (gettype($_href) == "object") {
            return false;
        } else if (
            stripos($_href, "tel") === 0
            || stripos($_href, "sms") === 0
            || stripos($_href, "mailto") === 0
            || stripos($_href, "#") === 0
            || stripos($_href, "data") === 0
            || $_href == ""
        ) {
            return true;
        }
        return false;
    }

    private static function checkForExclusions($_string, $_type)
    {
        $_type_count = count($_type);
        for ($i = 0; $i < $_type_count; $i++) {
            if (
                stripos($_string, $_type[$i]) > -1
                || $_string == "s"
            ) {
                return true;
            }
        }
        return false;
    }

    public static function add_query_parameters_to_links($page)
    {
        $parameters = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
        if (!$parameters) {
            return $page;
        }

        parse_str($parameters, $param_array);
        $parameters = '';
        $index = 0;
        foreach ($param_array as $key => $value) {
            if (likToolkit::checkForExclusions($key, likToolkit::$PARAM_EXCLUSIONS)) {
                continue;
            }
            $parameters .= $key . '=' . $value . ($index < (count($param_array) - 1) ? '&' : '');
            $index++;
        }

        $DOM = new DOMDocument;
        $DOM->loadHTML($page, LIBXML_NOERROR);

        $anchor_tags = $DOM->getElementsByTagName('a');
        $iframe_tags = $DOM->getElementsByTagName('iframe');

        if ($anchor_tags) :
            foreach ($anchor_tags as $key => $_a) {

                if (
                    !$_a->hasAttribute('href')
                    || likToolkit::urlBasedExclusions($_a->getAttribute('href')) == true
                    || likToolkit::checkForExclusions($_a->getAttribute('class'), likToolkit::$CLASS_EXCLUSIONS) == true
                    || likToolkit::checkForExclusions($_a->getAttribute('href'), likToolkit::$CHAR_EXCLUSIONS) == true
                ) {
                    continue;
                }

                $_href = $_a->getAttribute('href');
                $_a->removeAttribute('href');

                $link_array = parse_url($_href);

                $scheme = isset($link_array['scheme']) ? $link_array['scheme'] . '://' : '';
                $host = isset($link_array['host']) ? $link_array['host'] : '';
                $path = isset($link_array['path']) ? $link_array['path'] : '';
                $query = isset($link_array['query']) ? $link_array['query'] . '&' : '';
                $fragment = isset($link_array['fragment']) ? '#' . $link_array['fragment'] : '';

                $_href = $scheme . $host . $path . '?' . $query . $parameters . $fragment;

                $_a->setAttribute("href", $_href);
            }
        endif;

        if ($iframe_tags) {
            foreach ($iframe_tags as $key => $_f) {
                if (
                    !$_f->hasAttribute('src')
                    || likToolkit::urlBasedExclusions($_f->getAttribute('src'))  == true
                ) {
                    continue;
                }

                $_src = $_f->getAttribute('src');
                $_f->removeAttribute('src');

                $link_array = parse_url($_src);

                $scheme = isset($link_array['scheme']) ? $link_array['scheme'] . '://' : '';
                $host = isset($link_array['host']) ? $link_array['host'] : '';
                $path = isset($link_array['path']) ? $link_array['path'] : '';
                $query = isset($link_array['query']) ? $link_array['query'] . '&' : '';
                $fragment = isset($link_array['fragment']) ? '#' . $link_array['fragment'] : '';

                $_src = $scheme . $host . $path . '?' . $query . $parameters . $fragment;

                $_f->setAttribute("src", $_src);
            }
        }
        return $DOM->saveHTML();
    }

    public static function add_role_attribute_to_elements($node)
    {
        $headings = ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'];
        if ($node->hasChildNodes()) {
            foreach ($node->childNodes as $child) {
                if (
                    $child->nodeName != '#text'
                    && $child->nodeName != '#document'
                    && $child->nodeName != 'script'
                ) {
                    if ($child->hasAttributes() && $child->hasAttribute('onclick')) {
                        $child->setAttribute('role', 'button');
                    }
                    if (false != array_search($child->nodeName, $headings) && $child->hasChildNodes()) {
                        if (false != array_search($child->nodeName, $headings)) {
                            for ($i = 0; $i < count($child->childNodes); $i++) {
                                if ($child->childNodes->item($i)->nodeName != '#text' && $child->childNodes->item($i)->nodeName != 'br') {
                                    $child->childNodes->item($i)->setAttribute('role', 'heading');
                                    $child->childNodes->item($i)->setAttribute('aria-level', $child->nodeName[1]);
                                }
                            }
                        }
                    }
                    if ($child->nodeName == 'svg' && !$child->hasAttribute('role')) $child->setAttribute('role', 'presentation');
                    likToolkit::add_role_attribute_to_elements($child);
                }
                $child->normalize();
            }
        }
    }

    public static function add_accessibility_attributes_to_tags($page)
    {
        $DOM = new DOMDocument;
        $DOM->loadHTML($page, LIBXML_NOERROR);
        likToolkit::add_role_attribute_to_elements($DOM);

        $anchor_tags = $DOM->getElementsByTagName('a');
        $unordered_list = $DOM->getElementsByTagName('ul');
        $list_item_tags = $DOM->getElementsByTagName('li');

        if (isset($anchor_tags) && !empty($anchor_tags)) {
            foreach ($anchor_tags as $_a) {
                if (
                    $_a->hasAttribute('target')
                    && $_a->getAttribute('target') == "_blank"
                    && !$_a->hasAttribute('aria-label')
                ) {
                    $label_text = ($_a->textContent) ? trim($_a->textContent) . ' (opens in new tab).' : 'Opens in new tab.';
                    $_a->setAttribute('aria-label', $label_text);
                }
            }
        }

        if (isset($unordered_list) && !empty($unordered_list)) {
            foreach ($unordered_list as $_ul) {
                $_ul->setAttribute('role', 'menu');
            }
        }

        if (isset($list_item_tags) && !empty($list_item_tags)) {
            foreach ($list_item_tags as $_li) {
                $has_anchor = false;
                $has_dropdown = false;

                foreach ($_li->childNodes as $node) {
                    if ($node->nodeName == 'a') {
                        $has_anchor = true;
                        $node->setAttribute('role', 'menuitem');
                    }
                    if ($node->nodeName == 'ul') {
                        $has_dropdown = true;
                    }
                }

                if ($has_anchor == true) {
                    $_li->setAttribute('role', 'presentation');
                }

                if ($has_dropdown == true) {
                    foreach ($_li->childNodes as $node) {
                        if ($node->nodeName == 'a') {
                            $node->setAttribute('aria-expanded', 'false');
                            $node->setAttribute('aria-haspopup', 'true');
                        }
                    }
                }
            }
        }
        return $DOM->saveHTML();
    }

    public static function remove_recaptcha_from_non_cf7_pages($page)
    {
        $DOM = new DOMDocument;
        $DOM->loadHTML($page, LIBXML_NOERROR);

        $forms = $DOM->getElementsByTagName('form');
        $cf7_count = 0;

        if (!empty($forms)) {
            foreach ($forms as $_f) {
                if (stripos($_f->getAttribute('class'), 'wpcf7') > -1) {
                    $cf7_count++;
                }
            }
        }

        $google_recaptcha = $DOM->getElementById('google-recaptcha-js');
        $wpcf7_recaptcha = $DOM->getElementById('wpcf7-recaptcha-js');

        if ($cf7_count == 0 && !empty($google_recaptcha) && !empty($wpcf7_recaptcha)) {
            $google_recaptcha->setAttribute('src', '');
            $wpcf7_recaptcha->setAttribute('src', '');
        }
        return $DOM->saveHTML();
    }

    public static function callback()
    {
        likToolkit::$contents = ob_get_contents();
        if (!empty(likToolkit::$contents)) {
            likToolkit::$contents = likToolkit::add_accessibility_attributes_to_tags(likToolkit::$contents);
            likToolkit::$contents = likToolkit::remove_css_spaces(likToolkit::$contents);
            likToolkit::$contents = likToolkit::add_query_parameters_to_links(likToolkit::$contents);
            likToolkit::$contents = likToolkit::remove_recaptcha_from_non_cf7_pages(likToolkit::$contents);
        }
    }

    public static function start_buffer()
    {
        ob_start(array('likToolkit', 'callback'));
    }

    public static function dump_buffer()
    {
        if (ob_get_level()) ob_end_clean();
        echo likToolkit::$contents;
    }
}
new likToolkit();
