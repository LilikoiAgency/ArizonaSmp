<?php

/**
 * Template Name: Offers Page
 */

/**
 * TO CREATE, UPDATE, OR DELETE ANY OFFERS,
 * DO SO IN THE offers-array.php FILE. -- d|22y
 */
require_once __DIR__ . '/../template-parts/offers-array.php';
$offers_to_show = ['special' => 'Special', 'solar' => 'Solar Panel', 'battery' => 'Battery Storage', 'roofing' => 'Roofing']; //'hvac' => 'Heating and Air Conditioning'
/**
 * 
 */

function offers_html_loop($vertical)
{
    foreach ($vertical as $key => $value) :
        if (stripos($value['image'], 'refer') == false) {
            $src = $value['image'];
            $alt_title = $value['alt_title'];
            $href = $value['link'];
            $loading_attr = ($key > 1) ? "lazy" : "eager";
            echo <<<FIGURE
            <figure class="current-offer border rounded" role="none">
                <a href="{$href}" title="{$alt_title}">
                    <img src="{$src}" alt="{$alt_title}" loading="{$loading_attr}" width="320" height="282" class="lazy mx-auto-mb semper-offer element-shadow loaded" />
                </a>
            </figure>
            FIGURE;
        }
    endforeach;
}

get_header();

?>
<div id="primary">
    <header class="container mt-5 pb-0">
        <h2>Current Offers <br class="d-block d-sm-none" /><span>from Semper Solaris</span></h2>
        <hr />
    </header>
    <main id="main" class="container row px-0 mx-auto">
        <article class="col-md-8 mb-5">
            <div class="screen-sm section-xs">

                <?php

                get_template_part('template-parts/offer', 'nav');

                ?>

            </div>

            <?php

            foreach ($offers_to_show as $key => $value) :
                echo <<<SECTION
                    <section class="container pb-0 mt-5" aria-label="{$key}-offers">
                        <div class="offer-anchor" id="{$key}-offers"></div>
                        <header>
                            <h2 class="display-6 m-auto" id="{$key}">{$value} Offers</h2>
                        </header>
                        <div class="grid-split d-flex flex-wrap" style="gap:25px;margin-top:15px;">
                SECTION;
                offers_html_loop($offers_array[$key]);
                echo '</div></section>';
            endforeach;

            ?>
        </article>
        <aside class="col-md-4">
            <div class="mt-5">
                <?php

                get_template_part('template-parts/offers', 'nav');
                get_sidebar();

                ?>
            </div>
        </aside>
    </main>
</div>
<?php

get_footer();
