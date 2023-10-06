<?php

get_template_part("template-parts/lead-source-setter");

?>
<style>
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

    #modal_background {
        display: none;
        z-index: 900;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, .7);
        opacity: 0;
        -webkit-transition: all .5s ease-in-out;
        -o-transition: all .5s ease-in-out;
        transition: all .5s ease-in-out
    }

    #modal_container {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        max-width: 500px;
        padding: 20px;
        z-index: 999;
        -webkit-transform: translate(calc(50vw - 51.5%), calc(50vh - 52%));
        -ms-transform: translate(calc(50vw - 51.5%), calc(50vh - 52%));
        transform: translate(calc(50vw - 51.5%), calc(50vh - 52%));
        border-radius: 2px;
        font-family: sans-serif;
        color: #fff;
        -webkit-box-shadow: 0 4px 8px rgba(0, 0, 0, .5);
        box-shadow: 0 4px 8px rgba(0, 0, 0, .5);
        background-color: #004c97;
        background: #004c97;
        background: -o-linear-gradient(315deg, #004c97 0, #002951 100%);
        background: linear-gradient(135deg, #004c97 0, #002951 100%);
        opacity: 0;
        -webkit-transition: all .5s ease-in-out;
        -o-transition: all .5s ease-in-out;
        transition: all .5s ease-in-out
    }

    #modal_container #modal_close_x {
        position: absolute;
        top: 0;
        right: 10px;
        z-index: 900;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
        color: #fff;
        font-size: 32px;
        cursor: pointer
    }

    #modal_container br {
        display: none
    }

    #modal_container fieldset {
        min-width: 0;
        padding: 0;
        margin: 0;
        border: 0;
    }

    #modal_container input::-webkit-input-placeholder,
    #modal_container textarea::-webkit-input-placeholder {
        font-size: 16px;
        opacity: .7
    }

    #modal_container input::-moz-placeholder,
    #modal_container textarea::-moz-placeholder {
        font-size: 16px;
        opacity: .7
    }

    #modal_container input:-ms-input-placeholder,
    #modal_container textarea:-ms-input-placeholder {
        font-size: 16px;
        opacity: .7
    }

    #modal_container input::-ms-input-placeholder,
    #modal_container textarea::-ms-input-placeholder {
        font-size: 16px;
        opacity: .7
    }

    #modal_container input::placeholder,
    #modal_container textarea::placeholder {
        font-size: 16px;
        opacity: .7
    }

    #modal_container label {
        font-weight: 700;
    }

    #modal_container label,
    #modal_container input,
    #modal_container select {
        width: 100%
    }

    #modal_container .label-text,
    #modal_container legend {
        position: absolute;
        clip: rect(1px, 1px, 1px, 1px);
        -webkit-clip-path: inset(0px 0px 99.9% 99.9%);
        clip-path: inset(0px 0px 99.9% 99.9%);
        overflow: hidden;
        height: 1px;
        width: 1px;
        padding: 0;
        border: 0
    }

    #modal_container br:nth-of-type(1),
    #modal_container br:nth-of-type(3),
    #modal_container br:nth-of-type(4),
    #modal_container br:nth-of-type(8) {
        display: none
    }

    #modal_container input,
    #modal_container select {
        padding: 5px;
        margin-bottom: 5px
    }

    #modal_container .grid-container {
        display: -ms-grid;
        display: grid;
        -ms-grid-columns: auto 5px auto;
        grid-template-columns: auto auto;
        grid-column-gap: 5px
    }

    #modal_container textarea {
        font-family: sans-serif;
        padding: 10px;
        width: 100% !important;
        min-height: 70px
    }

    #modal_container input[type=submit] {
        width: 100%;
        padding: 20px;
        background-image: -webkit-gradient(linear, left top, right bottom, from(#d00107), color-stop(#d00107), to(#79060a));
        background-image: -o-linear-gradient(top left, #d00107, #d00107, #79060a);
        background-image: linear-gradient(to bottom right, #d00107, #d00107, #79060a);
        border: none;
        border-radius: 2px;
        font-size: 18px;
        font-weight: 700;
        text-transform: uppercase;
        color: #fff
    }

    #modal_container textarea {
        height: 1em;
    }

    @media screen and (max-width:429px) {
        #modal_container .grid-container {
            display: -ms-grid;
            display: grid;
            -ms-grid-columns: auto;
            grid-template-columns: auto;
            grid-column-gap: 5px
        }

        #modal_container {
            -webkit-transform: translate(calc(50vw - 50%), calc(50vh - 51%));
            -ms-transform: translate(calc(50vw - 50%), calc(50vh - 51%));
            transform: translate(calc(50vw - 50%), calc(50vh - 51%));
            max-height: 100vh;
            overflow-y: scroll;
        }
    }

    @media screen and (max-height:700px) {
        #modal_container {
            -webkit-transform: translate(calc(50vw - 51.5%), 0);
            -ms-transform: translate(calc(50vw - 51.5%), 0);
            transform: translate(calc(50vw - 51.5%), 0)
        }
    }

    .email-format-error {
        border: 2px solid red !important;
    }
</style>
<div id="modal_background"></div>
<div id="modal_container">
    <div id="modal_close_x">+</div>
    <div id="modal_content_container">
        <h3 id="modal_title" style="font-size:22px;line-height:.4;font-weight:800;text-align:center;margin-bottom:0;color:white">Save Big on Solar Energy!</h3>
        <p style="text-align:center; line-height: 1;margin:16px 0;">Hurry to Fast Track Your Installation!</p>
    </div>
</div>
<script type="text/javascript" async>
    var verificationToken = "";
    var isRecaptchaLoaded = false;

    function setLocationLeadSource() {
        if (document.getElementById('location_lead_source')) {
            let allLeadSourceInputs = document.querySelectorAll('[id^="lead_source_semso"]');
            allLeadSourceInputs.forEach(inp => {
                inp.removeAttribute('value');
                inp.setAttribute('value', document.getElementById('location_lead_source').dataset.leadSource);
            });
        }
    }
    const VERT_CONTAINER = document.getElementById("vertical_container");
    const POPUP_CONTENT = document.getElementById("modal_content_container");
    var defaultAction = ''; //"https://app.leadconduit.com/flows/5e9def16d908cf2c5e8c9af9/sources/5e9880ca0522c3d92646b0f8/submit";
    var parentElement = (VERT_CONTAINER) ? "sidebar" : "popup";
    var leadSource = (VERT_CONTAINER) ? "WEBSITE CONTACT US ALL" : "WEBSITE POPUP ALL";
    var isVisible = (document.getElementById('location_form')) ? "" : ((document.getElementById('refer_friend_form')) ? "" : "is-visible");
    const SF_FORM = `
        <form id="__semper_solaris_sf_form_v" class="__semper_solaris_sf_form ${isVisible}" data-parent="${parentElement}" action="${defaultAction}" method="POST">
            <fieldset>
                <legend class="px-2">Your Info:</legend>
                <div class="grid-container">
                    <label for="first_name_v">
                        <span class="label-text">First Name <small><em>(required)</em></small></span>
                        <input id="first_name_v" maxlength="40" name="first_name_v" size="20" type="text" required aria-label="First Name (required)" placeholder="First Name (required)" />
                    </label>

                    <label for="last_name_v">
                        <span class="label-text">Last Name <small><em>(required)</em></small></span>
                        <input id="last_name_v" maxlength="80" name="last_name_v" size="20" type="text" required aria-label="Last Name (required)" placeholder="Last Name (required)" />
                    </label>
                </div>

                <label for="email_v">
                    <span class="label-text">Email <small><em>(required)</em></small></span>
                    <input id="email_v" maxlength="80" name="email_v" size="20" type="email" required aria-label="Email (required)" placeholder="Email (required)" onblur="emailValidator(this)" />
                </label>

                <div class="grid-container">
                    <label for="phone_1_v">
                        <span class="label-text">Phone <small><em>(required)</em></small></span>
                        <input id="phone_1_v" maxlength="40" name="phone_1_v" size="20" type="text" required aria-label="Phone Number (required)" placeholder="Phone Number (required)" />
                    </label>

                    <label for="postal_code_v">
                        <span class="label-text">ZIP Code <small><em>(required)</em></small></span>
                        <input id="postal_code_v" class="w-100" maxlength="20" name="postal_code_v" size="20" type="text" required aria-label="ZIP Code (required)" placeholder="Zip Code (required)" />
                    </label>
                </div>
            </fieldset>

            <fieldset>
                <legend class="px-2">How Can We Help?</legend>
                <label for="best_day_and_time_frame_semso_v">
                    <span class="label-text">What is the best day and time frame? <small><em>(required)</em></small></span>
                    <input id="best_day_and_time_frame_semso_v" maxlength="50" name="best_day_and_time_frame_semso_v" size="20" type="text" required aria-label="What Is the Best Day and Time to Reach You? (required)" placeholder="What is the best day and time frame? (required)" />
                </label>

                <label for="best_way_to_reach_semso_v">
                    What is the best way to reach you? <small><em>(required)</em></small>
                    <select id="best_way_to_reach_semso_v" name="best_way_to_reach_semso_v" title="What is the best way to reach you? (required)" required aria-label="Best Way to Reach You (required)">
                        <option value="">--None--</option>
                        <option value="Call">Call</option>
                        <option value="Text">Text</option>
                        <option value="Email">Email</option>
                        <option value="All">All</option>
                    </select>
                </label>

                <label for="how_did_you_hear_about_us_semso_v">
                    <span class="label-text">How did you hear about us?</span>
                    <input id="how_did_you_hear_about_us_semso_v" maxlength="255" name="how_did_you_hear_about_us_semso_v" size="20" type="text" aria-label="How Did You Hear about Us?" placeholder="How Did You Hear about Us?" />
                </label>

                <label for="lead_source_notes_semso_v">
                    <span class="label-text">Message: <small><em>(required)</em></small></span>
                    <textarea id="lead_source_notes_semso_v" style="width:100%" name="lead_source_notes_semso_v" maxlength="5000" rows="2" wrap="soft" required aria-label="Solar, Battery Storage, Roofing, HVAC.\nWhat's your interest? (required)" placeholder="Solar, Battery Storage, Roofing, HVAC.\nWhat's your interest? (required)"></textarea>
                </label>
            </fieldset>
            <br />

            <div class="recaptcha_render recaptcha-logo rounded"></div>
            <br />

            <div style="display:flex;">
                <style>
                    @media screen and (min-width: 768px) {
                        [name="marketing_email_ok_semso_v"] {
                            max-width: 15px;
                            margin: 0 3px 0 0;
                        }
                    }
                </style>
                <label for="marketing_email_ok_semso_v" style="margin-top:-5px">
                    <input id="marketing_email_ok_semso_v" name="marketing_email_ok_semso_v" type="checkbox" style="width:auto" aria-label="Is it okay to email you information?" />
                    Is it OK to email you information?
                </label>
            </div>

            <div id="submit_container_v">
                <input style="width:100%;padding:20px" value="Submit" type="submit" name="submit" class="btn btn-red" disabled="" aria-label="Submit Form" />
            </div>
            <p style="font: normal normal normal 12px/12px Barlow, sans-serif">By clicking, you agree to receive marketing emails, text messages, and phone calls and chats are recorded. You may opt-out at anytime.</p>

            <input type="hidden" id="lead_source_semso_v" name="lead_source_semso_v" value="${leadSource}" />
        </form>
    `;
    if (!VERT_CONTAINER) {
        POPUP_CONTENT.insertAdjacentHTML("beforeend", SF_FORM);
        let labels = document.querySelectorAll("#__semper_solaris_sf_form_v label");
        let inputs = document.querySelectorAll("#__semper_solaris_sf_form_v input, #__semper_solaris_sf_form_v select");
    } else {
        let formContainer = `
        <div class="smp-form side-contact-form blue-bg-g section-xs text-white" style="min-height:1140px">
        <p class="h4 mb-sm">Let's talk about how much you can save with Semper Solaris.</p>
        `;
        VERT_CONTAINER.insertAdjacentHTML("beforeend", formContainer + SF_FORM + "</div>");
    }
    setLocationLeadSource();

    function switchForms() {
        var formParent = document.getElementById("__semper_solaris_sf_form_v").dataset.parent;
        var sidebarForm = document.querySelector("#vertical_container .smp-form");
        var popupForm = document.querySelector("#modal_content_container");
        var leadSource = document.getElementById("lead_source_semso_v");
        var contents = "";
        leadSource.removeAttribute("value");
        if (formParent == "sidebar") {
            contents = document.getElementById("__semper_solaris_sf_form_v");
            document.getElementById("__semper_solaris_sf_form_v").remove();
            popupForm.insertAdjacentElement("beforeend", contents);
            document.getElementById("__semper_solaris_sf_form_v").dataset.parent = "popup";
            leadSource.setAttribute("value", "WEBSITE POPUP ALL");
            let labels = document.querySelectorAll("#__semper_solaris_sf_form_v label");
            let inputs = document.querySelectorAll("#__semper_solaris_sf_form_v input, #__semper_solaris_sf_form_v select");
        } else {
            let inputs = document.querySelectorAll("#__semper_solaris_sf_form_v input, #__semper_solaris_sf_form_v select, #__semper_solaris_sf_form_v textarea");
            contents = document.getElementById("__semper_solaris_sf_form_v");
            document.getElementById("__semper_solaris_sf_form_v").remove();
            sidebarForm.insertAdjacentElement("beforeend", contents);
            document.getElementById("__semper_solaris_sf_form_v").dataset.parent = "sidebar";
            leadSource.setAttribute("value", "WEBSITE CONTACT US");
        }
        setLocationLeadSource();
    }

    function closePopupModal() {
        if (VERT_CONTAINER) {
            switchForms();
        } else if (isVisible == "") {
            document.querySelectorAll('.__semper_solaris_sf_form').forEach(form => {
                form.classList.toggle('is-visible');
            })
        }
        document.getElementById("modal_background").removeAttribute("style");
        document.getElementById("modal_container").removeAttribute("style");
        var d1 = new Date();
        d1.setTime(d1.getTime() + (5 * 60 * 1000)); //Expires in 5 minutes.
        var expires = "expires=" + d1.toUTCString();
        document.cookie = "popupPause=true;" + expires + "; path=/";
    }

    function areFieldsEmpty() {
        let fields = document.querySelectorAll('#__semper_solaris_sf_form_v input:not([type="hidden"]):not([type="submit"]):not([id="marketing_email_ok_semso_v"]), #__semper_solaris_sf_form_v textarea');
        let result = true;
        fields.forEach(field => {
            if (field.value != "" && VERT_CONTAINER) {
                result = false;
            }
        });
        return result;
    }

    function openPopupModal(btn = 0) {
        if ((getCookie("popupPause") && btn === 0) || !areFieldsEmpty()) {
            return;
        }
        let modalBackground = document.getElementById("modal_background");
        if (modalBackground && !modalBackground.getAttribute("style")) {
            document.getElementById("modal_background").setAttribute("style", "display:block;");
            document.getElementById("modal_container").setAttribute("style", "display:block;");
            setTimeout(() => {
                document.getElementById("modal_background").setAttribute("style", "display:block;opacity:1;transition:all .5s ease-in-out;");
                document.getElementById("modal_container").setAttribute("style", "display:block;opacity:1;transition:all .5s ease-in-out;");
            }, 50);
            if (VERT_CONTAINER) {
                switchForms();
            } else if (isVisible == "") {
                document.querySelectorAll('.__semper_solaris_sf_form').forEach(form => {
                    form.classList.toggle('is-visible');
                })
            }
        }
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    if (
        location.pathname.search(/cares/gi) == -1 &&
        location.pathname.search(/scholarship/gi) == -1 &&
        location.pathname.search(/thank/gi) == -1
    ) {
        setTimeout(() => {
            openPopupModal();
        }, 6e4);
    }

    /**
     * MODAL EVENT LISTENERS
     */
    document.getElementById("modal_close_x").addEventListener("click", function() {
        closePopupModal();
    });
    document.getElementById("modal_close_x").addEventListener("touch", function() {
        closePopupModal();
    });
    document.getElementById("modal_background").addEventListener("click", function() {
        closePopupModal();
    });
    document.getElementById("modal_background").addEventListener("touch", function() {
        closePopupModal();
    });

    if (
        location.pathname.search(/cares/gi) == -1 &&
        location.pathname.search(/scholarship/gi) == -1 &&
        location.pathname.search(/thank/gi) == -1
    ) {
        setTimeout(() => {
            document.getElementsByTagName("BODY")[0].addEventListener("mouseleave", function() {
                openPopupModal();
            });
        }, 3e4);
    }

    document.querySelectorAll("button.orange-cta-btn").forEach(btn => {
        btn.addEventListener("click", function() {
            openPopupModal(1);
        });
        btn.addEventListener("touch", function() {
            openPopupModal(1);
        });
    });
    /**
     * 
     */

    <?php
    /**
     * LOAD RECAPTCHA FOR SALESFORCE FORM 
     */
    ?>

    function loadRecaptcha() {
        if (isRecaptchaLoaded) {
            return;
        }
        var head_ID = document.getElementsByTagName("HEAD")[0];
        var script_element = document.createElement('SCRIPT');
        script_element.type = 'text/javascript';
        script_element.src = 'https://www.google.com/recaptcha/api.js?onload=recaptchaOnloadCallback';
        head_ID.appendChild(script_element);
        isRecaptchaLoaded = true;
    }
    var recaptchaEvents = ['change', 'click', 'focus', 'focusin', 'mousedown', 'select', 'touchstart'];
    var sfForm = document.getElementById('__semper_solaris_sf_form_v');
    recaptchaEvents.forEach(eventType => {
        (sfForm) ? document.getElementById('__semper_solaris_sf_form_v').addEventListener(eventType, loadRecaptcha, {
            passive: true
        }): '';
        document.querySelectorAll("form:not(#__semper_solaris_sf_form_v)").forEach(form => {
            form.addEventListener(eventType, loadRecaptcha, {
                passive: true
            });
        });
    });

    // GENERATE TCPA FORM FIELDS
    ! function() {
        var a = "TCPA_Consent_Form__c",
            c = !1,
            d = !1,
            b = document.createElement("SCRIPT");
        b.type = "text/javascript";
        b.async = !0;
        b.src = "http" + ("https:" == document.location.protocol ? "s" : "") + "://api.trustedform.com/trustedform.js?provide_referrer\x3d" + escape(c) + "\x26field\x3d" + escape(a) + "\x26l\x3d" + (new Date).getTime() + Math.random() + "\x26invert_field_sensitivity\x3d" + d;
        a = document.getElementsByTagName("script")[0];
        a.parentNode.insertBefore(b, a)
    }();

    document.addEventListener('DOMContentLoaded', setFormEventListeners, false);

    function setFormEventListeners() {
        var allForms = document.querySelectorAll('form.__semper_solaris_sf_form');
        var allSubmitBtns = document.querySelectorAll('form.__semper_solaris_sf_form [type="submit"]');
        allSubmitBtns.forEach((submitBtn, i) => {
            submitBtn.addEventListener('click', function(e) {
                e.preventDefault();
                if (!verificationToken) {
                    alert("Please complete the reCaptcha challenge. Thanks!");
                    return;
                }
                if (document.getElementsByClassName("email-format-error")[0]) {
                    alert("Please provide a valid email address. Thank you!");
                    return;
                }
                // COLLECT FORM DATA
                var initFormData = new FormData(allForms[i]);
                initFormData.append("address_1", "NOT REQUESTED");
                initFormData.append("trustedform_cert_url", initFormData.get('TCPA_Consent_Form__c'));

                var reformatted_data = [];
                for (const [key, value] of initFormData) {
                    let newKey = '';
                    let suffix = key.substr(key.length - 2, key.length);
                    if (suffix == "_v" || suffix == "_h") {
                        newKey = key.substr(0, key.length - 2);
                    } else {
                        newKey = key;
                    }
                    reformatted_data.push(newKey + "=" + encodeURIComponent(value));
                }

                // FINAL DATA FORMATTING
                reformatted_data = reformatted_data.join("&");

                // SUBMIT FORM
                var xhr = new XMLHttpRequest();
                var postUrl = '';//'https://app.leadconduit.com/flows/5e9def16d908cf2c5e8c9af9/sources/5e9880ca0522c3d92646b0f8/submit';
                xhr.open("POST", postUrl, [false, 'API', '65aa0b4c24c9c713ceb5c6a046daae31']);
                xhr.setRequestHeader("Accept", "application/json");
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.setRequestHeader("Access-Control-Allow-Origin", "*");
                xhr.onreadystatechange = function() {
                    if (xhr.status >= 200) {
                        // REDIRECT
                        const _home = window.location.hostname;
                        const _protocol = window.location.protocol;
                        if (submitBtn.classList.contains("submit-reference")) {
                            window.location = `${_protocol}//${_home}/refer-friend/thank-you/`;
                        } else {
                            window.location = `${_protocol}//${_home}/thank-you/`;
                        }
                    }
                }
                /** 
                 * GOOGLE ENHANCED TRACKING DATA
                 */
                setSessionStorageData(reformatted_data);
                /**
                 * 
                 */
                // sendLeadToLocalDatabase(reformatted_data);
                if (SEARCHPARAMS && SEARCHPARAMS.has('utm_content')) {
                    sendPaidSearchLead(reformatted_data);
                } else {
                    sendWebsiteLead(reformatted_data);
                }
                xhr.send(reformatted_data);
            })
        });
    }

    function returnInputFields(reformatted_data) {
        var formInputs = document.querySelectorAll(".__semper_solaris_sf_form input, .__semper_solaris_sf_form textarea");
        var getParams = "?page_name=" + location.hostname + location.pathname + "&";
        
        if (SEARCHPARAMS) {
            for (let key of SEARCHPARAMS.keys()) {
                getParams += key + "=" + SEARCHPARAMS.get(key) + "&";
            }
        }

        if ((SEARCHPARAMS && !SEARCHPARAMS.get('referrer') || !SEARCHPARAMS)) {
            getParams += 'referrer=' + ((document.referrer != "") ? document.referrer.substr(0, parseInt(document.referrer.indexOf('?') > -1 ? document.referrer.indexOf('?') : document.referrer.length - 1)) : location.hostname + ((location.pathname) ? location.pathname : ''));
        }
        return getParams + reformatted_data;
    }

    function setSessionStorageData(reformatted_data) {
        let sessionParams = new URLSearchParams(returnInputFields(reformatted_data));
        for (let key of sessionParams.keys()) {
            window.sessionStorage.setItem(key, sessionParams.get(key));
        }
    }

    <?php
    /**
     * GOOGLE FUNCTION FOR COLLECTING FORM DATA.
     * THIS IS STORED IN THE TAG MANAGER:
     * function() {
     *      return {
     *           "email": GEC.email, 
     *           "phone_number": GEC.phone_number,
     *           "address": {
     *               "first_name": GEC.first_name,
     *               "last_name": GEC.last_name,
     *               "postal_code": GEC.postal_code,
     *           }
     *       }
     *   }
     */
    // https://jsfiddle.net/Subib/g58j4waq/1/
    // dataLayer.push({
    //     'event': 'ec_formsubmit',
    //     'enhanced_conversion_data': {
    //         "email": 'yourEmailVariable',
    //         "phone_number": 'yourPhoneVariable',
    //         "first_name": 'yourFirstNameVariable',
    //         "last_name": 'yourLastNameVariable',
    //         "street": 'yourStreetAddressVariable',
    //         "city": 'yourCityVariable',
    //         "region": 'yourRegionVariable',
    //         "postal_code": 'yourPostalCodeVariable',
    //         "country": 'yourCountryVariable'
    //     }
    // });
    if (strpos($_SERVER['REQUEST_URI'], "thank") !== FALSE) :
    ?>
        dataLayer.push({
            'event': 'ec_formsubmit',
            'enhanced_conversion_data': {
                "email": window.sessionStorage.getItem('email'),
                "phone_number": window.sessionStorage.getItem('phone_1'),
                "first_name": window.sessionStorage.getItem('first_name'),
                "last_name": window.sessionStorage.getItem('last_name'),
                "postal_code": window.sessionStorage.getItem('postal_code')
            }
        });
        const GEC = {
            first_name: window.sessionStorage.getItem('first_name'),
            last_name: window.sessionStorage.getItem('last_name'),
            email: window.sessionStorage.getItem('email'),
            phone_number: window.sessionStorage.getItem('phone_1'),
            postal_code: window.sessionStorage.getItem('postal_code'),
        }
    <?php
    endif;
    ?>

    function sendLeadToLocalDatabase(reformatted_data) {
        var localFormData = new FormData();
        if (reformatted_data instanceof FormData) {
            localFormData = reformatted_data;
        } else {
            var localURL = new URLSearchParams(reformatted_data);
            for (let data of localURL.entries()) {
                localFormData.append(data[0], data[1]);
            }
        }
        var xhrLocal = new XMLHttpRequest();
        xhrLocal.open("POST", "/wp-content/themes/semper-arizona-child/php/lead_to_local_database.php");
        xhrLocal.send(localFormData);
    }

    <?php
    // ZAPIER NAME: "SMP Paid Search FFO Parameters from sempersolaris.com"
    ?>

    function sendPaidSearchLead(reformatted_data) {
        var xhrZapier = new XMLHttpRequest();
        xhrZapier.open("GET", "https://hooks.zapier.com/hooks/catch/807991/birlqat" + returnInputFields(reformatted_data));
        xhrZapier.send();
    }

    <?php
    // ZAPIER NAME: "SMP Website FFO from sempersolaris.com"
    ?>

    function sendWebsiteLead(reformatted_data) {
        var xhrWebLeadZapier = new XMLHttpRequest();
        xhrWebLeadZapier.open("GET", "https://hooks.zapier.com/hooks/catch/807991/bay8hcs/" + returnInputFields(reformatted_data));
        xhrWebLeadZapier.send();
    }


    <?php
    /**
     * DISABLE SUBMIT BUTTON UNTIL REQUIRED FIELDS ARE POPULATED
     */
    ?>

    function walkUpParentNodes(el) {
        while (el.parentNode) {
            el = el.parentNode;
            if (el.classList.contains('is-visible')) {
                return el;
            }
        }
        return false;
    }

    function checkInputValueForNull(form) {
        for (let i = 0; i < form.length; i++) {
            if (form[i].hasAttribute('required') && form[i].value == '') return true;
        }
        return false;
    }

    function formFieldEvents(input, eventType) {
        input.addEventListener(eventType, function() {
            let thisForm = walkUpParentNodes(input);
            let submitBtn = document.querySelector('#' + thisForm.id + ' [type="submit"]');
            if (checkInputValueForNull(thisForm) == false) {
                submitBtn.removeAttribute("disabled");
            } else {
                submitBtn.setAttribute("disabled", "");
            }
        })
    }

    var _allForms = document.querySelectorAll('form.__semper_solaris_sf_form');
    var _requiredFields = [];
    ! function() {
        _allForms.forEach(f => {
            for (let i = 0; i < f.length; i++) {
                if (f[i].hasAttribute("required")) {
                    _requiredFields.push(f[i]);
                }
            }
        });
    }();

    var _submitButton = document.querySelectorAll('[id^="submit_container"] input, [id^="submit_container"] button');

    _submitButton.forEach(btn => {
        btn.setAttribute("disabled", "");
    });

    _requiredFields.forEach(input => {
        formFieldEvents(input, "keyup");
        formFieldEvents(input, "click");
    });

    var responseVerification = (response) => {
        verificationToken = response;
        setTimeout(() => {
            verificationToken = '';
        }, 6e4);
    };
    var recaptchaOnloadCallback = function() {
        document.querySelectorAll('.recaptcha_render').forEach(element => {
            grecaptcha.render(element, {
                'sitekey': '6Ldem0UUAAAAAKFiyiHchNoqNApdO9Cb1SPcYf9C',
                'callback': responseVerification
            });
            element.classList.remove('recaptcha-logo');
        });
    };

    /**
     * EMAIL INPUT VALIDATION
     */
    function emailValidator(el) {
        let pattern = "^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$";
        let atSignIndex = el.value.indexOf("@");
        let tldDotIndex = (atSignIndex == -1) ? -1 : el.value.indexOf(".", atSignIndex);
        if (el.value != "" && (atSignIndex == -1 || tldDotIndex == -1)) {
            el.classList.add("email-format-error");
        } else if (el.value.match(pattern) && tldDotIndex !== -1 && tldDotIndex !== el.value.length - 1) {
            el.classList.remove("email-format-error");
        }
    }
</script>
<noscript>
    <img src="https://api.trustedform.com/ns.gif" alt="Trusted Form Pixel" />
</noscript>