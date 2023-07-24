<?php

/**
 * Template Name: Careers
 */

$style = <<<STYLE
<style class="page-css" type="text/css">
    .mw-800 {
        max-width: 800px
    }

    @media screen and (max-width: 576px) {
        .video-aspect-ratio-mobile {
            width: 100%;
            height: calc((100vw/16) * 9);
        }
    }

    #meet-buttons {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin: 20px 0 10px 0
    }

    #meet-buttons a {
        margin: 20px 10px;
        -webkit-transition: all .2s ease;
        -o-transition: all .2s ease;
        transition: all .2s ease
    }

    #meet-buttons a:hover {
        -webkit-transform: scale(1.1);
        -ms-transform: scale(1.1);
        transform: scale(1.1);
        -webkit-transition: all .2s ease;
        -o-transition: all .2s ease;
        transition: all .2s ease
    }
</style>
STYLE;
new Page_CSS($style);

get_header();

?>
<section class="text-center container">
    <div class="row py-lg-5">
        <div class="col-12 mx-auto">
            <h2 class="fw-bold mt-5 mt-md-0 mb-5">WANT TO JOIN ONE OF THE FASTEST GROWING SOLAR <br />AND ROOFING INSTALLATION COMPANIES IN THE NATION?</h2>
            <hr />
            <iframe class="mt-5 video-aspect-ratio-mobile" width="560" height="315" src="https://www.youtube.com/embed/ESHP0pWDGdk" title="Semper Solaris is Now Hiring! We offer Competitive Pay, Benefits, Paid-Time Off, and much more!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="my-4">
                <p class="lead col-12 col-md-6 mx-auto">We are always looking for problem solvers, self-motivators and action-oriented thinkers to join our team!</p>
                <p class="lead col-12 col-md-6 mx-auto">We offer competitive pay, benefits, paid-time off, and more!</p>
                <h3 class="mb-4"><em>We love to hire as many veterans as possible.</em></h3>
                <hr class="w-50 mx-auto" />
                <p class="lead fw-bold my-5">Apply below!</p>
                <p>For more information, contact <a href="mailto:hr@sempersolaris.com">hr@sempersolaris.com</a>.</p>
            </div>
        </div>
    </div>
</section>
<section class="text-center container">
    <div class="row border rounded mx-auto mw-800">
        <iframe id="resumator-job-frame" src="https://careers-sempersolaris.icims.com/jobs/search?ss=1&amp;in_iframe=1" name="resumator-job-frame" width="100%" style="width:100%;height:100vh" frameborder="0" scrolling="yes"></iframe>
    </div>
</section>
<hr class="w-50 mx-auto my-5" />
<section class="text-center container my-5">
    <div class="row">
        <div class="col-12 col-md-6">
            <iframe class="video-aspect-ratio-mobile" width="560" height="315" src="https://www.youtube.com/embed/OpqutZAWPc4" title="Meet Our Vets: Sean - Semper Solaris Supports Veterans | Giving Veterans Work Opportunities" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-12 col-md-6">
            <iframe class="video-aspect-ratio-mobile" width="560" height="315" src="https://www.youtube.com/embed/-Q9JiwmySfg" title="Meet our Vets: David Fox- Semper Solaris Supports our Veterans | Solar Job Opportunities Available" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <div id="meet-buttons">
        <a href="https://www.sempersolaris.com/about-us/#meet-the-owners">
            <img src="https://www.sempersolaris.com/wp-content/uploads/2018/07/SMP-MeetTheOwners-Button.jpg" alt="Meet the Owners" title="Meet the Owners">
        </a>
        <a href="https://www.sempersolaris.com/about-us/#meet-our-vets">
            <img src="https://www.sempersolaris.com/wp-content/uploads/2018/07/SMP-MeetOurVets-Button.jpg" alt="Meet Our Vets" title="Meet Our Vets">
        </a>
    </div>
</section>
<?php

get_footer();
