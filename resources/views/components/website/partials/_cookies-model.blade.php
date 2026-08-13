<div id="cookies-model" class="cookie-message bg-dark-gray border-radius-8px" style="display: none;">
    <div class="cookie-description fs-14 text-white mb-20px lh-22">
        {{ __('We use cookies to enhance your browsing experience, serve personalized ads or content, and analyze our traffic. By clicking "Allow cookies" you consent to our use of cookies.') }}
    </div>
    <div class="cookie-btn">
        <a href="#"
           class="btn btn-transparent-white border-1 border-color-transparent-white-light btn-very-small btn-switch-text btn-rounded w-100 mb-15px"
           aria-label="btn">
            <span>
                <span class="btn-double-text" data-text="{{ __('Cookie policy') }}">{{ __('Cookie policy') }}</span>
            </span>
        </a>
        <a href="#"
           class="btn btn-white btn-very-small btn-switch-text btn-box-shadow accept_cookies_btn btn-rounded w-100"
           data-accept-btn aria-label="text">
            <span>
                <span class="btn-double-text" data-text="{{ __('Allow cookies') }}">{{ __('Allow cookies') }}</span>
            </span>
        </a>
    </div>
</div>