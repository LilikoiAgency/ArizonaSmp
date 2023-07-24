<?php
    global $post;
    $parent_id = wp_get_post_parent_id( $post->ID );
    require_once __DIR__ . '/../template-parts/offers-array.php';
    $offers_to_show = [];
        $service = get_post_field( 'post_name', get_post($parent_id) );

        
        switch($service) : 
            case 'solar-panels': 
                $offers_to_show = ['solar'=> 'Solar' ];
            break; 
            case 'battery-storage': 
                $offers_to_show = ['battery' => 'Battery'];
            break;
            case 'roofing': 
                $offers_to_show = ['roofing' => 'Roofing'];
            break;
            case 'heating-air-conditioning': 
                $offers_to_show = ['hvac' => 'Hvac'];
            break;
            case null:
                $offers_to_show = ['special' => 'Special'];
            break;
        endswitch;

        function offers_html_loop($vertical)
        {
            foreach ($vertical as $key => $value) :
                    $src = $value['image'];
                    $alt_title = $value['alt_title'];
                    $href = $value['link'];
                    $loading_attr = ($key > 1) ? "lazy" : "eager";
                    echo '<figure class="current-offer js-left js-center-mb mb-sm" role="none">';
                    echo "<a href=\"$href\" title=\"$alt_title\">";
                    echo "<img class=\"shadow\" src=\"$src\" alt=\"$alt_title\" loading=\"$loading_attr\" width=\"350\" height=\"200\" class=\"lazy mx-auto-mb semper-offer element-shadow loaded\" style=\"border-radius: 2rem;\" >";
                    echo '</a>';
                    echo '</figure>';
            endforeach;
        }
        foreach ($offers_to_show as $key => $value) :
            echo "<section class=\"container pb-0 p-rel text-center\" aria-label=\"$key-offers\"><div class=\"offer-anchor\" id=\"$key-offers\"></div><header><h2 class=\"m-auto text-center\" id=\"$key\">Featured Offers</h2></header><div class=\"grid-split\" style=\"display:flex;flex-wrap:wrap;    justify-content: center;
            gap: 25px; margin-top:15px;\">";
            offers_html_loop($offers_array[$key]);
            echo '</div></section>';
        endforeach;
    wp_reset_postdata();
?>