import {
    popIsOpen,
    exitPopUpIsVisible,
    flipVisibilityVar,
    toggleIsVisibleClass,
    ispopup,
    flipIsPopup,
    emailValidator,
    REQINPUTS,
    DEVICETYPE
} from "./salesforce-direct.min.js";
var _HOME2 = window.location.hostname;
var _PROTOCOL2 = window.location.protocol;
var referrer2 = ((document.referrer != "") ? document.referrer.substr(0, parseInt(document.referrer.indexOf('?') > -1 ? document.referrer.indexOf('?') : document.referrer.length - 1)) : location.hostname + ((location.pathname) ? location.pathname : ''));
let exitLeadSource = '';
if (document.getElementById('location_lead_source') && document.getElementById('location_lead_source').dataset.leadSource != "WEBSITE CURRENT OFFERS ALL") {
    exitLeadSource = document.getElementById('location_lead_source').dataset.leadSource;
} else {
    exitLeadSource = 'WEBSITE POPUP EXIT ALL';
};

document.body.insertAdjacentHTML("beforeend", `
<div class="modal_popup" >
    <div id="modal-content_popup" class="modal-content_popup">
        <span class="close-button_popup close-popup-click">×</span>
        <h4 class="close-with-text"> No thanks, miss out on this deal </h4>
    </div>


</div>`);

const EXIT_FORM = `
<div  class="exit-pop-up" style="font-family:'Barlow'">
    <div class=" ">
        <div class="exit-pop-up-red-banner text-center " style="background-color:#CE0109;">
            <h2 class="text-white exit-popup-title py-2"> <b class="exit-popup-title-1">HANG ON!</b>  <br class="exit-pop-display"> WE HAVE A SPECIAL <br > OFFER JUST FOR YOU </h2>
        </div>
        <div class="text-center popup-coupon-wrapper">
            <h3 class="exit-popup-3rd-header m-auto font-weight-bold  margin:auto;"> Take Advantage Of <br class="d-block"> Our Solar Internet Coupon </h3>
            <picture style=" margin:auto;margin-bottom: -10px; padding: 0px 10px;">
                <source media="(min-width: 779px)" width="380" srcset="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/pop-up-offer/12-09-22-SMPAZ-Downloadable-Coupon-Dec2022.svg">
                <img src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/pop-up-offer/12-12-22-SMPAZ-Downloadable-Coupon-Mobile-Dec2022.svg" alt="$500 downloadable coupon">
            </picture>
            <p class="exit-pop-display" style="font-size:12px !important; max-width:300px; line-height:14px!important; margin:auto;">*Present this at the time of your appointment. Call or see the website for further details www.sempersolaris.com | ROC# 336163 | ROC# 336306 | ROC# 336305</p>

        </div>
    </div>

    <div class=" text-black popup-from-wrapper">
        <form id="exit-pop-up-form" class="__semper_solaris_sf_form" method="POST" >
            <input type="hidden" name="oid" value="00D1a000000H6Ki" />
            <input type="hidden" name="retURL" value="${_PROTOCOL2}//${_HOME2}/thank-you/" />
            <input type="hidden" name="formName" value="__semper_solaris_sf_form_exit_popup" />
            <input type="hidden" name="deviceType" value="${DEVICETYPE()}" />
            <input type="hidden" name="formInstance" value="exitpopup" />
         
        
            <h3 class="text-center pt-md-3 font-weight-bold exit-pop-display right-side-title"> Get Your Coupon Emailed <br class="d-md-block"> <b> Start Saving</b> On Your <br class="d-md-block"> Electric Bill! </h3>
            <p class="text-center font-weight-bold fill-out-form-below "> <img src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/pop-up-offer/12-09-22-SMPAZ-Red-Down-Arrow-Dec2022.svg"> Fill out form below <img src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/pop-up-offer/12-09-22-SMPAZ-Red-Down-Arrow-Dec2022.svg">  </p>

            <label for="last_name_popup">
                <input id="last_name_popup" maxlength="80" name="last_name" size="20" type="text"  aria-label="Full Name (required)" placeholder="Full Name:*" required />
            </label>

            <br class="d-block">

            <label for="email_popup">
                <input id="email_popup" maxlength="80" name="email" size="20" type="email" aria-label="Email (required)" placeholder="Email:*" required />
            </label>

            <br class="d-block">

            <label for="phone_popup">
                <input id="phone_popup" maxlength="40" name="phone" size="20" type="text" aria-label="Phone Number (required)" placeholder="Phone Number:*" required />
            </label>
            <br class="d-block">

            <label for="zip_popup">
                <input id="zip_popup" maxlength="40" name="zip" size="20" type="text" aria-label="Zip Code (required)" placeholder="Zip Code:*" required />
            </label>

            <div id="" class="text-center exit-btn-wrapper">
                <input class="exit-pop-up-btn" aria-label="Submit Form" name="zip" type="submit" value="Secure Offer" disabled />
				<div class="button-spinner button--loading"></div>
            </div>

            <div class="exit-text-holder">

            </div>

            <h3 class="text-center font-weight-bold pt-2 exit-pop-display"> Or Call (480) 863-0024 </h3>
            <p class="m-auto text-center exit-pop-display" style="font-size:12px !important; max-width:280px; line-height:14px !important; ">By clicking, you agree to receive marketing emails, text messages, and phone calls are recorded. You may opt-out at anytime.</p>

            <p class="m-auto mb-none py-2 exit-pop-display-reverse text-center text-white" style="font-size:12px !important; max-width:320px; line-height:14px !important; ">*Present this at the time of your appointment. Call or see the website for further details www.sempersolaris.com | ROC# 336163 | ROC# 336306 | ROC# 336305. By clicking, you agree to receive marketing emails, text messages, and phone calls are recorded. You may opt-out at anytime.</p>
            
            <input type="hidden" id="current_page" name="current_page" value="${document.location}" />
            <input type="hidden" id="referrer" name="referrer" value="${referrer2+location.search}" />
            <input type="hidden" name="lead_source" value="${exitLeadSource}" />
        </form>
    </div>
</div>
`;
///////////////////////////////////////
// Exit Intent For Desktop
const EXITFUNCTIONS = {
    exitIntent: (e) => {
        const shouldExit = [...e.target.classList].includes('modal_popup') || // user clicks on BG
            e.target.className === 'close-popup-click' || e.target.className === 'close-with-text' ||// user clicks on the close icon
            e.keyCode === 27; // user hits escape

        if (shouldExit) {
            document.getElementById('exit-pop-up-form').classList.remove('is-visible');
            document.querySelector(".modal_popup").classList.remove('show-modal_popup');
        }
    },
    mouseEvent: (e) => {
        if (popIsOpen) {
            return;
        }
        const shouldShowExitIntent = !e.toElement &&
            !e.relatedTarget &&
            e.clientY < 10;

        if (shouldShowExitIntent) {
            flipVisibilityVar();
            toggleIsVisibleClass();
            document.body.removeEventListener('mouseleave', EXITFUNCTIONS.mouseEvent);
            document.getElementById('exit-pop-up-form').classList.add('is-visible');
            document.querySelector(".modal_popup").classList.add('show-modal_popup');
            CookieService.setCookie('exitIntentShown', true, 3);
        }
    },
    toggleModal: () => {
        // exitPopUpIsVisible = !exitPopUpIsVisible;
        flipVisibilityVar();
        toggleIsVisibleClass();
        modal.classList.toggle("show-modal_popup");
    },

    windowOnClick: (e) => {
        if (e.target === modal) {
            EXITFUNCTIONS.toggleModal();
        }
    }
}

const modal = document.querySelector(".modal_popup");
const closeButton = document.querySelector(".close-popup-click");
const closeText = document.querySelector(".close-with-text");
// Sets cookie 
const CookieService = {

    setCookie(name, value, minutes) {
        let expires = '';

        if (minutes) {
            const date = new Date();
            date.setTime(date.getTime() + (minutes * 60 * 1000));
            expires = '; expires=' + date.toUTCString() + "; path=/";
        }

        document.cookie = name + '=' + (value || '') + expires + ';';
    },

    getCookie(name) {
        const cookies = document.cookie.split(';');
        for (const cookie of cookies) {
            if (cookie.indexOf(name + '=') > -1) {
                return cookie.split('=')[1];
            }
        }
        return null;
    }
}

if (location.pathname.search("thank-you") == -1) {
    closeButton.addEventListener("click", EXITFUNCTIONS.toggleModal);
    closeText.addEventListener("click", EXITFUNCTIONS.toggleModal);
    window.addEventListener("click", EXITFUNCTIONS.windowOnClick);
    const EXIT_POPUP = document.querySelector("#modal-content_popup");
    EXIT_POPUP.insertAdjacentHTML("beforeend", EXIT_FORM);
    if (!CookieService.getCookie('exitIntentShown')) {
        setTimeout(() => {
            document.body.addEventListener('mouseleave', EXITFUNCTIONS.mouseEvent);
            document.addEventListener('keydown', EXITFUNCTIONS.exitIntent);
        }, 0);
    }
}

/////////////////////////////////
// Exit Intent For Mobile based on mobile scroll speed up
if (!CookieService.getCookie('exitIntentShown') && window.matchMedia("only screen and (max-width: 480px)").matches) {
    setTimeout(() => {
        document.addEventListener("scroll", scrollSpeed);
    }, 3000);

    var newPosition = 0;

    function scrollSpeed() {
        let lastPosition = window.scrollY;
        setTimeout(() => {
            newPosition = window.scrollY;
        }, 100);
        let currentSpeed = newPosition - lastPosition;
        if (currentSpeed > 160) {
            EXITFUNCTIONS.toggleModal;
            document.removeEventListener("scroll", scrollSpeed);
            document.getElementById('exit-pop-up-form').classList.add('is-visible');
            document.querySelector(".modal_popup").classList.add('show-modal_popup');
            CookieService.setCookie('exitIntentShown', true, 3);
        }
    };
}
//    prevents multiple submission on same sessions
const loadingSymbol = document.querySelector(".button--loading");
const exitPopUpBtn = document.querySelector(".exit-pop-up-btn");
if (exitPopUpBtn) {
    exitPopUpBtn.addEventListener("click", function() {
        flipIsPopup();
        exitPopUpBtn.value = "";
        loadingSymbol.style.display = "block";
    });

};

var wasSubmitted = false;

function checkBeforeSubmit() {
    if (!wasSubmitted) {
        wasSubmitted = true;
        return wasSubmitted;
    }
    return false;
}

REQINPUTS.getRequired();
REQINPUTS.applyEventlisteners();