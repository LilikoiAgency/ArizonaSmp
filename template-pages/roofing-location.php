<?php
/* Template Name: Roofing Location Page 
 * Template Post Type: page, post, location_page */
get_header();
$block_array = parse_blocks(get_the_content());
global $content_array;
$content_array = [];
foreach ($block_array as $key => $value) {
    $class = $value['attrs']['className'];
    $dom = new DOMDocument();
    @$dom->loadHTML($value['innerContent'][0]);
    $content_array[$class] = preg_replace('/<(?!(img|br|strong|a))(?!\/(img|br|strong|a)).+?>/', '', $dom->saveHTML());
}
add_image_size('full-width', 450, 255, true);
?>

<style>
    /*
    * Prefixed by https://autoprefixer.github.io
    * PostCSS: v8.3.6,
    * Autoprefixer: v10.3.1
    * Browsers: last 4 version
    */

    /*
    * Prefixed by https://autoprefixer.github.io
    * PostCSS: v8.3.6,
    * Autoprefixer: v10.3.1
    * Browsers: last 4 version
    */
    /* GLobal/ lines / buttons/ titles/headers */
    :root {
        --semperRed: #CE0109;
        --semperBlue: #004C97;
        --semperOrange: #E65B12;

    }

    .sectionSpacing {
        margin-top: 45px;
        margin-bottom: 45px;
    }

    .orange-cta-btn-2 {
        display: block;
        max-width: 70%;
        margin: 0 auto;
        color: white !important;
        font-size: 24px/29px !important;
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
        text-transform: uppercase;
        text-decoration: none;
        background-color: var(--semperOrange);
        border-radius: 35px;
        padding: 10px 15px 10px 15px;
        margin: 25px;
        border: none;
    }

    .orange-cta-btn-2:hover,
    .orange-cta-btn-2:focus {
        background: -o-linear-gradient(bottom right, rgb(223, 70, 0), rgb(255, 163, 83));
        background: -webkit-gradient(linear, right bottom, left top, from(rgb(223, 70, 0)), to(rgb(255, 163, 83)));
        background: linear-gradient(to top left, rgb(223, 70, 0), rgb(255, 163, 83));
        -webkit-transform: scale(1.001);
        -ms-transform: scale(1.001);
        transform: scale(1.001);
        -webkit-transition: all 0.1s ease;
        -o-transition: all 0.1s ease;
        transition: all 0.1s ease;
    }

    button.orange-cta-btn-2 {
        cursor: pointer;
    }

    .horizontalLine {
        margin: 0;
        margin-bottom: 35px;
        position: relative;
        background: lightgrey;
        border: none;
        height: 1px;
        opacity: 1;
    }

    .horizontalLine:before {
        content: '';
        height: 2.5px;
        width: 25%;
        background: #CE0109;
        position: absolute;
        left: 0;
        bottom: 0;
    }

    .sectionTitle {
        margin: 0;
        padding-top: 80px;
        margin-bottom: 5px;
        color: #004c97;
    }

    .section-headers {
        font: normal normal bold 25px/32px Barlow;
        text-transform: none;
        margin: 0;
        padding: 0;
        margin-bottom: 20px;
    }

    .video-wrapper {
        margin-top: 35px !important;
        margin-bottom: 30px !important;
    }

    .video-legend-title {
        font: normal normal normal 20px Barlow;
        text-align: center;
        float: none !important;
        width: auto !important;
        background-color: #ce0109;
        padding: 5px 6.5%;
        color: white;
        margin: 0;
        min-width: 375px;
    }

    .video-header {
        font: normal 500 20px Barlow !important;
        text-align: center;
    }

    a:hover {
        text-decoration: none !important;
    }

    .container {
        padding-bottom: 0;
        padding-top: 0;

    }

    /* top of page */
    .page-title {
        font: normal normal bold 32px/22px Barlow;
        text-align: center;
        letter-spacing: 0px;
        text-transform: uppercase;
        opacity: 1;
        margin-bottom: 45px;
    }

    .img-overlay-wrap {
        position: relative;
    }

    .img-overlay-wrap svg {
        /* width:20%; */

        position: absolute;
        bottom: -5%;
        left: 0;
        z-index: 1;
    }

    .hero-wrapper {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        margin-bottom: 80px;
    }

    .icon-tags {
        color: var(--semperBlue);
        text-align: left;
        opacity: 1;
        max-width: 80%;
        display: table;
    }

    .iconContainer {
        margin-left: 10%;
    }

    .legendStyle {
        float: none !important;
        width: auto !important;
        background-color: #EFB82A;
        padding-left: 25px;
        padding-right: 25px;
        color: #235C87;
        font: normal normal bold 24px/29px Barlow;
        margin-bottom: 0 !important;
    }

    .legend-paragraph {
        font-weight: 500 !important;
        padding: 15px;
        text-align: center;
        text-shadow: 0.3px 0 0 black;
        font-size: 16px !important;
    }

    .rowSpacing {
        padding-bottom: 80px;
    }

    /* infographic */
    .solarInfographic {
        margin-top: 80px !important;

    }

    /* right-blue-textare */
    .blue-text-area p {
        text-align: center;
    }

    .blue-text-area p a {
        color: #EFB82A;
    }

    /* Map AREA  */
    .switch-field input {
        position: absolute !important;
        height: 1px;
        width: 1px;
        color: transparent;
        background-color: transparent;
    }

    .switch-field label {
        background-color: #e4e4e4;
        color: black;
        font-size: 14px;
        line-height: 1;
        text-align: center;
        padding: 8px 16px;
        margin-right: -5px;
        border: 1px solid rgba(0, 0, 0, 0.2);
        -webkit-transition: all 0.1s ease-in-out;
        -o-transition: all 0.1s ease-in-out;
        transition: all 0.1s ease-in-out;
    }

    .switch-field label:hover {
        cursor: pointer;
    }

    .switch-field input:checked+label {
        background-color: var(--semperBlue);
        -webkit-box-shadow: none;
        box-shadow: none;
        color: white;
    }

    .switch-field label:first-of-type {
        border-radius: 4px 0 0 4px;
    }

    .switch-field label:last-of-type {
        border-radius: 0 4px 4px 0;
    }

    .gMap {
        display: none;
    }

    .bingMap {
        display: none;
        text-align: center;
    }

    .switch-field input[value="2"]:checked~.gMap {
        display: block;
    }

    .switch-field input[value="1"]:checked~.bingMap {
        display: block;
    }

    .locationDetails {
        color: gray;
    }

    .smp-cares-wrapper {
        margin-bottom: 40px;
    }

    .smp-cares-wrapper h3 {
        padding: 15px;
        padding-bottom: 0px;
        font-size: 22px;
    }

    .smp-cares-wrapper p {
        font-size: 16px !important;
    }

    /*  */

    /* media queries */


    @media screen and (max-width:768px) {


        .video-legend-title {
            min-width: 240px;
        }

        .legend-paragraph {
            font-weight: 500 !important;
            padding: 5px;
            text-align: center;
        }

        .img-overlay-wrap svg {
            /* width:40%; */
        }

        .hero-wrapper {
            margin-bottom: 35px;
        }

        .page-title {
            font-size: 22px;
            margin-bottom: 25px;
        }

        .sectionTitle {
            padding-top: 35px;
        }

        .horizontalLine {
            margin-bottom: 15px;
        }

        .sectionSpacing {
            margin-top: 25px;
            margin-bottom: 25px;
        }

        .section-headers {
            font-size: 22px !important;
            margin-bottom: 15px !important;
        }

        p {
            margin-bottom: 15px !important;
        }

        .legendStyle {
            font-size: 20px !important;
        }

        .rowSpacing {
            padding-bottom: 30px;
        }

        body div .container {
            padding: 0;
        }

        div.col.justify-content-space-around.align-items-center {
            padding: 0;
        }

        .iconImg {
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            width: 50px;
            height: 50px;
        }

        .icon-tags {
            padding: 0;
            max-width: 100%;
            text-align: center;
            font: normal normal normal 18px Barlow !important;
        }

        .icon-tags p {
            font-size: 15px !important;
            padding: 0px !important;
            line-height: 1.2 !important;
        }

        div.col-md-4.top-icons {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            padding-left: 0 !important;

        }

        div.d-flex.flex-row.iconContainer {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important;
            margin-left: 0 !important;
            padding: 0 !important;
        }

        .orange-cta-btn-2 {
            max-width: 100%;
            margin-top: 5%;
        }

        #grandOffer {
            -webkit-box-orient: vertical;
            -webkit-box-direction: reverse;
            -ms-flex-direction: column-reverse;
            flex-direction: column-reverse;
            padding: 0;
            margin: 0;
        }

        .verticalLine {
            width: 0;
            margin: 2%;
            margin-top: auto;
            margin-bottom: auto;
            height: 5em;
            border-left: 1px solid lightgrey;

        }

        fieldset {
            padding: 10px !important;
        }

        .smp-cares-wrapper {
            margin: 0 !important;
        }

        .section-headers {
            font: normal normal bold 25px/32px Barlow;
            text-transform: none;
            margin: 0;
            padding: 0;
            ;

        }

        .sectionTitle {
            font-size: 22px !important;
        }

        #__semper_solaris_sf_form {
            width: 100%;
            margin-right: auto;
            margin-left: auto;
        }

        #modal_content_container>p {
            margin-top: 15px !important;
        }

        .solarInfographic {
            margin-top: 40px !important;
            /* margin-bottom: 40px !important; */
        }

        .solarInfographic h4 {
            font-size: 28px !important;
            font-weight: bolder !important;
            line-height: 1 !important;

        }

        .solarInfographic {
            height: auto !important;
        }

        .mobile-style-button {
            padding-bottom: 20px;
        }

        #site-navigation>div.nav-left>div.mobile-book a {
            background-color: var(--semperBlue) !important;
        }

        .smp-cares-wrapper {
            margin-bottom: 0px;
        }

        .offer-holder img {
            padding-top: 20px;
        }

        .offer-holder {
            padding-bottom: 40px;
        }

        .location-info {
            width: 80% !important;
        }

        .locationDetails {
            border: none !important;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            max-width: 100% !important;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            text-align: left;
            margin-bottom: 2%;
            margin-left: 5%;
            padding: 0px !important;
        }

        .smp-cares-wrapper {
            margin-left: calc(-50vw + 50%) !important;
            width: 100vw !important;
            padding-top: 0px !important;
        }



    }

    @media screen and (min-width:993px) {
        .blue-text-area {
            height: auto !important;
        }
    }

    @media screen and (max-width:992px) {
        .blue-text-area {
            height: auto;
        }
    }

    @media screen and (min-width:768px) {

        hr.verticalLine {
            display: none;
        }

        .mobileCTA {
            display: none;
        }

        .video-offer-wrapper-mobile {
            display: none;
        }

    }

    /* !important.  */
    html,
    body {
        overflow-x: hidden !important;
        font-family: 'Barlow', sans-serif !important;
    }

    #content.with-banner {
        padding-top: 0px !important;
    }

    #content>div:nth-child(11)>div>section>div>div.cta-content.section-xs.flex-basic.text-white.blue-bg-g>div>p:nth-child(2)>a {
        background-color: white !important;
        color: var(--semperOrange) !important;
    }

    #content>div:nth-child(11)>div>section>div>div.cta-content.section-xs.flex-basic.text-white.blue-bg-g>div>p.cta-btn.js-center.my-0.w-100.pr-sm.mb-sm-mb>a {
        background-color: var(--semperOrange) !important;
    }

    #menu-item-34811 {
        background-color: var(--semperBlue) !important;
        color: white !important;
    }

    div p {
        font: normal normal normal 18px/27px Barlow !important;
        margin: 0px;
        padding: 0px;
    }

    a .btn.btn-blue {
        background-color: var(--semperBlue) !important;
    }

    .cropped1 {
        width: 1200px;
        max-height: 395px;
        -o-object-fit: cover;
        object-fit: cover;
        -o-object-position: 30% 10%;
        object-position: 30% 10%;
        border-radius: 0px !important;
    }

    .cropped1 img {
        border-radius: 0px !important;
        width: 1200px;
    }

    .icon-tags p {
        display: table-cell;
        vertical-align: middle;
        padding-left: 10px;
        font-family: 'Barlow', sans-serif;
        font-size: 18px !important;
        font-weight: 600 !important;
        line-height: 20px !important;
    }

    .icons-width-height {
        width: 35px;
        height: 35px;
    }

    .wp-image-599 {
        width: 100vw;
    }
	#location-form-wrapper > div.container.d-flex.flex-row.w-100.justify-content-between.position-absolute.text-white.hideSection{
		max-width: 1055px !important;
	}
</style>

<!-- Page hero image -->

<?php if (!wp_is_mobile()) : ?>
    <div class="hero-wrapper" style="background-color: #0C4E97; overflow: hidden; ">
        <div class=" img-overlay-wrap ">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="310" height="210" viewBox="0 0 302 79">
                <defs>
                    <clipPath id="clip-path">
                        <rect id="Rectangle_579" data-name="Rectangle 579" width="302" height="79" transform="translate(360 427)" fill="#fff" stroke="#707070" stroke-width="1" />
                    </clipPath>
                </defs>
                <g id="Group_5356" data-name="Group 5356" transform="translate(-360 -427)">
                    <g id="Mask_Group_45" data-name="Mask Group 45" clip-path="url(#clip-path)">
                        <path id="Path_6765" data-name="Path 6765" d="M28.925,69.347V.5l256.53.514L315.03,69.186Z" transform="translate(330.997 433.341)" fill="#cc0109" />
                        <path id="Path_6766" data-name="Path 6766" d="M31,0H289.962l.167.385,29.963,69.066H31ZM289.123,1.278H32.279V68.173H318.144Z" transform="translate(326.909 433.362)" fill="#fffcff" />
                        <rect id="Rectangle_578" data-name="Rectangle 578" width="317.279" height="69.644" transform="translate(329.805 433.266)" fill="none" />
                    </g>
                    <path id="Path_8178" data-name="Path 8178" d="M11.808-28.7c.48,0,.672.288.672.72v10.56c0,.528-.144.72-.672.72H8.4v-12Zm7.536-1.584c0-2.736-1.44-4.512-4.7-4.512H1.44V0H8.4V-11.088h.912L12.672,0h7.2L16.224-11.088a3.011,3.011,0,0,0,3.12-3.072ZM32.688-28.7c.48,0,.624.24.624.672V-6.816c0,.528-.1.72-.672.72H30c-.576,0-.672-.192-.672-.72V-28.032c0-.432.144-.672.624-.672Zm7.68-1.584c0-2.736-1.44-4.512-4.7-4.512h-8.64c-3.264,0-4.7,1.776-4.7,4.512V-4.944C22.32-2.3,23.424,0,27.312,0h8.064c3.888,0,4.992-2.3,4.992-4.944ZM53.616-28.7c.48,0,.624.24.624.672V-6.816c0,.528-.1.72-.672.72h-2.64c-.576,0-.672-.192-.672-.72V-28.032c0-.432.144-.672.624-.672Zm7.68-1.584c0-2.736-1.44-4.512-4.7-4.512h-8.64c-3.264,0-4.7,1.776-4.7,4.512V-4.944C43.248-2.3,44.352,0,48.24,0H56.3C60.192,0,61.3-2.3,61.3-4.944ZM64.176,0h7.152V-14.064h5.76v-6h-5.76V-28.32h7.584l-1.2-6.48H64.176Zm16.9,0h6.96V-34.8h-6.96Zm9.84,0h6.432V-14.544L101.088,0h7.152V-34.8h-7.152v13.968L97.536-34.8H90.912ZM111.12-5.376c0,3.84,1.44,5.376,5.424,5.376h12.144V-20.064H121.92V-6.336h-3.168c-.48,0-.624-.24-.624-.672v-20.64c0-.432.144-.672.624-.672h7.632l-1.2-6.48h-9.936c-2.736,0-4.128,1.68-4.128,4.224Z" transform="translate(475 485)" fill="#fff" />
                </g>
            </svg>
            <img style="position: absolute;right: 10px;bottom: 40px;" src="/wp-content/themes/semper-arizona-child/assets/icons/roof-page/SMP Roofing 50 yr Warranty.svg" alt="roofing image with 50 yr warranty graphic">

            <div class="cropped1">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Solar page hero image" height="365" />

            </div>

        </div>
    </div>
<?php else : ?>
    <div class=" img-overlay-wrap " style="margin-bottom: 30px">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="150" height="90" viewBox="0 0 302 79">
            <defs>
                <clipPath id="clip-path">
                    <rect id="Rectangle_579" data-name="Rectangle 579" width="302" height="79" transform="translate(360 427)" fill="#fff" stroke="#707070" stroke-width="1" />
                </clipPath>
            </defs>
            <g id="Group_5356" data-name="Group 5356" transform="translate(-360 -427)">
                <g id="Mask_Group_45" data-name="Mask Group 45" clip-path="url(#clip-path)">
                    <path id="Path_6765" data-name="Path 6765" d="M28.925,69.347V.5l256.53.514L315.03,69.186Z" transform="translate(330.997 433.341)" fill="#cc0109" />
                    <path id="Path_6766" data-name="Path 6766" d="M31,0H289.962l.167.385,29.963,69.066H31ZM289.123,1.278H32.279V68.173H318.144Z" transform="translate(326.909 433.362)" fill="#fffcff" />
                    <rect id="Rectangle_578" data-name="Rectangle 578" width="317.279" height="69.644" transform="translate(329.805 433.266)" fill="none" />
                </g>
                <path id="Path_8178" data-name="Path 8178" d="M11.808-28.7c.48,0,.672.288.672.72v10.56c0,.528-.144.72-.672.72H8.4v-12Zm7.536-1.584c0-2.736-1.44-4.512-4.7-4.512H1.44V0H8.4V-11.088h.912L12.672,0h7.2L16.224-11.088a3.011,3.011,0,0,0,3.12-3.072ZM32.688-28.7c.48,0,.624.24.624.672V-6.816c0,.528-.1.72-.672.72H30c-.576,0-.672-.192-.672-.72V-28.032c0-.432.144-.672.624-.672Zm7.68-1.584c0-2.736-1.44-4.512-4.7-4.512h-8.64c-3.264,0-4.7,1.776-4.7,4.512V-4.944C22.32-2.3,23.424,0,27.312,0h8.064c3.888,0,4.992-2.3,4.992-4.944ZM53.616-28.7c.48,0,.624.24.624.672V-6.816c0,.528-.1.72-.672.72h-2.64c-.576,0-.672-.192-.672-.72V-28.032c0-.432.144-.672.624-.672Zm7.68-1.584c0-2.736-1.44-4.512-4.7-4.512h-8.64c-3.264,0-4.7,1.776-4.7,4.512V-4.944C43.248-2.3,44.352,0,48.24,0H56.3C60.192,0,61.3-2.3,61.3-4.944ZM64.176,0h7.152V-14.064h5.76v-6h-5.76V-28.32h7.584l-1.2-6.48H64.176Zm16.9,0h6.96V-34.8h-6.96Zm9.84,0h6.432V-14.544L101.088,0h7.152V-34.8h-7.152v13.968L97.536-34.8H90.912ZM111.12-5.376c0,3.84,1.44,5.376,5.424,5.376h12.144V-20.064H121.92V-6.336h-3.168c-.48,0-.624-.24-.624-.672v-20.64c0-.432.144-.672.624-.672h7.632l-1.2-6.48h-9.936c-2.736,0-4.128,1.68-4.128,4.224Z" transform="translate(475 485)" fill="#fff" />
            </g>
        </svg>
        <img width="160" style="position: absolute;right: 5px;bottom: 15px;" src="/wp-content/themes/semper-arizona-child/assets/icons/roof-page/SMP Roofing 50 yr Warranty.svg" alt="Roof image">
        <?php echo '<div class="mw-100 text-center" > ';
        echo $content_array['mobile-hero'];
        echo '</div>';  ?>
    </div>
<?php endif; ?>

<div class="container" style="max-width:1100px;">
    <div class="m-auto w-100">
        <!-- Page Title is here  -->
        <?php the_title('<h2 class="page-title">', '</h2>');
        ?>
        <!-- icons next to top offer and CTA section -->
        <div id="grandOffer" class="row">
            <div class="col-md-4 top-icons">
                <div class="d-flex flex-row flex-wrap iconContainer">
                    <div class=" iconImg ">
                        <img width="35" height="35" src="/wp-content/themes/semper-arizona-child/assets/icons/roof-page/SMP Roofing shield-check-solid.svg" alt="50 Year Warranty with select roofing" />
                    </div>
                    <div class="icon-tags ">
                        <p>50 year Warranty</p>
                    </div>
                </div>
                <hr style="color: black;">
                <div class="verticalLine"></div>
                <div class="d-flex flex-row flex-wrap  iconContainer">
                    <div class=" iconImg">
                        <img width="45" height="35" src="/wp-content/themes/semper-arizona-child/assets/icons/roof-page/SMP Roofing Owens Corning.svg" alt="Preferred Roofing Contractor" />
                    </div>
                    <div class="icon-tags ">
                        <p>Preferred Contractor</p>
                    </div>
                </div>
                <hr style="color: black;">
                <div class="verticalLine"></div>
                <div class="d-flex flex-row flex-wrap  iconContainer">
                    <div class=" iconImg ">
                        <img width="45" height="35" src="/wp-content/themes/semper-arizona-child/assets/icons/roof-page/SMP Roofing Cool Roof.svg" alt="cool roof icon" />
                    </div>
                    <div class="icon-tags ">
                        <p>Cool Roof Protection</p>
                    </div>
                </div>
            </div>
            <!-- offer & cta -->
            <div class="col justify-content-space-around align-items-center text-center">
                <img <?php if (wp_is_mobile()) : echo 'width="350px" height="130px"'; ?><?php else : echo 'width="600" height="220"';
                                                                                    endif; ?> src="https://floridastge.wpengine.com/wp-content/themes/semper-florida/assets/icons/roof-page/SMP_Roofing_Offer_Jan2023.svg" alt="Card image cap">
                <div class="d-flex flex-row justify-content-center ">
                    <a class="orange-cta-btn-2" href="#location-form-wrapper">
                        <img width="21px" height="21px" src="/wp-content/themes/semper-arizona-child/assets/icons/horizontal form/SMP CTA White Arrow.svg" />
                        Start Saving Now!
                    </a>
                </div>
            </div>

        </div>
        <hr class="sectionSpacing" style="border-bottom:1px solid whitesmoke; ">
        <?php if (wp_is_mobile()) :
            get_template_part('template-parts/horizontal', 'form');
        ?>
            <style>
                .service-wrapper {
                    padding-bottom: 60px;
                }

                .servicesHolder {
                    display: flex;
                    flex-direction: row;
                    flex-wrap: wrap;
                }

                .service-block {
                    max-width: 250px;
                    min-width: 150px;
                }

                @media screen and (max-width:768px) {
                    .service-wrapper {
                        margin-top: 25px;
                        padding-bottom: 40px;
                        max-width: 100vw !important;
                    }

                    .servicesHolder {
                        justify-content: space-around;
                    }

                    .service-block {
                        min-width: 50%;
                        padding-top: 9px;
                        padding-bottom: 25px;
                        max-width: 165px;

                    }

                    .service-block h3 {
                        font-size: 22px !important;
                    }

                    .service-block p {
                        display: none;
                    }

                    .border-line {
                        border-bottom: 1px solid lightgray !important;
                        border-right: 1px solid lightgray;
                    }

                    .border-line-2 {
                        border-top: 1px solid lightgray;
                        border-left: 1px solid lightgray;
                    }

                    .border-line-3 {
                        border-right: 1px solid lightgray;
                        border-top: 1px solid lightgray;
                    }

                    .border-line-4 {
                        border-bottom: 1px solid lightgray;
                        border-left: 1px solid lightgray;
                    }
                }

                .learn-more-btn {
                    color: #fff !important;
                    background-color: var(--semperRed);
                    font-family: inherit;
                    position: relative;
                    display: inline-block;
                    vertical-align: middle;
                    max-width: 160px;
                    height: 30px;
                    outline: 0;
                    font-size: 14px;
                    line-height: 22px;
                    letter-spacing: 0;
                    text-transform: capitalize;
                    -webkit-border-radius: 3px;
                    -moz-border-radius: 3px;
                    border-radius: 3px;
                    border: 0;
                    box-sizing: border-box;
                    margin: 0;
                    -webkit-transition: color .2s ease-in-out, background-color .2s ease-in-out, border-color .2s ease-in-out;
                    -moz-transition: color .2s ease-in-out, background-color .2s ease-in-out, border-color .2s ease-in-out;
                    transition: color .2s ease-in-out, background-color .2s ease-in-out, border-color .2s ease-in-out;
                    padding: 5px 45px 10px 10px;
                    cursor: pointer;
                }

                .learn-more-icon {
                    width: 38px;
                    position: absolute;
                    right: 0;
                    top: 0;
                    height: 100%;
                    background-color: #B10007;
                    text-align: center;
                    -webkit-border-radius: 0 3px 3px 0;
                    -moz-border-radius: 0 3px 3px 0;
                    border-radius: 0 3px 3px 0;
                    -webkit-transition: all .3s cubic-bezier(0, 0, .2, 1);
                    -moz-transition: all .3s cubic-bezier(0, 0, .2, 1);
                    transition: all .3s cubic-bezier(0, 0, .2, 1);
                }

                .learn-more-icon span {
                    position: relative;
                    display: inline-block;
                    line-height: inherit;
                    padding: 0;
                    font-size: 20px;
                    top: 50%;
                    -webkit-transform: translateY(-50%);
                    -moz-transform: translateY(-50%);
                    transform: translateY(-50%);
                }

                .learn-more-btn:hover .learn-more-icon {
                    width: 100%;
                    -webkit-border-radius: 3px;
                    -moz-border-radius: 3px;
                    border-radius: 3px;
                }
            </style>

            <div class=" service-wrapper">
                <h2 class="sectionTitle font-weight-light m-0 p-0"> OUR SERVICES</h2>
                <hr class="horizontalLine">

                <div class="text-center servicesHolder">
                    <div class="flex-wrap-wrap service-block border-line">
                        <img class="lazy-images" width="107" height="82" data-src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/SMP Icon Solar.svg" alt="solar icon">
                        <h3>Solar Energy<br /> <?php echo $content_array['city-name'] ?> </h3>
                        <a itemprop="url" href="/" class="learn-more-btn main-solar-link">
                            <span class="learn-more-text ">LEARN MORE</span>
                            <span class=" learn-more-icon">
                                <img class="lazy-images" width="20" height="20" style="margin-top: 5px;" data-src="/wp-content/themes/semper-arizona-child/assets/icons/horizontal form/SMP CTA Button Circle Arrow.svg" alt="arrow icon ">
                            </span>
                        </a>
                    </div>
                    <!-- <hr class="verticalLine"> -->
                    <div class="flex-wrap-wrap service-block border-line-4">
                        <img class="lazy-images" width="107" height="82" data-src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/SMP Icon Battery.svg" alt="battery icon">
                        <h3>Battery Storage <br /> <?php echo $content_array['city-name'] ?></h3>
                        <a itemprop="url" href="/" class="learn-more-btn main-battery-link">
                            <span class="learn-more-text ">LEARN MORE</span>
                            <span class=" learn-more-icon">
                                <img class="lazy-images" width="20" height="20" style="margin-top: 5px;" data-src="/wp-content/themes/semper-arizona-child/assets/icons/horizontal form/SMP CTA Button Circle Arrow.svg" alt="arrow icon">
                            </span>
                        </a>
                    </div>
                    <!-- <hr class="verticalLine"> -->
                    <div class="flex-wrap-wrap service-block ">
                        <img class="lazy-images" width="107" height="82" data-src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/SMP Icon Roofing.svg" alt="roof icon">
                        <h3>Roofing<br /> <?php echo $content_array['city-name'] ?></h3>
                        <a itemprop="url" href="/" class="learn-more-btn main-roofing-link">
                            <span class="learn-more-text ">LEARN MORE</span>
                            <span class=" learn-more-icon">
                                <img class="lazy-images" width="20" height="20" style="margin-top: 5px;" data-src="/wp-content/themes/semper-arizona-child/assets/icons/horizontal form/SMP CTA Button Circle Arrow.svg" alt="arrow icon">
                            </span>
                        </a>
                    </div>
                    <!-- <hr class="verticalLine "> -->
                    <!-- <div class="flex-wrap-wrap service-block border-line-2">
                    <img class="lazy-images" width="107" height="82" data-src="\wp-content\themes\semper-arizona-child\assets\icons\location-pages\SMP Icon HVAC.svg" alt="">
                    <h3>HVAC<br/> <?php echo $content_array['city-name'] ?></h3>
                    <a itemprop="url" href="/" class="learn-more-btn main-hvac-link">
                        <span class="learn-more-text ">LEARN MORE</span>
                        <span class=" learn-more-icon">
                        <img class="lazy-images"  width="20" height="20" style="margin-top: 5px;" data-src="\wp-content\themes\semper-solaris\assets\img\location\SMP CTA Button Circle Arrow.svg" alt="">
                        </span>
                    </a>
                    
                
                </div> -->
                </div>
            </div>
        <?php endif; ?>

        <!-- first text area  -->
        <div class="row rowSpacing">
            <?php if (wp_is_mobile()) : echo (null) ?>
            <?php else :  ?>
                <div class="col-sm-6">
                    <h2 class="section-headers">
                        <?php echo $content_array['headerOne'] ?>
                    </h2>
                    <p> <?php echo $content_array['top-left-paragraph'] ?></p>
                </div>
            <?php endif; ?>
            <!-- 2nd text area with border & legend -->
            <div class="col-sm-6">
                <fieldset class="border" style="border-color: #EFB82A !important">
                    <legend align="center" class="legendStyle"><?php echo $content_array['top-right-legend-title'] ?>
                    </legend>
                    <p class="legend-paragraph" style="font: normal normal normal 18px/22px Barlow bolder;">
                        <?php echo $content_array['legend-paragraph']  ?>
                    </p>
                </fieldset>
            </div>
        </div>

        <!-- Form -->
        <?php

        if (!wp_is_mobile()) :

        ?>
            <div class="container my-5 pb-4">
                <?php

                get_template_part('template-parts/horizontal', 'form');
                
                ?>
            </div>
        <?php

        endif;

        ?>
        <!-- main section -->
        <h2 class="sectionTitle"> Roofing </h2>
        <hr class="horizontalLine">

        <div class="row" style=" flex-wrap:wrap; justify-content: space-between;">
            <div class="col-lg-7">

                <h2 class="section-headers"> <?php echo $content_array['second-section-header'] ?: 'I need a header' ?> </h2>
                <p><?php echo $content_array['second-section-paragraph'] ?: 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum laborum illo vitae unde qui totam facere hic voluptas quis, error at sit nobis fuga ipsa. Itaque ratione necessitatibus quisquam id?' ?></p>

                <!--  VIDEO WRAPPER w/ legend-->
                <fieldset class="border video-wrapper" style="border:2px solid #ce0109 !important; padding: 1em">
                    <legend class="video-legend-title">
                        <img width="28px" height="21px" loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/SMP Watch Video Icon.svg" alt="video icon" style="vertical-align: text-bottom;">&nbsp;<?php echo $content_array['legend-video-text'] ?: 'Watch' ?>
                    </legend>
                    <h3 class='video-header font-weight-bold'> <?php echo $content_array['legend-video-header-youtube'] ?: "Don't wait to go solar" ?> </h3>
                    <div class="ratio ratio-16x9" style="border:none; outline:none; ">
                        <iframe loading="lazy" class="embed-responsive-item" data-src="<?php echo $content_array['legend-video-youtube'] ?>" src="" width="640" height="360" frameborder="0" allow="autoplay; picture-in-picture" allowfullscreen></iframe>
                    </div>

                </fieldset>
            </div>


            <!-- sidebar article with blue background and money falling img-->
            <div class="col-lg-4 ">

                <div style=" border: 1px solid #004c97; background-color:#E6EDF4; padding:5%;">
                    <div class="">
                        <div class="">
                            <img style="border-radius: 0px !important;" width="332" height="215" loading="lazy" src="/wp-content/uploads/2022/06/06-01-SMPTX-Roofing-Image-306x184-1.jpg" alt="roofing image">
                        </div>
                    </div>

                    <h4 style="text-align:center; margin-top: 20px; margin-bottom:15px;"><strong>Upgrade Your Curb Appeal With A Roof Replacement</strong></h4>
                    <p>A roof replacement done well can do more than just simply better protect your home. An upgraded roof helps boost curb appeal and home value, making it a worthwhile investment. <br /> Semper Solaris makes sure that your roof replacement includes the following: <br /> Waterproof barrier Effective ventilation Durable and reliable materials Protection from extreme elements Proper insulation This means we take everything from the best underlayment materials to the right ventilation products into consideration for your roof replacement. Our roofing team can work to replace a wide range of roof styles, including shingle roofing, tile roofing, TPO roofing, and asphalt shingle roofing.</p>

                </div>

            </div>
        </div>
        <div class="mobileCTA">
            <div class="d-flex justify-content-center flex-wrap" style="align-items: center; margin-top:35px; font-size: 20px">
                <STRONG style="font-size:24px">Ready to Start Saving Today!</STRONG>
                <a class="orange-cta-btn-2" href="#location-form-wrapper" style="max-width:100%; margin-left:0px !important; margin-right:0px !important;">
                    <img width="21px" height="21px" loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/horizontal form/SMP CTA White Arrow.svg" />
                    REQUEST FREE QUOTE
                </a>
            </div>
        </div>
    </div>
</div>
</div>

<style>
    .roofing-quickpoints {
        margin-left: auto;
        margin-right: auto;
        width: 90%;
    }

    .roofing-quickpoints h3 {
        font-size: 24px !important;
        margin-bottom: 0px !important;
    }

    .roofing-quickpoints h3 img {
        margin-bottom: 5px !important;
    }

    .roofing-quickpoints p {
        background-color: #EDEDED;
        border-left: 4px solid #DE007A;
        padding: 5px;
        margin: 0px;
    }
</style>

<!-- INFOGRAPHIC GOES HERE -->
<div class="container-fluid solarInfographic title wrapper p-0 mb-0 " style=" background-color:#EAEAEA; margin:0 auto; text-align:center; height:139px ">
    <div class="" style="padding: 30px;">
        <h4 style="color: #DE007A; font: normal normal bold 32px/32px Barlow;">TOTAL PROTECTION ROOFING SYSTEM</h4>
        <h4 style="font: normal normal bold 32px/32px Barlow;">ADVANCED SCIENCE. DESIGNED TO LAST.</h4>
    </div>
</div>
<div style="background-color: #EC86B6; width:100vw; height: 22px "></div>


<?php if (wp_is_mobile()) : ?>
    <div style="text-align:center;">
        <img width="400" height="70" src="/wp-content/themes/semper-arizona-child/assets/icons/roof-page/SMP Roofing Total Protection Section Mobile.svg" alt="roofing infographic: hide & ridge Shingles, Shingles, underlayment, ridge vents, ice & water barrier, strip shingles">
    </div>
    <div style="text-align:center; margin-top:15px;">
        <img width="500" height="300" src="/wp-content/themes/semper-arizona-child/assets/icons/roof-page/SMP Roofing Explode Isometric Mobile.png" alt="roofing infographic">
    </div>


    <div class="roofing-quickpoints">
        <h3> <img style="margin: auto;" width="25" height="25" src="/wp-content/themes/semper-arizona-child/assets/icons/roof-page/SMP Roofing Pink Bullet Point 1 Mobile.svg" alt=" number 1 icon"> <strong>SHINGLES</strong></h3>
        <p>Your roof's first line of defense against the elements that is also the most visible. Shingles help protect your home and impact its overall exterior design and curb appeal.</p>
    </div>
    <div class="roofing-quickpoints">
        <h3> <img style="margin: auto;" width="25" height="25" src="/wp-content/themes/semper-arizona-child/assets/icons/roof-page/SMP Roofing Pink Bullet Point 2 Mobile.svg" alt="number two icon"> <strong>ICE & WATER BARRIER</strong></h3>
        <p>Roof deck protection against water infiltration resulting from the freeze/thaw cycle, wind-driven rains and normal water flow around eaves, rakes, valleys, vents, chimneys and skylights.</p>
    </div>
    <div class="roofing-quickpoints">
        <h3> <img style="margin: auto;" width="25" height="25" src="/wp-content/themes/semper-arizona-child/assets/icons/roof-page/SMP Roofing Pink Bullet Point 3 Mobile.svg" alt="number three icon"> <strong>UNDERLAYMENT</strong></h3>
        <p>Provides a secondary barrier to help keep water out of your home.</p>
    </div>
    <div class="roofing-quickpoints">
        <h3> <img style="margin: auto;" width="25" height="25" src="/wp-content/themes/semper-arizona-child/assets/icons/roof-page/SMP Roofing Pink Bullet Point 4 Mobile.svg" alt="number 4 icon"> <strong>STRIP SHINGLES</strong></h3>
        <p>Eliminate the need for a hand cut starter row and help prevent shingle blow-offs and water infiltration in vulnerable areas of the roof with starter shingle products.</p>
    </div>
    <div class="roofing-quickpoints">
        <h3> <img style="margin: auto;" width="25" height="25" src="/wp-content/themes/semper-arizona-child/assets/icons/roof-page/SMP Roofing Pink Bullet Point 5 Mobile.svg" alt="number 5 icon"> <strong>HIP & RIDGE SHINGLES</strong></h3>
        <p>Beautiful layer of defense to protect the most vulnerable areas such as hips & ridges.</p>
    </div>
    <div class="roofing-quickpoints" style="margin-bottom: 45px;">
        <h3> <img style="margin: auto; " width="25" height="25" src="/wp-content/themes/semper-arizona-child/assets/icons/roof-page/SMP Roofing Pink Bullet Point 6 Mobile.svg" alt="number 6 icon"> <strong>RIDGE VENTS</strong></h3>
        <p>Reduce heat and moisture buildup that can lead to ice damming, roof deterioration and mold infestation. Helps air flow through the attic to manage temperature and moisture.</p>
    </div>

<?php else : ?>
    <div style="text-align:center; margin-top: -22px;">
        <img src="/wp-content/themes/semper-arizona-child/assets/icons/roof-page/SMP Roofing Total Protection Section.svg" alt="total protection icon">
    </div>
    <div style="max-width: 1100px; text-align:center; margin: auto; padding-top: 80px; padding-bottom:40px">
        <img width="1000" src="/wp-content/themes/semper-arizona-child/assets/icons/roof-page/SMP Roofing Explode Isometric.png" alt="roofing infographic: hide & ridge Shingles, Shingles, underlayment, ridge vents, ice & water barrier, strip shingles">
    </div>
<?php endif; ?>

<hr class="mx-auto" style="max-width: 1100px; background-color:darkgray; margin-bottom: 40px;">


<!-- Contains lower content W/ CTA  -->
<div class="container" style="padding-bottom:40px; max-width: 1100px;">
    <div class="row p-0" style="flex-wrap:wrap; justify-content: space-between;">
        <div class="col-md-7 ">
            <h2 class="section-headers"> <?php echo $content_array['third-section-header'] ?: 'I need a header' ?> </h2>
            <p><?php echo $content_array['third-section-paragraph'] ?: 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum laborum illo vitae unde qui totam facere hic voluptas quis, error at sit nobis fuga ipsa. Itaque ratione necessitatibus quisquam id?' ?></p>

            <fieldset class="border video-wrapper" style="border:2px solid #ce0109 !important; padding: 3em;     padding-top: 2em;">
                <legend class="video-legend-title">
                    <img width="28px" height="21px" loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/SMP Watch Video Icon.svg" alt="video icon" style="vertical-align: bottom;"> &nbsp; <?php echo $content_array['legend-video-text'] ?: 'Watch' ?>
                </legend>
                <h3 class='video-header font-weight-bold p-2'> <?php echo $content_array['legend-video-header-vimeo'] ?> </h3>
                <div class="ratio ratio-16x9" style="border:none; outline:none; ">
                    <iframe loading="lazy" class="embed-responsive-item" data-src="<?php echo $content_array['legend-video-vimeo'] ?>" src="" width="640" height="360" frameborder="0" allow="autoplay; picture-in-picture" allowfullscreen></iframe>
                </div>
            </fieldset>
        </div>
        <?php if (wp_is_mobile()) : ?>
            <div class="mobileCTA">
                <div class="d-flex justify-content-center flex-wrap" style="align-items: center; margin-top:35px; max-width:100% !important; margin-bottom: -35px">
                    <STRONG style="font-size:24px">Ready to Start Saving Today!</STRONG>
                    <a class="orange-cta-btn-2 mb-0" href="#location-form-wrapper" style=" font-size: 18px; max-width:100% !important">
                        <img width="21px" height="21px" loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/horizontal form/SMP CTA White Arrow.svg" alt="white arrow" />
                        REQUEST FREE QUOTE
                    </a>
                </div>
            </div>
        <?php else : echo (null); ?>
        <?php endif; ?>
        <div class="col-md-4 third-section-sidebar ">
            <?php if (wp_is_mobile()) : echo (null) ?>
            <?php else : ?>
                <div class="text-center p-2" style="background-color:#EFB82A">
                    <h4><strong>FACTS ABOUT <br> ROOF SYSTEMS</strong> </h4>
                </div>
                <br>
                <div class="text-center" style="border:4px solid #EFB82A">
                    <img width="355" src="/wp-content/themes/semper-arizona-child/assets/icons/roof-page/SMP Roofing Facts About Leaks.svg" alt="roofing facts about leaks">
                    <div class="p-4">
                        <h4 style="color:var(--semperBlue)"> <strong>A Faulty Roof Can Break A Home Sale</strong></h4>
                        <p>When it comes time to sell your home, a new roof can be a significant selling point. A roof with leaks, missing or broken shingles, or other visible symptoms of decay, may drive away a possible buyer.</p>
                    </div>


                </div>
                <br>
                <div class="text-center p-4" style="border:4px solid #EFB82A">
                    <h4 style="color:var(--semperBlue)"> <strong>A Roof Can Be Good <br /> For The Environment</strong> </h4>
                    <p>Cool roofs reflect the sun's infrared and ultraviolet rays away from the structure and have a higher thermal immittance, or ability to emit radiation efficiently.</p>
                </div>
            <?php endif; ?>
        </div>

        <div class="container-fluid row p-0 mx-auto" style="padding-top:80px !important;">
            <div class="col-lg-7 p-0" style="background-color:whitesmoke">
                <img width="380" height="157" class="w-100" loading="lazy" style="border-radius:0; " src="/wp-content/themes/semper-arizona-child/assets/icons/roof-page/SMP Roof Truck.jpg" alt="Semper Solaris work truck">
            </div>
            <div class="col-lg p-4 blue-text-area " style="background-color: var(--semperBlue); color:white;">
                <hr style="background-color:white">
                <p><?php echo $content_array['third-section-blue-banner-text'] ?></p>
                <hr style="background-color:white;">
            </div>
        </div>
        <div class="m-auto w-100" style="background-color:#0C4E970D;">
            <div class="video-offer-wrapper-mobile p-2 ml-auto mr-auto">
                <br>
                <div class="container pl-4 pr-4" align="center">
                    <p class="" style="line-height:1.2 !important"> Semper Solaris makes the process very streamlined and easy, so the permitting process is quick</p>
                    <img loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/05 01 SMPCA Coupon Battery.svg" alt="solar coupon" />

                </div>
            </div>
            <div class="d-flex justify-content-center flex-wrap mobile-style-button" style="align-items: center; font-size:20px;  ">
                <STRONG style="font-size:24px !important;">Ready to Start Saving Today!</STRONG>
                <a class="orange-cta-btn-2" href="#location-form-wrapper">
                    <img width="21px" height="21px" loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/horizontal form/SMP CTA White Arrow.svg" alt="white arrow" />
                    REQUEST FREE QUOTE
                </a>

            </div>
        </div>
    </div>
    <!-- Related TOPICS -->
</div>


<!-- Contains Special Offers Section -->
<?php get_template_part('template-parts/special', 'offer') ?>

<!-- Contains map -->
<?php get_template_part('template-parts/location', 'map'); ?>

<br><br>

<?php
get_footer();
?>
<script defer>
    var roof = document.getElementById("footer-roofing-link").getAttribute("href");
    var solar = document.getElementById("footer-solar-link").getAttribute("href");
    // var hvac = document.getElementById("footer-hvac-link").getAttribute("href");
    var battery = document.getElementById("footer-battery-link").getAttribute("href");

    // const setHvac = document.getElementsByClassName("main-hvac-link");
    const setRoofing = document.getElementsByClassName("main-roofing-link");
    const setSolar = document.getElementsByClassName("main-solar-link");
    const setBattery = document.getElementsByClassName('main-battery-link');

    for (let i = 0; i < setSolar.length; i++) {
        setSolar[i].setAttribute("href", solar);
        setBattery[i].setAttribute("href", battery);
        // setHvac[i].setAttribute("href", hvac);
        setRoofing[i].setAttribute("href", roof);
    }
</script>
<script async>
    const frames = document.querySelectorAll('iframe');
    const lzyImages = document.querySelectorAll('.lazy-images')
    const config = {
        rootMargin: '0px',
        threshold: [0]
    };
    let observer = new IntersectionObserver(function(entries, self) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                preloadFrame(entry.target);
                self.unobserve(entry.target);
            }
        });
    }, config);
    frames.forEach(image => {
        observer.observe(image);
    });
    lzyImages.forEach(e => {
        observer.observe(e)
    })

    function preloadFrame(e) {
        const src = e.getAttribute('data-src');
        if (!src) {
            return;
        }
        e.src = src;
    }
</script>