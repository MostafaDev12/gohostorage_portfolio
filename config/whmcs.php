<?php

return [

    /*
    |--------------------------------------------------------------------------
    | WHMCS base URL
    |--------------------------------------------------------------------------
    |
    | The shop / client area lives on its own hostname, separate from this
    | portfolio. Every customer-facing WHMCS action (order, cart, checkout,
    | login, client area, domain search) must be built from this value.
    |
    | Portfolio : https://shop.gohostorage.com
    | WHMCS shop: https://gohostorage.com
    |
    | Set WHMCS_URL in .env to override. Stored without a trailing slash.
    |
    */

    'url' => rtrim(env('WHMCS_URL', 'https://gohostorage.com'), '/'),

    /*
    |--------------------------------------------------------------------------
    | Legacy hostnames
    |--------------------------------------------------------------------------
    |
    | Hostnames the shop used to live on. WHMCS action URLs still pointing at
    | one of these are rewritten onto 'url' at render time.
    |
    | This exists because the shop and the portfolio swapped hostnames: the
    | shop moved off shop.gohostorage.com and the portfolio moved on to it.
    | Order links stored in the database still carry the old hostname, which
    | now resolves to the portfolio itself — so those links would quietly send
    | customers back to this site instead of the shop.
    |
    | Rewriting is deliberately limited to URLs that are recognisably WHMCS
    | actions (see App\Support\WhmcsUrl::WHMCS_MARKERS). A plain link to
    | shop.gohostorage.com is a legitimate portfolio link and is left alone.
    |
    */

    'legacy_hosts' => [
        'shop.gohostorage.com',
    ],

];
