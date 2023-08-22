</body>

<div class="the-bottom-line w-100 bg-white"></div>
<?php
// get_template_part( "template-parts/salesforce", "direct" );

$page_id = get_the_ID();
$args = array(
    'parent'        => $page_id,
    'depth'         => 2,
    'sort_column'   => 'menu_order'
);

$roofing = '/roofing/';
$solar = '/solar-panels/';
$hvac = '/heating-air-conditioning/';
$battery = '/battery-storage/';


$childpages = get_pages($args);
if ($childpages && (count($childpages) > 0)) :
    foreach ($childpages as $child) :
        if ($child->post_parent === $page_id) :
            $pageUrl = get_permalink($child->ID);
            if (stripos($pageUrl, 'roofing') > -1) :
                $roofing = $pageUrl;
            elseif (stripos($pageUrl, 'battery-storage') > -1) :
                $battery = $pageUrl;
            elseif (stripos($pageUrl, 'heating-air-conditioning') > -1) :
                $hvac = $pageUrl;
            elseif (stripos($pageUrl, 'solar') > -1) :
                $solar = $pageUrl;
            endif;
        endif;
    endforeach;

else :
    $parent_id = $post->post_parent;
    global $post;
    $args = array(
        'parent'        => $parent_id,
        'depth'         => 2,
        'sort_column'   => 'menu_order'
    );
    $siblings = get_pages($args);
    if ($siblings && (count($siblings) > 1)) :
        foreach ($siblings as $sibling) :
            if ($sibling->post_parent === $parent_id) :
                if (stripos($sibling->post_title, 'roof') > -1) :
                    $roofing = get_permalink($sibling->ID);
                elseif (stripos($sibling->post_title, 'battery') > -1) :
                    $battery = get_permalink($sibling->ID);
                elseif (stripos($sibling->post_title, 'heating') > -1) :
                    $hvac = get_permalink($sibling->ID);
                elseif (stripos($sibling->post_title, 'solar') > -1) :
                    $solar = get_permalink($sibling->ID);
                endif;
            endif;
        endforeach;
    endif;
endif;

?>

<footer>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" media="print" onload="this.media='all'">
    <?php if (!wp_is_mobile()) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Teko:wght@500&display=swap" rel="stylesheet" as="style">
    <?php endif; ?>
    <div class="banner mx-auto" style="">
        <div class="banner-menu-blue">
            <a href="/" title="Semper Solaris">
                <img loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/logo/SMP FooterLogo.svg" alt="Semper Solaris arizona" />
            </a>
        </div>
        <div class="banner-menu-red">
            <a id="footer-solar-link" href="<?php echo $solar; ?>"><strong>SOLAR</strong> </a>
        </div>
        <div class="banner-menu-red">
            <a id="footer-battery-link" href="<?php echo $battery; ?>"><strong>BATTERY STORAGE</strong></a>
        </div>
        <?php /* ?>
        <div class="banner-menu-red">
            <a id="footer-hvac-link" href="<?php echo $hvac; ?>"><strong>HEATING & AIR</strong></a>
        </div>
		<?php */ ?>
        <div class="banner-menu-red">
            <a id="footer-roofing-link" href="<?php echo $roofing; ?>"><strong>ROOFING</strong></a>
        </div>
        <?php /* ?>
        <svg class="semper-services-footer-banner" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 774.165 50.059" style=" width:90%; height:45%; margin:0; ">
            <g id="Group_5004" data-name="Group 5004" transform="translate(-663.287 -6808.633)">
                <path id="Path_192" data-name="Path 192" d="M10.814.039l744.1-.1-22.65,49.1-743.434.085Z" transform="translate(679 6808.692)" fill="#ce0109" />
                <a id="footer-solar-link" href="<?php echo $solar; ?>">
                    <g id="Group_1567" data-name="Group 1567" transform="translate(711.399 6821.339)">
                        <path id="Path_136" data-name="Path 136" d="M93.45,31.34l-.939-4.878h5.635c.47,0,.614-.145.614-.542V21.151c0-.721-.253-.759-.976-.759H95.076c-1.554,0-2.928-.36-2.928-2.963V8.542c0-2.058,1.084-3.4,3.541-3.4h7.226l.9,4.878H97.893c-.434,0-.65.181-.65.578V15.37c0,.543.253.688.795.688h3.288c1.662,0,2.6.721,2.6,2.674v8.634c0,2.89-1.012,3.974-4.011,3.974Z" transform="translate(-92.148 -5.146)" fill="#fff" />
                        <path id="Path_137" data-name="Path 137" d="M117.313,27.618c0,1.988-.831,3.721-3.758,3.721h-6.07c-2.927,0-3.758-1.733-3.758-3.721V8.542c0-2.058,1.084-3.4,3.541-3.4h6.5c2.457,0,3.541,1.338,3.541,3.4Zm-7.84-17.884c-.361,0-.47.181-.47.506V26.209c0,.4.072.543.506.543H111.5c.434,0,.506-.145.506-.543V10.24c0-.325-.108-.506-.47-.506Z" transform="translate(-89.782 -5.146)" fill="#fff" />
                        <path id="Path_138" data-name="Path 138" d="M116.808,5.146h5.382V26.462h5.275l-.9,4.878h-9.754Z" transform="translate(-87.108 -5.146)" fill="#fff" />
                        <path id="Path_139" data-name="Path 139" d="M132.3,28.088l-.47,3.252h-5.275L131.29,5.146h5.6l4.733,26.194h-5.275l-.47-3.252Zm.578-4.154H135.3l-1.192-9.286Z" transform="translate(-85.116 -5.146)" fill="#fff" />
                        <path id="Path_140" data-name="Path 140" d="M153.744,20.682a2.266,2.266,0,0,1-2.348,2.312l2.746,8.345h-5.42l-2.529-8.345h-.686V31.34h-5.239V5.146H150.2c2.457,0,3.541,1.338,3.541,3.4ZM145.506,9.735v9.033h2.565c.4,0,.506-.145.506-.542V10.277c0-.326-.145-.542-.506-.542Z" transform="translate(-82.314 -5.146)" fill="#fff" />
                    </g>
                </a>

                <a id="footer-roofing-link" href="<?php echo $roofing; ?>">
                    <g id="Group_1570" data-name="Group 1570" transform="translate(1304.051 6821.339)">
                        <g id="Group_1554" data-name="Group 1554">
                            <path id="Path_142" data-name="Path 142" d="M597.713,20.682a2.266,2.266,0,0,1-2.349,2.312l2.746,8.345h-5.42l-2.529-8.345h-.686V31.34h-5.239V5.146h9.936c2.457,0,3.541,1.338,3.541,3.4ZM589.475,9.735v9.033h2.565c.4,0,.506-.145.506-.542V10.277c0-.326-.145-.542-.506-.542Z" transform="translate(-584.236 -5.146)" fill="#fff" />
                            <path id="Path_143" data-name="Path 143" d="M610.871,27.618c0,1.988-.831,3.721-3.758,3.721h-6.07c-2.927,0-3.758-1.733-3.758-3.721V8.542c0-2.058,1.084-3.4,3.541-3.4h6.5c2.457,0,3.541,1.338,3.541,3.4Zm-7.84-17.884c-.361,0-.47.181-.47.506V26.209c0,.4.072.543.506.543h1.987c.434,0,.506-.145.506-.543V10.24c0-.325-.108-.506-.47-.506Z" transform="translate(-581.569 -5.146)" fill="#fff" />
                            <path id="Path_144" data-name="Path 144" d="M623.951,27.618c0,1.988-.831,3.721-3.759,3.721h-6.069c-2.927,0-3.758-1.733-3.758-3.721V8.542c0-2.058,1.084-3.4,3.541-3.4h6.5c2.457,0,3.541,1.338,3.541,3.4Zm-7.84-17.884c-.362,0-.47.181-.47.506V26.209c0,.4.072.543.506.543h1.986c.434,0,.506-.145.506-.543V10.24c0-.325-.107-.506-.469-.506Z" transform="translate(-578.896 -5.146)" fill="#fff" />
                            <path id="Path_145" data-name="Path 145" d="M623.446,5.146h10.189l.9,4.878H628.83v6.215h4.336v4.515H628.83V31.34h-5.384Z" transform="translate(-576.223 -5.146)" fill="#fff" />
                            <path id="Path_146" data-name="Path 146" d="M634.005,5.146h5.24V31.34h-5.24Z" transform="translate(-574.065 -5.146)" fill="#fff" />
                            <path id="Path_147" data-name="Path 147" d="M640.155,5.146h4.985l2.675,10.514V5.146H653.2V31.34h-5.382L645,20.392V31.34h-4.841Z" transform="translate(-572.808 -5.146)" fill="#fff" />
                            <path id="Path_148" data-name="Path 148" d="M652.785,8.326a2.87,2.87,0,0,1,3.107-3.18h7.478l.9,4.878H658.53c-.362,0-.47.181-.47.506V26.065c0,.326.107.506.47.506h2.385V16.238h5.093v15.1h-9.14c-3,0-4.083-1.156-4.083-4.045Z" transform="translate(-570.227 -5.146)" fill="#fff" />
                        </g>

                    </g>
                </a>

                <a id="footer-battery-link" href="<?php echo $battery; ?>">
                    <g id="Group_1568" data-name="Group 1568" transform="translate(840.939 6821.339)">
                        <path id="Path_151" data-name="Path 151" d="M213.038,15.516a2.4,2.4,0,0,1-1.807,2.672,2.112,2.112,0,0,1,2.059,2.312v6.794c0,2.889-1.084,4.045-4.083,4.045h-9.5V5.146h10.224a2.87,2.87,0,0,1,3.107,3.18Zm-8.129-5.781V16.6h2.457a.618.618,0,0,0,.65-.686V10.24c0-.325-.108-.506-.47-.506Zm3.181,11.6c0-.579-.325-.759-.8-.759h-2.385v6.178h2.638c.434,0,.543-.145.543-.543Z" transform="translate(-199.707 -5.146)" fill="#fff" />
                        <path id="Path_152" data-name="Path 152" d="M217.631,28.088l-.47,3.252h-5.275l4.733-26.194h5.6l4.733,26.194h-5.275l-.47-3.252Zm.578-4.154h2.421l-1.192-9.286Z" transform="translate(-197.218 -5.146)" fill="#fff" />
                        <path id="Path_153" data-name="Path 153" d="M234.252,5.146l1.3,4.878h-3.5V31.34H226.7V10.024h-3.5l1.373-4.878Z" transform="translate(-194.907 -5.146)" fill="#fff" />
                        <path id="Path_154" data-name="Path 154" d="M245.352,5.146l1.3,4.878h-3.5V31.34H237.8V10.024h-3.5l1.373-4.878Z" transform="translate(-192.638 -5.146)" fill="#fff" />
                        <path id="Path_155" data-name="Path 155" d="M245.756,5.146h10.189l.9,4.878h-5.709v6.215h4.336v4.515h-4.336v5.709h5.492l-.9,4.878h-9.972Z" transform="translate(-190.296 -5.146)" fill="#fff" />
                        <path id="Path_156" data-name="Path 156" d="M269.942,20.682a2.266,2.266,0,0,1-2.347,2.312l2.745,8.345h-5.42l-2.528-8.345H261.7V31.34h-5.239V5.146H266.4c2.457,0,3.541,1.338,3.541,3.4ZM261.7,9.735v9.033h2.565c.4,0,.506-.145.506-.542V10.277c0-.326-.145-.542-.506-.542Z" transform="translate(-188.108 -5.146)" fill="#fff" />
                        <path id="Path_157" data-name="Path 157" d="M279.316,31.34h-5.528V24.693L268.766,5.146h5.42L276.534,17.5l2.385-12.357h5.42l-5.022,19.547Z" transform="translate(-185.594 -5.146)" fill="#fff" />
                        <path id="Path_158" data-name="Path 158" d="M287.947,31.34l-.939-4.878h5.636c.47,0,.614-.145.614-.542V21.151c0-.721-.253-.759-.976-.759h-2.71c-1.554,0-2.927-.36-2.927-2.963V8.542c0-2.058,1.084-3.4,3.541-3.4h7.226l.9,4.878h-5.924c-.434,0-.65.181-.65.578V15.37c0,.543.253.688.795.688h3.288c1.662,0,2.6.721,2.6,2.674v8.634c0,2.89-1.012,3.974-4.01,3.974Z" transform="translate(-181.94 -5.146)" fill="#fff" />
                        <path id="Path_159" data-name="Path 159" d="M308.381,5.146l1.3,4.878h-3.5V31.34h-5.347V10.024h-3.5L298.7,5.146Z" transform="translate(-179.757 -5.146)" fill="#fff" />
                        <path id="Path_160" data-name="Path 160" d="M322.37,27.618c0,1.988-.83,3.721-3.758,3.721h-6.069c-2.927,0-3.758-1.733-3.758-3.721V8.542c0-2.058,1.084-3.4,3.541-3.4h6.5c2.456,0,3.54,1.338,3.54,3.4ZM314.531,9.735c-.363,0-.47.181-.47.506V26.209c0,.4.072.543.5.543h1.987c.434,0,.506-.145.506-.543V10.24c0-.325-.108-.506-.469-.506Z" transform="translate(-177.415 -5.146)" fill="#fff" />
                        <path id="Path_161" data-name="Path 161" d="M335.342,20.682a2.266,2.266,0,0,1-2.348,2.312l2.746,8.345h-5.42l-2.529-8.345H327.1V31.34h-5.239V5.146H331.8c2.457,0,3.541,1.338,3.541,3.4ZM327.1,9.735v9.033h2.565c.4,0,.506-.145.506-.542V10.277c0-.326-.145-.542-.506-.542Z" transform="translate(-174.743 -5.146)" fill="#fff" />
                        <path id="Path_162" data-name="Path 162" d="M339.851,28.088l-.471,3.252h-5.274l4.733-26.194h5.6l4.732,26.194H343.9l-.47-3.252Zm.578-4.154h2.42l-1.191-9.286Z" transform="translate(-172.241 -5.146)" fill="#fff" />
                        <path id="Path_163" data-name="Path 163" d="M347.606,8.326a2.87,2.87,0,0,1,3.107-3.18h7.479l.9,4.878h-5.745c-.361,0-.47.181-.47.506V26.065c0,.326.108.506.47.506h2.385V16.238h5.093v15.1h-9.14c-3,0-4.083-1.156-4.083-4.045Z" transform="translate(-169.482 -5.146)" fill="#fff" />
                        <path id="Path_164" data-name="Path 164" d="M360.3,5.146h10.189l.9,4.878h-5.709v6.215h4.336v4.515h-4.336v5.709h5.492l-.9,4.878H360.3Z" transform="translate(-166.889 -5.146)" fill="#fff" />
                    </g>
                </a>

                <a id="footer-roofing-link" href="<?php echo $hvac; ?>">
                    <g id="Group_1569" data-name="Group 1569" transform="translate(1058.41 6809.067)">
                        <g id="Group_1559" data-name="Group 1559" transform="translate(36.57 12.091)">
                            <path id="Path_166" data-name="Path 166" d="M424.19,31.34h-5.347V20.863h-2.854V31.34h-5.347V5.146h5.347v11.2h2.854V5.146h5.347Z" transform="translate(-410.641 -4.965)" fill="#fff" />
                            <path id="Path_167" data-name="Path 167" d="M423.691,5.146h10.188l.9,4.878h-5.707v6.215h4.336v4.515h-4.336v5.709h5.492l-.9,4.878h-9.972Z" transform="translate(-407.974 -4.965)" fill="#fff" />
                            <path id="Path_168" data-name="Path 168" d="M439.366,28.088l-.47,3.252h-5.275l4.733-26.194h5.6l4.733,26.194h-5.275l-.47-3.252Zm.578-4.154h2.421l-1.192-9.286Z" transform="translate(-405.945 -4.965)" fill="#fff" />
                            <path id="Path_169" data-name="Path 169" d="M455.986,5.146l1.3,4.878h-3.5V31.34h-5.347V10.024h-3.5L446.3,5.146Z" transform="translate(-403.633 -4.965)" fill="#fff" />
                            <path id="Path_170" data-name="Path 170" d="M456.391,5.146h5.239V31.34h-5.239Z" transform="translate(-401.291 -4.965)" fill="#fff" />
                            <path id="Path_171" data-name="Path 171" d="M462.541,5.146h4.986L470.2,15.66V5.146h5.383V31.34H470.2l-2.817-10.948V31.34h-4.842Z" transform="translate(-400.035 -4.965)" fill="#fff" />
                            <path id="Path_172" data-name="Path 172" d="M475.17,8.326a2.871,2.871,0,0,1,3.108-3.18h7.478l.9,4.878h-5.745c-.361,0-.47.181-.47.506V26.065c0,.326.108.506.47.506H483.3V16.238h5.094v15.1h-9.14c-3,0-4.084-1.156-4.084-4.045Z" transform="translate(-397.454 -4.965)" fill="#fff" />
                            <path id="Path_173" data-name="Path 173" d="M509.674,31.37H505.2a2.265,2.265,0,0,1-2.169-1.662c-1.589,1.879-3.973,1.879-6.033,1.879-4.047,0-5.383-1.228-5.383-5.492V18.184c0-1.843,1.445-3.324,3.758-3.469l-1.3-2.493a5.247,5.247,0,0,1,.686-5.707C495.765,5.466,497.68,5,500.389,5c4.156,0,6.359.939,6.359,4.878V11.9c0,2.349-.506,5.166-4.985,5.347l2.347,5.022a9.1,9.1,0,0,0,.976-4.083h4.191a17.445,17.445,0,0,1-2.565,7.949c-.072.145-.179.36.325.36H508.7Zm-13.15-12.03V26.1c0,.759.361,1.012,1.084,1.012h1.3a1.841,1.841,0,0,0,1.843-1.119c-.976-2.241-2.276-4.48-3.685-7.732C496.668,18.328,496.524,18.363,496.524,19.34Zm3.83-5.094c1.229.036,1.915-.506,2.023-1.3a14.921,14.921,0,0,0,.036-2.853c-.072-1.048-.543-1.265-1.626-1.265h-.795c-1.59,0-1.77,1.084-1.12,2.385Z" transform="translate(-394.094 -4.996)" fill="#fff" />
                            <path id="Path_174" data-name="Path 174" d="M517.035,28.088l-.471,3.252H511.29l4.733-26.194h5.6l4.733,26.194H521.08l-.47-3.252Zm.578-4.154h2.42l-1.191-9.286Z" transform="translate(-390.072 -4.965)" fill="#fff" />
                            <path id="Path_175" data-name="Path 175" d="M525,5.146h5.239V31.34H525Z" transform="translate(-387.27 -4.965)" fill="#fff" />
                            <path id="Path_176" data-name="Path 176" d="M544.626,20.682a2.266,2.266,0,0,1-2.349,2.312l2.746,8.345H539.6l-2.529-8.345h-.685V31.34h-5.24V5.146h9.936c2.457,0,3.541,1.338,3.541,3.4ZM536.389,9.735v9.033h2.564c.4,0,.506-.145.506-.542V10.277c0-.326-.145-.542-.506-.542Z" transform="translate(-386.014 -4.965)" fill="#fff" />
                        </g>
                    </g>
                </a>

                <path id="Path_188" data-name="Path 188" d="M23.076,0h7.349L6.363,50H-.713Z" transform="translate(804 6808.692)" fill="#fff" />
                <path id="Path_187" data-name="Path 187" d="M23.076,0h7.349L6.363,50H-.713Z" transform="translate(664 6808.692)" fill="#fff" />
                <path id="Path_189" data-name="Path 189" d="M23.076,0h7.349L6.363,50H-.713Z" transform="translate(1053.145 6808.692)" fill="#fff" />
                <path id="Path_190" data-name="Path 190" d="M23.076,0h7.349L6.363,50H-.713Z" transform="translate(1267.145 6808.692)" fill="#fff" />
                <path id="Path_191" data-name="Path 191" d="M23.076,0h7.349L6.363,50H-.713Z" transform="translate(1407.027 6808.692)" fill="#fff" />
            </g>
        </svg>
<?php */ ?>
        <svg class="semper-services-footer-banner mt-2" xmlns="http://www.w3.org/2000/svg" width="710.302" height="61.915" viewBox="0 0 710.302 61.915" style=" width:90%; height:45%; margin:0; ">
            <g id="Group_6255" data-name="Group 6255" transform="translate(-663.287 -3201.338)">
                <path id="Path_9187" data-name="Path 9187" d="M16.021.062,687.754-.059,659.74,60.667l-670.91.105Z" transform="translate(680.076 3201.396)" fill="#ce0109" />

                <a id="footer-solar-link" href="<?php echo $solar; ?>">

                    <g id="Group_6251" data-name="Group 6251" transform="translate(722.795 3217.052)">
                        <path id="Path_136" data-name="Path 136" d="M93.758,37.544,92.6,31.511h6.97c.581,0,.76-.179.76-.67v-5.9c0-.892-.313-.938-1.207-.938h-3.35c-1.922,0-3.621-.445-3.621-3.664V9.347c0-2.546,1.341-4.2,4.379-4.2h8.938l1.117,6.033H99.253c-.536,0-.8.223-.8.715v5.9c0,.672.313.851.983.851H103.5c2.056,0,3.218.892,3.218,3.307V32.628c0,3.575-1.251,4.916-4.96,4.916Z" transform="translate(-92.148 -5.146)" fill="#fff" />
                        <path id="Path_137" data-name="Path 137" d="M120.531,32.941c0,2.459-1.028,4.6-4.648,4.6h-7.508c-3.62,0-4.648-2.144-4.648-4.6V9.347c0-2.546,1.341-4.2,4.379-4.2h8.044c3.039,0,4.379,1.655,4.379,4.2Zm-9.7-22.119c-.447,0-.581.223-.581.626V31.2c0,.493.089.672.626.672h2.458c.536,0,.626-.179.626-.672V11.447c0-.4-.134-.626-.581-.626Z" transform="translate(-86.478 -5.146)" fill="#fff" />
                        <path id="Path_138" data-name="Path 138" d="M116.808,5.146h6.657V31.511h6.525l-1.117,6.033H116.808Z" transform="translate(-80.074 -5.146)" fill="#fff" />
                        <path id="Path_139" data-name="Path 139" d="M133.662,33.522l-.581,4.022h-6.525l5.854-32.4h6.927l5.854,32.4h-6.525l-.581-4.022Zm.715-5.138h2.994L135.9,16.9Z" transform="translate(-75.301 -5.146)" fill="#fff" />
                        <path id="Path_140" data-name="Path 140" d="M156.936,24.362a2.8,2.8,0,0,1-2.9,2.86l3.4,10.322h-6.7L147.6,27.222h-.849V37.544h-6.48V5.146h12.289c3.039,0,4.379,1.655,4.379,4.2ZM146.747,10.821V21.994h3.173c.492,0,.626-.179.626-.67V11.492c0-.4-.179-.67-.626-.67Z" transform="translate(-68.588 -5.146)" fill="#fff" />
                    </g>
                </a>
                <a id="footer-roofing-link" href="<?php echo $roofing; ?>">
                    <g id="Group_6254" data-name="Group 6254" transform="translate(1197.227 3217.052)">
                        <g id="Group_1554" data-name="Group 1554">
                            <path id="Path_142" data-name="Path 142" d="M600.9,24.362a2.8,2.8,0,0,1-2.9,2.86l3.4,10.322h-6.7l-3.128-10.322h-.849V37.544h-6.48V5.146h12.289c3.039,0,4.379,1.655,4.379,4.2ZM590.716,10.821V21.994h3.173c.492,0,.626-.179.626-.67V11.492c0-.4-.179-.67-.626-.67Z" transform="translate(-584.236 -5.146)" fill="#fff" />
                            <path id="Path_143" data-name="Path 143" d="M614.089,32.941c0,2.459-1.028,4.6-4.648,4.6h-7.508c-3.62,0-4.648-2.144-4.648-4.6V9.347c0-2.546,1.341-4.2,4.379-4.2h8.044c3.039,0,4.38,1.655,4.38,4.2Zm-9.7-22.119c-.447,0-.581.223-.581.626V31.2c0,.493.089.672.626.672h2.458c.536,0,.626-.179.626-.672V11.447c0-.4-.134-.626-.581-.626Z" transform="translate(-577.846 -5.146)" fill="#fff" />
                            <path id="Path_144" data-name="Path 144" d="M627.169,32.941c0,2.459-1.028,4.6-4.649,4.6h-7.506c-3.62,0-4.648-2.144-4.648-4.6V9.347c0-2.546,1.341-4.2,4.379-4.2h8.044c3.039,0,4.38,1.655,4.38,4.2Zm-9.7-22.119c-.448,0-.581.223-.581.626V31.2c0,.493.089.672.626.672h2.456c.536,0,.626-.179.626-.672V11.447c0-.4-.133-.626-.579-.626Z" transform="translate(-571.442 -5.146)" fill="#fff" />
                            <path id="Path_145" data-name="Path 145" d="M623.446,5.146h12.6l1.116,6.033H630.1v7.686h5.362V24.45H630.1V37.544h-6.659Z" transform="translate(-565.038 -5.146)" fill="#fff" />
                            <path id="Path_146" data-name="Path 146" d="M634,5.146h6.481v32.4H634Z" transform="translate(-559.868 -5.146)" fill="#fff" />
                            <path id="Path_147" data-name="Path 147" d="M640.155,5.146h6.165l3.308,13v-13h6.657v32.4h-6.657L646.143,24V37.544h-5.988Z" transform="translate(-556.857 -5.146)" fill="#fff" />
                            <path id="Path_148" data-name="Path 148" d="M652.785,9.079c0-2.368,1.3-3.933,3.843-3.933h9.249l1.117,6.033h-7.1c-.448,0-.581.223-.581.626V31.019c0,.4.133.626.581.626h2.949V18.865h6.3V37.544h-11.3c-3.709,0-5.05-1.43-5.05-5Z" transform="translate(-550.673 -5.146)" fill="#fff" />
                        </g>
                    </g>
                </a>
                <a id="footer-battery-link" href="<?php echo $battery; ?>">
                    <g id="Group_6252" data-name="Group 6252" transform="translate(883.017 3217.052)">
                        <path id="Path_151" data-name="Path 151" d="M216.2,17.972c0,1.609-.536,2.86-2.234,3.305a2.612,2.612,0,0,1,2.547,2.86v8.4c0,3.574-1.341,5-5.05,5H199.707V5.146h12.645c2.547,0,3.843,1.564,3.843,3.933Zm-10.055-7.15v8.491h3.039a.764.764,0,0,0,.8-.849V11.447c0-.4-.134-.626-.581-.626Zm3.934,14.345c0-.717-.4-.938-.985-.938h-2.949V31.87H209.4c.536,0,.672-.179.672-.672Z" transform="translate(-199.707 -5.146)" fill="#fff" />
                        <path id="Path_152" data-name="Path 152" d="M218.991,33.522l-.581,4.022h-6.525l5.854-32.4h6.927l5.854,32.4H224l-.581-4.022Zm.715-5.138H222.7L221.226,16.9Z" transform="translate(-193.744 -5.146)" fill="#fff" />
                        <path id="Path_153" data-name="Path 153" d="M236.871,5.146l1.609,6.033h-4.335V37.544h-6.614V11.179H223.2l1.7-6.033Z" transform="translate(-188.206 -5.146)" fill="#fff" />
                        <path id="Path_154" data-name="Path 154" d="M247.971,5.146l1.609,6.033h-4.335V37.544h-6.614V11.179H234.3l1.7-6.033Z" transform="translate(-182.772 -5.146)" fill="#fff" />
                        <path id="Path_155" data-name="Path 155" d="M245.756,5.146h12.6l1.117,6.033h-7.061v7.686h5.363V24.45h-5.363v7.061h6.793l-1.117,6.033H245.756Z" transform="translate(-177.161 -5.146)" fill="#fff" />
                        <path id="Path_156" data-name="Path 156" d="M273.133,24.362a2.8,2.8,0,0,1-2.9,2.86l3.395,10.322h-6.7l-3.127-10.322h-.849V37.544h-6.48V5.146h12.288c3.039,0,4.379,1.655,4.379,4.2ZM262.946,10.821V21.994h3.173c.49,0,.626-.179.626-.67V11.492c0-.4-.179-.67-.626-.67Z" transform="translate(-171.917 -5.146)" fill="#fff" />
                        <path id="Path_157" data-name="Path 157" d="M281.815,37.544h-6.837V29.322L268.766,5.146h6.7l2.9,15.283,2.949-15.283h6.7l-6.212,24.176Z" transform="translate(-165.895 -5.146)" fill="#fff" />
                        <path id="Path_158" data-name="Path 158" d="M288.255,37.544l-1.162-6.033h6.971c.581,0,.76-.179.76-.67v-5.9c0-.892-.313-.938-1.207-.938h-3.352c-1.922,0-3.62-.445-3.62-3.664V9.347c0-2.546,1.341-4.2,4.379-4.2h8.938l1.116,6.033h-7.327c-.536,0-.8.223-.8.715v5.9c0,.672.313.851.983.851H298c2.056,0,3.218.892,3.218,3.307V32.628c0,3.575-1.251,4.916-4.96,4.916Z" transform="translate(-157.14 -5.146)" fill="#fff" />
                        <path id="Path_159" data-name="Path 159" d="M311,5.146l1.609,6.033h-4.333V37.544h-6.614V11.179h-4.335l1.7-6.033Z" transform="translate(-151.911 -5.146)" fill="#fff" />
                        <path id="Path_160" data-name="Path 160" d="M325.587,32.941c0,2.459-1.026,4.6-4.648,4.6h-7.506c-3.62,0-4.648-2.144-4.648-4.6V9.347c0-2.546,1.341-4.2,4.379-4.2h8.044c3.037,0,4.378,1.655,4.378,4.2Zm-9.7-22.119c-.448,0-.581.223-.581.626V31.2c0,.493.089.672.624.672h2.458c.536,0,.626-.179.626-.672V11.447c0-.4-.134-.626-.579-.626Z" transform="translate(-146.3 -5.146)" fill="#fff" />
                        <path id="Path_161" data-name="Path 161" d="M338.534,24.362a2.8,2.8,0,0,1-2.9,2.86l3.4,10.322h-6.7l-3.128-10.322h-.849V37.544h-6.48V5.146h12.289c3.039,0,4.379,1.655,4.379,4.2ZM328.345,10.821V21.994h3.173c.492,0,.626-.179.626-.67V11.492c0-.4-.179-.67-.626-.67Z" transform="translate(-139.897 -5.146)" fill="#fff" />
                        <path id="Path_162" data-name="Path 162" d="M341.211,33.522l-.582,4.022h-6.523l5.854-32.4h6.927l5.853,32.4h-6.525l-.581-4.022Zm.715-5.138h2.993L343.446,16.9Z" transform="translate(-133.903 -5.146)" fill="#fff" />
                        <path id="Path_163" data-name="Path 163" d="M347.606,9.079c0-2.368,1.3-3.933,3.843-3.933h9.25l1.117,6.033h-7.105c-.447,0-.581.223-.581.626V31.019c0,.4.134.626.581.626h2.949V18.865h6.3V37.544h-11.3c-3.709,0-5.05-1.43-5.05-5Z" transform="translate(-127.293 -5.146)" fill="#fff" />
                        <path id="Path_164" data-name="Path 164" d="M360.295,5.146h12.6l1.117,6.033h-7.061v7.686h5.363V24.45h-5.363v7.061h6.793l-1.117,6.033H360.295Z" transform="translate(-121.081 -5.146)" fill="#fff" />
                    </g>
                </a>
                <path id="Path_9188" data-name="Path 9188" d="M28.71,0H37.8L8.038,61.843H-.713Z" transform="translate(837.159 3201.41)" fill="#fff" />
                <path id="Path_9186" data-name="Path 9186" d="M28.71,0H37.8L8.038,61.843H-.713Z" transform="translate(664 3201.41)" fill="#fff" />
                <path id="Path_9189" data-name="Path 9189" d="M28.71,0H37.8L8.038,61.843H-.713Z" transform="translate(1145.314 3201.41)" fill="#fff" />
                <path id="Path_9190" data-name="Path 9190" d="M28.71,0H37.8L8.038,61.843H-.713Z" transform="translate(1335.789 3201.41)" fill="#fff" />
            </g>
        </svg>

        <div class="banner-menu-blue-2">

        </div>
    </div>


    <div class="info-row mx-auto row" style="max-width: 1100px;">
        <div class="col-12 col-md-3">
            <div class="sec-1">
                <p style="margin-bottom: 7px;"><strong>Arizona Office</strong></p>
                <hr />
                <address class="d-flex flex-column">
                    <a onclick="ga('gtm1.send', 'event', 'Footer', 'Main', 'SanDiego');" href="/" target="_blank" title="arizona Address" class="text-decoration-none">
                        329 Lone Cactus Rd, Suite 8<br />Phoenix, AZ 85027
                    </a>
                    <a onclick="ga('gtm1.send', 'event', 'Footer', 'Main', 'Call');" href="tel:+14808630024" title="Call Semper Solaris arizona Office">(480) 863-0024</a>
                </address>
            </div>
        </div>
        <div class="col-12 col-sm-2" style="margin-bottom:10px;">
            <div class="sec-1">
                <p style="margin-bottom: 7px;"><strong>Our Services</strong></p>
                <hr>
                <ul class="list-unstyled mx-0 ">
                    <li><a href="/solar-panels/">Solar Panels</a></li>
                    <li><a href="/roofing/">Roofing Services</a></li>
                    <li><a href="/battery-storage/">Battery Storage</a></li>
                    <?php /* ?>
                    <li><a href="/heating-air-conditioning">Heating & Air Conditioning </a></li>
					<?php */ ?>
                    <li><a href="https://www.sempersolaris.com/warranties/">Warranties</a></li>
                </ul>
            </div>
        </div>
        <div class="col-12 col-md-2" style="margin-bottom:10px;">
            <div class="sec-1">
                <p style="margin-bottom: 7px;"><strong>Resources</strong></p>
                <hr>
                <ul class="list-unstyled mx-0">
                    <li> <a href="https://appointment.sempersolaris.com/">Book an Appointment</a></li>
                    <li> <a href="https://www.sempersolaris.com/semper-cares-initiative/">Semper Cares Initiative</a></li>
                    <li> <a href="/blog/">Blog</a></li>
                    <li> <a href="/careers/">Careers</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="mx-auto p-2" style="max-width:395px; padding-bottom: 32px !important;">
        <div class="sec-1">
            <p style="margin-bottom: 7px;"><strong> Follow us on social media:</strong></p>
            <hr style="margin-bottom: 7px;">
            <div class="d-flex justify-content-around">
                <a href="https://www.tiktok.com/@sempersolaris"><i class="fab fa-tiktok fa-lg"></i><span style="visibility:hidden;position:absolute;z-index:0">TikTok</span></a>
                <a href="https://www.facebook.com/SemperSolaris/"><i class="fab fa-facebook-f fa-lg"></i><span style="visibility:hidden;position:absolute;z-index:0">Facebook</span></a>
                <a href="https://www.youtube.com/channel/UCXkXgYE1h5mw3DCs6Dnr5kg"><i class="fab fa-youtube fa-md"></i><span style="visibility:hidden;position:absolute;z-index:0">YouTube</span></a>
                <a href="https://www.instagram.com/sempersolaris/"><i class="fab fa-instagram fa-lg"></i><span style="visibility:hidden;position:absolute;z-index:0">Instagram</span></a>
                <a href="https://twitter.com/sempersolarisco"><i class="fab fa-twitter fa-lg"></i><span style="visibility:hidden;position:absolute;z-index:0">Twitter</span></a>
                <a href="https://www.linkedin.com/company/semper-solaris"><i class="fab fa-linkedin-in fa-lg"></i><span style="visibility:hidden;position:absolute;z-index:0">LinkedIn</span></a>
                <a href="https://www.pinterest.com/sempersolaris/"><i class="fab fa-pinterest-p fa-lg"></i><span style="visibility:hidden;position:absolute;z-index:0; display:none;">Pinterest</span></a>
            </div>
        </div>
    </div>
    <?php

    get_template_part("php/breadcrumbs");

    ?>
    <div id="disclaimerArea" class="disclaimerArea" style="color:white !important">
        <div class="text-center mx-auto container text-gray" role="contentinfo" aria-label="Site issue" style="max-width: 1000px;">
            <p id="" class="site-disclaimer"><small>
                    *On approved credit. 15-panel minimum. Some restrictions apply.*30 percent federal tax credit based on eligibility, consult your tax advisor. On approved credit. **On approved credit. (Battery Storage will have the 0 Financing Offer). ^Savings based on size of roof. On approved credit. ‡Payment based on system size of unit. On approved credit. †For all warranties please go to <a href="https://www.sempersolaris.com/warranties/">www.sempersolaris.com/warranties</a>. ~Present this at the time of your appointment. One per household, minimum 8 panel new system. §Maximum awarded amount per new customer is $550 for referrals that purchase. ◊Maximum awarded amount per new customer is $200 for referrals that purchase. For all referrals: Referral name must be supplied by referrer, referral amount paid after completion of complete system installation and payment. Unlimited referrals accepted. For all offers: Cannot be combined with any other offers. New customers only, some restrictions apply. For further details please call
                    Expires <span id="_expiry_">at the end of this month</span>.</small></p> <br>
            <script defer>
                let _d = new Date(),
                    _lD = new Date(_d.getFullYear(), _d.getMonth() + 1, 0);
                document.getElementById("_expiry_").innerText = _lD.toLocaleString('default', {
                    month: 'long'
                }) + " " + _lD.getDate() + ", " + _lD.getFullYear();
            </script>
            <p id="disclaimerArea">&copy;<?php echo date('Y') ?> Semper Solaris. All Rights Reserved. | <a target="_blank" href="https://azroc.my.site.com/AZRoc/s/contractor-search?licenseId=a0o8y00000072NPAAY"> ROC# 336163 </a> | <a target="_blank" href="https://azroc.my.site.com/AZRoc/s/contractor-search?licenseId=a0o8y0000007pTmAAI">ROC# 336306 </a> | <a target="_blank" href="https://azroc.my.site.com/AZRoc/s/contractor-search?licenseId=a0o8y0000007pWrAAI"> ROC# 336305</a> </p>
            <p id="disclaimerArea">This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy">Privacy Policy</a> and <a href="https://policies.google.com/terms">Terms of Service</a> apply.</p>

            <p id="disclaimerArea">
                Please visit our <a href="/privacy-notice/">privacy policy</a> to learn how we use your information.<br />You will receive emails periodically and can opt-out at any time.
            </p>
        </div>
        <div class="text-center mt-2">
            <a href="/sitemap/">Sitemap</a>
        </div>
    </div>
    <?php

    get_template_part("template-parts/quick", "buttons");

    $script = <<<SCRIPT
    <script src="/wp-content/themes/semper-arizona-child/js/bootstrap.bundle.min.js"></script>
    <script src="/wp-content/themes/semper-arizona-child/js/recaptcha.min.js"></script>
    <script src="/wp-content/themes/semper-arizona-child/js/global.min.js" defer></script>
    <script src="/wp-content/themes/semper-arizona-child/js/exit-pop-up.min.js" type="module"></script>
    SCRIPT;
    new Page_Scripts($script);

    wp_footer();

    ?>
</footer>

</html>