<?php

/**
 * Template Name: Categories & Tags
 */

$page_name = stripos(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH), "/tag") > -1 ? "Tags" : "Categories";
$parent_page = ($page_name == 'Tags') ? 'tag' : 'category';

$style = <<<STYLE
<style class="page-css">
    :root {
        --smp-blue: #0C4E97;
        --smp-red: #CE0109;
        --font-sepia: #3C3C3C;
        --card-bg: #F2F2F2;
    }

    .btn-blue {
        background-color: #004c97;
        font-weight: bold;
    }


    [class^="image-map-"] {
        position: absolute;
    }

    .image-map-solar {
        left: 0.6%;
        top: 72%;
        width: 15%;
        height: 20%;
    }

    .image-map-battery {
        left: 26%;
        top: 72%;
        width: 12.5%;
        height: 20%;
    }

    .image-map-roofing {
        left: 48%;
        top: 72%;
        width: 11.8%;
        height: 20%;
    }

    .image-map-hvac {
        left: 72.3%;
        top: 72%;
        width: 10%;
        height: 20%;
    }

    @media screen and (max-width:799.9px) {

        .image-map-solar {
            top: 0%;
            left: 17%;
            width: 17.5%;
            height: 11%;
        }

        .image-map-battery {
            left: 2%;
            top: 88%;
            width: 31%;
            height: 11%;
        }

        .image-map-roofing {
            left: 68%;
            top: 0%;
            width: 15%;
            height: 11%;
        }

        .image-map-hvac {
            left: 68%;
            top: 88%;
            width: 24%;
            height: 11%;
        }
    }
</style>
STYLE;
new Page_CSS($style);

get_header();

?>
<h2 class="invisible position-absolute">Semper Solaris <?= $page_name ?> for Solar, Battery Storage, Rooofing, HVAC.</h2>
<header class="d-flex justify-content-center shadow-lg" style="background-color:var(--smp-blue)">
    <div style="position: relative;">
        <picture style="max-width:1432px;">
            <source srcset="https://www.sempersolaris.com/wp-content/uploads/2022/02/SMP-All-Services-Image-Banner.png" media="(min-width: 800px)">
            <source srcset="https://www.sempersolaris.com/wp-content/uploads/2022/02/SMP-All-Services-Header-782.jpg" media="(min-width: 400px)">
            <source srcset="https://www.sempersolaris.com/wp-content/uploads/2022/02/SMP-All-Services-Header-Mobile-375.jpg" media="(max-width: 399px)">
            <img src="https://smpbackup.wpengine.com/wp-content/uploads/2022/02/SMP-All-Services-Image-Banner.png" alt="Our Services">
        </picture>
        <div class="container-image-map">
            <a href="/solar-panels/">
                <div class="image-map-solar"></div>
            </a>
            <a href="/battery-storage/">
                <div class="image-map-battery"></div>
            </a>
            <a href="/roofing/">
                <div class="image-map-roofing"></div>
            </a>
            <a href="https://hvac.sempersolaris.com/">
                <div class="image-map-hvac"></div>
            </a>
        </div>
    </div>
</header>
<div class="smp-blue-bg d-flex justify-content-center" style="border-top:8px solid var(--smp-red);"></div>
<div id="primary" class="container row mt-4 mx-auto">
    <div class="container">
        <h2 class="border-bottom pb-3"><strong><?= $page_name ?></strong> - Find a Post by Topic</h2>
        <div class="container row justify-content-start mb-2">
            <input type="text" id="search_keywords" class="col-sm-3" placeholder="Search by keyword..." />
            <div class="col-sm-2 pt-1"><i>Count: <strong id="count_amount"></strong></i></div>
        </div>
    </div>
    <main id="main" class="col-md-7">
        <article id="posts" class="section-sm p-0 mb-4 content-area">
            <?php

            global $first_char;
            $all_tags = ($page_name == "Tags") ? get_tags() : get_categories();
            $letter_array = [];

            foreach ($all_tags as $key => $tag) :
                $name = $tag->name;
                if ($key == 0 && intval($name[0])) :
                    $letter_array[] = "0-9";
                elseif (!intval($name[0]) && strtolower($first_char) != strtolower($name[0])) :
                    $letter_array[] = $name[0];
                    $first_char = $name[0];
                endif;
            endforeach;

            echo "<div class=\"accordion\" id=\"accordionTags\">";
            foreach ($letter_array as $key => $letter) :
                echo <<<ACCORDIAN_OPEN
                <div class="accordion-item rounded-0">
                    <h2 class="accordion-header" id="heading$letter">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse$letter" aria-expanded="false" aria-controls="collapse$letter"><strong>
                            $letter
                        </strong></button>
                    </h2>
                    <div id="collapse$letter" class="accordion-collapse collapse" aria-labelledby="heading$letter" data-bs-parent="#accordionTags">
                        <div class="accordion-body bg-light py-4">
                            <div class="list-group shadow-sm">
                ACCORDIAN_OPEN;
                foreach ($all_tags as $tag_key => $tag) :
                    if ($key == 0 && is_numeric($tag->name[0]) === true) :
                        echo "<a href=\"/{$parent_page}/{$tag->slug}\" class=\"searchable list-group-item list-group-item-action border-bottom py-2\">{$tag->name}</a>";
                    elseif (strtolower($letter) == strtolower($tag->name[0])) :
                        echo "<a href=\"/{$parent_page}/{$tag->slug}\" class=\"searchable list-group-item list-group-item-action border-bottom py-2\">{$tag->name}</a>";
                    endif;
                endforeach;
                echo <<<ACCORDIAN_CLOSE
                            </div>
                        </div>
                    </div>
                </div>
                ACCORDIAN_CLOSE;
            endforeach;
            echo "</div>";

            ?>
        </article>
    </main>
    <aside class="col-md-4">
        <!-- <div class="p-stick plus-nav"> -->
        <div class="mt-5">
            <?php

            get_template_part('template-parts/offers', 'nav');
            get_sidebar();

            ?>
        </div>
        <?php
        
        get_template_part("template-parts/salesforce_form", "sidebar");

        ?>
        <!-- </div> -->
    </aside>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script>
    //////////////////////////
    // SEARCH by KEYWORD
    const KEYWORDS = document.querySelectorAll(".searchable");
    const HEADINGS = document.querySelectorAll(".accordion-header");
    const LISTBODY = document.querySelectorAll(".accordion-body");

    function showAllAccordianHeadingElements() {
        HEADINGS.forEach(h => {
            h.style.display = '';
            h.nextElementSibling.classList.remove("show");
        })
    }

    function hideAllAccordianHeadingElements() {
        HEADINGS.forEach(h => {
            h.style.display = 'none';
            h.nextElementSibling.classList.add("show");
        })
    }

    function hideEmptyAccordianBodyElements() {
        LISTBODY.forEach(list => {
            let hidden = 0;
            let anchors = list.querySelectorAll('a.searchable');
            anchors.forEach(a => {
                if (a.style.display == "none") hidden++;
            })
            if (hidden == anchors.length) {
                list.style.display = "none";
                hidden = 0;
            }
        })
    }

    function showEmptyAccordianBodies() {
        LISTBODY.forEach(list => {
            list.removeAttribute("style");
        })
    }

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
        hideAllAccordianHeadingElements();
        searchKeywords(this.value);
        showEmptyAccordianBodies();
        hideEmptyAccordianBodyElements();
        showSearchCount();
        if (this.value == "") {
            showAllAccordianHeadingElements();
            showEmptyAccordianBodies();
            document.getElementById("count_amount").innerText = '';
        }
    });
    //////////////////////////////////////////////////////
</script>
<?php

get_footer();
