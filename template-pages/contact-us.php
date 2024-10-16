<?php

/**
 * Template Name: Contact Us
 */

$style = <<<STYLE
<style class="page-css" type="text/css">
    #hero_boundary {
        margin-bottom: 80px;
        width: 100%;
        height: 20px;
        background-image: var(--semper-blue-gradient);
    }

    header.contact {
        background-image: url("https://www.sempersolaris.com/wp-content/uploads/2020/12/fiarbanksranch-1.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }

    #not_a_customer {
        width: 100%;
        background-color: #eee;
        background-image: -o-linear-gradient(left, #eee, white, white, #eee);
        background-image: -webkit-gradient(linear, left top, right top, from(#eee), color-stop(white), color-stop(white), to(#eee));
        background-image: linear-gradient(to right, #eee, white, white, #eee);
    }

    .cta .content {
        border: 1px solid lightgray;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
        max-height: 117.5px;
    }

    .ada-button-frame {
        right: -128px !important;
    }

    .drift-frame-chat,
    .drift-frame-controller {
        z-index: 10009 !important;
    }

    @media screen and (max-width:968px) {
        #hero_container>div:first-of-type p,
        #hero_container>div:first-of-type address {
            font-size: 14px;
        }

        #hero_container img {
            max-width: 400px;
        }

        #not_a_customer>div {
            width: 80%;
        }

        .cta .content {
            text-align: center;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 0;
            border-top-left-radius: 5px;
        }
    }

    @media screen and (max-width:768px) {
        .cta .content {
            margin-bottom: 0;
        }

        .drift-frame-controller {
            position: relative;
            right: -250px;
        }
    }
</style>
STYLE;
new Page_CSS($style);

get_header();

?>
<header class="contact">
    <div class="p-5 rounded-3" style="background-color: rgba(255,255,255,.9);">
        <div class="col-md-8 mx-auto">
            <div class="row mx-auto g-0 border rounded overflow-hidden flex-md-row mb-4 h-md-250 position-relative" style="box-shadow: 0 3px 10px rgba(0,0,0,.3);max-width: 960px;">
                <div class="col p-4 d-flex flex-column justify-content-center position-static bg-white">
                    <h2 class="m-0 fw-bold">Semper Solaris</h2>
                    <p style="margin: 0 0 10px;font-style:italic;">Solar, Roofing, and Battery Storage</p>
                    <a href="https://appointment.sempersolaris.com/" class="rounded"><button type="button" class="btn btn-danger text-uppercase fw-bold w-100 py-3 fs-5">Book An Appointment</button></a>
                </div>
                <div class="col-auto d-none d-xl-block p-0">

                    <?php

                    if (!wp_is_mobile()) :

                    ?>
                        <div>
                            <img src="https://smpbackup.wpengine.com/wp-content/uploads/2019/11/solaredge-install-garage-478x290.jpg" width="500" height="303.34" style="width:100%" alt=" happy employees" />
                        </div>
                    <?php

                    endif;

                    ?>

                </div>
            </div>
        </div>
    </div>
</header>
<div id="hero_boundary" class="blue-bg-g"></div>

<div class="container">
    <?php

    get_template_part("template-parts/horizontal", "form");

    ?>
</div>

<main>
    <section id="card_container" class="container py-5">
        <div class="d-flex justify-content-center flex-wrap gap-3">
            <div class="card col-sm-3" style="min-width: 333px;">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div>
                        <h2 class="text-center text-uppercase fw-bold py-3">Help Center</h2>
                        <p>Search FAQs and other useful information at your convenience.</p>
                    </div>
                    <a href="https://help.sempersolaris.com/"><button class="btn btn-red w-100 fw-bold py-2">Help Center</button></a>
                </div>
            </div>
            <div class="card col-sm-3" style="min-width: 333px;">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div>
                        <h2 class="text-center text-uppercase fw-bold py-3">Contact Support</h2>
                        <p>Chat with us!</p>
                        <p>Our virtual assistant can provide support with an ongoing project or a service request 24/7.</p>
                        <p>If your question cannot be quickly answered, one of our team members will review and reply.</p>
                    </div>
                    <a href="https://www.sempersolaris.com/contact-us/?chat_with_us=1"><button class="btn btn-red btn-padding w-100 fw-bold py-2">Chat with Us</button></a>
                </div>
            </div>
            <div class="card col-sm-3" style="min-width: 333px;">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div>
                        <h2 class="text-center text-uppercase fw-bold py-3">Phone</h2>
                        <p>Phone support is available for customers who want to speak with a member or our team.</p>
                        <p>We can be reached at <a href="tel:+19727162998">(972) 716-2998</a>.</p>
                    </div>
                    <a href="tel:+19727162998"><button class="btn btn-red btn-padding w-100 fw-bold py-2">Call Us</button></a>
                </div>
            </div>
        </div>
    </section>

    <section id="not_a_customer">
        <div class="py-5 border mx-auto">
            <h3 class="text-center"><a href="https://appointment.sempersolaris.com/" class="text-decoration-none text-black"><strong>Not yet a customer?</strong> Click here to start your project!</a></h3>
        </div>
    </section>
    <section class="container" style="margin-bottom: 40px;">
        <div class="cta">
            <div class="container my-5">
                <div class="d-flex row justify-content-center">
                    <div class="col-md-3 text-center text-white p-2 blue-background d-flex flex-column justify-content-center">
                        <h3 class="h4 text-uppercase fw-bold">Current Offers </h3>
                        <a class="btn-red py-3" href="/current-offers/"> View our Deals </a>
                    </div>
                    <div class="col-md-5 p-2 border">
                        <p class="card-text fw-light p-2">If you are searching for <strong>amazing deals</strong> on solar, battery storage, roofing, heating or air conditioning, you have come to the right spot! Come browse our available ongoing deals that will make caring for your home more affordable.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr style="border-bottom: none;border-color:rgba(0, 0, 0, .3)" />
</main>

<?php

get_footer();
