<script type="text/javascript" src="{{ asset('assets/website') }}/js/jquery.js"></script>
<script type="text/javascript" src="{{ asset('assets/website') }}/js/vendors.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/website') }}/js/main.js"></script>


<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<x-dashboard.partials.toastr-notifications />

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const cookieBanner = document.getElementById('cookies-model');
        const acceptBtn = document.querySelector('.accept_cookies_btn');

        if (!localStorage.getItem('cookie_consent')) {
            cookieBanner.style.display = 'block';
        }

        acceptBtn?.addEventListener('click', function () {
            localStorage.setItem('cookie_consent', '1');
            cookieBanner.style.display = 'none';
        });
    });
</script>
<!--Newsletter Modal Cookies-->
<script>
    $(window).ready(function () {
        var delay;
    
        if ($(window).width() <= 768) {
            // Mobile device
            delay = 10000;
        } else {
            // Desktop device
            delay = 5000;
        }
    
        setTimeout(function () {
            $('#newsletter_modal').modal("show");
        }, delay);
    });
</script>

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MNLWRG8V"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->