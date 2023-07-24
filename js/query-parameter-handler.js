const SEARCHPARAMS = (location.search) ? new URLSearchParams(location.search) : "";
const LINK_EXCLUSIONS = ["bing", "facebook", "g.page", "google", "hotjar", "instagram", "linkedin", "nextdoor", "pinterest", "twitter", "youtube"];
const CLASS_EXCLUSIONS = ["toggle"];
const PARAM_EXCLUSIONS = ["trust", "tcpa", "00N1P00000A2CfC", "post_type"];

! function() {
    if (!SEARCHPARAMS) return;
    var __checkForLinks = setInterval((_anchorTags, _iframeTags) => {
        _anchorTags = document.querySelectorAll('a'), _iframeTags = document.querySelectorAll('iframe');
        try {
            if (_iframeTags[0] || _anchorTags[0]) {
                passQueryParams(_anchorTags, _iframeTags);
                clearInterval(__checkForLinks);
            } else {
                console.log("NO IFRAME/ANCHOR TAGS FOUND");
                clearInterval(__checkForLinks);
            }
        } catch (error) {
            console.log("SEARCHPARAMS", error);
            clearInterval(__checkForLinks);
        }
    }, 1e3);
}();

function urlBasedExclusions(_url) {
    for (let i = 0; i < LINK_EXCLUSIONS.length; i++) {
        if (typeof(_url) == "object") {
            continue;
        } else if (
            _url.search(LINK_EXCLUSIONS[i]) > -1 ||
            _url.startsWith("tel") ||
            _url.startsWith("mailto") ||
            _url.startsWith("#") ||
            _url.startsWith("data") ||
            _url == ""
        ) {
            return true;
        }
    }
    return false;
}

function classBasedExclusions(_class) {
    for (let i = 0; i < CLASS_EXCLUSIONS.length; i++) {
        if (_class.value.search(CLASS_EXCLUSIONS[i]) > -1) {
            return true;
        }
    }
    return false;
}

function paramBasedExclusions(_param) {
    for (let i = 0; i < PARAM_EXCLUSIONS.length; i++) {
        let _regex = PARAM_EXCLUSIONS[i];
        _regex = new RegExp(_regex, "i");
        if (_param.search(_regex) > -1 || _param == "s") {
            return true;
        }
    }
    return false;
}

function passQueryParams(_a, _f) {
    if (_a) {
        for (let i = 0; i < _a.length; i++) {
            if (urlBasedExclusions(_a[i].href) == true || classBasedExclusions(_a[i].classList) == true) {
                continue;
            };
            let _p = new URLSearchParams(_a[i].search);
            for (let key of SEARCHPARAMS.keys()) {
                /**
                 * IGNORE SITE SEARCH DATA
                 */
                if (paramBasedExclusions(key) == true) { 
                    continue;
                }
                /**
                 * 
                 */
                if (!_p.has(key)) {
                    _p.append(key, SEARCHPARAMS.get(key))
                }

                if (_p.has(key) && SEARCHPARAMS.get(key) !== _p.get(key)) {
                    _p.set(key, SEARCHPARAMS.get(key))
                }
            }
            _a[i].search = _p;
        }
    }

    if (_f) {
        for (let j = 0; j < _f.length; j++) {
            if (urlBasedExclusions(_f[j].src) == true) {
                continue;
            };
            let host = _f[j].src.split('?')[0];
            let search = (_f[j].src.search(/\?/i) != -1) ? _f[j].src.split('?')[1].split('#')[0] : '';
            let hash = _f[j].src.split('#')[1];

            for (let key of SEARCHPARAMS.keys()) {
                search += ((search.length > 0) ? '&' : '') + key + '=' + SEARCHPARAMS.get(key);
            }

            _f[j].src = host + '?' + search;

            if (hash) {
                _f[j].src += '#' + hash
            }
        }
    }
}