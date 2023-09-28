<?php
/* Template Name: arizona Location Page 
 * Template Post Type: page, post, location_page */
wp_head();
$block_array = parse_blocks(get_the_content());
global $content_array;
$content_array = [];

foreach ($block_array as $key => $value) {
    @$class = $value['attrs']['className'];
    $dom = new DOMDocument();
    @$dom->loadHTML($value['innerContent'][0]);
    $content_array[$class] = preg_replace('/<(?!(br|strong|a))(?!\/(br|strong|a)).+?>/', '', $dom->saveHTML());
}
add_image_size('full-width', 450, 255, true);
$telLink = null;
function stripNonNumeric($string)
{
    return preg_replace('/[^0-9]/', '', $string);
}
$strippedPhoneNumber = stripNonNumeric(isset($content_array['orange-banner-text']) ? strip_shortcodes(wp_strip_all_tags($content_array['orange-banner-text'], true)) : '(888) 210-3366');
$telLink = 'tel:+1' . $strippedPhoneNumber;
?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet" rel="preload" as="style">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<?php
// Get the current URL
$currentURL = $_SERVER['REQUEST_URI'];
// Check if the URL contains "lxc"
if (strpos($currentURL, 'lxc') !== false) {
    echo '<script async src="//388506.tctm.co/t.js"></script>';
} else if (strpos($currentURL, 'rlg') !== false) {
    echo '<script async src="//388530.tctm.co/t.js"></script>';
} else {
    echo '<script async src="//70499.cctm.xyz/t.js"></script>';
}

/**
 * SET LEAD SOURCE BASED UPON PRIORITY
 */
get_template_part("template-parts/lead-source-setter");
?>

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

<style type="text/css">
	
    @import url('https://fonts.cdnfonts.com/css/american-captain-2');

    #landingPage-form>div.container.d-flex.flex-row.w-100.justify-content-between.position-absolute.text-white.hideSection>strong:nth-child(1)>a,
    #landingPage-form>div.mobile-red-banner>p>strong>a {
        color: white !important;
    }

    .smpFont,
    .smpFont p {
        font-family: 'American Captain', sans-serif !important;
        color: #0c4e97;
        font-weight: 500;
    }

    .header-inner-wrapper {
        max-width: 800px;
        /* margin: auto; */
    }

      h1.smpFont {
            font-size: 127px;
            line-height: 108px;
            margin: 0;
            color: white;
        }

    .top-callout {
        font-size: 1.8rem;
        font-weight: bold;
        /* color: #0c4e97; */
    }
	
	.imgCircle {
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    background: #fff;
    -webkit-clip-path: circle(50%);
    clip-path: circle(50%);
    height: 14em;
    width: 14em;
    margin: 10px auto;
}
	.circleShadow {
    -webkit-filter: drop-shadow(-1px 6px 3px rgba(50,50,0,0.5));
    filter: drop-shadow(-1px 6px 3px rgba(50, 50, 0, .5));
    margin: auto;
}

    @media only screen and (max-width:600px) {
        .top-callout {
            font-size: 20px;
        }

        header {
            /* background-color: #0C4E97; */
        }

        header h2 {
            /* color: white !important; */
        }

        .header-inner-wrapper {
            max-width: 380px;
            padding: 20px 0px;
        }

        .header-inner-wrapper img {
            width: 90%;
        }

        h1 {
            font-size: 72px;
            line-height: 66px;
            text-shadow: 1px 1px 5px black;

        }
    }
    .form-wrapper {
        max-width: 371px;
        background-color: #fff;
        border: solid 5px #0c4e97;
        position: relative;
        z-index: 1;
        margin: 0px 10px;
    }

    .form-wrapper h3 {
        text-align: center;
        margin-bottom: 0;
    }

    .form-wrapper h4 {
        text-align: center;
        margin-bottom: 0;
        padding: 10px;
        background-color: #26D367;
        color: white;
        font-weight: bold;
        font-size: 1.5em;
    }

    .top-form-callout p {
        text-align: center;
    }

    #wpcf7-f38666-p38685-o1 {
        padding: 15px;
        padding-top: 0;
    }

    .form-wrapper input {
        font-size: 16px;
        width: 100%;
        border-style: solid;
        border-width: 1px;
        border-color: #a2a2a2;
        background-color: #e8f6ff;
        color: #000;
        box-shadow: inset 0px 2px 3px #c9d5dd;
        -webkit-box-shadow: inset 0px 2px 3px #c9d5dd;
        -moz-box-shadow: inset 0px 2px 3px #c9d5dd;
    }

    .wpcf7-list-item {
        width: initial;
        display: block;
        margin: 0;
    }

    .wpcf7-list-item input {
        width: initial;
    }

    textarea {
        display: none;

    }

    .wpcf7-form-control.wpcf7-checkbox {
        display: flex;
        gap: 10px;
    }

    form {
        padding: 0px 10px;

    }

    form p {
        margin-bottom: 0;
    }

    .wpcf7-form input[type=submit] {
        background-color: #FF7800;
        color: #fff;
        width: 80%;
        padding: 10px 15px;
        margin: auto;
        display: block;
    }

    .wpcf7-form input[type=submit]:active {
        outline: 0;
        border-color: #FF8300;
    }

    .wpcf7-form input[type=submit]:focus,
    .wpcf7-form input[type=submit]:hover {
        background-color: #FF8300;
        border-color: #FF8300;
    }

    .main-header-section {
        background-image: url('/wp-content/uploads/2023/09/10-23-SMP-Primary-Web-Image-Asset-Horizontal-Layout-1400-x-756-1.png');
        overflow: hidden;
        background-size: contain;
        background-position: bottom left;
        background-repeat: no-repeat;
        background-color: #654535;
    }

    .main-header-section .left {
        font-size: 24px !important;
        color: #fff;
        line-height: normal;
        font-weight: bold !important;
        text-shadow: 1px 1px 5px #000;
        /* horizontal-offset vertical-offset 'blur' colour */

    }

    .main-header-section ul {
        color: white;
        font-size: 25px;
        font-weight: 600;
        text-shadow: 1px 1px 5px #000;

    }

    .main-header-section ul li {
        list-style-image: url(/wp-content/themes/semper-arizona-child/assets/icons/red-star-list-icon.svg);
        padding-bottom: 5px;
    }

    li::marker {
        font-size: 45px;
    }

    @media only screen and (max-width: 500px) {
        .form-wrapper {
            margin: auto;
            max-width: fit-content;
        }

        .form-wrapper h4 {
            margin: 10px;
            border: 4px solid white;
            background-color: #26D367;
            border-radius: 8px;
        }

        .main-header-section {
            padding: 10px; 
            padding-bottom: 50px;
			background-attachment: fixed;
			background-size: cover;
			background-position: top center;
			background-image: url("/wp-content/uploads/2023/09/10-23-SMP-Primary-Web-Image-Asset-Vertical-Layout-600-x-1200.png");
            background-color: #090f19;
        }

        .main-header-section h1 {
            text-align: center;
            color: white;
            font-size: 70px;
            line-height: 70px;
        }

        .main-header-section img {
            display: flex;
            margin: auto;
        }

        .main-header-section ul {
            text-align: start;
            color: white;
            font-size: 22px;
            font-weight: 600;
            text-shadow: 1px 1px 5px #000;
            padding-left: 2%;

        }

        .main-header-section ul li {
            list-style-image: url(/wp-content/themes/semper-arizona-child/assets/icons/red-star-list-icon.svg);
        }
    }
    .extended-top-sale{
			margin-bottom:-5px;
			font-size: 45px; 
			text-align:center;
			color:white !important;
            margin-top: 0px;
            }
            @media only screen and (max-width: 500px){
                .extended-top-sale{margin-bottom: 2px;
                font-size: 27px;}
            }
</style>

<header>
    <div class="text-center p-2">
        <img class="m-auto" width="250" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/dist/img/logo/semper-solaris_logo-hd.svg" alt="">
    </div>
    <div class="text-center p-2" style="background-color: #004c97; color:white;">
        <h2 class="m-auto top-callout">Top Residential Solar + Battery Storage Installer in America </h2>
    </div>
</header>

<div class="main-header-section">
    <div class="row m-auto pt-md-4 pb-md-5" style="max-width: 1100px;">
        <div class="header-inner-wrapper col-md-7 pt-md-4">

            <h1 class="smpFont"> DECLARE YOUR <br> <span style="color:#F9BF16"> INDEPENDENCE </span> </h1>
            
            <img src="/wp-content/uploads/2023/07/SMP-Upto-6000-in-savings.png" title="Get up to $6,000 off Solar + Battery" alt="Get Up To $6,000 Off Solar + Battery Storage">
            <p class="left d-none d-md-block">
                Are your energy bills skyrocketing every month? Say goodbye to outrageous electricity bills in <?php echo $content_array['city-name'] ?>. Go solar and start saving! Act now and save up to $6,000!
            </p>

            <ul class="pt-3">
                <li>Local &amp; Veteran Owned</li>
                <li>Solar Panels Made In USA</li>
                <li>Tesla Powerwall in stock!</li>
                <li>Excellent Customer Service!</li>
                <li>Thousands of Five Star Reviews</li>
            </ul>
        </div>

        <div class="col-md-5 pt-md-4 px-0">
            <div class="form-wrapper" id="landingPage-form">
                <div class="top-form-callout">
                    <h3 style="color:#ce0109; font-size:24px; margin-top:0;"> Homeowners: </h3>
                    <h3 style="font-size:24px;margin-top:0;"> Start Saving Now! </h3>
                    <h4 style="margin-top:0;"><a href="<?= $telLink ?>" style="color:white; text-decoration:none;"> <?= isset($content_array['orange-banner-text']) ? $content_array['orange-banner-text'] : 'Call (888) 210-3366'; ?> </a> </h4>
                    <p style="margin-top:0;"> or fill-out form below</p>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="791" title="landing page"]');  ?>
                <p style="padding: 5px;line-height: 12px; text-align: center;margin-top:-20px;"><span style="color: rgb(0, 0, 0); font-size: 10px;">By clicking, you agree to receive marketing emails, text messages, and phone calls and chats are recorded. You may opt-out at anytime.</span></p>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid  " style="background-color:#0C4E970D; margin-bottom: 40px; padding-bottom:40px;">
    <div class="container offer-wrapper w-1100">
        <h2 class="sectionTitle" style="margin:0;padding-top: 40px;margin-bottom: 5px;color: #004c97;">SPECIAL OFFERS <img loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/SMP Special Offers Red Tag.svg" alt="Red Tag Sale Icon"/> </h2>
        <hr class="horizontalLine">
        <div class="d-flex justify-content-around flex-wrap  offer-holder">
            <a href="#landingPage-form">
                <img width="256px" height="218px" loading="lazy" src="/wp-content/uploads/2023/07/30-solar-tax-credit-offer.png" alt="Best solar coupon in arizona, 30% solar tax credit" />
            </a>

            <a href="#landingPage-form">
                <img width="256px" height="218px" loading="lazy" src="/wp-content/uploads/2023/07/offer.png" alt="Best Roofing offer in arizona, replace your old roof and get your free upgrade" />
            </a>

            <a href="#landingPage-form">
                <img width="256px" height="218px" loading="lazy" src="/wp-content/uploads/2023/01/SMP-Roofing-Offer-Location-Pgs-Jan2023.png" alt="Best Roofing offer in arizona, replace your old roof and get your free upgrade" />
            </a>
        </div>
    </div>
</div>


<div class="container">
    <div class="m-auto w-100 pt-5">
        <?php the_title('<h2 class="page-title">', '</h2>'); ?>
        <!-- first text area  -->
        <div class="row ">
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
                    <p class="legend-paragraph">
                        <?php echo $content_array['legend-paragraph']  ?>
                    </p>
                </fieldset>
            </div>
        </div>

        <!-- main section -->
        <h2 class="sectionTitle"> SOLAR ENERGY </h2>
        <hr class="horizontalLine">

        <div class="row" style=" flex-wrap:wrap; justify-content: space-between;">
            <div class="col-lg-7">

                <h2 class="section-headers"> <?php echo $content_array['second-section-header'] ?: 'I need a header' ?> </h2>
                <p><?php echo $content_array['second-section-paragraph'] ?: 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum laborum illo vitae unde qui totam facere hic voluptas quis, error at sit nobis fuga ipsa. Itaque ratione necessitatibus quisquam id?' ?></p>

                <!--  VIDEO WRAPPER w/ legend-->
                <fieldset class="border video-wrapper" style="border:2px solid #ce0109 !important; padding: 1em">
                    <legend class="video-legend-title">
                        <img width="28px" height="21px" loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/SMP Watch Video Icon.svg" alt="video icon" style="vertical-align: bottom;" /> &nbsp; <?php echo $content_array['legend-video-text'] ?: 'Watch' ?>
                    </legend>
                    <h3 class='video-header font-weight-bold'> <?php echo $content_array['legend-video-header-youtube'] ?: "Don't wait to go solar" ?> </h3>
                    <div class="embed-responsive embed-responsive-16by9" style="border:none; outline:none; ">
                        <iframe loading="lazy" class="embed-responsive-item" data-src="<?php echo $content_array['legend-video-youtube'] ?>" src="" width="640" height="360" frameborder="0" allow="autoplay; picture-in-picture" allowfullscreen></iframe>
                    </div>

                </fieldset>
            </div>


            <!-- sidebar article with blue background and money falling img-->
            <div class="col-lg-4 ">

                <div style=" border: 1px solid #004c97; background-color:#E6EDF4; padding:5%;">
                    <div class="imgCircle">
                        <div class="circleShadow">
                            <img width="77" height="152" loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/SMP Article Falling Money.svg" alt="Money Falling Icon" />
                        </div>
                    </div>

                    <h4 style="text-align:center;"><strong>How Much Will A Solar System Cost Me? </strong></h4>
                    <p>Semper Solaris can offer you options for a solar system that not only meets your electricity needs but also fits your budget. You can also take advantage of solar tax credits available to Arizona residents. There are state and federal rebates available that can make putting solar panels in your home an affordable option for you, and will help defer some of the up-front solar costs, until the system "pays for itself", which usually happens in as little as 5 years. Our solar panel installation will meet HOA and all jurisdiction requirements.</p>

                </div>

            </div>
        </div>
        <div class="mobileCTA">
            <div class="d-flex justify-content-center flex-wrap" style="align-items: center; margin-top:35px; font-size: 20px">
                <STRONG style="font-size:24px">Ready to Start Saving Today!</STRONG>
                <a class="orange-cta-btn-2" href="#landingPage-form" style="max-width:100%; margin-left:0px !important; margin-right:0px !important;">
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
        <img loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/SMP-How-Solar-Works-White-Text.svg" alt="How Solar Works" />
    </div>
    <?php if (wp_is_mobile()) :  ?>
        <img max-width="440px" max-height="658px" loading="lazy" class="mobile-infographic intersector " loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/SMP Solar Infographic 3 (1).jpg" alt="Solar infographic; first Solar works by solar panels convert energy from the sun into electricity second the energy is used in the your home third the meter measures energy and excess energy produced and fourth excess energy from your solar panels not used in your home goes back to the electrical grid." />
    <?php else : ?>
        <img loading="lazy" class="desktop-infographic" loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/SMP Solar Infographic 3D Graphics.jpg" alt="Solar infographic; first Solar works by solar panels convert energy from the sun into electricity second the energy is used in the your home third the meter measures energy and excess energy produced and fourth excess energy from your solar panels not used in your home goes back to the electrical grid." />
    <?php endif; ?>
</div>
<!-- Contains lower content W/ CTA & Related Topics -->
<div class="container" style="padding-bottom:40px">
    <div class="row p-0" style="flex-wrap:wrap; justify-content: space-between;">
        <div class="col-md-7 ">
            <h2 class="section-headers"> <?php echo $content_array['third-section-header'] ?: 'I need a header' ?> </h2>
            <p><?php echo $content_array['third-section-paragraph'] ?: 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum laborum illo vitae unde qui totam facere hic voluptas quis, error at sit nobis fuga ipsa. Itaque ratione necessitatibus quisquam id?' ?></p>

            <fieldset class="border video-wrapper" style="border:2px solid #ce0109 !important; padding: 1em">
                <legend class="video-legend-title">
                    <img width="28px" height="21px" loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/SMP Watch Video Icon.svg" alt="video icon" style="vertical-align: bottom;" /> &nbsp; <?php echo $content_array['legend-video-text'] ?: 'Watch' ?>
                </legend>
                <h3 class='video-header font-weight-bold p-2'> <?php echo $content_array['legend-video-header-vimeo'] ?> </h3>
                <div class="embed-responsive embed-responsive-16by9" style="border:none; outline:none; ">

                    <iframe loading="lazy" class="embed-responsive-item" data-src="<?php echo $content_array['legend-video-vimeo'] ?>" src="" width="640" height="360" frameborder="0" allow="autoplay; picture-in-picture" allowfullscreen></iframe>

                </div>
            </fieldset>
        </div>
        <?php if (wp_is_mobile()) : ?>
            <div class="mobileCTA">
                <div class="d-flex justify-content-center flex-wrap" style="align-items: center; margin-top:35px; max-width:100% !important; margin-bottom: -35px">
                    <STRONG style="font-size:24px">Ready to Start Saving Today!</STRONG>
                    <a class="orange-cta-btn-2 mb-0" href="#landingPage-form" style=" font-size: 18px; max-width:100% !important">
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
                    <h4><strong>Increase Your Home's Value and Savings with Solar Panels!</strong> </h4>
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
                    <p>It's a cheaper, safer and green solution to running air conditioners, hot water heaters appliances, etc.</p>
                </div>
            <?php endif; ?>
        </div>

        <div class="container-fluid row p-0 mx-auto" style="padding-top:80px !important;">
            <div class="col-lg-7 p-0" style="background-color:whitesmoke">
                <img width="380" height="157" class="w-100" loading="lazy" style="border-radius:0; " src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/SMP%20Pickup%20Truck.jpg" alt="Semper Solaris work truck in <?php echo $content_array['city-name'] ?>" />
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
                    <img loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/img/location/08 16 22 SMP 30TaxCredit AUG 2022 (3).svg" alt="best solar coupon" />

                </div>
            </div>
            <div class="d-flex justify-content-center flex-wrap mobile-style-button" style="align-items: center; font-size:20px;  ">
                <STRONG style="font-size:24px !important;">Ready to Start Saving Today!</STRONG>
                <a class="orange-cta-btn-2" href="#landingPage-form">
                    <img width="21px" height="21px" loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/horizontal form/SMP CTA White Arrow.svg" alt="arrow" />
                    REQUEST FREE QUOTE
                </a>

            </div>
        </div>
    </div>
</div>

<?php if(isset($content_array['bing-src'])) :?>
<div class="container">
    <h2 class="sectionTitle" style="padding-top:20px;">IN YOUR COMMUNITY</h2>
    <hr class="horizontalLine">

    <div class="row m-auto locationDetails">
        <div class="w-100 switch-field ">
            <input id="bt1" type="radio" name="type" value="1" checked style="display:none">
            <label class="bt1" for="bt1"> Bing </label>
            <input id="bt2" type="radio" name="type" value="2" checked style="display:none">
            <label class="bt2" for="bt2"> Google </label>

            <div class="gMap">
                <iframe data-src="<?php echo $content_array['google-src'] ?>" src="" width="100%" height="450" style="border:0;" loading="lazy"></iframe>
            </div>

            <div class="bingMap mx-auto">
                <iframe loading="lazy" width="800" height="400" frameborder="0" data-src="<?php echo $content_array['bing-src'] ?>" src="" scrolling="no">
                </iframe>
            </div>
            <h4 class="location-detail-title" style="color:#004c97 !important;"><strong><?php echo $content_array['city-name'] ?> Office</strong></h4>
        </div>

        <div class="col-3 locationDetails location-info" style="border-top: 2px solid lightgrey; border-right: 2px solid lightgrey; ">
            <img width="20px" height="20px" loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/SMP Map Time Blue Icon.svg" alt="clock icon" />
            <?php echo $content_array['office-hours'] ?>
        </div>
        <div class="col-5 locationDetails location-info" style="border-top: 2px solid lightgrey; border-right: 2px solid lightgrey;">
            <img width="20px" height="20px" loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/SMP Map Location Blue Icon.svg" alt="map pin icon" />
            <?php echo $content_array['office-address'] ?>
        </div>
        <div class="col-4 locationDetails location-info" style="border-top: 2px solid lightgrey">
            <img width="20px" height="20px" loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/icons/location-pages/SMP Map Phone Blue Icon.svg" alt="phone icon" />
            <?php echo $content_array['office-number'] ?>
        </div>

    </div>
</div>
<?php endif;?>

<?php if(isset($content_array['seo-content-title-1'])) :?>
<section class="py-5" style="background: transparent linear-gradient(197deg, #FFFFFF99 0%, #D1D0D0 100%) 0% 0% no-repeat padding-box; margin-top: 60px">
	<article class="container row m-auto py-5 px-md-0">
		<div class="col-md pe-md-5">
			<h3 class="fw-bold h2 mb-md-5">
				<?= isset($content_array['seo-content-title-1']) ? $content_array['seo-content-title-1'] : '' ?>
			</h3>
			<p style="font-size: 16px !important;">
				<?= isset($content_array['seo-content-1']) ? $content_array['seo-content-1'] : '' ?>
			</p>
		</div>
		
		<div class="col-md ps-md-5">
			<h3 class="fw-bold h2 mb-md-5">
				<?= isset($content_array['seo-content-title-2']) ? $content_array['seo-content-title-2'] : '' ?>
			</h3>
			<p style="font-size: 16px !important;">
				<?= isset($content_array['seo-content-2']) ? $content_array['seo-content-2'] : '' ?>
			</p>		
		</div>
	</article>
	
</section>
<?php endif;?>


<style type="text/css">
    footer {
        background-color: #343434;
        text-align: center;
        color: white;
        padding: 80px 10px;
    }

    footer p {
        max-width: 1000px;
        margin: auto;
    }

    .disclaimerArea {
        margin: auto;
    }
</style>

<footer>
    <p>*On approved credit. 15-panel minimum. Some restrictions apply. **30 percent federal tax credit based on eligibility, consult your tax advisor. New customers only. Call or see website for details, www.sempersolaris.com.</p>

    <div id="disclaimerArea" class="disclaimerArea" style="color:white !important">
        <div class="text-center mx-auto container " role="contentinfo" aria-label="Site issue" style="max-width: 1000px; margin:auto;">
            <p class="site-disclaimer" style="color:white;"><small>
                    Expires <span id="_expiry_">10/10/2023</span>.</small></p> <br>
            <script defer>
                // let _d = new Date(),
                //     _lD = new Date(_d.getFullYear(), _d.getMonth() + 1, 0);
                // document.getElementById("_expiry_").innerText = _lD.toLocaleString('default', {
                //     month: 'long'
                // }) + " " + _lD.getDate() + ", " + _lD.getFullYear();
            </script>
            <p id="disclaimerArea">&copy;<?php echo date('Y') ?> Semper Solaris. All Rights Reserved.  | ROC# 336163 | ROC# 336306 | ROC# 336305| <a style="color:white;" href="https://www.sempersolaris.com/privacy-notice/">Privacy Policy </a> | Call +1 (888) 210-3366 </p>
            <p id="disclaimerArea">This site is protected by reCAPTCHA and the Google <a style="color:white;" href="https://policies.google.com/privacy">Privacy Policy</a> and <a style="color:white;" href="https://policies.google.com/terms">Terms of Service</a> apply.</p>

            <p id="disclaimerArea">
                Please visit our <a style="color:white;" href="/privacy-notice/">privacy policy</a> to learn how we use your information.<br />You will receive emails periodically and can opt-out at any time.
            </p>
        </div>
    </div>

</footer>

<script defer>
    var currentPageElement = document.getElementById("current_page");

    document.addEventListener('wpcf7mailsent', function(event) {
        document.location = "/thank-you/";
    }, false);

    if (currentPageElement) {
        currentPageElement.value = window.location.href;
    }

    function setQueryParamValue(paramName, elementId) {
        var urlQueryString = location.search;
        var utmParameters = new URLSearchParams(urlQueryString);
        var utmContent = utmParameters.get(paramName);
        document.getElementById(elementId).value = utmContent;
    }

    setQueryParamValue("utm_content", "utm_content_param");
    setQueryParamValue("keyword_id", "keyword_id_param");
    setQueryParamValue("creative", "creative_param");
    setQueryParamValue("adgroup_id", "adgroup_id_param");
    setQueryParamValue("campaign_id", "campaign_id_param");
    setQueryParamValue("utm_source", "utm_source_param");
    setQueryParamValue("utm_medium", "utm_medium_param");
    setQueryParamValue("utm_campaign", "utm_campaign_param");
    setQueryParamValue("campaign_name", "campaign_name_param");
    setQueryParamValue("utm_term", "utm_term_param");

    if (document.getElementById("utm_content_param") && document.getElementById("utm_content_param").value.length == 0) {
        if (window.location.pathname == "/fb-solar-sale/") {
            document.getElementById("utm_content_param").value = "FB ADS ALL";
        } else {
            document.getElementById("utm_content_param").value = "PPC ALL";
        }
    };

    document.getElementById('referrer_param').value = document.referrer;


    function insertTcpa() {
        console.log('funtione randded');
        var getTcpa = document.getElementById("xxTrustedFormToken_0");
        var tcpaField = document.getElementById("tcpa_field")
        if (getTcpa && tcpaField) {
            tcpaField.value = getTcpa.value;
        };
    };

    function waitForElm(selector) {
        return new Promise(resolve => {
            if (document.querySelector(selector)) {
                return resolve(document.querySelector(selector));
            }

            const observer = new MutationObserver(mutations => {
                if (document.querySelector(selector)) {
                    resolve(document.querySelector(selector));
                    observer.disconnect();
                }
            });

            observer.observe(document.body, {
                childList: true,
                subtree: true
            });
        });
    }

    waitForElm('#xxTrustedFormToken_0').then((elm) => {
        insertTcpa();
    });

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

<?php
wp_footer();
?>