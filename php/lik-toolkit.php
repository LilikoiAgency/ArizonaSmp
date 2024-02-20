<?php

/**
 * @author Kevin Gillispie
 */

class SEOtoolkit
{
    /**
     * @var string  $contents               Output buffer contents
     * @var string  $site_domain            Stores WordPress `siteurl` option
     * @var array   $CLASS_EXCLUSIONS       HTML elements that should be ignored based on class
     * @var array   $PARAM_EXCLUSIONS       Query parameters that should be ignored
     * @var array   $EXTENSION_EXCLUSIONS   URL file extensions that should be ignored
     */
    private static string $contents;
    private static string $site_domain;
    private static array $CLASS_EXCLUSIONS = ["toggle"];
    private static array $PARAM_EXCLUSIONS = ["trust", "tcpa", "00N1P00000A2CfC", "post_type", "chat_with_us", "location"];
    private static array $EXTENSION_EXCLUSIONS = ['.asp', '.ca', '.css', '.edu', '.gov', '.htm', '.jpeg', '.jpg', '.jsp', '.mp3', '.mp4', '.org', '.pdf', '.php', '.png', '.txt', '.us', '.xml', '.xsl'];

    public function __construct()
    {
        if (
            // DO NOT RUN CLASS IF USER IS LOGGED IN.
            // TO DO SO MAY BREAK SOME VISUAL EDITORS.
            !is_admin()
            && !is_user_logged_in()
            && !stripos($_SERVER['REQUEST_URI'], 'wp-admin')
            && !stripos($_SERVER['REQUEST_URI'], 'wp-json')
            && !stripos($_SERVER['REQUEST_URI'], '.xml')
        ) {
            // WP Action reference: https://codex.wordpress.org/Plugin_API/Action_Reference
            add_action('init', array('SEOtoolkit', 'start_output_buffer'));
            add_action('shutdown', array('SEOtoolkit', 'dump_buffer'));
            $this->get_site_domain();
        }
    }

    /**
     * @return  string  Initializes $site_domain with WordPress `siteurl` option
     */
    public static function get_site_domain()
    {
        $siteurl = get_option('siteurl');
        $https = 'https://';
        $http = 'http://';
        if ($siteurl[strlen($siteurl) - 1] == '/') {
            $siteurl = substr($siteurl, 0, strlen($siteurl) - 1);
        }
        preg_match_all('/\./', $siteurl, $match, PREG_OFFSET_CAPTURE);
        $match_count = count($match[0]);
        if ($match_count > 1) {
            $siteurl = substr($siteurl, $match[0][$match_count - 2][1] + 1);
        }
        SEOtoolkit::$site_domain = (stripos($siteurl, $https) > -1) ? substr($siteurl, strlen($https)) : ((stripos($siteurl, $http) > -1) ? substr($siteurl, strlen($http)) : $siteurl);
    }

    /**
     * @param   string  Link to be checked
     * @return  bool
     */
    private static function excluded_character_check($s)
    {
        $chars = ['#', '?'];
        $chars = array_merge($chars, SEOtoolkit::$EXTENSION_EXCLUSIONS);
        foreach ($chars as $key => $value) {
            if (stripos($s, $value) !== false) :
                return true;
            endif;
        }
        return false;
    }

    /**
     * @param   string  Output buffer contents ($contents)
     * @return  string  Minified CSS
     */
    public static function remove_css_spaces($c)
    {
        $c = SEOtoolkit::add_forward_slash_to_wp_pathways($c);
        SEOtoolkit::remove_line_breaks_from_plugins();
        return preg_replace_callback('/(<style(.*?)>)(.*?)(<\/style>)/s', function ($style_tags) {
            return $style_tags[1] . SEOtoolkit::minify_css($style_tags[3]) . $style_tags[4];
        }, $c);
    }

    /**
     * @param   string  Link to be checked
     * @return  bool
     */
    private static function is_link_internal($link)
    {
        if (substr($link, 0, 2) == '//') {
            return false;
        } else if (substr($link, 0, 1) == '/' || substr($link, 0, 1) == '#') {
            return true;
        }

        $link_no_query = substr($link, 0, strpos($link, '?'));
        $link = (!empty($link_no_query)) ? $link_no_query : $link;

        if (stripos($link, SEOtoolkit::$site_domain) >= -1) {
            return true;
        }
        return false;
    }

    /**
     * @param   string  URL without trailing slash
     * @return  string  URL with trailing slash appended
     */
    private static function add_forward_slash_to_wp_pathways($c)
    {
        return preg_replace_callback('/(?<=href=["|\'])[^tel|sms|mailto](.*?)(?=[\"|\'])/', function ($links) {
            if (
                SEOtoolkit::is_link_internal($links[0]) === true
                && substr($links[0], -1) != '/'
                && SEOtoolkit::excluded_character_check($links[0]) === false
            ) :
                $links[1] = $links[1] . '/';
            endif;
            return $links[0][0] . $links[1];
        }, $c);
    }

    /**
     * @param   string  CSS to be minified
     * @return  string  Minified CSS
     */
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
        $css = preg_replace('/and\(/', 'and (', $css);          // ADD SPACE AFTER and (the above preg_replace removes it, CSS will break without it)
        $css = preg_replace('/\(\s*/', '(', $css);              // REMOVE ALL SPACES AFTER OPENING PARENTHESIS
        $css = preg_replace('/\s*\)/', ')', $css);              // REMOVE ALL SPACES BEFORE CLOSING PARENTHESIS
        $css = preg_replace('/\)\s*(?!-|\+|\.)/', ')', $css);   // REMOVE ALL SPACES AFTER CLOSING PARENTHESIS EXPECT WHEN FOLLOWED BY - OR + OR .
        $css = preg_replace('/\s*>/', '>', $css);               // REMOVE ALL SPACES BEFORE GREATER-THAN SELECTOR
        $css = preg_replace('/>\s*/', '>', $css);               // REMOVE ALL SPACES AFTER GREATER-THAN SELECTOR
        return $css;
    }

    /**
     * Minifies files listed in $files_to_minify
     * @return  void
     */
    public static function remove_line_breaks_from_plugins()
    {
        $files_to_minify = [
            '/contact-form-7/includes/css/styles.css',
        ];
        foreach ($files_to_minify as $path) {
            $root_pathway = (file_exists(WP_PLUGIN_DIR . $path)) ? WP_PLUGIN_DIR : (file_exists(ABSPATH . $path) ? ABSPATH : null);
            if ($root_pathway == null) continue;
            if (stripos($path, '.css') > -1) :
                file_put_contents($root_pathway . $path, SEOtoolkit::minify_css(file_get_contents($root_pathway . $path)));
            endif;
        }
    }

    /**
     * @param   string  Link to check for exclusions
     * @return  bool
     */
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

    /**
     * @param   string  Link, HTML class, or array key to check
     * @param   array   Exclusions against which link is compared
     * @return  bool  
     */
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

    /**
     * @param   string  Output buffer contents ($contents)
     * @return  string  Page source with links updated with any query parameters
     */
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
            if (SEOtoolkit::checkForExclusions($key, SEOtoolkit::$PARAM_EXCLUSIONS)) {
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
                    || SEOtoolkit::is_link_internal($_a->getAttribute('href')) == false
                    || SEOtoolkit::urlBasedExclusions($_a->getAttribute('href')) == true
                    || SEOtoolkit::checkForExclusions($_a->getAttribute('class'), SEOtoolkit::$CLASS_EXCLUSIONS) == true
                    || SEOtoolkit::checkForExclusions($_a->getAttribute('href'), SEOtoolkit::$EXTENSION_EXCLUSIONS) == true
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
                    || SEOtoolkit::is_link_internal($_f->getAttribute('src')) == false
                    || SEOtoolkit::urlBasedExclusions($_f->getAttribute('src'))  == true
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

    /**
     * @param   object  DOMDocument object of current page
     * @return  void
     */
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
                    SEOtoolkit::add_role_attribute_to_elements($child);
                }
                $child->normalize();
            }
        }
    }

    /**
     * @param   string  Output buffer contents ($contents)
     * @return  string  Page source with updated accessibility HTML attributes
     */
    public static function add_accessibility_attributes_to_tags($page)
    {
        $DOM = new DOMDocument;
        $DOM->loadHTML($page, LIBXML_NOERROR);
        SEOtoolkit::add_role_attribute_to_elements($DOM);

        $anchor_tags = $DOM->getElementsByTagName('a');
        $unordered_list = $DOM->getElementsByTagName('ul');
        $list_item_tags = $DOM->getElementsByTagName('li');
        $iframe_tags = $DOM->getElementsByTagName('iframe');

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
                if (!$_li->getAttribute('role')) {
                    $_li->setAttribute('role', 'menuitem');
                }

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

        if (isset($iframe_tags) && !empty($iframe_tags)) {
            foreach($iframe_tags as $_iframe) {
                if ($_iframe->getAttribute('title')) {
                    continue;
                } elseif (stripos($_iframe->getAttribute('src'), 'google.com/maps') > -1) {
                    $_iframe->setAttribute('title', 'Google Map');
                }
            }
        }
        return $DOM->saveHTML();
    }

    /**
     * @param   string  Output buffer contents ($contents)
     * @return  string  Page source with updated head tags
     */
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

    /**
     * @return  void
     */
    public static function callback()
    {
        SEOtoolkit::$contents = ob_get_contents();
        if (!empty(SEOtoolkit::$contents)) {
            SEOtoolkit::$contents = SEOtoolkit::add_accessibility_attributes_to_tags(SEOtoolkit::$contents);
            SEOtoolkit::$contents = SEOtoolkit::remove_css_spaces(SEOtoolkit::$contents);
            SEOtoolkit::$contents = SEOtoolkit::add_query_parameters_to_links(SEOtoolkit::$contents);
            SEOtoolkit::$contents = SEOtoolkit::remove_recaptcha_from_non_cf7_pages(SEOtoolkit::$contents);
        }
    }

    /**
     * @return  void
     */
    public static function start_output_buffer()
    {
        ob_start(array('SEOtoolkit', 'callback'), 0, PHP_OUTPUT_HANDLER_STDFLAGS);
    }

    /**
     * @return  string  Output buffer contents (page source)
     */
    public static function dump_buffer()
    {
        if (ob_get_level()) ob_end_clean();

        # This check prevents the occasional non-fatal error.
        if (!empty(SEOtoolkit::$contents)) {
            echo SEOtoolkit::$contents;
        }
    }
}
new SEOtoolkit();
