<?php
/* Template Name: Solar Location Page 
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
        font-weight: 100;
    }

    .section-headers {
        font-size: 25px;
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
        font-size: 20px !important;
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
        font-size: 20px;
        text-align: center;
        font-weight: 500 !important;
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
        font-size: 32px;
        text-align: center;
        letter-spacing: 0px;
        text-transform: uppercase;
        opacity: 1;
        margin-bottom: 45px;
        font-weight: bold;
    }

    .img-overlay-wrap {
        position: relative;
    }

    .img-overlay-wrap svg {
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
        font-size: 24px;
        margin-bottom: 0 !important;
    }

    .legend-paragraph {
        font-weight: 500 !important;
        padding: 15px;
        text-align: center;
        text-shadow: 0.5px 0 0 black;
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
        margin-bottom: 80px !important;
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

    .related-topic-cards img {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 40%;
        flex: 0 0 40%;
    }

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
            font-size: 18px !important;
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
            font-size: 25px;
            text-transform: none;
            margin: 0;
            padding: 0;
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
        body .container {
            padding: 0;
        }

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
        font-size: 18px;
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
        font-size: 22px/24px !important;
        font-weight: 600 !important;
    }

    .icons-width-height {
        width: 35px;
        height: 35px;
    }
</style>
<style class="page-css" type="text/css">
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
	
	#location-form-wrapper > div.container.d-flex.flex-row.w-100.justify-content-between.position-absolute.text-white.hideSection{
	max-width:1100px;
	}
	.Title_module_headers__b6a94de7{
	display:none;
	}
</style>
STYLE;
new Page_CSS($style);

$block_array = parse_blocks(get_the_content());
global $content_array;
$content_array = [];

foreach ($block_array as $key => $value) {
    $class = @$value['attrs']['className'];
    $dom = new DOMDocument();
    @$dom->loadHTML($value['innerContent'][0]);
    $content_array[$class] = preg_replace('/<(?!(br|strong|a))(?!\/(br|strong|a)).+?>/', '', $dom->saveHTML());
}

get_header();

//<!-- Page hero image -->
if (!wp_is_mobile()) :

?>
    <div class="hero-wrapper" style="background-color: #0C4E97; overflow: hidden; ">
        <div class=" img-overlay-wrap ">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="250" height="200" viewBox="0 0 269 79">
                <defs>
                    <clipPath id="clip-path">
                        <rect id="Rectangle_579" data-name="Rectangle 579" width="269" height="79" transform="translate(425 427)" fill="#fff" stroke="#707070" stroke-width="1" />
                    </clipPath>
                </defs>
                <g id="Mask_Group_45" data-name="Mask Group 45" transform="translate(-425 -427)" clip-path="url(#clip-path)">
                    <path id="Path_6765" data-name="Path 6765" d="M92.925,69.347V.5H319.817l25.529,68.687Z" transform="translate(330.989 433.341)" fill="#cc0109" />
                    <path id="Path_6766" data-name="Path 6766" d="M31,0H258.532l26.455,69.45H31ZM257.651,1.278H32.279V68.173H283.133Z" transform="translate(392.274 433.362)" fill="#fffcff" />
                    <path id="Path_6767" data-name="Path 6767" d="M187.441,49.6l-1.248-6.481h7.488c.623,0,.815-.192.815-.72V36.062c0-.959-.336-1.008-1.3-1.008h-3.6c-2.065,0-3.889-.48-3.889-3.937V19.309c0-2.735,1.439-4.511,4.7-4.511h9.6l1.2,6.481h-7.872c-.577,0-.864.241-.864.766v6.338c0,.72.335.912,1.055.912h4.369c2.207,0,3.456.959,3.456,3.552V44.318c0,3.839-1.344,5.28-5.328,5.28Zm34.849-4.943c0,2.64-1.1,4.943-4.992,4.943h-8.064c-3.889,0-4.993-2.3-4.993-4.943V19.309c0-2.735,1.441-4.511,4.705-4.511h8.64c3.265,0,4.7,1.776,4.7,4.511ZM211.874,20.893c-.481,0-.625.242-.625.671V42.783c0,.526.1.72.672.72h2.64c.576,0,.671-.193.671-.72V21.564c0-.43-.144-.671-.623-.671Zm13.3-6.1h7.152V43.117h7.008l-1.2,6.481H225.17ZM248.4,45.278l-.624,4.321h-7.008l6.288-34.8h7.44l6.288,34.8H253.78l-.625-4.321Zm.768-5.519h3.215L250.8,27.422Zm31.441-4.321a3.011,3.011,0,0,1-3.121,3.072L281.14,49.6h-7.2L270.58,38.51h-.912V49.6h-6.961V14.8h13.2c3.265,0,4.705,1.776,4.705,4.511ZM269.668,20.893v12h3.409c.527,0,.671-.192.671-.722V21.615c0-.434-.192-.722-.671-.722Z" transform="translate(354.746 435.507)" fill="#fff" />
                    <rect id="Rectangle_578" data-name="Rectangle 578" width="350.898" height="69.644" transform="translate(326.606 433.266)" fill="none" />
                </g>
            </svg>
            <div class="cropped1">
                <img src="<?= get_the_post_thumbnail_url(); ?>" alt="Solar page hero image" height="365" />
            </div>
        </div>
    </div>

<?php else : ?>
    <div class=" img-overlay-wrap " style="margin-bottom: 25px">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="130" height="125" viewBox="0 0 269 79">
            <defs>
                <clipPath id="clip-path">
                    <rect id="Rectangle_579" data-name="Rectangle 579" width="269" height="79" transform="translate(425 427)" fill="#fff" stroke="#707070" stroke-width="1" />
                </clipPath>
            </defs>
            <g id="Mask_Group_45" data-name="Mask Group 45" transform="translate(-425 -427)" clip-path="url(#clip-path)">
                <path id="Path_6765" data-name="Path 6765" d="M92.925,69.347V.5H319.817l25.529,68.687Z" transform="translate(330.989 433.341)" fill="#cc0109" />
                <path id="Path_6766" data-name="Path 6766" d="M31,0H258.532l26.455,69.45H31ZM257.651,1.278H32.279V68.173H283.133Z" transform="translate(392.274 433.362)" fill="#fffcff" />
                <path id="Path_6767" data-name="Path 6767" d="M187.441,49.6l-1.248-6.481h7.488c.623,0,.815-.192.815-.72V36.062c0-.959-.336-1.008-1.3-1.008h-3.6c-2.065,0-3.889-.48-3.889-3.937V19.309c0-2.735,1.439-4.511,4.7-4.511h9.6l1.2,6.481h-7.872c-.577,0-.864.241-.864.766v6.338c0,.72.335.912,1.055.912h4.369c2.207,0,3.456.959,3.456,3.552V44.318c0,3.839-1.344,5.28-5.328,5.28Zm34.849-4.943c0,2.64-1.1,4.943-4.992,4.943h-8.064c-3.889,0-4.993-2.3-4.993-4.943V19.309c0-2.735,1.441-4.511,4.705-4.511h8.64c3.265,0,4.7,1.776,4.7,4.511ZM211.874,20.893c-.481,0-.625.242-.625.671V42.783c0,.526.1.72.672.72h2.64c.576,0,.671-.193.671-.72V21.564c0-.43-.144-.671-.623-.671Zm13.3-6.1h7.152V43.117h7.008l-1.2,6.481H225.17ZM248.4,45.278l-.624,4.321h-7.008l6.288-34.8h7.44l6.288,34.8H253.78l-.625-4.321Zm.768-5.519h3.215L250.8,27.422Zm31.441-4.321a3.011,3.011,0,0,1-3.121,3.072L281.14,49.6h-7.2L270.58,38.51h-.912V49.6h-6.961V14.8h13.2c3.265,0,4.705,1.776,4.705,4.511ZM269.668,20.893v12h3.409c.527,0,.671-.192.671-.722V21.615c0-.434-.192-.722-.671-.722Z" transform="translate(354.746 435.507)" fill="#fff" />
                <rect id="Rectangle_578" data-name="Rectangle 578" width="350.898" height="69.644" transform="translate(326.606 433.266)" fill="none" />
            </g>
        </svg>
        <?php

        the_post_thumbnail('full-width', ['loading' => false]);

        ?>
    </div>
<?php

endif;

?>
<!-- Page Hero IMAGE END -->
<?php

get_template_part('template-parts/location', 'banner-#1')

?>
<div class="container" style="max-width:1100px;">
    <div class="m-auto w-100">
        <!-- Page Title is here  -->
        <?php

        the_title('<h2 class="page-title">', '</h2>');

        ?>
        <!-- icons next to top offer and CTA section -->
        <div id="grandOffer" class="row" style="overflow-x:hidden;">
            <div class="col-md-4 top-icons">
                <div class="d-flex flex-row flex-wrap iconContainer">
                    <div class="p-2 iconImg">
                        <img width="35" height="35" src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/SMP-Time-Red.svg" alt="Clock Icon" />
                    </div>
                    <div class="icon-tags ">
                        <p>Ontime Services</p>
                    </div>
                </div>
                <hr style="color: black;">
                <div class="verticalLine"></div>
                <div class="d-flex flex-row flex-wrap  iconContainer">
                    <div class="p-2 iconImg">
                        <img width="35" height="35" src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/SMP Ribbon Red.svg" alt="red ribbon Icon" />
                    </div>
                    <div class="icon-tags ">
                        <p>Verified Professionals</p>
                    </div>
                </div>
                <hr style="color: black;">
                <div class="verticalLine"></div>
                <div class="d-flex flex-row flex-wrap  iconContainer">
                    <div class="pt-2 px-2 iconImg">
                        <img width="35" height="35" src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/SMP Solar Panels Red.svg" alt="solar panel Icon" />
                    </div>
                    <div class="icon-tags ">
                        <p>Top Manufacturers</p>
                    </div>
                </div>
            </div>
            <!-- offer & cta -->
            <div class="col justify-content-space-around align-items-center text-center">
                <img <?= (wp_is_mobile()) ? 'width="350px" height="130px"' : 'width="600" height="220"'; ?> src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/SMP Solar Offer Outlined 1.svg" alt="Card image cap">
                <div class="d-flex flex-row justify-content-center ">
                    <a class="orange-cta-btn-2" href="#location-form-wrapper">
                        <img width="21px" height="21px" src="/wp-content/themes/semper-arizona-child/assets/icons/horizontal form/SMP CTA White Arrow.svg" alt="white arrow" />
                        Start Saving Now!
                    </a>
                </div>
            </div>
        </div>

        <hr class="sectionSpacing" style="border-bottom:1px solid black; <?= (wp_is_mobile()) ? 'visibility: hidden;' : ''; ?> ">
        <?php

        if (wp_is_mobile()) :
            get_template_part('template-parts/horizontal', 'form');

        ?>
            <div class=" service-wrapper">
                <h2 class="sectionTitle font-weight-light m-0 p-0"> OUR SERVICES</h2>
                <hr class="horizontalLine">

                <div class="text-center servicesHolder">
                    <div class="flex-wrap-wrap service-block border-line">
                        <img class="lazy-images" width="107" height="82" data-src="https://smpbackup.wpengine.com/wp-content/themes/semper-solaris/assets/img/location/SMP Icon Solar.svg" alt="solar panel icon">
                        <h3>Solar Energy<br /> <?= isset($content_array['city-name']) ? $content_array['city-name'] : '' ?> </h3>
                        <a itemprop="url" href="/" class="learn-more-btn main-solar-link">
                            <span class="learn-more-text ">LEARN MORE</span>
                            <span class=" learn-more-icon">
                                <img class="lazy-images" width="20" height="20" style="margin-top: 5px;" data-src="/wp-content/themes/semper-arizona-child/assets/icons/horizontal form/SMP CTA Button Circle Arrow.svg" alt="arrow icon">
                            </span>
                        </a>
                    </div>
                    <!-- <hr class="verticalLine"> -->
                    <div class="flex-wrap-wrap service-block border-line-4">
                        <img class="lazy-images" width="107" height="82" data-src="https://smpbackup.wpengine.com/wp-content/themes/semper-solaris/assets/img/location/SMP Icon Battery.svg" alt="battery storage icon">
                        <h3>Battery Storage <br /> <?= isset($content_array['city-name']) ? $content_array['city-name'] : '' ?></h3>
                        <a itemprop="url" href="/" class="learn-more-btn main-battery-link">
                            <span class="learn-more-text ">LEARN MORE</span>
                            <span class=" learn-more-icon">
                                <img class="lazy-images" width="20" height="20" style="margin-top: 5px;" data-src="/wp-content/themes/semper-arizona-child/assets/icons/horizontal form/SMP CTA Button Circle Arrow.svg" alt="arrow">
                            </span>
                        </a>
                    </div>
                    <!-- <hr class="verticalLine"> -->
                    <div class="flex-wrap-wrap service-block">
                        <img class="lazy-images" width="107" height="82" data-src="https://smpbackup.wpengine.com/wp-content/themes/semper-solaris/assets/img/location/SMP Icon Roofing.svg" alt="roofing">
                        <h3>Roofing<br /> <?= isset($content_array['city-name']) ? $content_array['city-name'] : '' ?></h3>
                        <a itemprop="url" href="/" class="learn-more-btn main-roofing-link">
                            <span class="learn-more-text ">LEARN MORE</span>
                            <span class=" learn-more-icon">
                                <img class="lazy-images" width="20" height="20" style="margin-top: 5px;" data-src="/wp-content/themes/semper-arizona-child/assets/icons/horizontal form/SMP CTA Button Circle Arrow.svg" alt="arrow icon">
                            </span>
                        </a>
                    </div>
               
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
                    <legend align="center" class="legendStyle"><?= isset($content_array['top-right-legend-title']) ? $content_array['top-right-legend-title'] : '' ?>
                    </legend>
                    <p class="legend-paragraph" style="font-size:18px;">
                        <?= isset($content_array['legend-paragraph']) ? $content_array['legend-paragraph'] : 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque ducimus illum non blanditiis aspernatur at dolores repellendus? Facilis deserunt non praesentium qui perferendis explicabo repellendus odio totam ipsam, quam laboriosam.' ?>
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
        <h2 class="sectionTitle"> SOLAR ENERGY </h2>
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
                    <h3 class='video-header font-weight-bold'> <?= $content_array['legend-video-header-youtube'] ? $content_array['legend-video-header-youtube'] : "Don't wait to go solar" ?> </h3>
                    <div class="ratio ratio-16x9" style="border:none; outline:none; ">
                        <iframe loading="lazy" class="embed-responsive-item" data-src="<?= $content_array['legend-video-youtube'] ?>" src="" width="640" height="360" frameborder="0" allow="autoplay; picture-in-picture" allowfullscreen></iframe>
                    </div>

                </fieldset>
            </div>
            <!-- sidebar article with blue background and money falling img-->
            <div class="col-lg-4 ">

                <div style=" border: 1px solid #004c97; background-color:#E6EDF4; padding:5%;">
                    <div class="imgCircle">
                        <div class="circleShadow">
                            <img width="77" height="152" loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/SMP Article Falling Money.svg" alt="Money Falling Icon">
                        </div>
                    </div>

                    <h4 style="text-align:center;"><strong>How Much Will A Solar System Cost Me in <?= isset($content_array['city-name']) ? $content_array['city-name'] : '' ?> ? </strong></h4>
                    <p>Semper Solaris can offer you options for a solar system that not only meets your electricity needs but also fits your budget. You can also take advantage of solar tax credits available to Arizona residents. There are state and federal rebates available that can make putting solar panels on your home an affordable option for you, and will help defer some of the up-front solar costs, until the system “pays for itself”, which usually happens in as little as 5 years. Our solar panel installation will meet HOA and all jurisdiction requirements.</p>
                </div>
            </div>
        </div>
        <div class="mobileCTA">
            <div class="d-flex justify-content-center flex-wrap" style="align-items: center; margin-top:35px; font-size: 20px">
                <STRONG style="font-size:24px">Ready to Start Saving Today!</STRONG>
                <a class="orange-cta-btn-2" href="#location-form-wrapper" style="max-width:100%; margin-left:0px !important; margin-right:0px !important;">
                    <img width="21px" height="21px" loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/horizontal form/SMP CTA White Arrow.svg" alt="white arrow" />
                    REQUEST FREE QUOTE
                </a>
            </div>
        </div>
    </div>
</div>
</div>
<!-- INFOGRAPHIC GOES HERE -->
<div class="container-fluid solarInfographic p-0 " style=" background-color:var(--semperBlue); margin:0 auto; text-align:center; ">
    <div class="p-5">
        <img loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/SMP-How-Solar-Works-White-Text.svg" alt="How Solar Works">
    </div>
    <?php if (wp_is_mobile()) :  ?>
        <img max-width="440px" max-height="658px" loading="lazy" class="mobile-infographic intersector " loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/SMP Solar Infographic 3 (1).jpg" alt="How Solar Works">
    <?php else : ?>
        <img loading="lazy" class="desktop-infographic" loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/SMP Solar Infographic 3D Graphics.jpg" alt="Solar infographic">
    <?php endif; ?>
</div>
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
                <div class="d-flex justify-content-center flex-wrap" style="align-items: center; margin-top:35px; max-width:100% !important; margin-bottom: -35px">
                    <STRONG style="font-size:24px">Ready to Start Saving Today!</STRONG>
                    <a class="orange-cta-btn-2 mb-0" href="#location-form-wrapper" style=" font-size: 18px; max-width:100% !important">
                        <img width="21px" height="21px" loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/horizontal form/SMP CTA White Arrow.svg" alt="arrow" />
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
            <?php

            if (wp_is_mobile()) :

                echo (null);

            else :

            ?>
                <div class="text-center p-2" style="background-color:#EFB82A">
                    <h4><strong>FACTS ABOUT <br> SOLAR POWER SYSTEMS</strong> </h4>
                </div>
                <br>
                <div class="text-center p-4" style="border:4px solid #EFB82A">
                    <h4 style="color:var(--semperBlue)"> <strong>Solar Panels Can Increase Your Home Value</strong></h4>
                    <p>Initial studies have shown solar panels can increase your home value an average of </p>
                    <h2 style="color:var(--semperBlue); font-size:46px !important;"> <strong>20,000</strong> </h2>
                    <p>a higher payback percentage than a kitchen remodel.</p>
                </div>
                <br>
                <div class="text-center p-4" style="border:4px solid #EFB82A">
                    <h4 style="color:var(--semperBlue)"> <strong>You Can Use Solar Power To Run Your Entire Home</strong> </h4>
                    <p>It's a cheaper, safer and green solution to running air conditioners, hot water heatersm appliances, etc.</p>
                </div>
            <?php

            endif;

            ?>
        </div>

        <div class="container-fluid row p-0 mx-auto" style="padding-top:80px !important;">
            <div class="col-lg-7 p-0" style="background-color:whitesmoke">
                <img width="380" height="157" class="w-100" loading="lazy" style="border-radius:0; " src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/SMP Pickup Truck.jpg" alt="Semper Solaris work truck">
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
                    <img loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/img/location/08 16 22 SMP 30TaxCredit AUG 2022 (3).svg" alt="solar coupon" />

                </div>
            </div>
            <div class="d-flex justify-content-center flex-wrap mobile-style-button" style="align-items: center; font-size:20px;  ">
                <STRONG style="font-size:24px !important;">Ready to Start Saving Today!</STRONG>
                <a class="orange-cta-btn-2" href="#location-form-wrapper">
                    <img width="21px" height="21px" loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/horizontal form/SMP CTA White Arrow.svg" alt="arrow" />
                    REQUEST FREE QUOTE
                </a>
            </div>
        </div>
    </div>
</div>
<?php
//<!-- Contains Special Offers Section -->
get_template_part('template-parts/special', 'offer');

//<!-- Contains map & Semper Cares-->
get_template_part('template-parts/location', 'map');
?>

<?php if(isset($content_array['seo-content-title-1'])) :?>
<section class="py-5" style="background: transparent linear-gradient(197deg, #FFFFFF99 0%, #D1D0D0 100%) 0% 0% no-repeat padding-box;">
	<article class="container row m-auto py-5 px-md-0">
		<div class="col-md pe-md-5">
			<h3 class="fw-bold h2 mb-md-5">
				<?= isset($content_array['seo-content-title-1']) ? $content_array['seo-content-title-1'] : '' ?>
			</h3>
			<p class="">
				<?= isset($content_array['seo-content-1']) ? $content_array['seo-content-1'] : '' ?>
			</p>
		</div>
		
		<div class="col-md ps-md-5">
			<h3 class="fw-bold h2 mb-md-5">
				<?= isset($content_array['seo-content-title-2']) ? $content_array['seo-content-title-2'] : '' ?>
			</h3>
			<p class="">
				<?= isset($content_array['seo-content-2']) ? $content_array['seo-content-2'] : '' ?>
			</p>		
		</div>
	</article>
	
</section>
<?php endif;?>

<?php
get_footer();
?>
<script>
    var roof = document.getElementById("footer-roofing-link").getAttribute("href");
    var solar = document.getElementById("footer-solar-link").getAttribute("href");
    var battery = document.getElementById("footer-battery-link").getAttribute("href");

    const setRoofing = document.getElementsByClassName("main-roofing-link");
    const setSolar = document.getElementsByClassName("main-solar-link");
    const setBattery = document.getElementsByClassName('main-battery-link');

    for (let i = 0; i < setSolar.length; i++) {
        setSolar[i].setAttribute("href", solar);
        setBattery[i].setAttribute("href", battery);
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