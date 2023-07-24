window.onscroll = () => {
    document.getElementById('quick').style.transform = 'translateY(0%)';
}

"use strict";
var driftBtns = document.querySelectorAll('[id^="_drift_btn"]');

function LoadDriftWidget(first_click = 0) {
    /////////////////////////////////
    // BEGIN PROPRIETARY DRIFT WIDGET
    var t = window.driftt = window.drift = window.driftt || [];
    if (!t.init) {
        if (t.invoked) return void(window.console && console.error && console.error("Drift snippet included twice."));
        t.invoked = !0, t.methods = ["identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on"],
            t.factory = function(e) {
                return function() {
                    var n = Array.prototype.slice.call(arguments);
                    return n.unshift(e), t.push(n), t;
                };
            }, t.methods.forEach(function(e) {
                t[e] = t.factory(e);
            }), t.load = function(t) {
                var e = 3e5,
                    n = Math.ceil(new Date() / e) * e,
                    o = document.createElement("script");
                o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
                var i = document.getElementsByTagName("script")[0];
                i.parentNode.insertBefore(o, i);
            };
    }

    drift.SNIPPET_VERSION = '0.3.1';
    drift.load('6u3t8tkd34ym');
    // END PROPRIETARY DRIFT WIDGET

    var DRIFT_CHAT_SELECTOR = '.drift-open-chat';

    function ready(fn) {
        if (document.readyState != 'loading') {
            fn();
        } else if (document.addEventListener) {
            document.addEventListener('DOMContentLoaded', fn);
        } else {
            document.attachEvent('onreadystatechange', function() {
                if (document.readyState != 'loading')
                    fn();
            });
        }
    }
    ready(function() {
        drift.on('ready', function(api) {
            api.widget.hide();
            var quickButton, bookButton, chatButton, handleClick;
            quickButton = document.getElementById('quick');
            // bookButton = document.getElementById('book-icon');
            chatButton = document.getElementById('chat-icon');
            handleClick = openSidebar.bind(this, api);
            quickButton.style.display = "block";
            // quickButton.classList.add("animate");
            // bookButton.classList.add("animate-book");
            chatButton.classList.remove("not-loaded");
            chatButton.classList.add("loaded");
            // chatButton.classList.add("animate-icon");
            forEachElement(DRIFT_CHAT_SELECTOR, function(el) {
                el.addEventListener('click', handleClick);
            });
            console.log(first_click);
            if (first_click === 1) {
                driftBtns.forEach(btn => {
                    btn.removeEventListener('click', clickToLoadDrift);
                });
                document.getElementById('_drift_btn').click();
            };
        });
    });
};

// window.onload = LoadDriftWidget;

function clickToLoadDrift() {
    LoadDriftWidget(1);
}
driftBtns.forEach(btn => {
    btn.addEventListener('click', clickToLoadDrift);
});

/*
function loadDriftWidgetOnScroll() { 
  LoadDriftWidget();
  window.removeEventListener('scroll', loadDriftWidgetOnScroll); 
} 

function loadDriftScroll() {
  window.addEventListener('scroll', loadDriftWidgetOnScroll); 
}
*/
function forEachElement(selector, fn) {
    var elements = document.querySelectorAll(selector);
    for (var i = 0; i < elements.length; i++)
        fn(elements[i], i);
}

function openSidebar(driftApi, event) {
    event.preventDefault();
    driftApi.sidebar.open();
    return false;
}

(function() {
    var DRIFT_CHAT_SELECTOR = '.drift-open-chat';

    function ready(fn) {
        if (document.readyState != 'loading') {
            fn();
        } else if (document.addEventListener) {
            document.addEventListener('DOMContentLoaded', fn);
        } else {
            document.attachEvent('onreadystatechange', function() {
                if (document.readyState != 'loading')
                    fn();
            });
        }
    }

    function forEachElement(selector, fn) {
        var elements = document.querySelectorAll(selector);
        for (var i = 0; i < elements.length; i++)
            fn(elements[i], i);
    }

    function openSidebar(driftApi, event) {
        event.preventDefault();
        driftApi.sidebar.open();
        return false;
    }
    ready(function() {
        try {
            drift.on('ready', function(api) {
                console.log("ready2");
                var handleClick = function(e) {
                    e.preventDefault;
                    openSidebar.bind(this, api);
                }
                forEachElement(DRIFT_CHAT_SELECTOR, function(el) {
                    el.addEventListener('click', handleClick);
                });
            });
        } catch (err) {
            /**
             * FAIL SILENTLY :'(
             */
        }
    });
})();