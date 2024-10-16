<!-- Form -->
<?php

global $content_array;

?>
<style>
    :root {
        --semperOrange: #e65b12;
        --semperRed: #ce0109;
    }

    #location-form-wrapper .orange-cta-btn-form {
        display: block;
        width: 100%;
        margin: 0 auto;
        color: white !important;
        font-size: 24px/29px !important;
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
        text-transform: uppercase;
        text-decoration: none;
        background-color: var(--semperOrange);
        border-radius: 35px;
        padding: 10px 30px 10px 30px;
        margin: 25px;
        border: none;
    }

    #location-form-wrapper .orange-cta-btn-form:hover,
    #location-form-wrapper .orange-cta-btn-form:focus {
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

    #location-form-wrapper button.orange-cta-btn-form {
        cursor: pointer;
    }

    #location-form-wrapper .__semper_solaris_sf_form {
        color: white;
        font-size: 0.9em;
    }

    #location-form-wrapper .__semper_solaris_sf_form input {
        border: 0;
        -webkit-box-shadow: inset 2px 4px 6px #00000029;
        box-shadow: inset 2px 4px 6px #00000029;
    }

    #location-form-wrapper .inputsFrom {
        gap: 15px;
    }

    #location-form-wrapper #checkbox_services label {
        margin: 0;
    }

    #location-form-wrapper .mobileSectionForm {
        font: normal normal normal 22px Barlow !important;
    }

    @media screen and       (min-width:768px) {
        #location-form-wrapper .mobileSectionForm {
            display: none;
        }
    }

    #location-form-wrapper .mobile-red-banner {
        background-color: var(--semperRed);
        margin-left: calc(-50vw + 50%);
        width: 100vw;
        color: white;
        font-size: 22px !important;
    }

    #location-form-wrapper .mobile-red-banner p strong {
        font-size: 22px !important;

    }

    #location-form-wrapper .blue-wrapper {
        padding-top: 35px;
        padding-bottom: 15px;
    }

    #location-form-wrapper .mobileSectionForm strong {
        font-size: 22px !important;
    }

    #location-form-wrapper .recaptcha_render {
        transform: scale(0.76);
    }

    .third-form-section button {
        margin: 0px !important;
        margin-left: auto !important;
        margin-right: auto !important;
    }

    @media only screen and (min-width: 995px) {
        #location_form>div>div:nth-child(4)>div {
            gap: 5px;
            margin-top: -25px;
        }
    }


    @media screen and (max-width:768px) {

        #location-form-wrapper {
            margin-left: calc(-50vw + 50%);
            width: 100vw;
            padding-top: 0px !important;
        }

        @media screen and (max-width:768px) {
            .third-form-section button {
                margin-top: 10px !important;
            }
        }

        ;

        #location-form-wrapper #checkbox_services {
            transform: translateY(10px);
        }

        #location-form-wrapper .inputsFrom label {
            margin: 0 !important;
        }

        #location-form-wrapper .blue-wrapper {
            padding-bottom: 25px;
            padding-top: 0px;
            gap: 15px;
        }

        #location-form-wrapper .mobile-button {
            max-width: 95%;
            margin: 0px;
            font-size: 22px;
        }

        #location-form-wrapper .recaptcha_render {
            position: relative;
            transform: none;
            margin-top: 9px;
            transform: scale(.9);
        }
    }

    @media screen and (max-width:992px) {
        #location-form-wrapper .hideSection {
            display: none;
        }
    }

    #location-form-wrapper .mobileSectionForm {
        margin-left: calc(-50vw + 50%);
        width: 100vw;
        background-color: #004c97;
        color: white;
    }

    #location-form-wrapper .br {
        padding: 10px;
    }

    .checkbox_services label {
        padding-right: 10px;
    }

    .checkbox_services label input {
        vertical-align: middle;
        margin-right: 2px;
    }

    .first-last-holder {
        display: flex;
        gap: 15px;
        width: 100%;
    }

    @media screen and (max-width: 450px) {
        .first-last-holder {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
    }
</style>
<div id="location-form-wrapper">

    <?php

    if (wp_is_mobile()) :

    ?>
        <div class="mobile-red-banner">
            <p class="text-center mb-0 p-2"><strong> <?= isset($content_array['red-banner-text']) ? $content_array['red-banner-text'] : "HOMEOWNERS"; ?></strong></p>
        </div>
    <?php

    else :

    ?>
        <div class="container d-flex flex-row w-100 justify-content-between position-absolute text-white hideSection" style="padding-top:14px;font: normal normal bold 26px/14px Barlow;">
            <strong class=" mx-auto text-center hideSection"> <?= isset($content_array['red-banner-text']) ? $content_array['red-banner-text'] : "HOMEOWNERS"; ?> </strong>
            <strong class=" mx-auto text-center hideSection"> <?= isset($content_array['blue-banner-text']) ? $content_array['blue-banner-text'] : 'START SAVING NOW!'; ?> </strong>
            <strong class=" mx-auto text-center hideSection"> <?= isset($content_array['orange-banner-text']) ? $content_array['orange-banner-text'] : 'Call (480) 863-0024'; ?> </strong>
        </div>
        <img class="w-100 hideSection" src="https://smpbackup.wpengine.com/wp-content/themes/semper-solaris/assets/img/location/SMP-FormFill-Colored-Bar.svg" alt="banner icon" />
    <?php

    endif;

    if (!wp_is_mobile()) :

    ?>

        <img class="w-100 hideSection" style="position:relative; margin-bottom:-15px" src="https://smpbackup.wpengine.com/wp-content/themes/semper-solaris/assets/img/location/SMP-Fill-Out-Form-Below-White-Rectangle.svg" alt="banner icon" />

    <?php

    endif;

    ?>
    <div class="mobileSectionForm">
        <p class="text-center m-0 pt-4" style="padding-bottom: 9px;"><strong><?= isset($content_array['blue-banner-text']) ? $content_array['blue-banner-text'] : 'START SAVING NOW!!!'; ?></strong></p>
        <a class="orange-cta-btn-form rounded mx-auto mobile-button" href="tel:+14808630024" style="padding: 10px 50px;"><strong><?= isset($content_array['orange-banner-text']) ? $content_array['orange-banner-text'] : 'Call (480) 863-0024'; ?></strong> </a>
        <p class="text-center m-0 pb-4" style="padding-top:12px"><strong>Or fill-out form below</strong></p>
    </div>
    <div id="hf_container"></div>
</div>
<script src="/wp-content/themes/semper-arizona-child/js/location-pages-form.js"></script>