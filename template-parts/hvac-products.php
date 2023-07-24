<?php
$hvac_products_array = [
    "heating" => [
        [
            "image" => "https://www.sempersolaris.com/wp-content/uploads/2021/12/SMP-Furnace-Units-SemperComfort-AMH8-284x294-NEW.jpg",
            "alt_title" => "SINGLE-STAGE MULTI-SPEED GAS FURNACE",
            "name"=> "Semper Home",
            "link" => "https://www.sempersolaris.com/heating-air-conditioning/semper-home-single-stage-multi-speed-gas-furnace/",
            "a-text" => "A Quality American Made Furnace"
        ],
        [
            "image" => "https://www.sempersolaris.com/wp-content/uploads/2021/12/SMP-Furnace-Units-SemperComfort-AMH8-284x294-NEW.jpg",
            "alt_title" => "TWO-STAGE MULTI-SPEED GAS FURNACE",
            "name" => "Semper Comfort",
            "link" => "https://www.sempersolaris.com/heating-air-conditioning/two-stage-multi-speed-gas-furnace/",
            "a-text" => "Semper Solaris gas furnaces are built tough to last."
        ],
        [
            "image" => "https://www.sempersolaris.com/wp-content/uploads/2021/12/SMP-Furnace-Units-SemperComfort-AMH8-284x294-NEW.jpg",
            "alt_title" => "ENERGY EFFICIENT TWO-STAGE MULTI-SPEED GAS FURNACE",
            "name" => "Semper Comfort",
            "link" => "https://www.sempersolaris.com/heating-air-conditioning/energy-efficient-two-stage-multi-speed-gas-furnace/",
            "a-text" => "A Quality American Made Furnace"
        ],
        [
            "image" => "https://www.sempersolaris.com/wp-content/uploads/2021/12/SMP-Furnace-Units-SemperComfort-AMH8-284x294-NEW.jpg",
            "alt_title" => "TWO-STAGE MULTI-SPEED GAS FURNACE WITH COMFORTBRIDGE TECHNOLOGY",
            "name" => "Semper Comfort",
            "link" => "https://www.sempersolaris.com/heating-air-conditioning/two-stage-multi-speed-gas-furnace-with-comfortbridge-technology/",
            "a-text" => "A Quality American Made Furnace"
        ],
        [
            "image" => "https://www.sempersolaris.com/wp-content/uploads/2021/12/SMP-Furnace-Units-SemperComfort-AMH8-284x294-NEW.jpg",
            "alt_title" => "HIGH-EFFICIENCY MODULATING VARIABLE SPEED GAS FURNACE",
            "name" => "Semper Comfort",
            "link" => "https://www.sempersolaris.com/wp-content/uploads/2019/12/SMP-Furnace-Units-SemperElite-AMVM97-284x294.png",
            "a-text" => "A Quality American Made Furnace"
        ]
    ],
    "air-conditioning" => [
        [
            "image" => "https://www.sempersolaris.com/wp-content/uploads/2019/10/SMP-Digital-Oct2019-Unit-2-Web-291x294.png",
            "alt_title" => "14 SEER SINGLE STAGE",
            "name" => "Semper Home",
            "link" => "https://www.sempersolaris.com/heating-air-conditioning/semper-home/",
            "a-text" => "A Quality, American-Made Air Conditioner"
        ],
        [
            "image" => "https://www.sempersolaris.com/wp-content/uploads/2021/12/semper-air-air-conditioning-unit.jpg",
            "alt_title" => "16 SEER SINGLE STAGE",
            "name" => "Semper Comfort",
            "link" => "https://www.sempersolaris.com/heating-air-conditioning/semper-comfort/",
            "a-text" => "A Quality, American-Made Air Conditioner"
        ],
        [
            "image" => "https://www.sempersolaris.com/wp-content/uploads/2021/12/semper-air-air-conditioning-unit.jpg",
            "alt_title" => "16 SEER 2 STAGE",
            "name" => "Semper Premium",
            "link" => "https://www.sempersolaris.com/heating-air-conditioning/semper-premium/",
            "a-text" => "A Quality, American-Made Air Conditioner"
        ],
        [
            "image" => "https://www.sempersolaris.com/wp-content/uploads/2021/12/semper-air-air-conditioning-unit.jpg",
            "alt_title" => "18 SEER 2 STAGE",
            "name" => "Semper Premium Plus",
            "link" => "https://www.sempersolaris.com/heating-air-conditioning/semper-premium-plus/",
            "a-text" => "A Quality, American-Made Air Conditioner"
        ],
        [
            "image" => "https://www.sempersolaris.com/wp-content/uploads/2021/12/semper-air-air-conditioning-unit.jpg",
            "alt_title" => "20 SEER INVERTER - VARIABLE CAPACITY",
            "name" => "Semper Platinum",
            "link" => "https://www.sempersolaris.com/heating-air-conditioning/semper-platinum/",
            "a-text" => "A Quality, American-Made Air Conditioner"
        ]
    ],
];





echo "<article class=\"container section-md text-center\" style=\"max-width:1200px;\"> ";
echo "<div class=\"row \"> " ;
echo "<h2 class=\"text-center\">American Made Heating Products</h2>";
    foreach ( $hvac_products_array['heating'] as $key) :
        $src = $key['image'];
        $alt_title = $key['alt_title'];
        $href = $key['link'];
        $name = $key['name'];
        $anchor_text = $key['a-text'];
        echo "<div class=\"row col-6 p-2\">
                <div class=\"row \">
                    <div class=\"col-6\">
                        <img src=\"$src\" alt=\"$alt_title\">
                    </div>
                    <div class=\"col-6 m-auto text-start\">
                        <p class=\"h4 mt-0 fw-light \"> $name </p>
                        <h2 class=\"h4 mt-0\"><strong>$alt_title</strong></h2>
                        <a class=\"text-dark fw-lighter text-decoration-none\" href=\"$href\"> $anchor_text </a>
                    </div>
                </div>
              </div>
              ";
    endforeach;
echo "</div></article><div class=\"bottom-border mb-5\"></div>";


echo "<article class=\"container section-md text-center\" style=\"max-width:1200px;\"> ";
echo "<div class=\"row \"> " ;
echo "<h2 class=\"text-center\">AMERICAN MADE AIR CONDITIONING PRODUCTS</h2>";
    foreach ( $hvac_products_array['air-conditioning'] as $key) :
        $src = $key['image'];
        $alt_title = $key['alt_title'];
        $href = $key['link'];
        $name = $key['name'];
        $anchor_text = $key['a-text'];
        echo "<div class=\"row col-6 p-2\">
                <div class=\"row \">
                    <div class=\"col-6\">
                        <img src=\"$src\" alt=\"$alt_title\">
                    </div>
                    <div class=\"col-6 m-auto text-start\">
                        <p class=\"h4 mt-0 fw-light \"> $name </p>
                        <h2 class=\"h4 mt-0\"><strong>$alt_title</strong></h2>
                        <a class=\"text-dark fw-lighter text-decoration-none\" href=\"$href\"> $anchor_text </a>
                    </div>
                </div>
              </div>
              ";
    endforeach;
echo "</div></article>";


?>



