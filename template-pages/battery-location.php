<?php
/* Template Name: Battery Location Page 
 * Template Post Type: page, post, location_page */

$style = <<<STYLE
<style class="page-css" type="text/css">
    /* GLobal/ lines / buttons/ titles/headers */
    :root {
        --semperRed: #CE0109;
        --semperBlue: #004C97;
        --semperOrange: #E65B12;
    }

    .sectionSpacing {
        margin-top: 45px;
        margin-bottom: 55px;
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
        background: -webkit-gradient(linear, right bottom, left top, from(rgb(223, 70, 0)), to(rgb(255, 163, 83)));
        background: -o-linear-gradient(bottom right, rgb(223, 70, 0), rgb(255, 163, 83));
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
        padding: 20px 40px 40px 40px;
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
        font: normal normal bold 32px/32px Barlow;
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
    }

    .hero-wrapper {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        margin-bottom: 40px;
    }

    .icon-tags {
        color: var(--semperBlue);
        text-align: left;
        letter-spacing: 0px;
        opacity: 1;
        display: table;
    }

    .iconContainer {
        margin-left: 20%;
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
        text-shadow: 0.7px 0 0 black;
        font-size: 16px !important;
    }

    .rowSpacing {
        padding-bottom: 80px;
    }

    /* Blue Banner sidebar  */
    .imgCircle {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        background: white;
        -webkit-clip-path: circle(50%);
        clip-path: circle(50%);
        height: 14em;
        width: 14em;
        margin-top: 10px;
        margin-bottom: 10px;
        margin-right: auto;
        margin-left: auto;
    }

    .circleShadow {
        -webkit-filter: drop-shadow(-1px 6px 3px rgba(50, 50, 0, 0.5));
        filter: drop-shadow(-1px 6px 3px rgba(50, 50, 0, 0.5));
        margin: auto;
    }

    .imgCircle img {
        width: 100%;
    }

    .side-blog-info {
        display: flex;
        flex-direction: row;
        gap: 10px;
        font-size: 18px;
        line-height: 1.2;
        text-shadow: 0.4px 0 0 black;
    }

    /* Related Topic Area/Cards */
    .related-topic-cards {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        padding: 0px;
        margin: 0px;
        border: 1px solid #CCCCCC;
        background-color: #FBFBFD;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }

    .related-topic-holder>* {
        padding: 20px;
    }

    /* offer Area */
    .offer-wrapper {
        padding-bottom: 40px;
    }

    /* infographic */
    .solarInfographic {
        margin-top: 80px !important;
        margin-bottom: 50px !important;
        display: flex;
        flex-direction: row;
        gap: 50px;
    }

    /* Quick Facts Battery storage */
    .quick-facts-container {
        max-width: 1100px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 60px;
    }

    .quick-facts-container h5 {
        font-size: 24px;
    }

    .quick-facts-container-title {
        text-align: center;
        font-size: 32px;
        margin-bottom: 60px
    }

    .quick-facts-description {
        margin-left: 40px;
        max-width: 340px;
        background-color: #0C4E970D;
        padding: 8px 20px;
        text-shadow: 0.8px 0 0 black;
        font-size: 16px;
    }

    .quick-facts-wrapper {
        display: flex;
        flex-direction: column;
        gap: 40px;

    }

    .two-five-holder {
        display: flex;
        flex-direction: row;
        gap: 125px;
        margin-top: 40px
    }

    .number-3-holder {
        margin-left: 40px;
        max-width: 385px;
        background-color: #0C4E970D;
        padding: 8px 20px;
        text-shadow: 0.6px 0 0 black;
        font-size: 16px;
    }

    .one-holder {
        display: flex;
        flex-direction: row
    }

    .mobile-arrow {
        margin-bottom: 25px;
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
    .related-topic-cards img {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 40%;
        flex: 0 0 40%;
    }


    /* media queries */
    @media screen and (max-width:950px) {
        .pair-solar-infographic-desktop {
            display: none;
        }

        .infographic-dashed-lines {
            display: none;
        }

        .solarInfographic {
            flex-direction: column;
            gap: 30px;
        }

        .solarInfographic article {
            padding-top: 30px;
            margin-left: auto;
            margin-right: auto;
            width: 100% !important;
        }

        .solarInfographic article div {
            margin-left: auto;
            margin-right: auto;
        }

        .solarInfographic figure {
            margin-left: auto;
            margin-right: auto;
            width: 100% !important;
            justify-content: center;
        }

        .solarInfographic figure img {
            width: 100%;
        }

        .quick-facts-container h5 {
            display: flex;
            font-size: 24px;
            max-width: 320px;
            text-align: left;
            margin-left: auto;
            margin-right: auto;
            gap: 5px;
        }

        .quick-facts-container h5 img {
            height: 35px;
        }

        .quick-facts-container {
            text-align: center;
            margin-top: -70px;
            margin-bottom: 0px;
        }

        .quick-facts-description {
            margin-left: auto;
            margin-right: auto;
            max-width: 320px;
            text-align: left;
        }

        .two-five-holder {
            flex-direction: column;
            gap: 25px;
        }

        .number-3-holder {
            margin-left: auto;
            margin-right: auto;
            max-width: 320px;
            text-align: left;
        }

        .one-holder {
            margin-left: auto;
            margin-right: auto;
            flex-direction: column;
            max-width: 320px;
        }

        .one-holder img {
            margin-top: -15px;
        }

        .quick-facts-container-title {
            margin-bottom: 25px;
        }


    }


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
            line-height: 25px;
        }

        .sectionTitle {
            padding-top: 35px;
        }

        .horizontalLine {
            margin-bottom: 15px;
        }

        .sectionSpacing {
            margin: 30px 15px 30px 15px;
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
            margin-bottom: 40px !important;
        }

        .offer-wrapper {
            padding: 0px !important;
        }

        .related-topic-cards {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding: 10px;
            width: 100%;
        }

        .mobile-style-button {
            padding-bottom: 20px;
        }

        .related-topic-cards div {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 60%;
            flex: 0 0 60%;
            /* max-width: 175px !important; */
        }

        .related-topic-holder>* {
            margin-top: 1em;
        }

        .related-topic-cards p {
            max-width: 87%;
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




        /* Related Topics */


        .smp-cares-wrapper {
            margin-left: calc(-50vw + 50%) !important;
            width: 100vw !important;
            padding-top: 0px !important;
        }

        .related-topic-cards p {
            padding: 0px !important;
            margin: 0px !important;
            font-size: 16px !important;
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
        font-family: "Barlow", Barlow, sans-serif !important;
        margin: 0px;
        padding: 0px;
        font-size: 18px;
    }

    a .btn.btn-blue {
        background-color: var(--semperBlue) !important;
    }

    .cropped1 {
        width: 1200px;
        border-radius: 0px !important;
    }

    .cropped1 img {
        border-radius: 0px !important;
    }

    .icon-tags p {
        display: table-cell;
        vertical-align: middle;
        padding-left: 10px;
        font-family: 'Barlow', sans-serif;
        font-size: 22px/24px !important;
        font-weight: 600 !important;
        line-height: 1;
    }

    @media screen and (max-width: 600px) {
        .icon-tags p br {
            display: none;
        }
    }

    .icons-width-height {
        width: 35px;
        height: 35px;
    }
	#location-form-wrapper > div.container.d-flex.flex-row.w-100.justify-content-between.position-absolute.text-white.hideSection{
		max-width: 1055px !important;
	}
</style>
STYLE;
new Page_CSS($style);

$block_array = parse_blocks(get_the_content());
global $content_array;
$content_array = [];

$i = 0;

foreach ($block_array as $key => $value) {
    $class = @$value['attrs']['className'];
    if ($value['blockName'] == 'core/html') {
        $content_array['iframe' . $i] = $value['innerContent'][0];
        $i++;
    } else if ($class) {
        $dom = new DOMDocument();
        @$dom->loadHTML($value['innerContent'][0]);
        $content_array[$class] = preg_replace('/<(?!(img|br|strong|a))(?!\/(img|br|strong|a)).+?>/', '', $dom->saveHTML());
    }
}
add_image_size('full-width', 450, 255, true);

get_header();

?>
<!-- Page hero image -->
<?php 

if (!wp_is_mobile()) : 

?>
    <div class="hero-wrapper" style="background-color: #0C4E97; overflow: hidden; ">
        <div class=" img-overlay-wrap ">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="315" height="140" viewBox="0 0 373 79">
                <defs>
                    <clipPath id="clip-path">
                        <rect id="Rectangle_579" data-name="Rectangle 579" width="373" height="79" transform="translate(321 427)" fill="#fff" stroke="#707070" stroke-width="1" />
                    </clipPath>
                </defs>
                <g id="Group_5943" data-name="Group 5943" transform="translate(-260 -427)">
                    <g id="Mask_Group_45" data-name="Mask Group 45" transform="translate(-61)" clip-path="url(#clip-path)">
                        <path id="Path_6765" data-name="Path 6765" d="M-21.075,69.347V.5l333.712.514,32.709,68.172Z" transform="translate(339.989 433.341)" fill="#cc0109" />
                        <path id="Path_6766" data-name="Path 6766" d="M-19,0H317.272l.174.363,33.148,69.088H-19ZM316.468,1.278H-17.721V68.173H348.563Z" transform="translate(335.755 433.362)" fill="#fffcff" />
                        <rect id="Rectangle_578" data-name="Rectangle 578" width="350.898" height="69.644" transform="translate(326.606 433.266)" fill="none" />
                    </g>
                    <path id="Path_8654" data-name="Path 8654" d="M11.856-28.7c.48,0,.624.24.624.672V-20.5a.82.82,0,0,1-.864.912H8.352V-28.7Zm.72,21.888c0,.528-.144.72-.72.72h-3.5V-14.3H11.52c.624,0,1.056.24,1.056,1.008Zm6.576-23.76c0-2.544-1.392-4.224-4.128-4.224H1.44V0H14.064c3.984,0,5.424-1.536,5.424-5.376V-14.4a2.8,2.8,0,0,0-2.736-3.072c1.824-.48,2.4-1.824,2.4-3.552ZM33.312-4.32,33.936,0h7.008L34.656-34.8h-7.44L20.928,0h7.008l.624-4.32ZM30.96-22.176,32.544-9.84H29.328ZM40.848-34.8l-1.824,6.48H43.68V0h7.1V-28.32H55.44L53.712-34.8Zm17.76,0-1.824,6.48H61.44V0h7.1V-28.32H73.2L71.472-34.8ZM75.12,0H88.368l1.2-6.48h-7.3v-7.584h5.76v-6h-5.76V-28.32h7.584l-1.2-6.48H75.12Zm27.5-28.7c.48,0,.672.288.672.72v10.56c0,.528-.144.72-.672.72H99.216v-12Zm7.536-1.584c0-2.736-1.44-4.512-4.7-4.512h-13.2V0h6.96V-11.088h.912L103.488,0h7.2L107.04-11.088a3.011,3.011,0,0,0,3.12-3.072ZM125.952-8.832,132.624-34.8h-7.2l-3.168,16.416L119.136-34.8h-7.2l6.672,25.968V0h7.344ZM150.864,0c3.984,0,5.328-1.44,5.328-5.28V-16.752c0-2.592-1.248-3.552-3.456-3.552h-4.368c-.72,0-1.056-.192-1.056-.912v-6.336c0-.528.288-.768.864-.768h7.872l-1.2-6.48h-9.6c-3.264,0-4.7,1.776-4.7,4.512V-18.48c0,3.456,1.824,3.936,3.888,3.936h3.6c.96,0,1.3.048,1.3,1.008V-7.2c0,.528-.192.72-.816.72h-7.488L142.272,0Zm8.592-34.8-1.824,6.48h4.656V0h7.1V-28.32h4.656L172.32-34.8Zm26.88,6.1c.48,0,.624.24.624.672V-6.816c0,.528-.1.72-.672.72h-2.64c-.576,0-.672-.192-.672-.72V-28.032c0-.432.144-.672.624-.672Zm7.68-1.584c0-2.736-1.44-4.512-4.7-4.512h-8.64c-3.264,0-4.7,1.776-4.7,4.512V-4.944c0,2.64,1.1,4.944,4.992,4.944h8.064c3.888,0,4.992-2.3,4.992-4.944ZM207.264-28.7c.48,0,.672.288.672.72v10.56c0,.528-.144.72-.672.72h-3.408v-12Zm7.536-1.584c0-2.736-1.44-4.512-4.7-4.512H196.9V0h6.96V-11.088h.912L208.128,0h7.2L211.68-11.088a3.011,3.011,0,0,0,3.12-3.072ZM228.864-4.32,229.488,0H236.5l-6.288-34.8h-7.44L216.48,0h7.008l.624-4.32Zm-2.352-17.856L228.1-9.84H224.88Zm11.568,16.8C238.08-1.536,239.52,0,243.5,0h12.144V-20.064H248.88V-6.336h-3.168c-.48,0-.624-.24-.624-.672v-20.64c0-.432.144-.672.624-.672h7.632l-1.2-6.48h-9.936c-2.736,0-4.128,1.68-4.128,4.224ZM258.384,0h13.248l1.2-6.48h-7.3v-7.584h5.76v-6h-5.76V-28.32h7.584l-1.2-6.48H258.384Z" transform="translate(310 485)" fill="#fff" />
                </g>
            </svg>
            <div class="cropped1">
                <img width="1400" height="400" src="/wp-content/themes/semper-arizona-child/assets/icons/battery-page/SMP Battery Storage Hero Desktop Image.jpg" alt="Best Battery Storage installer is Semper Solaris" />
            </div>
        </div>
    </div>
<?php 

else : 

?>
    <div class=" img-overlay-wrap " style="margin-bottom: 40px">
        <svg style="bottom: -5%;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="130" height="125" viewBox="0 0 373 79">
            <defs>
                <clipPath id="clip-path">
                    <rect id="Rectangle_579" data-name="Rectangle 579" width="373" height="79" transform="translate(321 427)" fill="#fff" stroke="#707070" stroke-width="1" />
                </clipPath>
            </defs>
            <g id="Group_5943" data-name="Group 5943" transform="translate(-260 -427)">
                <g id="Mask_Group_45" data-name="Mask Group 45" transform="translate(-61)" clip-path="url(#clip-path)">
                    <path id="Path_6765" data-name="Path 6765" d="M-21.075,69.347V.5l333.712.514,32.709,68.172Z" transform="translate(339.989 433.341)" fill="#cc0109" />
                    <path id="Path_6766" data-name="Path 6766" d="M-19,0H317.272l.174.363,33.148,69.088H-19ZM316.468,1.278H-17.721V68.173H348.563Z" transform="translate(335.755 433.362)" fill="#fffcff" />
                    <rect id="Rectangle_578" data-name="Rectangle 578" width="350.898" height="69.644" transform="translate(326.606 433.266)" fill="none" />
                </g>
                <path id="Path_8654" data-name="Path 8654" d="M11.856-28.7c.48,0,.624.24.624.672V-20.5a.82.82,0,0,1-.864.912H8.352V-28.7Zm.72,21.888c0,.528-.144.72-.72.72h-3.5V-14.3H11.52c.624,0,1.056.24,1.056,1.008Zm6.576-23.76c0-2.544-1.392-4.224-4.128-4.224H1.44V0H14.064c3.984,0,5.424-1.536,5.424-5.376V-14.4a2.8,2.8,0,0,0-2.736-3.072c1.824-.48,2.4-1.824,2.4-3.552ZM33.312-4.32,33.936,0h7.008L34.656-34.8h-7.44L20.928,0h7.008l.624-4.32ZM30.96-22.176,32.544-9.84H29.328ZM40.848-34.8l-1.824,6.48H43.68V0h7.1V-28.32H55.44L53.712-34.8Zm17.76,0-1.824,6.48H61.44V0h7.1V-28.32H73.2L71.472-34.8ZM75.12,0H88.368l1.2-6.48h-7.3v-7.584h5.76v-6h-5.76V-28.32h7.584l-1.2-6.48H75.12Zm27.5-28.7c.48,0,.672.288.672.72v10.56c0,.528-.144.72-.672.72H99.216v-12Zm7.536-1.584c0-2.736-1.44-4.512-4.7-4.512h-13.2V0h6.96V-11.088h.912L103.488,0h7.2L107.04-11.088a3.011,3.011,0,0,0,3.12-3.072ZM125.952-8.832,132.624-34.8h-7.2l-3.168,16.416L119.136-34.8h-7.2l6.672,25.968V0h7.344ZM150.864,0c3.984,0,5.328-1.44,5.328-5.28V-16.752c0-2.592-1.248-3.552-3.456-3.552h-4.368c-.72,0-1.056-.192-1.056-.912v-6.336c0-.528.288-.768.864-.768h7.872l-1.2-6.48h-9.6c-3.264,0-4.7,1.776-4.7,4.512V-18.48c0,3.456,1.824,3.936,3.888,3.936h3.6c.96,0,1.3.048,1.3,1.008V-7.2c0,.528-.192.72-.816.72h-7.488L142.272,0Zm8.592-34.8-1.824,6.48h4.656V0h7.1V-28.32h4.656L172.32-34.8Zm26.88,6.1c.48,0,.624.24.624.672V-6.816c0,.528-.1.72-.672.72h-2.64c-.576,0-.672-.192-.672-.72V-28.032c0-.432.144-.672.624-.672Zm7.68-1.584c0-2.736-1.44-4.512-4.7-4.512h-8.64c-3.264,0-4.7,1.776-4.7,4.512V-4.944c0,2.64,1.1,4.944,4.992,4.944h8.064c3.888,0,4.992-2.3,4.992-4.944ZM207.264-28.7c.48,0,.672.288.672.72v10.56c0,.528-.144.72-.672.72h-3.408v-12Zm7.536-1.584c0-2.736-1.44-4.512-4.7-4.512H196.9V0h6.96V-11.088h.912L208.128,0h7.2L211.68-11.088a3.011,3.011,0,0,0,3.12-3.072ZM228.864-4.32,229.488,0H236.5l-6.288-34.8h-7.44L216.48,0h7.008l.624-4.32Zm-2.352-17.856L228.1-9.84H224.88Zm11.568,16.8C238.08-1.536,239.52,0,243.5,0h12.144V-20.064H248.88V-6.336h-3.168c-.48,0-.624-.24-.624-.672v-20.64c0-.432.144-.672.624-.672h7.632l-1.2-6.48h-9.936c-2.736,0-4.128,1.68-4.128,4.224ZM258.384,0h13.248l1.2-6.48h-7.3v-7.584h5.76v-6h-5.76V-28.32h7.584l-1.2-6.48H258.384Z" transform="translate(310 485)" fill="#fff" />
            </g>
        </svg>
        <?php

        echo '<div class="mw-100 text-center" > ';
        echo isset($content_array['mobile-hero']) ? $content_array['mobile-hero'] : '';
        echo '</div>';

        ?>
    </div>
<?php

endif;

get_template_part('template-parts/location', 'banner-#1');

?>
<div class="container" style="max-width:1100px;">
    <div class="m-auto w-100">
        <!-- Page Title is here  -->
        <?php

        the_title('<h2 class="page-title pt-2 pt-md-4">', '</h2>');

        ?>
        <!-- icons next to top offer and CTA section -->
        <div id="grandOffer" class="row" style="overflow-x:hidden;">
            <div class="col-md-4 top-icons">
                <div class="d-flex flex-row flex-wrap iconContainer">
                    <div class="p-2 iconImg">
                        <img width="35px" height="35px" src="/wp-content/themes/semper-arizona-child/assets/icons/battery-page/SMP Battery Storage Certified Icon.svg" alt="Battery Storage Certified" />
                    </div>
                    <div class="icon-tags ">
                        <p>Ontime Services</p>
                    </div>
                </div>
                <hr style="color: black;">
                <div class="verticalLine"></div>
                <div class="d-flex flex-row flex-wrap  iconContainer">
                    <div class="p-2 iconImg">
                        <img width="35px" height="35px" src="/wp-content/themes/semper-arizona-child/assets/icons/battery-page/SMP Battery Storage Installers Icon.svg" alt="Verified Battery Storage Installers" />
                    </div>
                    <div class="icon-tags ">
                        <p>Verified Professionals</p>
                    </div>
                </div>
                <hr style="color: black;">
                <div class="verticalLine"></div>
                <div class="d-flex flex-row flex-wrap  iconContainer">
                    <div class="pt-2 px-2 iconImg">
                        <img width="35px" height="35px" src="/wp-content/themes/semper-arizona-child/assets/icons/battery-page/SMP Battery Storage 24-7 Backup Icon.svg" alt="24 7 battery back up" />
                    </div>
                    <div class="icon-tags">
                        <p>Top Manufacturers</p>
                    </div>
                </div>
            </div>
            <!-- offer & cta -->
            <div class="col justify-content-space-around align-items-center text-center">
                <img <?= (wp_is_mobile()) ? 'width="350px" height="130px"' : 'width="600" height="220"'; ?> src="/wp-content/themes/semper-arizona-child/assets/icons/battery-page/SMP Battery Storage Offer Icon.svg" alt="Card image cap">
                <div class="d-flex flex-row justify-content-center ">
                    <a class="orange-cta-btn-2" href="#location-form-wrapper">
                        <img width="21px" height="21px" src="/wp-content/themes/semper-arizona-child/assets/icons/horizontal form/SMP CTA White Arrow.svg" alt="White Arrow icon" />
                        Start Saving Now!
                    </a>
                </div>
            </div>
        </div>
        <hr class="sectionSpacing" style="border-bottom:1px solid black; <?= (wp_is_mobile()) ? 'visibility: hidden;' : '' ?> ">
        <?php 
        
        if (wp_is_mobile()) :
            get_template_part('template-parts/horizontal', 'form');

        ?>
            <div class=" service-wrapper">
                <h2 class="sectionTitle font-weight-light m-0 p-0"> OUR SERVICES</h2>
                <hr class="horizontalLine">
                <div class="text-center servicesHolder">
                    <div class="flex-wrap-wrap service-block border-line">
                        <img class="lazy-images" width="107" height="82" data-src="/wp-content/themes/semper-arizona-child/assets/img/location/SMP Icon Solar.svg" alt="Solar Panel icon">
                        <h3>Solar Energy<br /> <?= isset($content_array['city-name']) ? $content_array['city-name'] : ''; ?> </h3>
                        <a itemprop="url" href="/" class="learn-more-btn main-solar-link">
                            <span class="learn-more-text ">LEARN MORE</span>
                            <span class=" learn-more-icon">
                                <img class="lazy-images" width="20" height="20" style="margin-top: 5px;" data-src="/wp-content/themes/semper-arizona-child/assets/icons/horizontal form/SMP CTA Button Circle Arrow.svg" alt="Arrow Icon">
                            </span>
                        </a>
                    </div>
                    <div class="flex-wrap-wrap service-block border-line-4">
                        <img class="lazy-images" width="107" height="82" data-src="/wp-content/themes/semper-arizona-child/assets/img/location/SMP Icon Battery.svg" alt="Battery Icon">
                        <h3>Battery Storage <br /> <?= isset($content_array['city-name']) ? $content_array['city-name'] : ''; ?></h3>
                        <a itemprop="url" href="/" class="learn-more-btn main-battery-link">
                            <span class="learn-more-text ">LEARN MORE</span>
                            <span class=" learn-more-icon">
                                <img class="lazy-images" width="20" height="20" style="margin-top: 5px;" data-src="/wp-content/themes/semper-arizona-child/assets/icons/horizontal form/SMP CTA Button Circle Arrow.svg" alt="Arrow inside circle icon">
                            </span>
                        </a>
                    </div>
                    <div class="flex-wrap-wrap service-block ">
                        <img class="lazy-images" width="107" height="82" data-src="/wp-content/themes/semper-arizona-child/assets/img/location/SMP Icon Roofing.svg" alt="Roof Icon">
                        <h3>Roofing<br /> <?= isset($content_array['city-name']) ? $content_array['city-name'] : ''; ?></h3>
                        <a itemprop="url" href="/" class="learn-more-btn main-roofing-link">
                            <span class="learn-more-text ">LEARN MORE</span>
                            <span class=" learn-more-icon">
                                <img class="lazy-images" width="20" height="20" style="margin-top: 5px;" data-src="/wp-content/themes/semper-arizona-child/assets/icons/horizontal form/SMP CTA Button Circle Arrow.svg" alt="Arrow Icon">
                            </span>
                        </a>
                    </div>
                    <?php
                    /*
                    <!-- <hr class="verticalLine "> -->
                    <!--                     <div class="flex-wrap-wrap service-block border-line-2">
                        <img class="lazy-images" width="107" height="82" data-src="https://smpbackup.wpengine.com/wp-content/themes/semper-solaris/assets/img/location/SMP Icon HVAC.svg" alt="">
                        <h3>HVAC<br /> <?= isset($content_array['city-name']) ? $content_array['city-name'] : ''; ?></h3>
                        <a itemprop="url" href="/" class="learn-more-btn main-hvac-link">
                            <span class="learn-more-text ">LEARN MORE</span>
                            <span class=" learn-more-icon">
                                <img class="lazy-images" width="20" height="20" style="margin-top: 5px;" data-src="/wp-content/themes/semper-arizona-child/assets/icons/horizontal form/SMP CTA Button Circle Arrow.svg" alt="">
                            </span>
                        </a>
                    </div> -->
                    */
                    ?>
                </div>
            </div>
        <?php endif; ?>
        <!-- first text area  -->
        <div class="row rowSpacing">
            <?php if (wp_is_mobile()) : echo (null) ?>
            <?php else :  ?>
                <div class="col-sm-6">
                    <h2 class="section-headers">
                        <?= isset($content_array['headerOne']) ? $content_array['headerOne'] : '' ?>
                    </h2>
                    <p> <?= isset($content_array['top-left-paragraph']) ? $content_array['top-left-paragraph'] : '' ?></p>
                </div>
            <?php endif; ?>
            <!-- 2nd text area with border & legend -->
            <div class="col-sm-6">
                <fieldset class="border" style="border-color: #EFB82A !important">
                    <legend class="legendStyle"><?= isset($content_array['top-right-legend-title']) ? $content_array['top-right-legend-title'] : '' ?>
                    </legend>
                    <p class="legend-paragraph" style="font: normal normal normal 18px/22px Barlow bolder;">
                        <?= isset($content_array['legend-paragraph']) ? $content_array['legend-paragraph'] : ''  ?>
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
        <h2 class="sectionTitle"> Battery Storage </h2>
        <hr class="horizontalLine">
        <div class="row" style=" flex-wrap:wrap; justify-content: space-between;">
            <div class="col-lg-7">
                <h2 class="section-headers"> <?= isset($content_array['second-section-header']) ? $content_array['second-section-header'] : 'I need a header' ?> </h2>
                <p><?= isset($content_array['second-section-paragraph']) ? $content_array['second-section-paragraph'] : 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum laborum illo vitae unde qui totam facere hic voluptas quis, error at sit nobis fuga ipsa. Itaque ratione necessitatibus quisquam id?' ?></p>

                <!--  VIDEO WRAPPER w/ legend-->
                <fieldset class="border video-wrapper" style="border:2px solid #ce0109 !important; padding: 1em">
                    <legend class="video-legend-title">
                        <img width="28px" height="21px" loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/SMP Watch Video Icon.svg" alt="video icon" style="vertical-align: text-bottom;">&nbsp;<?= isset($content_array['legend-video-text']) ? $content_array['legend-video-text'] : 'Watch' ?>
                    </legend>
                    <h3 class='video-header font-weight-bold'> <?= isset($content_array['legend-video-header-youtube']) ? $content_array['legend-video-header-youtube'] : "Don't wait to go solar" ?> </h3>
                    <div class="ratio ratio-16x9" style="border:none; outline:none; ">
                        <iframe loading="lazy" class="embed-responsive-item" data-src="<?= isset($content_array['legend-video-youtube']) ? $content_array['legend-video-youtube'] : '' ?>" src="" width="640" height="360" frameborder="0" allow="autoplay; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </fieldset>
            </div>
            <?php
            /*

            <!-- sidebar article with blue background and money falling img-->
            <!-- <div class="col-lg-4 ">

                <div style=" border: 1px solid #004c97; background-color:#E6EDF4; padding:5%;">
                    <div class="imgCircle">
                        <div class="circleShadow">
                            <img width="77" height="152" loading="lazy" src="https://smpbackup.wpengine.com/wp-content/themes/semper-solaris/assets/img/location/SMP Article Falling Money.svg" alt="Money Falling Icon">
                        </div>
                    </div>

                    <h4 style="text-align:center;"><strong>How Much Will A Solar System Cost Me? </strong></h4>
                    <p>Semper Solaris can offer you options for a solar system that not only meets your electricity needs but also fits your budget. You can also take advantage of solar tax credits available to California residents. There are state and federal rebates available that can make putting solar panels on your home an affordable option for you, and will help defer some of the up-front solar costs, until the system “pays for itself”, which usually happens in as little as 5 years. Our solar panel installation will meet HOA and all jurisdiction requirements.</p>

                </div>

            </div> -->
            */
            ?>
        </div>
        <div class="mobileCTA">
            <div class="d-flex justify-content-center flex-wrap" style="align-items: center; margin-top:35px; font-size: 20px">
                <STRONG style="font-size:24px">Ready to Start Saving Today!</STRONG>
                <a class="orange-cta-btn-2" href="#location-form-wrapper" style="max-width:100%; margin-left:0px !important; margin-right:0px !important;">
                    <img width="21px" height="21px" loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/horizontal form/SMP CTA White Arrow.svg" alt="white arrow icon" />
                    REQUEST FREE QUOTE
                </a>
            </div>
        </div>
    </div>
</div>
</div>
<!-- INFOGRAPHIC GOES HERE -->
<section class="container-fluid solarInfographic p-0 " style="background-color:var(--semperBlue); margin:0 auto; text-align:center; max-width: 2148px;">

    <article style="color:white; width:40%; display: flex; justify-content: flex-end;">
        <div style="max-width: 324px; margin-top: auto; margin-bottom: auto;">
            <h4 style="font-size: 30px;"> <strong>WHY IS A HOME BATTERY SYSTEM <br /> SO IMPORTANT? </strong> </h4>
            <img loading="lazy" style="margin-bottom: -28px;" width="115" height="120" src="/wp-content/themes/semper-arizona-child/assets/icons/battery-page/SMP Battery Storage Lower Bills Yellow Icon.svg" alt=" money falling down icon">
            <p style="border: 2px solid #EFB82A; padding: 20px; font-size:20px;text-shadow: 0.2px 0 0 white">It's the hidden key to lowering bills while providing uninterrupted power - even during a blackout!</p>
        </div>
    </article>

    <figure style="margin-bottom: 0 !important; width: 60%;">
        <?php if (!wp_is_mobile()) : ?>
            <img loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/battery-page/SMP Battery Storage System Important Image.jpg" alt="Tesla Powerwall System Installed">
        <?php else : ?>
            <img width="400" height="700" loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/battery-page/SMP Battery Storage System Important Mobile Image.jpg" alt="Tesla Powerwall System Installed">
        <?php endif; ?>
    </figure>
</section>
<!-- Pair battery with solar info -->
<section class="quick-facts-container">
    <!-- Section Title -->
    <?php if (wp_is_mobile()) : ?>
        <img width="65" height="65" class="mobile-arrow" src="/wp-content/themes/semper-arizona-child/assets/icons/battery-page/SMP Battery Storage Blue Circle Yellow Arrow Mobile Icon.svg" alt="blue circle with yellow arrow icon">
    <?php endif; ?>
    <h4 class="quick-facts-container-title">
        <?php if (!wp_is_mobile()) : ?>
            <img width="50" height="50" src="/wp-content/themes/semper-arizona-child/assets/icons/battery-page/SMP Battery Storage Blue Circle Yellow Arrow Icon.svg" alt="Circle arrow icon">
        <?php endif; ?>
        <strong>Pair Solar Power with Battery Storage </strong>
    </h4>

    <!-- Quick Facts 1-5 -->
    <!-- 1 -->
    <h5>
        <img loading="lazy" width="35" src="/wp-content/themes/semper-arizona-child/assets/icons/battery-page/SMP Battery Storage 1 Yellow Arrow Icon.svg" alt="number one with arrow icon">
        <strong>BE READY FOR ANYTHING </strong>
    </h5>

    <div class="infographic-dashed-lines" style="height: 162px; width: 1px; margin: 0; margin-top: 5px; margin-left: 8px; border-left: dashed 2px #efb82a; position: absolute;"></div>

    <div class="one-holder">
        <p class="quick-facts-description">An emergency battery backup system allows you to store energy to power your home when the worst happens. If a natural disaster or blackout knocks out the grid, you will have seamless energy to keep:</p>
        <?php if (wp_is_mobile()) : ?>
            <img loading="lazy" width="320" height="250" src="/wp-content/themes/semper-arizona-child/assets/icons/battery-page/SMP Battery Storage Ready For Anything Graphics Mobile.svg" alt="Infographic: if power goes out be ready with a batttery storage that can power your home to keep perishables cold, coffee hot, phones charged, medical equipement running">
        <?php else : ?>
            <img loading="lazy" class="pair-solar-infographic-desktop" width="600" height="167" style="margin-top: -40px;" src="/wp-content/themes/semper-arizona-child/assets/icons/battery-page/SMP Battery Storage Ready For Anything Graphics.svg" alt="Infographic: if power goes out be ready with a batttery storage that can power your home to keep perishables cold, coffee hot, phones charged, medical equipement running">
        <?php endif; ?>
    </div>
    <!-- 2-5  -->
    <div class="two-five-holder">
        <!-- 2 & 3  -->
        <div class="quick-facts-wrapper">
            <div>
                <h5>
                    <img loading="lazy" width="35" height="35" src="/wp-content/themes/semper-arizona-child/assets/icons/battery-page/SMP Battery Storage 2 Yellow Arrow Icon.svg" alt="number two with arrow">
                    <strong>LOWERED ENERGY COSTS </strong>
                </h5>
                <div class="infographic-dashed-lines" style="height: 162px; width: 1px; margin: 0; margin-top: 5px; margin-left: 8px; border-left: dashed 2px #efb82a; position: absolute;"></div>
                <p class="quick-facts-description">Besides substantially reducing or even eliminating your energy bill, you can sell excess stored energy back to the utility company at higher rates during peak hours - up to 50% more than off-peak rates</p>
            </div>
            <div>
                <h5>
                    <img loading="lazy" width="35" height="35" src="/wp-content/themes/semper-arizona-child/assets/icons/battery-page/SMP Battery Storage 3 Yellow Arrow Icon.svg" alt="number 3 icon"> <strong>OWN THE POWER YOU PRODUCE</strong>
                </h5>
                <p class="number-3-holder">Solar Panels usually produce more electricity than your home can use in a day. Without utilizing a battery backup system, all that harvest energy essentially goes to waste. The smart-play is using your investment to the fullest!</p>
            </div>
        </div>
        <!-- 4 & 5 -->
        <div class="quick-facts-wrapper">
            <div>
                <h5>
                    <div class="infographic-dashed-lines" style="height: 240px; width: 1px; margin: 0; margin-top: 10px; margin-left: -85px; border-left:dashed 2px #efb82a; position: absolute; transform: rotate(40deg);"></div>

                    <img loading="lazy" width="35" height="35" src="/wp-content/themes/semper-arizona-child/assets/icons/battery-page/SMP Battery Storage 4 Yellow Arrow Icon.svg" alt=" number 4 icon"> <strong>TAKE YOUR ENERGY INDEPENDENCE </strong>
                </h5>
                <div class="infographic-dashed-lines" style="height: 162px; width: 1px; margin: 0; margin-top: 5px; margin-left: 8px; border-left: dashed 2px #efb82a; position: absolute;"></div>

                <p class="quick-facts-description">Breaking free from the traditional grid is now possible! Stay ahead of the game no matter how high rates rise! With solar + battery backup, off-grid lifestyles are not only a possibility, but the future</p>
            </div>
            <div>
                <h5>
                    <img loading="lazy" width="35" height="35" src="/wp-content/themes/semper-arizona-child/assets/icons/battery-page/SMP Battery Storage 5 Yellow Arrow Icon.svg" alt="number 5 icon"> <strong>HELP THE EARTH WHILE HELPING YOURSELF </strong>
                </h5>
                <p class="quick-facts-description">By generating your own energy and reducing your carbon footprint, you're creating clean electricity that reduces stress on the planet while reducing stress on your budget.</p>
            </div>
        </div>
    </div>
</section>

<hr class="sectionSpacing mx-auto" style="border-bottom:1px solid darkgray; max-width: 1110px;">

<!-- Contains lower content W/ CTA & Related Topics -->
<div class="container" style="padding-bottom:40px; max-width:1100px;">
    <div class="row p-0" style="flex-wrap:wrap; justify-content: space-between;">
        <div class="col-md-7 ">
            <h2 class="section-headers"> <?= isset($content_array['third-section-header']) ? $content_array['third-section-header'] : 'I need a header' ?> </h2>
            <p><?= isset($content_array['third-section-paragraph']) ? $content_array['third-section-paragraph'] : 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum laborum illo vitae unde qui totam facere hic voluptas quis, error at sit nobis fuga ipsa. Itaque ratione necessitatibus quisquam id?' ?></p>
            <fieldset class="border video-wrapper" style="border:2px solid #ce0109 !important; padding: 3em;     padding-top: 2em;">
                <legend class="video-legend-title">
                    <img width="28px" height="21px" loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/SMP Watch Video Icon.svg" alt="video icon" style="vertical-align: bottom;"> &nbsp; <?= isset($content_array['legend-video-text']) ? $content_array['legend-video-text'] : 'Watch' ?>
                </legend>
                <h3 class='video-header font-weight-bold p-2'> <?= isset($content_array['legend-video-header-vimeo']) ? $content_array['legend-video-header-vimeo'] : '' ?> </h3>
                <div class="ratio ratio-16x9" style="border:none; outline:none; ">
                    <iframe loading="lazy" class="embed-responsive-item" data-src="<?= isset($content_array['legend-video-vimeo']) ? $content_array['legend-video-vimeo'] : '' ?>" src="" width="640" height="360" frameborder="0" allow="autoplay; picture-in-picture" allowfullscreen></iframe>
                </div>
            </fieldset>
        </div>
        <?php

        if (wp_is_mobile()) :

        ?>
            <div class="mobileCTA">
                <div class="d-flex justify-content-center flex-wrap" style="align-items: center; margin-top:35px; max-width:100% !important; margin-bottom: 35px">
                    <STRONG style="font-size:24px">Ready to Start Saving Today!</STRONG>
                    <a class="orange-cta-btn-2 mb-0" href="#location-form-wrapper" style=" font-size: 18px; max-width:100% !important">
                        <img width="21px" height="21px" loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/horizontal form/SMP CTA White Arrow.svg" alt="white arrow icon" />
                        REQUEST FREE QUOTE
                    </a>
                </div>
            </div>
        <?php

        else :

            echo (null);

        endif;

        ?>
        <div class="col-md-4 third-section-sidebar ">
            <div class="text-center" style="border:4px solid #EFB82A">
                <img loading="lazy" width="500" height="280" src="/wp-content/themes/semper-arizona-child/assets/icons/battery-page/SMP Battery Storage Side Blog Image.svg" alt="Electric Vehicle using battery storage and solar panel energy">
                <h4 style="color:var(--semperBlue); padding: 0px 20px 15px 20px; "> <strong>Battery Storage Has Many Fantastic Advantages For Your Home</strong></h4>
                <p style="color:white; background-color:var(--semperBlue); padding:15px; text-shadow: 0.5px 0 0 white;">For homes with solar panels, battery storage offers a number of <br /> benefits, including:</p>
                <article style=" padding: 20px 15px; text-align:left; display: flex; flex-direction:column; gap: 35px; ">
                    <p class="side-blog-info"><img loading="lazy" width="31" height="31" src="/wp-content/themes/semper-arizona-child/assets/icons/battery-page/SMP Battery Storage Side Blog Check Mark.svg" alt="Checkbox checked"> <span>Connect to your solar power system with ease.</span></p>
                    <p class="side-blog-info"><img loading="lazy" width="31" height="31" src="/wp-content/themes/semper-arizona-child/assets/icons/battery-page/SMP Battery Storage Side Blog Check Mark.svg" alt="Checkbox checked">Batteries can be used to store extra energy.</p>
                    <p class="side-blog-info"><img loading="lazy" width="27" height="27" src="/wp-content/themes/semper-arizona-child/assets/icons/battery-page/SMP Battery Storage Side Blog Check Mark.svg" alt="Checkbox checked">When you need clean energy, you can get it.</p>
                    <p class="side-blog-info"><img loading="lazy" width="27" height="27" src="/wp-content/themes/semper-arizona-child/assets/icons/battery-page/SMP Battery Storage Side Blog Check Mark.svg" alt="Checkbox checked">While the grid is unstable, increase your energy security</p>
                    <p class="side-blog-info"><img loading="lazy" width="27" height="27" src="/wp-content/themes/semper-arizona-child/assets/icons/battery-page/SMP Battery Storage Side Blog Check Mark.svg" alt="Checkbox checked">lower your household's energy usage and carbon footprint</p>
                    <p class="side-blog-info"><img loading="lazy" width="27" height="27" src="/wp-content/themes/semper-arizona-child/assets/icons/battery-page/SMP Battery Storage Side Blog Check Mark.svg" alt="Checkbox checked">Generators are responsible for a lot of noise and pollutants in the air.</p>
                </article>
            </div>
        </div>

        <div class="container-fluid row p-0 mx-auto" style="padding-top:80px !important;">
            <div class="col-lg-7 p-0" style="background-color:whitesmoke">
                <img width="665" height="269" class="w-100" loading="lazy" style="border-radius:0; " src="/wp-content/themes/semper-arizona-child/assets/icons/battery-page/SMP Battery Storage Tesla Installers Desktop Image.jpg" alt="Semper Solaris work truck">
            </div>
            <div class="col-lg p-4 blue-text-area " style="background-color: var(--semperBlue); color:white;">
                <hr style="background-color:white">
                <p><?= isset($content_array['third-section-blue-banner-text']) ? $content_array['third-section-blue-banner-text'] : '' ?></p>
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
                    <img width="21px" height="21px" loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/horizontal form/SMP CTA White Arrow.svg" alt="white arrow icon" />
                    REQUEST FREE QUOTE
                </a>

            </div>
        </div>
    </div>
</div>
<!-- RELATED TOPICS -->

<!-- Contains Special Offers Section -->
<?php get_template_part('template-parts/special', 'offer') ?>

</div>
<!-- Contains map -->
<div class="container" style="max-width:1100px;">
    <h2 class="sectionTitle" style="padding-top:20px;">IN YOUR COMMUNITY</h2>
    <hr class="horizontalLine">

    <div class="row m-auto locationDetails">
        <div class="w-100 switch-field ">
            <input id="bt1" type="radio" name="type" value="1" checked style="display:none">
            <label class="bt1" for="bt1"> Bing </label>
            <input id="bt2" type="radio" name="type" value="2" checked style="display:none">
            <label class="bt2" for="bt2"> Google </label>

            <div class="gMap">
                <iframe data-src="<?= isset($content_array['google-src']) ? $content_array['google-src'] : '' ?>" src="" width="100%" height="450" style="border:0; max-height:400px" loading="lazy"></iframe>
            </div>

            <div class="bingMap mx-auto">
                <iframe loading="lazy" width="800" height="400" frameborder="0" data-src="<?= isset($content_array['bing-src']) ? $content_array['bing-src'] : '' ?>" src="" scrolling="no">
                </iframe>
            </div>
            <h4 class="location-detail-title" style="color:#004c97 !important;"><strong><?= isset($content_array['city-name']) ? $content_array['city-name'] : '' ?> Office</strong></h4>
        </div>

        <div class="col-3 locationDetails location-info" style="border-top: 2px solid lightgrey; border-right: 2px solid lightgrey; ">
            <img width="20px" height="20px" loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/SMP Map Time Blue Icon.svg" alt="clock icon">
            <?= isset($content_array['office-hours']) ? $content_array['office-hours'] : '' ?>
        </div>
        <div class="col-5 locationDetails location-info" style="border-top: 2px solid lightgrey; border-right: 2px solid lightgrey;">
            <img width="20px" height="20px" loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/SMP Map Location Blue Icon.svg" alt="map pin icon">
            <?= isset($content_array['office-address']) ? $content_array['office-address'] : '' ?>
        </div>
        <div class="col-4 locationDetails location-info" style="border-top: 2px solid lightgrey">
            <img width="20px" height="20px" loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/SMP Map Phone Blue Icon.svg" alt="phone icon">
            <?= isset($content_array['office-number']) ? $content_array['office-number'] : '' ?>
        </div>

    </div>
</div>
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