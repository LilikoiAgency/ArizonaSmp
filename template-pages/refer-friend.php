<?php

/**
 * Template Name: Refer a Friend
 */

$style = <<<STYLE
<style class="page-css" type="text/css">
    :root {
        --full-width: calc(100% - 23px)
    }

    .recaptcha_render {
        width: 304px;
        height: 78px;
        background-color: #004c97;
        background-image: linear-gradient(to bottom right, royalblue, #004c97, #002951);
    }

    .recaptcha-logo::before {
        content: url("/wp-content/themes/semper-arizona-child/assets/logo/recaptcha.svg");
        position: absolute;
        transform: translate(calc(154px - 50%), calc(39px - 50%)) scale(.5);
    }


    #vertical_container_refer {
        background-image: var(--semper-blue-gradient);
    }

    #vertical_container_refer fieldset {
        border: 1px solid #c0c0c0;
        margin: 0 2px;
        padding: 0.35em 0.625em 0.75em;
    }

    #vertical_container_refer legend {
        float: none;
        width: auto;
        font-size: inherit;
        font-style: oblique;
    }

    #vertical_container_refer input,
    #vertical_container_refer label,
    #vertical_container_refer select {
        width: 100%;
    }

    #vertical_container_refer input::-webkit-input-placeholder {
        opacity: 0
    }

    #vertical_container_refer input::-moz-placeholder {
        opacity: 0
    }

    #vertical_container_refer input:-ms-input-placeholder {
        opacity: 0
    }

    #vertical_container_refer input::-ms-input-placeholder {
        opacity: 0
    }

    #vertical_container_refer input::placeholder {
        opacity: 0
    }
</style>
STYLE;
new Page_CSS($style);

get_header();

?>
<main>
    <section class="container p-0">
        <div class="p-0 bg-light rounded-3">
            <div class="container-fluid">
                <div id="referral-grid" class="row mx-auto p-0" style="max-width: 900px;">
                    <a id="solar-cta" class="col-4 p-0 " aria-label="Refer a Friend for Solar" href="/solar-panels/solar-manufacturers/">
                        <img class="lazy loaded" data-src="/wp-content/uploads/2022/07/Solar-panel-installer-on-roof-refer-a-friend.jpg" alt="Solar Panels" src="/wp-content/uploads/2022/07/Solar-panel-installer-on-roof-refer-a-friend.jpg" data-was-processed="true">
                    </a>
                    <a id="roofing_cta" class="col-4 p-0" aria-label="Refer a Friend for Roofing" href="/roofing/">
                        <img class="lazy loaded" data-src="/wp-content/uploads/2022/07/Roofing-shingles-single-family-home-refer-a-friend.jpg" alt="Roofing Shingles" src="/wp-content/uploads/2022/07/Roofing-shingles-single-family-home-refer-a-friend.jpg" data-was-processed="true">
                    </a>
                    <a id="battery_cta" class="col-4 p-0" aria-label="Refer a Friend for Battery" href="/battery-storage/">
                        <img class="lazy loaded" data-src="/wp-content/uploads/2022/07/Tesla-Powerwall-battery-storage-refer-a-friend.jpg" alt="Tesla Battery Storage" src="/wp-content/uploads/2022/07/Tesla-Powerwall-battery-storage-refer-a-friend.jpg" data-was-processed="true">
                    </a>
                    <!-- <a id="hvac_cta" class="col-6 col-md-3 p-0" aria-label="Refer a Friend for HVAC" href="/refer-friend/hvac/">
                        <img class="lazy loaded" data-src="/wp-content/uploads/2022/05/04-29-SMPCA-ReferFriend-HVAC-483x557px.jpg" alt="Air Conditioning Unit" src="/wp-content/uploads/2022/05/04-29-SMPCA-ReferFriend-HVAC-483x557px.jpg" data-was-processed="true">
                    </a> -->
                </div>
                <h2 class="display-5 fw-bold text-center">Refer a Friend</h2>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row">
            <div class="col col-md-8">
                <p>We offer an excellent referral program at Semper Solaris that you and your loved ones will truly appreciate. Simply recommend a friend and you may earn up to $550 for each referral! That's a pretty good return for just helping out a friend! You’ll get paid and they will receive the same outstanding service we gave you! That’s a win-win! You can recommend as many individuals as you like, and you'll get paid roughly 4 to 6 weeks after your referral makes their final payment to us. Be aware: anyone getting more than $600 from the referral program must provide a Tax Identification Number.</p>
                <h2>Referral Program FAQ</h2>
                <p>Here are some of the most commonly asked questions about the solar referral program at Semper Solaris. If you have other questions or want more details, check out our <a href="https://help.sempersolaris.com/s/">virtual help desk.</a></p>
                <div class="accordion" id="accordionReferFriend">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <strong>Do I have to be a Semper Solaris customer to make a referral?</strong>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionReferFriend">
                            <div class="accordion-body">
                                No, you do not need to be a Semper Solaris customer to submit a referral.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <strong>What is the maximum amount I can receive?</strong>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionReferFriend">
                            <div class="accordion-body">
                                Each referral has a maximum value of $550. If you are to receive more than $600 in a year, we will need your Tax Identification Number for reporting purposes.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <strong>When would I receive my check?</strong>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionReferFriend">
                            <div class="accordion-body">
                                Referral checks are sent 4 to 6 weeks after the referred customer’s final payment is received.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <strong>How many people can I refer?</strong>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionReferFriend">
                            <div class="accordion-body">
                                You can send an unlimited amount of referrals!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="vertical_container_refer" class="form-container col col-md-4 text-white py-3">
                <label for="verticals" class="fw-bold mb-2">Select the service you are creating a referral for:</label>
                <select name="verticals" id="vertical-select" class="form-item mb-4 p-2">
                    <option value="solar">Solar ($550)</option>
                    <option value="roofing">Roofing ($200)</option>
                    <option value="battery">Battery Storage ($200)</option>
                    <option value="hvac">Heating & AC ($200)</option>
                </select>
                <form id="refer_friend_form" class="__semper_solaris_sf_form" method="POST">
                    <input type="hidden" name="formName" value="referFriend">
                    <fieldset>
                        <legend class="text-uppercase">Your Information:</legend>
                        <label for="Friend_Name__c">Name <em>(required)</em>
                            <input class="Friend_Name__c form-item" maxlength="80" name="Friend_Name__c" size="20" type="text" required="true" /></label>

                        <label for="Friend_Email__c">E-mail <em>(required)</em>
                            <input class="Friend_Email__c form-item" maxlength="80" name="Friend_Email__c" size="20" type="email" required="true" /></label>

                        <label for="Friend_Phone__c">Phone number
                            <input class="Friend_Phone__c form-item" maxlength="40" name="Friend_Phone__c" size="20" type="tel" /></label>

                        <label for="Friend_City__c">City
                            <input class="Friend_City__c form-item" maxlength="40" name="Friend_City__c" size="20" type="text" /></label>
                    </fieldset>
                    <fieldset>
                        <legend class="text-uppercase">New Customer Information</legend>
                        <label for="first_name">Friend's first name <em>(required)</em></label>
                        <input class="first_name form-item" maxlength="40" name="first_name" size="20" type="text" required="true" />

                        <label for="last_name">Friend's last name <em>(required)</em></label>
                        <input class="last_name form-item" maxlength="80" name="last_name" size="20" type="text" required="true" />

                        <label for="email">Friend's e-mail address <em>(required)</em></label>
                        <input class="email form-item" maxlength="80" name="email" size="20" type="text" required="true" />

                        <label for="phone_1">Friend's phone number</label>
                        <input class="phone form-item" maxlength="40" name="phone_1" size="20" type="text" />
                    </fieldset>

                    <div class="recaptcha_render recaptcha-logo mt-3" data-sitekey="6LdboW4UAAAAANT3aOnGj6kpdx9uJFRpetEh3S2i"></div>
                    <br />

                    <input value="Submit" type="submit" name="submit" class="btn btn-red">
                    <p style="font: normal normal normal 12px/12px Barlow, sans-serif">By clicking, you agree to receive marketing emails, text messages, and phone calls are recorded. You may opt-out at anytime.</p>
                    <input type="hidden" id="lead_source_semso" name="lead_source_semso" value="WEBSITE REFERAFRIEND ALL">
                </form>
            </div>
        </div>
    </section>
</main>
<?php

get_footer();
