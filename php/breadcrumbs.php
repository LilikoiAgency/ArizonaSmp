<?php

$_current_path = urldecode(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));
$_pagecrumbs = '';
$_crumb = strtok($_current_path, "/");
$_breadcrumbs[] = $_crumb;

while ($_crumb !== false) :
    global $_breadcrumbs;
    $_breadcrumbs[] = $_crumb;
    $_crumb = strtok("/");
endwhile;

foreach ($_breadcrumbs as $key => $value) :
    @$_breadcrumbs[$key] = $_breadcrumbs[$key - 1] . "/" . $value;
endforeach;

function remove_unneeded_crumbs($array, $i)
{
    unset($array[$i]);
    return array_values($array);
}

for ($i = intval(count($_breadcrumbs)) - 1; $i >= 0; $i--) {
    $crumb = $_breadcrumbs[$i];
    if (
        (
            (stripos($crumb, "/category") > -1 && intval(stripos($crumb, "/category")) > -1) &&
            intval(stripos($crumb, "/page")) == intval(strlen($crumb)) - 5
        ) ||
        (
            (stripos($crumb, "/blog/page") > -1 && intval(stripos($crumb, "/blog/page")) > -1) &&
            intval(stripos($crumb, "/blog/page")) == intval(strlen($crumb)) - 10
        ) ||
        (
            (stripos($crumb, "/playlist") > -1 && intval(stripos($crumb, "/playlist")) > -1) &&
            intval(stripos($crumb, "/playlist")) == intval(strlen($crumb)) - 9
        ) ||

        (
            (stripos($crumb, "/page") > -1 && intval(stripos($crumb, "/page")) > -1) &&
            intval(stripos($crumb, "/page")) == intval(strlen($crumb)) - 5
        )
    ) :
        $_breadcrumbs = remove_unneeded_crumbs($_breadcrumbs, $i);
    endif;
}

function format_anchor_text($_crumb = '')
{
    if (stripos($_crumb, "blog/page") > -1) :
        return ucwords(str_replace("/blog/page/", "page ", $_crumb));
    elseif (stripos($_crumb, "category") > -1 && stripos($_crumb, "page")) :
        preg_match_all('/\d+/', $_crumb, $page_num);
        return ucwords("page " . end($page_num[0]));
    elseif (stripos($_crumb, "category") > -1) :
        return ucwords(str_replace("-", " ", str_replace("/category/", "category: ", $_crumb)));
    elseif (stripos($_crumb, "playlist") > -1 && stripos($_crumb, "page")) :
        preg_match_all('/\d+/', $_crumb, $page_num);
        return ucwords("page " . end($page_num[0]));
    elseif (stripos($_crumb, "playlist") > -1) :
        return ucwords(str_replace("-", " ", str_replace("/playlist/", "playlist: ", $_crumb)));
    elseif (stripos($_crumb, "video-gallery") > 0) :
        return ucwords(str_replace("-", " ", str_replace("/", "", substr($_crumb, strrpos($_crumb, "/")))));
    elseif (stripos($_crumb, "video-gallery") > -1) :
        return ucwords(str_replace("-", " ", str_replace("/", "", $_crumb)));
    endif;
    $exploded_array = str_replace("-", " ", explode("/", $_crumb));
    return ucwords(end($exploded_array));
}

foreach ($_breadcrumbs as $i => $title) :
    $current_crumb = $_breadcrumbs[$i];
    if (strtolower($title) != "auto draft" && $current_crumb != '/' && $current_crumb != "/category") :
        $_pagecrumbs .= ' » ' . '<a href="' . $current_crumb . '/"' . ($i == count($_breadcrumbs) - 1 ? 'style="text-decoration:none"' : "") . '>' . ($i == count($_breadcrumbs) - 1 ? "<strong>" : "") . format_anchor_text($current_crumb) . ($i == count($_breadcrumbs) - 1 ? "</strong>" : "") . "</a>";
    endif;
endforeach;

echo <<<CRUMBS
    <div id="semper-solaris-breadcrumbs" class="text-center text-small">
        <a href="/">Home</a>{$_pagecrumbs}
    </div>
CRUMBS;
