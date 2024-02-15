<!-- Google Tag Manager -->
<script async>
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

<!-- Meta Pixel Code -->
<script>
    class UserData {

        constructor() {
            this.pixelID = '1720708031531884';
            this.aprUrl = `/capi/${this.pixelID}.php`;
            document.addEventListener('keyup', () => {
                this.fbCookieCurrator()
            }, false)
            document.addEventListener('change', () => {
                this.fbCookieCurrator()
            }, false)
            this.cookieData = this.getCookieByName('form_data')
            this.fbqInitData = {
                em: '<?= (!empty($_COOKIE['form_data']['em'])) ? hash('sha256', $_COOKIE['form_data']['em']) : hash('sha256', '') ?>',
                fn: '<?= (!empty($_COOKIE['form_data']['fn'])) ? hash('sha256', $_COOKIE['form_data']['fn']) : hash('sha256', '') ?>',
                ln: '<?= (!empty($_COOKIE['form_data']['ln'])) ? hash('sha256', $_COOKIE['form_data']['ln']) : hash('sha256', '') ?>',
                ph: '<?= (!empty($_COOKIE['form_data']['ph'])) ? hash('sha256', $_COOKIE['form_data']['ph']) : hash('sha256', '') ?>',
                zp: '<?= (!empty($_COOKIE['form_data']['zp'])) ? hash('sha256', $_COOKIE['form_data']['zp']) : hash('sha256', '') ?>',
                country: '<?= (!empty($_COOKIE['form_data']['country'])) ? hash('sha256', $_COOKIE['form_data']['country']) : hash('sha256', 'us') ?>',
                fbp: this.getCookieByName('_fbp'),
                fbc: this.getCookieByName('_fbc'),
            }
            this.printFBQs(this.fbqInitData)
        }

        printFBQs(fbqData) {
            this.EVENTID = this.generate_event_id();
            this.data = (fbqData) ? JSON.stringify(fbqData) : {};
            this.scriptTag = document.createElement('SCRIPT');
            this.scriptTag.id = 'Meta-Pixel';
            this.scriptTag.innerHTML = `!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');`;
            this.scriptTag.innerHTML += 'f' + 'b' + 'q' + `("init", ${this.pixelID}, ${this.data});`;

            this.event_info = [
                ['PageView', this.EVENTID]
            ];

            if (location.pathname.search("thank") >= 0) {
                this.event_info.push(["Lead", this.EVENTID]);
            }

            this.event_info.forEach(evnt => {
                this.scriptTag.innerHTML += 'f' + 'b' + 'q' + `("track", "${evnt[0]}", ${this.data}, {"eventID": "${evnt[1]}"});`;
                if (this.aprUrl !== '') this.sendCAPI(evnt, this.data);
            });

            this.scriptTag.innerHTML += 'console.log("Meta Pixel");';
            document.head.appendChild(this.scriptTag);
        }

        generate_event_id() {
            return "capi_" + Date.now() + "_" + Math.random() * 99999;
        }

        ifJSONparseIt(str) {
            let parsed = str;
            try {
                parsed = JSON.parse(str);
            } catch (e) {
                return str;
            }
            return parsed;
        }

        formatPhoneNumber(pn) {
            // Remove non-numeric characters
            pn = pn.replace(/\D/g, '');
            // Ensure it starts with '1' if it doesn't already for country code
            if (pn.charAt(0) !== '1') {
                pn = '1' + pn;
            }
            return pn;
        }

        getCookieArray() {
            let trimmedCookies = [];
            let decodedCookies = decodeURIComponent(document.cookie);
            decodedCookies = decodedCookies.split(';');
            decodedCookies.forEach(cookie => {
                trimmedCookies.push(cookie.trim());
            });
            return trimmedCookies;
        }

        createUpdateCookie(name, value, years) {
            var expires = '';
            if (years) {
                var date = new Date();
                date.setTime(date.getTime() + (years * 3.1536e10));
                expires = '; expires=' + date.toUTCString();
            }
            document.cookie = name + '=' + value + expires + ';path=/';
        }

        getCookieByName(cookieName = null) {
            let name = cookieName + "=";
            let cookieArray = this.getCookieArray();
            for (let i = 0; i < cookieArray.length; i++) {
                let c = cookieArray[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    let value = c.substring(name.length, c.length);
                    return this.ifJSONparseIt(value);
                }
            }
            return (cookieName == 'form_data') ? {} : '';
        }

        fbCookieCurrator() {
            // Get active input value
            let focusedInput = document.activeElement;
            let formCookie = this.getCookieArray().filter(cookie => cookie.includes('form_data'))[0];
            try {
                formCookie = JSON.parse(formCookie.substring('form_data='.length));
                if (typeof(formCookie) == 'string') formCookie = JSON.parse('{}');
            } catch (e) {
                formCookie = JSON.parse('{}');
            }

            // Populate cookie data
            switch (focusedInput.name) {
                case 'first-name':
                    formCookie.fn = focusedInput.value.toLowerCase();
                    break;
                case 'last-name':
                    formCookie.ln = focusedInput.value.toLowerCase();
                    break;
                case 'phone':
                    formCookie.ph = this.formatPhoneNumber(focusedInput.value);
                    break;
                case 'email':
                    formCookie.em = focusedInput.value.toLowerCase();
                    break;
                case 'zip':
                    formCookie.zp = focusedInput.value;
                    break;
                default:
                    // Add more cases for other form inputs if needed
                    formCookie[focusedInput.name] = focusedInput.value;
                    break;
            }
            formCookie.country = "us";
            formCookie.fbc = this.getCookieArray().filter(cookie => cookie.includes('_fbc'))[0];
            formCookie.fbp = this.getCookieArray().filter(cookie => cookie.includes('_fbp'))[0];

            this.createUpdateCookie('form_data', JSON.stringify(formCookie), 10);
        }

        sendCAPI(evnt, data) {
            let ajax_request = new XMLHttpRequest();
            let form_data = new FormData();
            form_data.append("event_info", JSON.stringify(evnt));
            form_data.append("user_data", data);
            form_data.append("location", location.href);
            form_data.append("time", Date.now());
            if (location.pathname.search("thank") >= 0) {
                for (const [key, value] of Object.entries(window.localStorage)) {
                    form_data.append(key, value);
                }
            }
            ajax_request.open("POST", this.aprUrl, true);
            ajax_request.send(form_data);
        }
    }
    new UserData();
</script>
<noscript>
    <?php

    $pixel_id = '1720708031531884';

    function remove_special_whitespace($string)
    {
        return preg_replace('/[^A-Za-z0-9]/i', '', $string);
    }

    function format_fb_data_noscript()
    {
        $hash_these = ['fn', 'ln', 'em', 'ph', 'ge', 'db', 'zp', 'ct', 'st', 'country'];
        $fb_data = 'user_data[country]=us&';
        $form_data_cookie = json_decode(stripslashes($_COOKIE['form_data']));

        foreach ($hash_these as $field) {
            $hashing = (!empty($form_data_cookie->$field)) ? hash('sha256', $form_data_cookie->$field) : hash('sha256', '');
            $fb_data .= 'user_data[' . $field . ']=' . $hashing . '&';
        }

        if (!empty($_COOKIE['_fbp'])) {
            $fb_data .= 'fbp=' . $_COOKIE['_fbp'] . '&';
        }

        if (!empty($_COOKIE['_fbc'])) {
            $fb_data .= 'fbc=' . $_COOKIE['_fbc'] . '&';
        }

        return $fb_data;
    }

    $fbdata = format_fb_data_noscript();

    echo <<<PIXEL
        <img height="1" width="1" style="display:none" alt="fbpx" src="https://www.facebook.com/tr?id={$pixel_id}&ev=PageView&noscript=1D&{$fbdata}" />
        <iframe height="1" width="1" style="display:none" alt="capi" src="/capi/{$pixel_id}.php?noscript=1"></iframe>
PIXEL;

    if (stripos($_SERVER['REQUEST_URI'], 'thank') > -1) {
        echo <<<PIXEL
        <img height="1" width="1" style="display:none" alt="fbpx" src="https://www.facebook.com/tr?id={$pixel_id}&ev=Lead&noscript=1&{$fbdata}" />
PIXEL;
    }

    ?>
</noscript>
<!-- End Meta Pixal -->