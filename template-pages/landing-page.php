<?php
/* Template Name: Paid Landing Page
 * Template Post Type: page, post, location_page */
wp_head();
?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript">
        // GENERATE TCPA FORM FIELDS
        (function() {
            var a = "TCPA_Consent_Form__c",
                c = !1,
                d = !1,
                b = document.createElement("script");
            b.type = "text/javascript";
            b.async = !0;
            b.src = "http" + ("https:" == document.location.protocol ? "s" : "") + "://api.trustedform.com/trustedform.js?provide_referrer\x3d" + escape(c) + "\x26field\x3d" + escape(a) + "\x26l\x3d" + (new Date).getTime() + Math.random() + "\x26invert_field_sensitivity\x3d" + d;
            a = document.getElementsByTagName("script")[0];
            a.parentNode.insertBefore(b, a);
        })();
    </script>
    <noscript>
        <img src="https://api.trustedform.com/ns.gif" alt="Trusted Form pixel" />
    </noscript>
    <script>
        document.addEventListener('wpcf7mailsent', function(event) {
            document.location = "/thank-you/";
        }, false);
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NDX3LZ4');
    </script>
    <!-- End Google Tag Manager -->
</head>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NDX3LZ4" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->



<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    <style>
            @import url('https://fonts.cdnfonts.com/css/american-captain-2');
            .smpFont,
            .smpFont p {
                font-family: 'American Captain', sans-serif !important;
                color: white;
                font-weight: 500;
            }

            h1 {
                font-size: 7em;
                line-height: 150px;
                margin-bottom: 0;
                margin-top: 0;
                text-align:center;
                text-shadow: 2px 2px 5px black;
            }
			.smpFont .top{
				font-size: 175px;
			}
			.smpFont .bottom{
				font-size: 105px;
			}


            h2 {
                font-weight: 500;
            }

            header {
                padding: 50px 10px;
                background: linear-gradient(0deg, rgba(45,59,89,0.6), rgba(45,59,89,0.6)), url(https://smpstage.wpengine.com/wp-content/uploads/2023/05/stars-1-140x57.png);
                background-color: #2D3B59;
                background-repeat: repeat;
                background-position: center center;
                background-attachment: fixed;
                background-size: auto;
                text-align: center;
            }

            .header-inner-wrapper {
/*                 max-width: 800px; */
                margin: auto;
            }

            .logo-wrapper {
                border-top: 20px solid #7e343b;
                border-bottom: 20px solid #7e343b;
                background-color: white;
                text-align: center;
            }

            .veteranOwned {
                padding: 0 10px;
                display: flex;
                max-width: 600px;
                justify-content: space-between;
                margin: auto;
                margin-top: -90px;
            }

            .logo-wrapper img {
                margin-top: -76px;
				margin-bottom:-33px;
            }

            .main-section {
                background-image: url(/wp-content/uploads/2024/02/SMP_Tesla_Powerwall_3_Product_Image_on_House-OPTIMIZED-scaled.webp);
                background-position: left center;
                background-repeat: no-repeat;
                background-color: #2d3b59;
                background-size: cover;
                padding: 30px 10px 90px 10px;
                min-height: 1000px;
            }

            .main-section h2 {
                max-width: 990px;
                text-align: center;
                font-size: 5rem;
                margin: 0 auto;
            }

            .main-section .wrapper {
                display: flex;
            }
            #main > section.main-section > h2{
                color: white;
            }

            .ptag-wrapper .smpFont {
                font-size: 2.7rem;
                line-height: 2.4rem;
                padding-right: 40px;
                color: white;
				text-align: center;
				
            }
			

            .row {
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                width: 100%;
            }

            .column {
                display: flex;
                flex-direction: column;
                flex-basis: 100%;
                flex: 1;
            }
			.ptag-wrapper{
				justify-content: flex-end;
    			flex-direction: initial;
			}

            .star-bg-container {
                padding: 50px 10px;
                background: linear-gradient(0deg, rgba(45,59,89,0.6), rgba(45,59,89,0.6)), url(https://smpstage.wpengine.com/wp-content/uploads/2023/05/stars-1-140x57.png);
                background-color: #2D3B59;
                background-repeat: repeat;
                background-position: center center;
                background-attachment: fixed;
                background-size: auto;
                text-align: center;
                border-top: 15px solid #7e343b;
                border-bottom: 15px solid #7e343b;
                position: relative;

            }

            .solarplusbattery {
                max-width: 800px;
                margin: 0 auto;
                background-color: white;
                border: 15px solid #7e343b;
                padding: 10px;
                padding-bottom: 15px;
                margin-top: -130px;
            }

            .solarplusbattery h2 {
                font-size: 5rem;
                margin: 0 auto;
                color: #29324B;
                line-height: 5rem;

            }

            .solarplusbattery h3 {
                background-color: #7e343b;
                max-width: fit-content;
                padding: 2.5px 40px;
                margin: 0 auto;
                font-size: 1.8rem;
            }

            .star-bg-container img {
                margin-top: -40px;
                width: 150px;
                position: absolute;
                top: 115%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            .offer-section {
                max-width: 950px;
                margin: auto;
                padding: 60px 10px;
                text-align: center;
            }

            .offer-wrapper {

                display: flex;
                gap: 25px;
                justify-content: space-around;
            }

            .offer-wrapper .img-1 {
                width: 45.33%;
                /* Distribute equal width to each image */
                object-fit: contain;
                /* Maintain aspect ratio */
                height: auto;
            }

            .offer-wrapper .img-2 {
                width: 5%;
                /* Distribute equal width to each image */
                object-fit: contain;
                /* Maintain aspect ratio */
                height: auto;
            }

            .offer-wrapper .img-3 {
                width: 45.33%;
                /* Distribute equal width to each image */
                object-fit: contain;
                /* Maintain aspect ratio */
                height: auto;
            }

            .offer-section h2 {
                color: #29324B;
                font-size: 3.6rem;
                font-weight: 500;
                line-height: 3.5rem;
            }

            .orange-btn {
                font-size: 1.4rem;
                font-weight: bold;
                padding: 10px 25px;
                color: white !important;
                background-color: #FF7800;
                border-radius: 4px;
                text-decoration: none;
            }

            .green-button {
                display: none;
            }

            .call-now-section {
                font-size: 7rem;
                text-align: center;
                padding: 50px 10px;
                background: linear-gradient(0deg, rgba(45,59,89,0.6), rgba(45,59,89,0.6)), url(https://smpstage.wpengine.com/wp-content/uploads/2023/05/stars-1-140x57.png);
                background-color: #2D3B59;
                background-repeat: repeat;
                background-position: center center;
                background-attachment: fixed;
                background-size: auto;
                text-align: center;
                border-top: 15px solid #7e343b;
            }

            .call-now-section a {
                color: #FEF4D9 !important;
            }

            .call-now-section .img-wrapper {
                display: flex;
                max-width: 1035px;
                margin: auto;
                flex-direction: row;
            }

            .call-now-section .img-wrapper img {
                width: 345px;
                object-fit: contain;
            }

            article {
                padding: 60px 10px;
                max-width: 700px;
                margin: auto;
            }

            article h2 {
                font-size: 1.8rem;
            }

            article p {
                font-size: 1.3rem;
            }

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
            .up-to{
                color: #f9bf17;font-size: 105px; margin-top:-11px; margin-bottom:0px; -webkit-text-stroke: 2px #29324B;
            }
            .up-to img{
                vertical-align: text-top;
                margin-right: -38px;
                position: relative;
                z-index: 1;
                margin-top: -12px;
            }

            @media only screen and (max-width:600px) {
				.ptag-wrapper {
					flex-direction: column;
					padding-bottom: 80px;
					-webkit-text-stroke: 2px #29324B;
					
				}
                .ptag-wrapper .smpFont{
                    text-align:left;
                    padding-bottom: 100px;
                    font-size: 1.8em;
                    line-height:1;
                }
				
                .up-to{
                    font-size: 50px !important;
                    margin-left: -15px;
                    margin-top: -3px;
                }
                .up-to img {
                    margin-right: -30px;
                    width: 38px;
                }
             
                h1 {
                    font-size: 70px;
                    line-height: 60px;
                }

                .content-area {
                    max-width: 100vw;
                    overflow-x: hidden;
                }

                .main-section {
                      padding: 20px 10px 115px 10px
                }

                .main-section h2 {
                        font-size: 45px;
						line-height: 44px;
						margin-bottom: 13px;
                }

                .row {
                    flex-direction: column-reverse;
                }

                .star-bg-container {
                    border-top: 10px solid #7e343b;
                    border-bottom: 10px solid #7e343b;
                }

                .solarplusbattery {
                    border: 10px solid #7e343b;
                    margin-top: -107px;
                }
                .star-bg-container img{
                    width: 130px;
                    margin-top: -32px;
                }

                .solarplusbattery h2 {
                    font-size: 2rem;
                    line-height: 2.1rem;
                }

                .solarplusbattery h3 {
                    font-size: 1.2rem;
                    padding: 2.5px 20px;
                }

                .offer-wrapper {
                    display: block;
                    padding: 10px;
                }

                .offer-wrapper .img-1,
                .offer-wrapper .img-3 {
                    width: 100%;
                }

                .offer-wrapper .img-2 {
                    width: 50px;
                    padding: 5px;
                }


                .call-now-section a {
                    display: none;
                }

                .call-now-section .img-wrapper {
                    display: block;
                }

                article {
                    padding: 25px 10px;

                }

                .btn-holder {
                    display: block;
                    text-align: center;
                }

                .orange-btn {
                    font-size: 1.2rem;
                    padding: 10px 20px;
                    width: 100%;
                    display: block;
                    margin-bottom: 10px;
                }

                .green-button {
                    display: block;
                    font-size: 1.2rem;
                    font-weight: bold;
                    text-decoration: none;
                    background-color: #26D367;
                    color: white !important;
                    padding: 10px 20px;
                    border-radius: 4px;
                }
                .main-section {
                    background-image: url(/wp-content/uploads/2024/02/testla3-mobile-introducing_1072x1096.webp);
                    background-color: #161B21;  
                    background-position: bottom;
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
            <div class="header-inner-wrapper">
            </div>
        </header>

        <div class="logo-wrapper">
            <div class="smpFont veteranOwned">
                <h2>VETERAN-OWNED</h2>
                <h2>LOCAL BUSINESS</h2>
            </div>
            <img width="350" srcset="https://smpbackup.wpengine.com/wp-content/uploads/2023/05/05-24-2023-SMP-Webform-Logo-with-White-Background-June-2023.png" alt="Semper Solaris the best Solar Company in Arizona">
        </div>

        <section class="main-section">
        <h1 class="smpFont">WE'VE GOT THE NEW POWERWALL 3!</h1>
            <div class="wrapper row">
                <div class="ptag-wrapper column">
                <p class="smpFont" style="text-shadow: 2px 2px 5px black;">
                        The most advanced<br> 
                        battery storage is now<br> 
                        available ACt now and get<br> 
                        the new powerwall 3!
                    </p>                
                </div>
                
                <?php if(!wp_is_mobile()): ?>

                <div class="column">
                    <style>
                        .form-wrapper {
                            max-width: 420px;
                            background-color: #FEF4D9;
                            border: solid 5px #29324B;
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
                            background-color: #7e343b;
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
							margin:0;
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
						form p{
							margin-bottom:0;
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

                        @media only screen and (max-width: 500px) {
                            .form-wrapper h4 {
                                margin: 10px;
                                border: 4px solid white;
                                background-color: #26D367;
                                border-radius: 8px;
                            }
                            .form-wrapper{
							 	margin: auto;
							}
                        }
                    </style>
                    <div class="form-wrapper" id="landingPage-form">
                        <div class="top-form-callout">
                            <h3 style="color:#7e343b; font-size:24px; margin-top:0;"> Homeowners: </h3>
                            <h3 style="font-size:24px;margin-top:0;"> Start Saving Now! </h3>
                            <h4 style="margin-top:0;">
                            <?php
                                    // Get the current URL
                                    $currentURL = $_SERVER['REQUEST_URI'];

                                    // Define the string to check for in the URL
                                    $checkString = "fb-solar-sale";

                                    // Define the HTML for the phone numbers
                                    $phoneNumHTML1 = '<a href="tel:+18332904200" style="color:white; text-decoration:none;"> Call (833) 290-4200 </a>';

                                    $phoneNumHTML2 = '<a href="tel:+18888705159" style="color:white; text-decoration:none;"> Call (888) 870-5159 </a>  ';

                                    // Check if the checkString appears anywhere in the URL
                                    if (strpos($currentURL, $checkString) !== false) {
                                        echo $phoneNumHTML2;
                                    } else {
                                        echo $phoneNumHTML1;
                                    }
                                    ?> </h4>
                            <p style="margin-bottom:-20px;margin-top:0;"> or fill-out form below</p>
                        </div>
                        <?php echo do_shortcode('[contact-form-7 id="925" title="landing page"]'); ?>
                        <p style="padding: 5px;line-height: 12px; text-align: center;margin-top:-20px;"><span style="color: rgb(0, 0, 0); font-size: 10px;">By clicking, you agree to receive marketing emails, text messages, and phone calls and chats are recorded. You may opt-out at anytime.</span></p>
                    </div>
                </div>
                <?php endif; ?>

            </div>
			
        </section>

        <section class="star-bg-container">
            <div class="solarplusbattery">
                <h2 class="smpFont">Solar + Battery Storage</h2>
                <h3 class="smpFont">Over 30,000 Systems Installed</h3>
            </div>
            <img src="/wp-content/uploads/2024/02/SMP-1-Volume-Residential-Solar-Battery-Badge.png" alt="America's #1 Volume Solar + Battery Installer">
        </section>

        <?php if(wp_is_mobile()): ?>

<div class="column">
    <style>
        .form-wrapper {
            max-width: 420px;
            background-color: #FEF4D9;
            border: solid 5px #29324B;
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
            background-color: #7e343b;
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
            margin:0;
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
        form p{
            margin-bottom:0;
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

        @media only screen and (max-width: 500px) {
            .form-wrapper h4 {
                margin: 10px;
                border: 4px solid white;
                background-color: #26D367;
                border-radius: 8px;
            }
            .form-wrapper{
                 margin: auto;
                 margin-top: 30px;
            }
        }
    </style>
    <div class="form-wrapper" id="landingPage-form">
        <div class="top-form-callout">
            <h3 style="color:#7e343b; font-size:24px; margin-top:0;"> Homeowners: </h3>
            <h3 style="font-size:24px;margin-top:0;"> Start Saving Now! </h3>
            <h4 style="margin-top:0;">
            <?php
                    // Get the current URL
                    $currentURL = $_SERVER['REQUEST_URI'];

                    // Define the string to check for in the URL
                    $checkString = "fb-solar-sale";

                    // Define the HTML for the phone numbers
                    $phoneNumHTML1 = '<a href="tel:+18332904200" style="color:white; text-decoration:none;"> Call (833) 290-4200 </a>';

                    $phoneNumHTML2 = '<a href="tel:+18888705159" style="color:white; text-decoration:none;"> Call (888) 870-5159 </a>  ';

                    // Check if the checkString appears anywhere in the URL
                    if (strpos($currentURL, $checkString) !== false) {
                        echo $phoneNumHTML2;
                    } else {
                        echo $phoneNumHTML1;
                    }
                    ?> </h4>
            <p style="margin-bottom:-20px;margin-top:0;"> or fill-out form below</p>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="925" title="landing page"]'); ?>
        <p style="padding: 5px;line-height: 12px; text-align: center;margin-top:-20px;"><span style="color: rgb(0, 0, 0); font-size: 10px;">By clicking, you agree to receive marketing emails, text messages, and phone calls and chats are recorded. You may opt-out at anytime.</span></p>
    </div>
</div>
<?php endif; ?>

        <section class="offer-section">
			<h2 class="smpFont"> DECLARE YOUR ENERGY INDEPENDENCE! </h2>
            <div class="offer-wrapper">
                <img loading="lazy" class="img-1" src="/wp-content/uploads/2023/09/30-Federal-Solar-Tax-Credit-Oct2023.png" alt="Get 30% Federal Solar Tax Credit when you go solar!">
                <img loading="lazy" class="img-2" src="/wp-content/uploads/2023/09/symbol.png" alt="Plus symbol">
                <img loading="lazy" class="img-3" src="/wp-content/uploads/2024/02/best-solar-offer-000.png" alt="0 Down 0 Interest and 0 Payments or 18 months">
            </div>
            <h2 CLASS="smpFont">BATTERY STORAGE IN STOCK NOW!!!</h2>

            <div class="btn-holder">
                <a class="orange-btn" href="https://appointment.sempersolaris.com/">BOOK YOUR APPOINTMENT NOW!</a>

                <?php
                    // Get the current URL
                    $currentURL = $_SERVER['REQUEST_URI'];

                    // Define the string to check for in the URL
                    $checkString = "fb-solar-sale";

                    // Define the HTML for the phone numbers
                    $phoneNumHTML1 = '<a href="tel:+18332904200" target="_self" class="green-button">
                                        <span class="fl-button-text">CALL (833) 290-4200</span>
                                        <i class="fl-button-icon fl-button-icon-after dashicons dashicons-before dashicons-phone" aria-hidden="true"></i>
                                    </a>';

                    $phoneNumHTML2 = '<a href="tel:+18888705159" target="_self" class="green-button">
                                        <span class="fl-button-text">CALL (888) 870-5159</span>
                                        <i class="fl-button-icon fl-button-icon-after dashicons dashicons-before dashicons-phone" aria-hidden="true"></i>
                                    </a>';

                    // Check if the checkString appears anywhere in the URL
                    if (strpos($currentURL, $checkString) !== false) {
                        echo $phoneNumHTML2;
                    } else {
                        echo $phoneNumHTML1;
                    }
                    ?>
            </div>
        </section>

        <section class="call-now-section">
            <?php
            // Get the current URL
            $currentURL = $_SERVER['REQUEST_URI'];

            // Define the string to check for in the URL
            $checkString = "fb-solar-sale";

            // Define the HTML for the phone numbers
            $phoneNumHTML1 = '<a class="smpFont" href="tel:8332904200">CALL NOW (833) 290-4200</a>';

            $phoneNumHTML2 = '<a class="smpFont" href="tel:+18888705159">CALL NOW (888) 870-5159</a>';

            // Check if the checkString appears anywhere in the URL
            if (strpos($currentURL, $checkString) !== false) {
                echo $phoneNumHTML2;
            } else {
                echo $phoneNumHTML1;
                    }
            ?>

            <div class="img-wrapper">
                <img loading="lazy" srcset="https://smpbackup.wpengine.com/wp-content/uploads/2023/05/Pink-Panther.png" alt="Get 50 Year Platnium Warranty protection for your roof!">
                <img loading="lazy" srcset="https://smpbackup.wpengine.com/wp-content/uploads/2023/05/SMP-Web-Assets_Semper-Cares-1-1536x1536.png" alt="Semper Cares Initiative">
                <img loading="lazy" srcset="https://smpbackup.wpengine.com/wp-content/uploads/2023/05/SMP-Web-Assets_Owners-1-410x150.png" alt="Meet our Owners">

            </div>
        </section>

        <article>
            <h2>Semper Solaris: Solar Panel, Battery Storage, Roofing, And HVAC Company</h2>
            <p>Sick & tired of soaring energy bills? Take charge and declare your independence from the electric companies with the help of the #1 Residential Volume Solar & Battery installer in the Nation!</p>
            <p>Semper Solaris will design and install a Solar and Battery system customized for your individual energy needs. Tesla Powerwalls are in stock and ready for installation, so now's the time to say goodbye to costly utility bills and embrace a sustainable future. Take control of your energy costs. Go solar today with Semper Solaris!</p>
            <div class="btn-holder" style="text-align:center">
                <a class="orange-btn mt-5" href="https://appointment.sempersolaris.com/"> BOOK YOUR APPOINTMENT NOW </a>
                <?php
                    // Get the current URL
                    $currentURL = $_SERVER['REQUEST_URI'];

                    // Define the string to check for in the URL
                    $checkString = "fb-solar-sale";

                    // Define the HTML for the phone numbers
                    $phoneNumHTML1 = '<a href="tel:+18332904200" target="_self" class="green-button">
                                        <span class="fl-button-text">CALL (833) 290-4200</span>
                                        <i class="fl-button-icon fl-button-icon-after dashicons dashicons-before dashicons-phone" aria-hidden="true"></i>
                                    </a>';

                    $phoneNumHTML2 = '<a href="tel:+18888705159" target="_self" class="green-button">
                                        <span class="fl-button-text">CALL (888) 870-5159</span>
                                        <i class="fl-button-icon fl-button-icon-after dashicons dashicons-before dashicons-phone" aria-hidden="true"></i>
                                    </a>';

                    // Check if the checkString appears anywhere in the URL
                    if (strpos($currentURL, $checkString) !== false) {
                        echo $phoneNumHTML2;
                    } else {
                        echo $phoneNumHTML1;
                    }
                    ?>
            </div>
        </article>

		
        <footer>
            <p>*On approved credit. Up to $500 reimbursement or discounted from sales price. Savings based on system size, some restrictions apply. Present downloadable Digital Coupon at time of appointment. **30 percent federal tax credit based on eligibility, consult your tax advisor. New customers only. Cannot be combined with other offers #1 Volume Residential Solar + Battery based on the volume of residential installations Call or see website for details, www.sempersolaris.com. </p>

            <div id="disclaimerArea" class="disclaimerArea" style="color:white !important">
                <div class="text-center mx-auto container " role="contentinfo" aria-label="Site issue" style="max-width: 1000px; margin:auto;">
                    <p class="site-disclaimer" style="color:white;"><small>
                            Expires <span id="_expiry_">10/10/2023</span>.</small></p> <br>
                    <script defer>
                        let _d = new Date(),
                            _lD = new Date(_d.getFullYear(), _d.getMonth() + 1, 0);
                        document.getElementById("_expiry_").innerText = _lD.toLocaleString('default', {
                            month: 'long'
                        }) + " " + _lD.getDate() + ", " + _lD.getFullYear();
                    </script>
                    <p id="disclaimerArea">&copy;<?php echo date('Y') ?> Semper Solaris. All Rights Reserved. | ROC# 336163 | ROC# 336306 | ROC# 336305 | <a style="color:white;" href="https://www.sempersolaris.com/privacy-notice/">Privacy Policy </a> | Call +1 (888) 210-3366 </p>
                    <p id="disclaimerArea">This site is protected by reCAPTCHA and the Google <a style="color:white;" href="https://policies.google.com/privacy">Privacy Policy</a> and <a style="color:white;" href="https://policies.google.com/terms">Terms of Service</a> apply.</p>

                    <p id="disclaimerArea">
                        Please visit our <a style="color:white;" href="/privacy-notice/">privacy policy</a> to learn how we use your information.<br />You will receive emails periodically and can opt-out at any time.
                    </p>
                </div>
            </div>
        </footer>

    </main><!-- .site-main -->
</div><!-- .content-area -->

<!-- script for form parameter functionality -->
<script>
    var currentPageElement = document.getElementById("current_page");

    if (currentPageElement) {
        currentPageElement.value = window.location.href;
    }

    document.addEventListener('wpcf7mailsent', function(event) {
        document.location = "/thank-you/";
    }, false);

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
</script>


<?php
wp_footer();
?>