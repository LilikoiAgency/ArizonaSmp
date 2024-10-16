<?php

/**
 * Template Name: About Us
 */
$thumb = get_the_post_thumbnail_url();
$style = <<<STYLE
<style class="page-css" type="text/css">
    .header {
        background: url('{$thumb}') 50% 50% no-repeat;
        background-color: darkgrey;
        background-size: cover;
        padding-left: 0 !important;
        max-width: 1200px !important;
        margin-top: 25px;
    }

    .inner-content-wrapper {
        background-color: rgba(255, 255, 255, .75);
        color: black;
        width: 33%;
        padding: 15px;
    }

    .inner-content-holder {
        display: flex;
        flex-direction: column;
        justify-content: space-around;
    }

    .inner-content-wrapper img {
        display: none;
    }

    @media screen and (max-width:660px) {
        .header {
            background: none;
            background-color: none;
            margin-top: 0;
            padding: 0;
        }

        .img-width {
            display: none;
        }

        .inner-content-wrapper {
            background-color: none;
            width: 100%;
            padding: 0;
        }

        .inner-content-wrapper img {
            display: inline-block;
        }

        .inner-content-holder {
            padding: 15px;
        }
    }

    a.book-appointment {
        cursor:pointer;
        background-color: #ce0109 !important;
        color: white !important;
        font-weight: 700 !important;
        padding: 4px 24px !important;
        font-size: 19px;
        border-radius: 3px;
        max-height: 39px;
    }
</style>
<style class="page-css" type="text/css">
    .meet-the-owners {
        width: 60rem;
    }

    .owner-cards .card {
        width: 30rem;
    }

    @media screen and (max-width: 576px) {
        .meet-the-owners {
            width: auto;
        }

        .owner-cards .card {
            width: auto;
        }
    }

    .featured-vet {
        background: url("/wp-content/uploads/2022/05/05-02-SMP-Employees-Image-034.jpg") center no-repeat;
        background-size: cover;
    }

    @media screen and (max-width:576px) {
        .featured-vet {
            height: 55vw;
        }
    }
</style>
STYLE;
new Page_CSS($style);

get_header();

?>
<!-- HERO START  -->
<section class="container-sm header">
    <div class="overlay position-absolute w-100"></div>
    <article class="inner-content-wrapper">
        <?php

        if (!empty($content_array['mobile-featured-img'])) :
            echo '<div class="mw-100 text-center" > ';
            echo $content_array['mobile-featured-img'];
            echo '</div>';
        else :
            echo '<img class="mx-auto" src="' . $thumb . '" alt="">';
        endif;

        ?>
        <div class="inner-content-holder">
            <?php the_title('<h2 class="fw-bold">', '</h2>'); ?>
            <p><?php echo isset($content_array['hero-article']) ? $content_array['hero-article'] : ' We are glad to be a top solar, battery storage, and roofing provider and to introduce our items for a developing client base. We have gotten various honors, keep an A rating with the Better Business Bureau, and depend on references from blissful clients as a significant piece of our business. The proof is in the pudding.' ?>
            </p>
        </div>
    </article>
</section>
<!-- HERO END -->
<div class="bottom-border mb-5"></div>
<section>
    <div class="container my-5 pb-4">
        <?php

        get_template_part('template-parts/horizontal', 'form')
        
        ?>
    </div>
</section>
<div class="bottom-border mb-5"></div>
<main>
    <section class="mx-auto" style="max-width: 1100px;">
        <div class="container p-5">
            <div class="border-top border-bottom text-center pt-4">
                <p><strong>Semper&nbsp;Solaris</strong> was built on the military values of loyalty, duty, respect, selfless service, honor, integrity, and personal courage.</p>
                <p>At Semper Solaris, we bring the same <strong>discipline</strong> and <strong>attention to detail</strong> we gained in the military to all of our projects.</p>
                <p class="lead" role="heading"><em role="heading">We do everything we can to exceed the expectations of our customers</em>.</p>
            </div>
        </div>
    </section>
    <section class="mx-auto" style="max-width: 1100px;">
        <div class="container-fluid my-5 mx-auto">
            <h2 class="meet-the-owners text-uppercase font-weight-bold mx-auto">Meet the Owners</h2>
            <div class="owner-cards d-flex flex-column flex-sm-row justify-content-around rounded">
                <div class="card mb-5 mb-sm-0 mr-md-2">
                    <picture style=" width:100%;height:288px;">
                        <source type="image/webp" data-srcset="https://www.sempersolaris.com/wp-content/themes/semper-solaris/dist/img/about/kelly-shawhan-semper-solaris.webp" data-sizes="375w" sizes="375w" srcset="https://www.sempersolaris.com/wp-content/themes/semper-solaris/dist/img/about/kelly-shawhan-semper-solaris.webp">
                        <source type="image/jpg" data-srcset=https://www.sempersolaris.com/wp-content/themes/semper-solaris/dist/img/about/kelly-shawhan-semper-solaris.jpg" data-sizes="375w" sizes="375w" srcset="https://www.sempersolaris.com/wp-content/themes/semper-solaris/dist/img/about/kelly-shawhan-semper-solaris.jpg">
                        <img class="card-img center-block lazy loaded" data-src="https://smpbackup.wpengine.com/wp-content/themes/semper-solaris/dist/img/about/kelly-shawhan-semper-solaris.jpg" data-srcset="https://www.sempersolaris.com/wp-content/themes/semper-solaris/dist/img/about/kelly-shawhan-semper-solaris.jpg" alt="Kelly Shawhan Co-Owner of Semper Solaris" height="225" width="375" srcset="https://www.sempersolaris.com/wp-content/themes/semper-solaris/dist/img/about/kelly-shawhan-semper-solaris.jpg" src="https://smpbackup.wpengine.com/wp-content/themes/semper-solaris/dist/img/about/kelly-shawhan-semper-solaris.jpg" data-was-processed="true">
                    </picture>
                    <div class="card-body">
                        <h2 class="card-title text-uppercase pb-0 mb-0">Kelly Shawhan</h2>
                        <h3 class="mt-0"> Co-Owner </h3>
                        <p class="card-text">Kelly Shawhan is a former United States Marine Corps Captain who has been a contractor for over 20 years. He is a cum laude business school graduate from Miami University of Ohio, often referred to as “the Yale of the Midwest,” where he went to school on a full military scholarship.</p>
                    </div>
                </div>
                <div class="card mb-5 mb-sm-0 mr-md-2">
                    <picture style=" width: 100% ; height: 288px;">
                        <source type="image/webp" data-srcset="https://www.sempersolaris.com/wp-content/themes/semper-solaris/dist/img/about/john-almond-semper.webp" data-sizes="375w" sizes="375w" srcset="https://www.sempersolaris.com/wp-content/themes/semper-solaris/dist/img/about/john-almond-semper.webp">
                        <source type="image/jpg" data-srcset="https://www.sempersolaris.com/wp-content/themes/semper-solaris/dist/img/about/john-almond-semper.jpg" data-sizes="375w" sizes="375w" srcset="https://www.sempersolaris.com/wp-content/themes/semper-solaris/dist/img/about/john-almond-semper.jpg">
                        <img class="card-img center-block lazy loaded" data-src="https://smpbackup.wpengine.com/wp-content/themes/semper-solaris/dist/img/about/john-almond-semper.jpg" data-srcset="https://www.sempersolaris.com/wp-content/themes/semper-solaris/dist/img/about/john-almond-semper.jpg" alt="John Almond Co-Owner of Semper Solaris" height="225" width="375" srcset="https://www.sempersolaris.com/wp-content/themes/semper-solaris/dist/img/about/john-almond-semper.jpg" src="https://smpbackup.wpengine.com/wp-content/themes/semper-solaris/dist/img/about/john-almond-semper.jpg" data-was-processed="true">
                    </picture>
                    <div class="card-body">
                        <h2 class="card-title text-uppercase pb-0 mb-0">John Almond</h2>
                        <h3 class="mt-0"> Co-Owner </h3>
                        <p class="card-text">John Almond has been a leader in the business world for 20 years, with a specialty in construction for over a decade. Six years ago, John evolved his focus to renewable energy as it was the wave of the future as well as an ethical center for his talents.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container" style="max-width:1100px">
            <div class="card mb-3" style="border:none !important;">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <div class="card-body">
                            <h3 class="card-title text-uppercase">PROUD VETERAN-OWNED COMPANY IN AMERICA</h3>
                            <p class="card-text">At Semper Solaris, we are focused on recruiting individuals from our military as they normally share a similar uprightness, devotion, and obligation found at the center of our organization.</p>
                            <a class="btn-red book-appointment btn btn-lg py-3 px-5 mb-4 font-weight-bold text-uppercase text-white bg-semper-red" href="/meet-our-vets/" target="_blank" role="button">Meet Our Vets</a>
                        </div>
                    </div>
                    <div class="featured-vet col-md-6 rounded">
                        <!-- <picture>
                            featured-vet add this to class to show featured vet img
                            <source type="image/webp" data-srcset="https://www.sempersolaris.com/wp-content/themes/semper-solaris/dist/img/about/meet-our-vets.webp" data-sizes="375w" sizes="375w" srcset="https://www.sempersolaris.com/wp-content/themes/semper-solaris/dist/img/about/meet-our-vets.webp">
                            <source type="image/jpg" data-srcset="https://www.sempersolaris.com/wp-content/themes/semper-solaris/dist/img/about/meet-our-vets.jpg" data-sizes="375w" sizes="375w" srcset="https://www.sempersolaris.com/wp-content/themes/semper-solaris/dist/img/about/meet-our-vets.jpg">
                            <img class="lazy as-center loaded" data-src="https://smpbackup.wpengine.com/wp-content/themes/semper-solaris/dist/img/about/meet-our-vets.jpg" data-srcset="https://www.sempersolaris.com/wp-content/themes/semper-solaris/dist/img/about/meet-our-vets.jpg" alt="Meet Our Veterans" height="290" width="478" srcset="https://www.sempersolaris.com/wp-content/themes/semper-solaris/dist/img/about/meet-our-vets.jpg" src="/wp-content/themes/semper-solaris/dist/img/about/meet-our-vets.jpg" data-was-processed="true">
                        </picture> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    //get_template_part("template-parts/semper_cares", "banner");
    ?>
    <!-- <style>
        .join-us {
            background: url('/wp-content/uploads/2021/05/teamwork-semper-style.jpg') center 45% no-repeat;
            background-size: cover;
        }

        .join-us>.career-overlay {
            background-color: rgba(0, 0, 0, .5);
        }
    </style>
    <div class="join-us bg-white">
        <div class="career-overlay">
            <div class="container d-flex flex-column flex-md-row">
                <div class="container col-12 col-md-9">
                    <h2 class="display-4 text-white p-0">Join Our Team!</h2>
                    <p class="lead text-white">We want problem-solvers, self-motivators & action-oriented thinkers.</p>
                </div>
                <div class="d-flex flex-column justify-content-center col-12 col-md-3">
                    <a class="book-appointment btn btn-lg py-3 px-5 mb-4 font-weight-bold text-uppercase text-white bg-semper-red" style="cursor:pointer" href="/careers/" role="button">Apply Now</a>
                </div>
            </div>
        </div>
    </div> -->
</main>



<?php
get_footer();
?>