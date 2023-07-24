/**
 * GOOGLE RECAPTCHA LOGIC START
 */
var verificationToken = "",
    isRecaptchaLoaded = false;
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

function loadRecaptcha() {
    if (isRecaptchaLoaded) {
        return;
    }
    var headTag = document.getElementsByTagName("HEAD")[0];
    var script_element = document.createElement('SCRIPT');
    script_element.type = 'text/javascript';
    script_element.src = 'https://www.google.com/recaptcha/api.js?onload=recaptchaOnloadCallback&render=explicit';
    headTag.appendChild(script_element);
    isRecaptchaLoaded = true;
}

window.onload = () => {
    var recaptchaEvents = ['change', 'click', 'focus', 'focusin', 'mousedown', 'select', 'touchstart'];
    var sfFormGoogle = document.getElementById('__semper_solaris_sf_form_v');
    recaptchaEvents.forEach(eventType => {
        (sfFormGoogle) ? document.getElementById('__semper_solaris_sf_form_v').addEventListener(eventType, loadRecaptcha, {
            passive: true
        }): '';
        document.querySelectorAll("form:not(#__semper_solaris_sf_form_v)").forEach(form => {
            if (form.id != 'exit-pop-up-form') {
                form.addEventListener(eventType, loadRecaptcha, {
                    passive: true
                });
            }
        });
    });
}


/**
 * GOOGLE RECAPTCHA LOGIC END
 */