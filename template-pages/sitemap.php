<?php

/**
 * Template Name: Sitemap
 */

get_header();

global $wpdb, $omit_these_pages;
$omit_these_pages = ['thank-you'];
$page_categories = [
    'Solar Panels' => ['360', 'panel', 'resources', 'solar-', 'solar/'],
    'Battery Storage' => ['battery', 'powerwall', 'cpap'],
    'Roofing' => ['roof', 'owens'],
    'Semper Solaris Information' => ['about', 'career', 'contact', 'cookie', 'frequent', 'internet', 'location', 'meet', 'refer', 'warranties'],
];
$location_categories = [];

$all_pages      = get_pages(['post_type' => 'page']);
$all_posts      = get_posts(['numberposts' => -1, 'orderby' => 'title', 'order' => 'ASC']);

$pages_categorized = [];
$locations_categorized = [];
$offices = [];

function get_top_level_location($url)
{
    $first_pass = substr($url, stripos($url, 'locations/') + 10);
    $second_pass = substr($first_pass, 0, stripos($first_pass, '/'));
    return $second_pass;
}

sort($offices);

foreach ($offices as $key => $off) {
    // GET SECOND TIER LOCATIONS
    foreach ($all_locations as $key => $loc) {
        if (stripos(get_permalink($loc->ID), $off)) {
            $locations_categorized[$off][] = $loc;
        }
    }
}

function check_for_omission($ID)
{
    global $omit_these_pages;
    foreach ($omit_these_pages as $key => $o) {
        if (stripos(get_permalink($ID), $o) > -1) {
            return true;
        }
    }
    return false;
}

function is_printable($post)
{
    if (
        $post->post_type == 'page'
        && (stripos($post->post_title, "thank") > -1
            || stripos($post->post_name, "thank") > -1
            || check_for_omission($post->ID) == true)
    ) {
        return false;
    }
    return true;
}

function echo_sitemap_items($list)
{
    foreach ($list as $key => $post) {
        if (
            get_post_meta($post->ID, '_yoast_wpseo_meta-robots-noindex', true) != 1
            && true == is_printable($post)
        ) {
            $title = ('tag' == strtolower($post->post_title)) ? 'Tags' : ('category' == strtolower($post->post_title) ? 'Categories' : $post->post_title);
            echo '<div class="on-hover"><a href="' . get_permalink($post->ID) . '" class="searchable text-decoration-none"><div class="px-3 py-2">' . $title . "</div></a></div>";
        }
    }
}

foreach ($page_categories as $cat => $keywords) {
    foreach ($keywords as $key => $word) {
        foreach ($all_pages as $page_key => $page) {
            if (
                stripos($page->post_title, $word) > -1
                || stripos($page->post_name, $word) > -1
                || stripos(get_permalink($page->ID), $word) > -1
            ) {
                $pages_categorized[$cat][] = $page;
                unset($all_pages[$page_key]);
            }
        }
    }
}

function callback_sort($a, $b)
{
    if ($a->post_title == $b->post_title) {
        return 0;
    }
    return ($a->post_title < $b->post_title) ? -1 : 1;
}

foreach ($pages_categorized as $cat => $pages) {
    usort($pages_categorized[$cat], 'callback_sort');
}

?>

<style>
    .tab-content a {
        color: var(--bs-link-color) !important;
    }

    .text-columns {
        column-count: 3;
        column-width: 30%;
    }

    @media screen and (max-width:1200px) {
        .text-columns {
            column-count: 2;
            column-width: 50%;
        }
    }

    @media screen and (max-width:768px) {
        .text-columns {
            column-count: 1;
            column-width: 100%;
        }
    }

    .on-hover:hover {
        background-color: rgba(0, 0, 0, .05);
    }
</style>
<div id="primary">
    <main id="main" class="section-lg container content-with-sidebar no-tablet py-5">
        <div class="container">
            <h2 class="border-bottom pb-3"><span class="search-title text-body-tertiary">Search</span> <strong>Sitemap</strong> <span class="search-title text-body-tertiary">by Keyword</span></h2>
            <div class="container d-flex flex-column flex-lg-row flex-wrap justify-content-start">
                <input type="text" id="search_keywords" class="col col-lg-3 px-2 border border-dark" style="border-width: 3px!important" placeholder="Search by keyword..." />
                <div class="col-sm-2 ms-3 pt-1"><i>Count: <strong id="count_amount"></strong></i></div>
            </div>
        </div>
        <div class="container mt-5">
            <ul class="nav nav-tabs m-0 w-100" id="linkTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="page-tab" data-bs-toggle="tab" data-bs-target="#page-tab-pane" type="button" role="tab" aria-controls="page-tab-pane" aria-selected="true">Pages</button>
                </li>
                <!-- <li class="nav-item" role="presentation">
                    <button class="nav-link" id="post-tab" data-bs-toggle="tab" data-bs-target="#post-tab-pane" type="button" role="tab" aria-controls="post-tab-pane" aria-selected="false">Blog Posts</button>
                </li> -->
            </ul>

            <div class="tab-content container pt-3 px-0" style="min-height: 50vh;" id="linkTabContent">
                <div class="tab-pane fade text-columns show active" id="page-tab-pane" role="tabpanel" aria-labelledby="page-tab" tabindex="0">
                    <?php

                    foreach ($pages_categorized as $cat => $posts) {
                        echo '<h3 class="' . ('Solar Panels' == $cat ?: 'mt-5') . '">' . $cat . "</h3>";
                        echo_sitemap_items($posts);
                    }

                    echo '<h3 class="mt-5">Miscellaneous</h3>';
                    echo_sitemap_items($all_pages);

                    ?>
                </div>
                <div class="tab-pane fade text-columns" id="post-tab-pane" role="tabpanel" aria-labelledby="post-tab" tabindex="0">
                    <?php

                    echo_sitemap_items($all_posts);

                    ?>
                </div>
            </div>
        </div>
    </main>
</div>
<script>
    //////////////////////////
    // SEARCH by KEYWORD
    const KEYWORDS = document.querySelectorAll(".searchable");

    function showSearchCount() {
        let c = 0;
        let counter = document.getElementById("count_amount");
        let keywords = document.querySelectorAll('a.searchable');
        keywords.forEach(w => {
            if (w.style.display != "none") c++;
        })
        counter.innerText = c;
    }

    function searchKeywords(searchValue) {
        if (KEYWORDS.length > 0) {
            KEYWORDS.forEach((text, i) => {
                let t = text.innerText;
                if (t != undefined && t.toLowerCase().indexOf(searchValue.toLowerCase()) != -1) {
                    KEYWORDS[i].style.display = '';
                } else {
                    KEYWORDS[i].style.display = 'none';
                }
            });
        }
        document.querySelector('#search_keywords').focus();
    }

    document.querySelector('#search_keywords').value = '';

    document.querySelector('#search_keywords').addEventListener('keyup', function() {
        searchKeywords(this.value);
        showSearchCount();
        if (this.value == "") {
            document.getElementById("count_amount").innerText = '';
        }
    });

    document.querySelector('#search_keywords').addEventListener('focus', function() {
        document.querySelectorAll('.search-title').forEach(span => {
            span.classList.remove('text-body-tertiary');
        })
    });

    document.querySelector('#search_keywords').addEventListener('blur', function() {
        document.querySelectorAll('.search-title').forEach(span => {
            span.classList.add('text-body-tertiary');
        })
    });
    //////////////////////////////////////////////////////
</script>
<?php

get_footer();
