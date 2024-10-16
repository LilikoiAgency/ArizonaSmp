var exitPopUpIsVisible = false;
var ispopup = false;
const VERT_CONTAINER = document.getElementById("vertical_container");
const SEARCHPARAMS = new URLSearchParams(window.location.search);
const DEVICETYPE = () => {
    let deviceList = ['Android', 'iPhone', 'iPad', 'Kindle', 'Silk', 'BlackBerry', 'Mobile'];
    let userAgent = navigator.userAgent;
    let device = userAgent.substring(userAgent.indexOf('(') + 1, userAgent.indexOf(';'));
    for (let index = 0; index < deviceList.length; index++) {
        let dev = deviceList[index];
        if (userAgent.search(dev) > -1) {
            device = dev;
            break;
        }
    }
    return ("X11" == device) ? "Linux" : ("Silk" == device) ? device + " (Amazon)" : device;
};
var defaultAction = "";
var popIsOpen = false;
var referrer = ((document.referrer != "") ? document.referrer.substring(0, parseInt(document.referrer.indexOf('?') > -1 ? document.referrer.indexOf('?') : document.referrer.length - 1)) : location.hostname + ((location.pathname) ? location.pathname : ''));
var isVisible = (document.getElementById('location_form')) ? "" : ((document.getElementById('refer_friend_form')) ? "" : "is-visible");
const _HOME = window.location.hostname;
const _PROTOCOL = window.location.protocol;
const VERTICAL_FORM = `
        <form id="__semper_solaris_sf_form_v" class="__semper_solaris_sf_form ${isVisible}" data-parent="sidebar" action="${defaultAction}" method="POST">
            <input type="hidden" name="oid" value="00D1a000000H6Ki">
            <input type="hidden" name="retURL" value="${_PROTOCOL}//${_HOME}/thank-you/">
            <input type="hidden" name="formName" value="__semper_solaris_sf_form_v" />
            <input type="hidden" name="formInstance" id="formInstance" value="sidebar" />
            <input type="hidden" name="deviceType" value="${DEVICETYPE()}" />
            <fieldset>
                <legend class="px-2">Your Info:</legend>
                <div class="grid-container">
                    <label for="first_name_v">
                        <span class="label-text">First Name <small><em>(required)</em></small></span>
                        <input id="first_name_v" maxlength="40" name="first_name" size="20" type="text" required aria-label="First Name (required)" placeholder="First Name (required)" />
                    </label>

                    <label for="last_name_v">
                        <span class="label-text">Last Name <small><em>(required)</em></small></span>
                        <input id="last_name_v" maxlength="80" name="last_name" size="20" type="text" required aria-label="Last Name (required)" placeholder="Last Name (required)" />
                    </label>
                </div>

                <label for="email_v">
                    <span class="label-text">Email <small><em>(required)</em></small></span>
                    <input id="email_v" maxlength="80" name="email" size="20" type="email" required aria-label="Email (required)" placeholder="Email (required)" />
                </label>

                <div class="grid-container">
                    <label for="phone_v">
                        <span class="label-text">Phone <small><em>(required)</em></small></span>
                        <input id="phone_v" maxlength="40" name="phone" size="20" type="text" required aria-label="Phone Number (required)" placeholder="Phone Number (required)" />
                    </label>

                    <label for="zip_v">
                        <span class="label-text">ZIP Code <small><em>(required)</em></small></span>
                        <input id="zip_v" class="w-100" maxlength="20" name="zip" size="20" type="text" required aria-label="ZIP Code (required)" placeholder="Zip Code (required)" />
                    </label>
                </div>
            </fieldset>

            <fieldset>
                <legend class="px-2">How Can We Help?</legend>
                <label for="00N1a000008Wmel_v">
                    <span class="label-text">What is the best day and time frame? <small><em>(required)</em></small></span>
                    <input id="00N1a000008Wmel_v" maxlength="50" name="00N1a000008Wmel" size="20" type="text" required aria-label="What Is the Best Day and Time to Reach You? (required)" placeholder="What is the best day and time frame? (required)" />
                </label>

                <label for="00N1a000008Wmeg_v">
                    What is the best way to reach you? <small><em>(required)</em></small>
                    <select id="00N1a000008Wmeg_v" name="00N1a000008Wmeg" title="What is the best way to reach you? (required)" required aria-label="Best Way to Reach You (required)">
                        <option value="">--None--</option>
                        <option value="Call">Call</option>
                        <option value="Text">Text</option>
                        <option value="Email">Email</option>
                        <option value="All">All</option>
                    </select>
                </label>

                <label for="00N1a000008Wmeq_v">
                    <span class="label-text">How did you hear about us?</span>
                    <input id="00N1a000008Wmeq_v" maxlength="255" name="00N1a000008Wmeq" size="20" type="text" aria-label="How Did You Hear about Us?" placeholder="How Did You Hear about Us?" />
                </label>

                <label for="00N1a000004puqd_v">
                    <span class="label-text">Message: <small><em>(required)</em></small></span>
                    <textarea id="00N1a000004puqd_v" style="width:100%" name="00N1a000004puqd" maxlength="5000" rows="2" wrap="soft" required aria-label="Solar, Battery Storage, Roofing.\nWhat's your interest? (required)" placeholder="Solar, Battery Storage, Roofing.\nWhat's your interest? (required)"></textarea>
                </label>
            </fieldset>
            <br />

            <div class="recaptcha_render recaptcha-logo rounded"></div>
            <br />

            <div style="display:flex;">
                <style>
                    @media screen and (min-width: 768px) {
                        [name="emailOptOut"] {
                            max-width: 15px;
                            margin: 0 3px 0 0;
                        }
                    }
                </style>
                <label for="emailOptOut_v" style="margin-top:-5px">
                    <input id="emailOptOut_v" name="emailOptOut" type="checkbox" style="width:auto" aria-label="Is it okay to email you information?" />
                    Is it OK to email you information?
                </label>
            </div>

            <div id="submit_container_v">
                <input style="width:100%;padding:20px" value="Submit" type="submit" name="formSubmitBtn" class="btn btn-red" disabled="" aria-label="Submit Form" />
            </div>
            <p style="font: normal normal normal 12px/12px Barlow, sans-serif">By clicking, you agree to receive marketing emails, text messages, and phone calls and chats are recorded. You may opt-out at anytime.</p>

            <input type="hidden" id="current_page" name="current_page" value="${document.location}" />
            <input type="hidden" id="referrer" name="referrer" value="${referrer + location.search}" />
            <input type="hidden" id="lead_source_v" name="lead_source" value="WEBSITE CONTACT US ALL" />
        </form>
    `;
const POPUP_FORM = `
        <form id="__semper_solaris_sf_form_p" class="__semper_solaris_sf_form" data-parent="popup" action="${defaultAction}" method="POST">
            <input type="hidden" name="oid" value="00D1a000000H6Ki" />
            <input type="hidden" name="retURL" value="${_PROTOCOL}//${_HOME}/thank-you/" />
            <input type="hidden" name="formName" value="__semper_solaris_sf_form_p" />
            <input type="hidden" name="formInstance" id="formInstance" value="popup" />
            <input type="hidden" name="deviceType" value="${DEVICETYPE()}" />

            <div>
                <label for="first_name_p">
                    <input id="first_name_p" maxlength="40" name="first_name" size="20" type="text" required aria-label="First Name (required)" placeholder="First Name (required)" />
                </label>

                <label for="last_name_p">
                    <input id="last_name_p" maxlength="80" name="last_name" size="20" type="text" required aria-label="Last Name (required)" placeholder="Last Name (required)" />
                </label>
            </div>

            <label for="email_p">
                <input id="email_p" maxlength="80" name="email" size="20" type="email" required aria-label="Email (required)" placeholder="Email (required)" />
            </label>

            <div>
                <label for="phone_p">
                    <input id="phone_p" maxlength="40" name="phone" size="20" type="text" required aria-label="Phone Number (required)" placeholder="Phone Number (required)" />
                </label>

                <label for="zip_p">
                    <input id="zip_p" class="w-100" maxlength="20" name="zip" size="20" type="text" required aria-label="ZIP Code (required)" placeholder="Zip Code (required)" />
                </label>
            </div>

            <!-- <label for="00N1a000008Wmel_p">
                <input id="00N1a000008Wmel_p" maxlength="50" name="00N1a000008Wmel" size="20" type="text" required aria-label="What Is the Best Day and Time to Reach You? (required)" placeholder="What is the best day and time frame? (required)" />
            </label> -->

            <label for="00N1a000008Wmel_p" style="display:flex;flex-direction:row">
                <div style="font-size: 11pt;line-height: 1;margin-top: 3px;">Best Time To Reach You?</div>
                <input id="00N1a000008Wmel_p" name="00N1a000008Wmel" type="datetime-local" aria-label="What Is the Best Day and Time to Reach You? (required)" />
            </label>

            <label for="00N1a000008Wmeq_p">
                <input id="00N1a000008Wmeq_p" maxlength="255" name="00N1a000008Wmeq" size="20" type="text" aria-label="How Did You Hear about Us?" placeholder="How Did You Hear about Us? (required)" required />
            </label>

            <!-- <label for="00N1a000008Wmeg_p">
                <select id="00N1a000008Wmeg_p" name="00N1a000008Wmeg" title="What is the best way to reach you? (required)" required aria-label="Best Way to Reach You (required)">
                    <option value="">What is the best way to reach you? (required)</option>
                    <option value="Call">Call</option>
                    <option value="Text">Text</option>
                    <option value="Email">Email</option>
                    <option value="All">All</option>
                </select>
            </label> -->

            <div class="radio-container text-center">
                <label for="00N1a000008Wmeg"><input id="call-me" type="radio" name="00N1a000008Wmeg" value="Call me" />Call me</label>

                <label for="00N1a000008Wmeg"><input id="text-me" type="radio" name="00N1a000008Wmeg" value="Text me" />Text me</label>

                <label for="00N1a000008Wmeg"><input id="email-me" type="radio" name="00N1a000008Wmeg" value="Email me" />Email me</label>

                <label for="00N1a000008Wmeg"><input id="call-text-email" type="radio" name="00N1a000008Wmeg" value="Call, Text, and/or Email me" />All</label>
            </div>

            <div class="interest-label">What’s your interest? (required):</div>
            <div class="interest-container">
                <label for="solar">
                    <input id="" type="checkbox" name="solar" value="Solar" />
                    Solar
                </label>
                <label for="battery">
                    <input id="" type="checkbox" name="battery" value="Battery Storage" />
                    Battery Storage
                </label>
                <label for="roofing">
                    <input id="" type="checkbox" name="roofing" value="Roofing" />
                    Roofing
                </label>
            </div>

            <input type="hidden" id="00N1a000004puqd_p" name="00N1a000004puqd" required />

            <!-- <label for="00N1a000004puqd_p">
                <textarea id="00N1a000004puqd_p" style="width:100%" name="00N1a000004puqd" maxlength="5000" rows="2" wrap="soft" required aria-label="Solar, Battery Storage, Roofing, HVAC.\nWhat's your interest? (required)" placeholder="Solar, Battery Storage, Roofing, HVAC.\nWhat's your interest? (required)"></textarea>
            </label> -->
            <div style="display:flex">
                <style>
                    @media screen and (min-width: 768px) {
                        [name="emailOptOut"] {
                            max-width: 15px;
                            margin: 0 3px 0 0;
                        }
                    }
                </style>
                <label for="emailOptOut_p" style="margin: 0 auto 5px;font-size: 11pt;">
                    <input id="emailOptOut_p" name="emailOptOut" type="checkbox" style="width:auto" aria-label="Is it okay to email you information?" />
                    Is it OK to email you information?
                </label>
            </div>

            <div class="recaptcha_render recaptcha-logo rounded"></div>

            <div id="submit_container_p">
                <img loading="lazy" src="https://smpbackup.wpengine.com/wp-content/themes/semper-solaris/assets/img/location/SMP-CTA-White-Arrow.svg" class="submit-arrow" alt="Right arrow" width="21px" height="21px">
                <input class="btn btn-red" type="submit" name="formSubmitBtn" disabled="" aria-label="Submit Form" value="Get FREE Estimate" />
            </div>
            <p class="text-center" style="margin:0;font: normal normal normal 8pt/8pt Barlow, sans-serif">By clicking, you agree to receive marketing emails, text messages, and phone calls and chats are recorded. You may opt-out at anytime.</p>

            <input type="hidden" id="current_page" name="current_page" value="${document.location}" />
            <input type="hidden" id="referrer" name="referrer" value="${referrer + location.search}" />
            <input type="hidden" id="lead_source_p" name="lead_source" value="WEBSITE POPUP ALL" />
        </form>
`;

! function() {
    if (VERT_CONTAINER) {
        let formContainer = `
            <div class="smp-form side-contact-form blue-bg-g section-xs text-white" style="min-height:1140px">
            <p class="h4 mb-sm">Let's talk about how much you can save with Semper Solaris.</p>
                ${VERTICAL_FORM}
            </div>
            `;
        VERT_CONTAINER.insertAdjacentHTML("beforeend", formContainer);
    }
}();

! function() {
    document.body.insertAdjacentHTML('beforeend', `
        <div id="modal_background"></div>
        <div id="modal_container">
            <div id="modal_close_x">+</div>
            <div id="modal_content_container">
                <div class="form-header-container-mobile">
                    <div>
                        <div class="text-white">
                            <h3 class="text-center">We’re At Your Side Every&nbsp;Step&nbsp;Of&nbsp;The&nbsp;Way!</h3>
                            <ul>
                                <li>System Solar Panel Design</li>
                                <li>City Permit Completion</li>
                                <li>Expert Solar Panel Installation</li>
                            </ul>
                            <div>
                                <p class="text-center" style="font-size:.9em;margin:3px 0 0">The Only Team You Want</p>
                                <p style="font-size:.9em;margin:3px 0 0 2em;line-height: 1;">On The Job</p>
                            </div>
                            <div style="position: absolute;">
                                <img src="https://smpbackup.wpengine.com/wp-content/themes/semper-solaris/forms/01-23-SMP-Oorah-Text-Jan2023.svg" width="60" style="position: relative;left: 100%; transform: translate(100%, -80%);" alt="Oorah!" />
                            </div>
                        </div>
                        <img src="https://smpbackup.wpengine.com/wp-content/themes/semper-solaris/forms/01-23-SMP-Form-Solar-Installers-Image-Mobile-Jan2023.jpg" width="137" height="184" style="min-width: 137px;height: 184px;" alt="Two solar installers inspecting rooftop solar panels." />
                    </div>
                    <p class="save-big-mobile text-center"><strong><span style="color:#CE0109">SAVE BIG</span> On Solar Energy Today!</strong></p>
                </div>
                <div class="form-header-container-desktop">
                    <h2 class="text-center">AMERICA’S #1 VOLUME SOLAR + BATTERY INSTALLER</h2>
                </div>
                <div class="container-desktop">
                    <div style="max-height:629px; background-color:#0c4e97;">
                        <img src="https://smpbackup.wpengine.com/wp-content/themes/semper-solaris/forms/01-23-SMP-Form-Solar-Installers-Image-Desktop-Jan2023.jpg" width="500" height="305" alt="Two solar installers inspecting rooftop solar panels." />
                        <div class="content-container">
                            <h2 class="text-center">Semper Solaris Is At Your Side Every Step Of The Way!</h2>
                            <ul>
                                <li>System Solar Panel Design</li>
                                <li>City Permit Completion</li>
                                <li>Expert Solar Panel Installation</li>
                            </ul>
                            <div class="oorah">
                                <p>The Only Team You Want On The Job</p>
                                <img src="https://smpbackup.wpengine.com/wp-content/themes/semper-solaris/forms/01-23-SMP-Oorah-Text-Jan2023.svg" width="80" alt="Oorah!" />
                            </div>
                        </div>
                       
                    </div>
                    <div>
                        <p class="save-big text-center"><strong><span style="color:#CE0109">SAVE BIG</span> On Solar Energy Today!</strong></p>
                        ${POPUP_FORM}
                    </div>
                </div>
            </div>
        </div>
    `);
}();

function updateInterests() {
    let checkboxes = document.querySelectorAll('.interest-container input[type="checkbox"]');
    let output = document.getElementById('00N1a000004puqd_p');
    output.value = "Interested in: ";
    checkboxes.forEach(box => {
        if (box.checked == true) {
            output.value += box.value + ', ';
        }
    })
    if (output.value) {
        output.value = output.value.substring(0, output.value.length - 2);
    }
}

var checkboxes = document.querySelectorAll('.interest-container input[type="checkbox"]');
checkboxes.forEach(box => {
    box.addEventListener('change', updateInterests);
});
updateInterests();

/**
 * ONLOAD: SET LEAD SOURCE START
 */

function setLocationLeadSource() {
    if (document.getElementById('location_lead_source')) {
        let allLeadSourceInputs = document.querySelectorAll('[id^="lead_source"]');
        allLeadSourceInputs.forEach(inp => {
            inp.removeAttribute('value');
            inp.setAttribute('value', document.getElementById('location_lead_source').dataset.leadSource);
        });
    }
}
window.addEventListener('load', () => {
    setLocationLeadSource();
});
/**
 * ONLOAD: SET LEAD SOURCE [/END]
 */

function toggleIsVisibleClass() {
    document.querySelectorAll('form.__semper_solaris_sf_form').forEach(form => {
        form.classList.toggle('is-visible');
    })
}

function closePopupModal() {
    popIsOpen = !popIsOpen;
    toggleIsVisibleClass();
    document.getElementById("modal_background").removeAttribute("style");
    document.getElementById("modal_container").removeAttribute("style");
    var d1 = new Date();
    d1.setTime(d1.getTime() + (5 * 60 * 1000)); //Expires in 5 minutes.
    var expires = "expires=" + d1.toUTCString();
    document.cookie = "popupPause=true;" + expires + "; path=/";
}

function areFieldsEmpty() {
    let fields = document.querySelectorAll('.__semper_solaris_sf_form input:not([type="hidden"]):not([type="submit"]):not([id^="emailOptOut"]):not(#location_form input[type="checkbox"]):not([type="radio"]):not([type="checkbox"]), .__semper_solaris_sf_form textarea');
    let result = true;
    fields.forEach(field => {
        if (field.value != "") {
            result = false;
        }
    });
    return result;
}

function openPopupModal(btn = 0) {
    if (exitPopUpIsVisible == true) return;

    if ((getCookie("popupPause") && btn === 0) || !areFieldsEmpty()) {
        return;
    }
    popIsOpen = !popIsOpen;
    let modalBackground = document.getElementById("modal_background");
    if (modalBackground && !modalBackground.getAttribute("style")) {
        document.getElementById("modal_background").setAttribute("style", "display:block;");
        document.getElementById("modal_container").setAttribute("style", "display:block;");
        setTimeout(() => {
            document.getElementById("modal_background").setAttribute("style", "display:block;opacity:1;transition:all .5s ease-in-out;");
            document.getElementById("modal_container").setAttribute("style", "display:block;opacity:1;transition:all .5s ease-in-out;");
        }, 50);
        toggleIsVisibleClass();
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
    }, 500);
}

/**
 * POPUP MODAL EVENT LISTENERS START
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
        document.body.addEventListener("mouseleave", function() {
            openPopupModal();
        });
    }, 500);
}

document.querySelectorAll("button.orange-cta-btn, button.click-for-popup").forEach(btn => {
    btn.addEventListener("click", function() {
        openPopupModal(1);
    });
    btn.addEventListener("touch", function() {
        openPopupModal(1);
    });
});

/**
 * POPUP MODAL EVENT LISTENERS END
 */


// GENERATE TCPA FORM FIELDS

! function() {
    var a = "00N1P00000A2CfC",
        c = !1,
        d = !1,
        b = document.createElement("SCRIPT");
    b.type = "text/javascript";
    b.async = !0;
    b.src = "http" + ("https:" == document.location.protocol ? "s" : "") + "://api.trustedform.com/trustedform.js?provide_referrer\x3d" + escape(c) + "\x26field\x3d" + escape(a) + "\x26l\x3d" + (new Date).getTime() + Math.random() + "\x26invert_field_sensitivity\x3d" + d;
    a = document.getElementsByTagName("script")[0];
    a.parentNode.insertBefore(b, a)
}();

function prepareFormData(form) {
    // COLLECT FORM DATA
    var initFormData = new FormData(form);
    initFormData.append("trustedform_cert_url", initFormData.get('00N1P00000A2CfC'));
    initFormData.append("query_parameters", new URLSearchParams(window.location.search));

    var formDataArray = [];
    for (const [key, value] of initFormData) {
        var newKey = '';
        let suffix = key.substring(key.length - 2, key.length);
        if (suffix == "_v" || suffix == "_h" || suffix == "_p") {
            newKey = key.substring(0, key.length - 2);
        } else {
            newKey = key;
        }
        formDataArray.push(newKey + "=" + encodeURIComponent(value));
    }

    // FINAL DATA FORMATTING
    formDataArray = formDataArray.join("&");
    return formDataArray;
}

function loopUpFromSubmitButtonToParentFormElement(formElementCheck) {
    while (formElementCheck.tagName.toUpperCase() != "FORM") {
        formElementCheck = formElementCheck.parentElement;
    }
    return formElementCheck;
}

document.addEventListener('DOMContentLoaded', setFormEventListeners, false);

function setFormEventListeners() {
    var allSubmitBtns = document.querySelectorAll('form.__semper_solaris_sf_form [type="submit"]');
    allSubmitBtns.forEach((submitBtn, i) => {
        submitBtn.addEventListener('click', function(e) {
            var sfForm = loopUpFromSubmitButtonToParentFormElement(this);
            if (!this.dataset.ready) {
                e.preventDefault();
                if (!verificationToken && ispopup == false && sfForm.id != 'exit-pop-up-form') {
                    alert("Please complete the reCaptcha challenge. Thanks!");
                    return;
                }
                if (document.getElementsByClassName("email-format-error")[0]) {
                    alert("Please provide a valid email address. Thank you!");
                    return;
                }

                this.dataset.ready = 1;
                this.click();
            } else if (this.dataset.ready == "1") {
                e.preventDefault();
                let reformatted_data = prepareFormData(sfForm);
                /** 
                 * GOOGLE ENHANCED TRACKING DATA
                 */
                setLocalStorageData(reformatted_data);
                /**
                 * 
                 */
                sfForm.insertAdjacentHTML("beforeend", '<input type="hidden" name="action" value="submit" />');
                this.dataset.ready = 2;
                sfForm.submit();
            }
        })
    });
}

function returnInputFields(formattedData) {
    var getParams = "?page_name=" + location.hostname + location.pathname + "&";

    if (SEARCHPARAMS) {
        for (let key of SEARCHPARAMS.keys()) {
            getParams += key + "=" + SEARCHPARAMS.get(key) + "&";
        }
    }

    if ((SEARCHPARAMS && !SEARCHPARAMS.get('referrer') || !SEARCHPARAMS)) {
        getParams += 'referrer=' + ((document.referrer != "") ? document.referrer.substring(0, parseInt(document.referrer.indexOf('?') > -1 ? document.referrer.indexOf('?') : document.referrer.length - 1)) : location.hostname + ((location.pathname) ? location.pathname : ''));
    }
    return getParams + "&" + formattedData;
}

function setLocalStorageData(formDataForLocalStorage) {
    let storageParams = new URLSearchParams(returnInputFields(formDataForLocalStorage));
    for (let key of storageParams.keys()) {
        window.localStorage.setItem(key, storageParams.get(key));
    }
}

if (location.pathname.search("thank-you") > -1) {
    dataLayer.push({
        'event': 'ec_formsubmit',
        'enhanced_conversion_data': {
            "email": window.localStorage.getItem('email'),
            "phone_number": window.localStorage.getItem('phone'),
            "first_name": window.localStorage.getItem('first_name'),
            "last_name": window.localStorage.getItem('last_name'),
            "postal_code": window.localStorage.getItem('zip')
        }
    });
    const GEC = {
        first_name: window.localStorage.getItem('first_name'),
        last_name: window.localStorage.getItem('last_name'),
        email: window.localStorage.getItem('email'),
        phone_number: window.localStorage.getItem('phone'),
        postal_code: window.localStorage.getItem('zip'),
    }
}

/**
 * DISABLE SUBMIT BUTTON UNTIL REQUIRED FIELDS ARE POPULATED
 */

const REQINPUTS = {
    walkUpParentNodes: function(el) {
        while (!el.classList.contains('is-visible')) {
            el = el.parentNode;
            if (el.classList.contains('is-visible')) {
                return el;
            }
        }
        return false;
    },

    checkInputValueForNull: function(form) {
        for (let i = 0; i < form.length; i++) {
            if (form[i].hasAttribute('required') && (form[i].value == '' || form[i].value == undefined)) return true;
        }
        return false;
    },

    formFieldEvents: function(input, eventType) {
        input.addEventListener(eventType, function() {
            let thisForm = REQINPUTS.walkUpParentNodes(input);
            let submitBtn = document.querySelector('#' + thisForm.id + ' [type="submit"]');
            if (REQINPUTS.checkInputValueForNull(thisForm) == false) {
                submitBtn.removeAttribute("disabled");
            } else {
                submitBtn.setAttribute("disabled", "");
            }
        })
    },

    _requiredFields: [],
    getRequired: function() {
        let _allForms = document.querySelectorAll('form.__semper_solaris_sf_form');
        _allForms.forEach(f => {
            for (let i = 0; i < f.length; i++) {
                if (f[i].hasAttribute("required") || f[i].getAttribute("type") == "checkbox") {
                    REQINPUTS._requiredFields.push(f[i]);
                }
            }
        });
    },

    applyEventlisteners: function() {
        let eventType = ['keyup', 'click', 'touch', 'blur', 'change'];
        REQINPUTS._requiredFields.forEach(input => {
            eventType.forEach(ev => {
                REQINPUTS.formFieldEvents(input, ev);
                if (input.type == "email" && ev == "blur") {
                    input.addEventListener(ev, emailValidator);
                }
            });
        })
    },

    setDisabled: function() {
        let _submitButton = document.querySelectorAll('[id^="submit_container"] input, [id^="submit_container"] button, input.exit-pop-up-btn');
        _submitButton.forEach(btn => {
            btn.setAttribute("disabled", "");
        })
    }
};
////////////////////////////
// THESE TWO METHODS ARE CALLED FROM WITHIN THE exit-pop-up JS FILE:
// REQINPUTS.getRequired();
// REQINPUTS.applyEventlisteners();
///////////////////////////////
REQINPUTS.setDisabled();

/**
 * EMAIL INPUT VALIDATION
 */
function emailValidator(el) {
    let email = el.target;
    let pattern = "^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$";
    let atSymbolIndex = email.value.indexOf("@");
    let tldDotIndex = (atSymbolIndex == -1) ? -1 : email.value.indexOf(".", atSymbolIndex);
    if (
        (email.value != "" && (atSymbolIndex == -1 || tldDotIndex == -1)) ||
        (email.value.match('noreply') || email.value.match('no-reply'))
    ) {
        email.classList.add("email-format-error");
    } else if (email.value.match(pattern) && tldDotIndex !== -1 && tldDotIndex !== email.value.length - 1) {
        email.classList.remove("email-format-error");
    }
}

function flipVisibilityVar() {
    exitPopUpIsVisible = !exitPopUpIsVisible;
}

function flipIsPopup() {
    ispopup = !ispopup;
}
export {
    popIsOpen,
    exitPopUpIsVisible,
    flipVisibilityVar,
    toggleIsVisibleClass,
    ispopup,
    flipIsPopup,
    emailValidator,
    REQINPUTS,
    DEVICETYPE
};