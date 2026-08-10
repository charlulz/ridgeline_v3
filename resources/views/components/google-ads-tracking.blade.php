{{-- Google Ads + Analytics — load once site-wide via layouts.app --}}
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10862474531"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    // Google Ads
    gtag('config', 'AW-10862474531');

    // Google Analytics 4 — explicit page_view so homepage/session traffic always records
    gtag('config', 'G-0D70KT6P5W', {
        send_page_view: true
    });

    // Google Ads “Call From Site” — forwarding / website-call measurement (30s+)
    gtag('config', 'AW-10862474531/GP-fCPCr2pwZEKPq0Lso', {
        phone_conversion_number: '(304) 381-1122'
    });

    /**
     * Click-to-call conversion (“Contact”).
     * Fires only on user click of tel:3043811122 links — never on page load.
     */
    window.gtag_report_conversion = function (phoneHref) {
        var navigated = false;

        var navigate = function () {
            if (navigated || typeof phoneHref === 'undefined' || phoneHref === null) {
                return;
            }
            navigated = true;
            window.location.href = phoneHref;
        };

        // Fallback: always open the dialer within ~1s if gtag callback never runs
        var fallbackTimer = window.setTimeout(navigate, 1000);

        var callback = function () {
            window.clearTimeout(fallbackTimer);
            navigate();
        };

        try {
            if (typeof gtag === 'function') {
                gtag('event', 'conversion', {
                    send_to: 'AW-10862474531/lnzmCL24oNQcEKPq0Lso',
                    value: 1.0,
                    currency: 'USD',
                    event_callback: callback,
                    event_timeout: 1000
                });
            } else {
                callback();
            }
        } catch (e) {
            callback();
        }

        return false;
    };

    // Bind once — safe across Livewire / SPA soft navigations that re-evaluate scripts
    if (!window.__ridgelineTelConversionBound) {
        window.__ridgelineTelConversionBound = true;

        document.addEventListener('click', function (event) {
            var link = event.target.closest('a[href^="tel:3043811122"]');
            if (!link) {
                return;
            }

            // One conversion per user click
            event.preventDefault();
            event.stopPropagation();

            var phoneHref = link.getAttribute('href');
            window.gtag_report_conversion(phoneHref);
        }, false);
    }

    // Callback Request conversion — emitted by Livewire only after the lead is saved.
    if (!window.__ridgelineCallbackConversionBound) {
        window.__ridgelineCallbackConversionBound = true;

        document.addEventListener('callback-request-saved', function () {
            if (typeof gtag !== 'function') {
                return;
            }

            gtag('event', 'conversion', {
                send_to: 'AW-10862474531/SYjeCN3Ypt8cEKPq0Lso',
                value: 1.0,
                currency: 'USD'
            });
        }, false);
    }
</script>
