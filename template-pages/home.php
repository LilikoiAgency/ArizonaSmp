<?php

/**
 * Template Name: HOME
 */

$style = <<<STYLE
<style class="page-css" type="text/css">
    @media screen and (max-width: 740px){
        .top-banner p {
            margin: 0 !important;
            font-weight: 700;
            font-size: 18px !important;
            padding: 8px;
            line-height: 1.1;
        }
    }

    .hero-black-box-container {
        color: white;
        background: #171717CC 0% 0% no-repeat padding-box;
        padding: 20px 80px;
        width: fit-content;
        margin: auto;
        position: relative;
        line-height: 40px;
        margin-top: -480px;
    }

    .font-size-36 {
        font-size: 36px;
    }

    .font-size-66 {
        font-size: 66px;
        font-weight: 500;
    }

    .font-size-28 {
        font-size: 28px;
    }


    .red-banner-container {
        text-decoration: none;
        color: white !important;
        background-color: #CE0109;
        width: 250px;
        height: 45px;
        margin: auto;
        text-align: center;
        font-size: 22px;
        display: flex;
        justify-content: center;
        clip-path: polygon(0 0, 100% 0, 90% 100%, 10% 100%);
    }

    .red-banner-container img {
        vertical-align: text-bottom;
        margin-right: 5px;
    }

    .red-banner-container p {
        margin-bottom: 0px;
        margin: auto;
    }

    .other-vertical-holder {
        display: flex;
        justify-content: center;
        gap: 30px;
    }

    .hero-vertical-title {
        color: white;
        font-size: 36px;
        margin-bottom: -40px;
        position: absolute;
        z-index: 5;
        font-weight: 500;
        width: 582px;
        margin: auto;
        margin-top: 20px;
        line-height: 40px;
    }

    .card-seperator {
        height: 100px;
    }

    .other-vertical-cards {
        border-left: solid 6px white;
        border-top: solid 6px white;
        border-right: solid 6px white;
    }

    .br {
        display: none
    }

    .solar-header {
        background-image: url("/wp-content/uploads/2023/04/arizona-best-solar-installation-companies-az.jpeg");
        background-size: cover;
        background-position: center 10%;
        width: 100%;
        height: 600px;
    }

    @media only screen and (max-width: 1900px) {
        .hero-black-box-container {
            margin-top: -30%;
        }

        .card-seperator {
            height: 100px;
        }
    }

    @media only screen and (max-width: 1600px) {
        .hero-black-box-container {
            margin-top: -31%;
        }

        .card-seperator {
            height: 90px;
        }

        .other-vertical-cards {
            width: 490px;

        }

        .other-vertical-holder {
            gap: 50px;
        }

        .hero-vertical-title {
            width: 490px;
        }
    }

    @media (max-width: 600px) {
        .solar-header {
            background-image: url("/wp-content/uploads/2023/06/best-solar-company-in-phoenix.jpeg");
            background-size: cover;
            background-position: center top;
            width: 100%;
            height: 350px;
        }

        .hero-black-box-container {
            color: white;
            background: #171717CC 0% 0% no-repeat padding-box;
            padding: 20px 10px;
            padding-bottom: 20px;
            width: fit-content;
            position: relative;
            line-height: 20px;
            margin-top: -305px;
        }

        .font-size-36 {
            font-size: 20px;
            margin-bottom: 6px;
            display: none;
        }

        .font-size-66 {
            font-size: 30px;
            margin-bottom: 8px;
        }

        .font-size-28 {
            font-size: 19px;
            margin-bottom: 0px;
            line-height: 24px;
        }

        .font-size-28 a {
            font-size: 22px;
        }

        .red-banner-container {
            width: 162px;
            height: 33px;
            font-size: 17px;

        }

        .red-banner-container img {
            width: 18px;
            font-size: 18px;
            margin-right: 2px;
            vertical-align: sub;
        }

        body>main>section.mx-auto>div:nth-child(1)>a {
            width: 200px;
        }

        .card-seperator {
            height: 80px;
        }

        .hero-vertical-title {
            width: 160px;
            font-size: 19px;
            line-height: 20px;
            font-weight: 500;
            margin-top: 5px;
        }

        .other-vertical-holder {
            gap: 10px;
        }

        .other-vertical-cards {
            border-left: solid 4px white;
            border-top: solid 4px white;
            border-right: solid 4px white;
            width: 170px;

        }

        .other-vertical-cards picture img {
            width: 100%;
        }

        .br {
            display: block
        }

        .red-banner-container p {
            font-size: 14px;
        }
    }

    p {
        font-size: 18px;
    }

    .solar-quick-points {
        font-size: 18px;
        font-weight: 500;
        margin-left: 15px;
        padding: 0;
        list-style-type: none;
    }

    .solar-quick-points li {
        background: url("/wp-content/themes/semper-arizona-child/assets/icons/SMP-Checkmark-Green-Circle.svg") no-repeat left;
        margin-top: 5px;
        padding-left: 20px;
    }

    .vertical-link {
        font-size: 20px;
    }
</style>
STYLE;
new Page_CSS($style);

get_header();

?>
<main>
    <?php

    get_template_part('template-parts/home', 'hero');

    ?>
    <div class="px-md-4 pt-md-5 mt-md-5 pb-2 mb-2 text-start">
        <div class="col-lg-10 mx-auto ">
            <div class="d-grid gap-md-5 d-sm-flex justify-content-sm-center">
                <a onclick="ga('gtm1.send', 'event', 'Home', 'Page', 'SolarImage');" href="/solar-panels/" class="text-center">
                    <picture>
                        <source srcset="/wp-content/uploads/2023/04/arizona-solar-section.png" media="(min-width: 500px)">
                        <img loading="lazy" class=" rounded-0" width="600" src="/wp-content/uploads/2023/04/arizona-solar-section.png" alt="Top solar companies in Arizona" />
                    </picture>
                </a>

                <div class="col-md-6 d-flex flex-column justify-content-center mb-auto px-2 " style="max-width:600px;">
                    <h2 class="display-5 text-start"> Solar Panel Installation </h2>
                    <h6 class="h4 text-start mb-0"> Helping Arizona Become Energy Independent! </h6>
                    <hr style="width:65px; border: 1px solid #19A33D; height:0px; opacity: 1;">
                    <p>Solar panels help offset energy costs by converting sunlight into electricity, which can be used to power your home. With the frequency of blackouts in Arizona, solar roofing with a backup battery is perfect for when the power goes out. Other benefits of solar panels include being low maintenance and cost-effective. Above all else, solar panels take advantage of Arizona’s copious sunshine and turn it into renewable energy.</p>

                    <ul class="solar-quick-points">
                        <li>Local & Veteran Owned</li>
                        <li>Solar Panels Made In America</li>
                        <li>Solar Experts </li>
                        <li>Award Winning Installation </li>
						<li>Among the Top Solar Companies in Arizona </li>
                    </ul>

                    <a itemprop="url" href="https://appointment.sempersolaris.com/" class="learn-more-btn text-white text-decoration-none" >
                        <span class="learn-more-text ">Book Appointment</span>
                        <span class=" learn-more-icon">
                            <img loading="lazy" style="margin-top: 10px;" src="/wp-content/themes/semper-arizona-child/assets/icons/horizontal form/SMP CTA Button Circle Arrow.svg" alt=" White Arrow inside circle " />
                        </span>
                    </a>
                    <br />
                    <a class="vertical-link" href="/solar-panels/">Click for more information about solar panels ➜</a>
                </div>
            </div>
        </div>
		
    </div>
	
	
		 <style>
        .news-section{
            display: flex;
            flex-direction: row;
            max-width: 1200px;
            justify-content: space-around;
            padding: 30px 10px;
            margin: 5% auto;
            flex-wrap: wrap;
            background-color: #D9CAB366;
            /* color:white; */
        }
        .news-section video{
            width: 100%;;
        }
        .news-section h2{
            font-size: 2rem;
        }
    </style>

    <section class="news-section" >
        <div class="" style="max-width:500px;">
            <h2 style="background-color: #ce0109;color: white;padding: 10px;">Watch The Latest Media Coverage For Project Uniform</h2>
            <h3> Semper Solaris Gives Back </h3>
            <p style="margin-bottom:0px;"> On Independence Day 2023, The Semper Cares Initiative and its partners give back to a Veteran with a complete solar system.</p>
        </div>
        <div class="">
            <video  width="480" height="260" controls poster="/wp-content/uploads/2023/07/SMP-Cares-Project-Uniform-Thumbnail.png">
                <source src="/wp-content/uploads/2023/07/ProjectUniformCompressed_07062023_1.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>        </div>
    </section>
	

    <section class="container my-5">
        <?php
        get_template_part("template-parts/horizontal", "form");
        ?>
    </section>
    <div class="px-md-4 py-5 my-md-5 text-start">
        <div class="col-lg-10 mx-auto ">
            <h2 class="display-5 text-md-center px-2"> Home Battery Storage </h2>
            <h6 class="h4 text-md-center mb-md-0 px-2">Say No To Power Outages Say Yes To Energy Security! </h6>
            <div class="d-grid gap-md-5 pt-md-5 d-sm-flex justify-content-sm-center">

                <?php if (wp_is_mobile()) : ?>
                    <a onclick="ga('gtm1.send', 'event', 'Home', 'Page', 'SolarImage');" href="/battery-storage/" class="text-center ">
                        <picture>
                            <source srcset="/wp-content/uploads/2023/03/Tesla-Powerwall-Battery-Storage-System.jpg" media="(min-width: 500px)">
                            <img loading="lazy" class=" rounded-0" width="800" src="/wp-content/uploads/2023/03/Tesla-Powerwall-Battery-Storage-System.jpg" alt="Best Battery storage company in Phoenix, Arizona and top arizona solar company" />
                        </picture>
                    </a>
                <?php endif; ?>

                <div class="col-md-6 d-flex flex-column justify-content-center mb-auto px-2 " style="max-width:600px;">

                    <p>Solar panels handle a lot of heavy lifting while the Sun is out and route any excess power back to the grid. However, a backup battery enables you to store excess energy and use it at night or during emergencies.
                        In addition to reducing your carbon footprint and saving on electric bills, solar battery storage is a great way to establish energy independence. A solar system paired with a backup battery is more reliable during emergencies than a solar system alone.
                        Semper Solaris is more than ready to help you harness the full power of the Sun. Book an appointment with our solar experts, or learn more about solar battery storage.
                    </p>

                    <ul class="solar-quick-points">
                        <li>Tesla Powerwall Certified Installer</li>
                        <li>Reliable Battery Storage</li>
                        <li>Energy security </li>
                        <li>Award Winning Installation </li>
						<li>One of the Top Solar Companies in Arizona </li>
                    </ul>

                    <a itemprop="url" href="https://appointment.sempersolaris.com/" class="learn-more-btn text-white text-decoration-none">
                        <span class="learn-more-text ">Book Appointment</span>
                        <span class=" learn-more-icon">
                            <img loading="lazy" style="margin-top: 10px;" src="/wp-content/themes/semper-arizona-child/assets/icons/horizontal form/SMP CTA Button Circle Arrow.svg" alt=" White Arrow inside circle " />
                        </span>
                    </a>
                    <br />
                    <a class="vertical-link" href="/battery-storage/">Is battery storage right for you? ➜</a>
                    <br>
                </div>

                <?php if (!wp_is_mobile()) : ?>
                    <a onclick="ga('gtm1.send', 'event', 'Home', 'Page', 'SolarImage');" href="/battery-storage/" class="text-center">
                        <picture>
                            <source srcset="/wp-content/uploads/2023/03/Tesla-Powerwall-Battery-Storage-System.jpg" media="(min-width: 500px)">
                            <img loading="lazy" class=" rounded-0" width="800" src="/wp-content/uploads/2023/03/Tesla-Powerwall-Battery-Storage-System.jpg" alt="Best Battery storage company in Phoenix, Arizona" />
                        </picture>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="px-md-4 py-md-5 my-md-5 text-start">
        <div class="col-lg-10 mx-auto ">
            <div class="d-grid gap-md-5 pt-md-5 d-sm-flex justify-content-sm-center">
                <a onclick="ga('gtm1.send', 'event', 'Home', 'Page', 'SolarImage');" href="/roofing/" class="text-center">
                    <picture>
                        <source srcset="/wp-content/uploads/2023/04/best-roofers-in-arizona-1.jpg" media="(min-width: 500px)">
                        <img loading="lazy" class=" rounded-0" width="800" src="/wp-content/uploads/2023/04/best-roofers-in-arizona-1.jpg" alt="top roofers in Arizona" />
                    </picture>
                </a>
                <div class="col-md-6 d-flex flex-column justify-content-center my-auto px-2 " style="max-width:600px;">
                    <h2 class="display-5"> Complete Roofing Services </h2>
                    <h6 class="h4 mb-0"> Top quality roofing services backed with a 50 year warranty </h6>
                    <hr style="width:65px; border: 1px solid #19A33D; height:0px; opacity: 1;">

                    <p>Your roof is a significant part of your home. Before adding solar paneling to your home, we analyze if your roof can bear their weight. If it can’t, it often means your roof needs repairs or replacing before installing solar panels. Still, having your roof repaired or replaced is a great long-term investment. It saves the hassle of removing solar panels to repair or replace the roof later. More, solar panels add another layer of protection and help extend the life of your roof. The solar experts at Semper Solaris have as much experience repairing and replacing roofs as they do in solar roof installation. Have a chat with our roofing experts today and form the foundation of your energy independence. Or, learn more about roofing.
                    </p>

                    <ul class="solar-quick-points">
                        <li>50 Year warranty</li>
                        <li>Cool Roof Technology</li>
                        <li>Owens Corning Preferred Contractor </li>
                        <li>Total Protection Roofing System </li>
                    </ul>

                    <a itemprop="url" href="https://appointment.sempersolaris.com/" class="learn-more-btn text-white text-decoration-none">
                        <span class="learn-more-text ">Book Appointment</span>
                        <span class=" learn-more-icon">
                            <img loading="lazy" style="margin-top: 10px;" src="/wp-content/themes/semper-arizona-child/assets/icons/horizontal form/SMP CTA Button Circle Arrow.svg" alt=" White Arrow inside circle " />
                        </span>
                    </a>
                    <br />
                    <a class="vertical-link" href="/roofing/">Learn about our roofing services? ➜</a>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="max-width: 1200px">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col ">
                <h3 class="text-center">MEET OUR VETERANS</h3>
                <div class="card shadow-sm">
                    <picture>
                        <img alt="Veteran David Fox" style="height:180px" loading="lazy" class="card-img-top" width="180" height="225" src="/wp-content/uploads/2022/06/06-08-SMPFL-HomePg-MeetOurVets-379x180-1.jpg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Meet Our Vets" />
                    </picture>

                    <div class="card-body d-flex justify-content-between flex-column" style="min-height: 245px ">
                        <blockquote class="text-center">“We hire as many veterans as possible” <br>
                            <cite class="author text-start ">--Kelly Shawhan. Co-Founder </cite>
                        </blockquote>
                        <p class="card-text">Meet Sergeant Major David Fox who is Semper's Warehouse Manager. Click here to see his story and various others.</p>

                        <a class="btn-red w-100 py-2" href="/meet-our-vets/"> Meet Our Vets </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <h3 class="text-center">SEMPER CARES INITIATIVE</h3>
                <div class="card shadow-sm">
                    <picture>
                        <source type="image/webp" srcset="/wp-content/uploads/2022/05/05-13-SMPTX-Cares-Home-375x225-1-1.webp">
                        <img loading="lazy" class="bd-placeholder-img card-img-top" width="100%" height="225" src="/wp-content/uploads/2022/05/05-13-SMPTX-Cares-Home-375x225-1.jpg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Semper Cares Previous Awardees" />
                    </picture>

                    <div class="card-body d-flex justify-content-between flex-column" style="min-height:245px">
                        <p class="card-text">Semper Cares Initiative is a program that helps veterans and their families with critical home upgrades.
                        </p>
                        <a class="btn-red w-100 py-2" href="https://www.sempersolaris.com/semper-cares-initiative/">Nominate a deserving veteran!</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <h3 class="text-center">COURTNEY'S CORNER</h3>
                <div class="card shadow-sm">

                    <picture>
                        <img loading="lazy" class="bd-placeholder-img card-img-top" width="100%" height="225" src="/wp-content/uploads/2022/06/06-08-SMPFL-HomePg-CourtneysCorner-379x180-1.jpg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Courtney's Corner">
                    </picture>

                    <div class="card-body  d-flex justify-content-between flex-column" style="min-height: 245px ">
                        <p class="card-text">We love working with our clients, and our social platforms are just a click away. Share a photo of your project, and we could incorporate it beneath!</p>
                        <a class="btn-red w-100 py-2" href="https://www.instagram.com/sempersolaris/"> Follow us on Instagram! </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php

    // get_template_part('template-parts/social', 'media-widgets');

    ?>
    <div class="container my-5">
        <div class="d-flex row justify-content-center">
            <div class="col-md-2 text-center text-white p-2 blue-background ">
                <h3 class="h4">Current Offers </h3>
                <a class="btn-red" href="/current-offers/"> View our Deals </a>
            </div>
            <div class="col-md-5 p-2">
                <p class="card-text fw-light p-2">If you are looking for offers on solar power, battery storages or a new roof you have come to the perfect place! Come look at our deals that will make upgrading your home simple.</p>
            </div>
        </div>
    </div>
</main>

<?php

get_footer();
