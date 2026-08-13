<?php

namespace App\Support;

class WhmcsUrl
{
    /**
     * Path fragments that identify a URL as a WHMCS action rather than a
     * portfolio page. Only URLs matching one of these are ever rewritten.
     */
    private const WHMCS_MARKERS = [
        'cart.php',
        'clientarea.php',
        'viewinvoice.php',
        'domainchecker.php',
        'submitticket.php',
        'pwreset.php',
        'rp=/store',
        'rp=/login',
        'rp=/register',
        'rp=/domain',
        'rp=/clientarea',
        '/store/',
    ];

    /**
     * Normalise a stored destination onto the configured WHMCS host.
     *
     * Order links are stored per-plan in the database as absolute URLs. When
     * the shop and the portfolio swapped hostnames those stored URLs kept the
     * old host, which now serves the portfolio — so they silently returned the
     * customer to this site instead of the shop. This rewrites the host at
     * render time so a stale row cannot break the order flow.
     *
     * Conservative by design:
     *   - only URLs recognisable as WHMCS actions are touched;
     *   - only hosts listed in config('whmcs.legacy_hosts') are rewritten;
     *   - the path and query string are preserved exactly;
     *   - anything else is returned unchanged, so portfolio links are safe.
     *
     * @param  string|null  $stored  Value as held in the database.
     * @return string|null           Normalised URL, or the input unchanged.
     */
    public static function normalize(?string $stored): ?string
    {
        $stored = is_string($stored) ? trim($stored) : $stored;

        if ($stored === null || $stored === '') {
            return $stored;
        }

        if (! self::isWhmcsAction($stored)) {
            return $stored;
        }

        $base = (string) config('whmcs.url');

        // A bare path such as /index.php?rp=/store/... — prefix the shop host.
        if (str_starts_with($stored, '/')) {
            return $base.$stored;
        }

        $parts = parse_url($stored);

        if ($parts === false || empty($parts['host'])) {
            return $stored;
        }

        $legacy = array_map('strtolower', (array) config('whmcs.legacy_hosts', []));

        if (! in_array(strtolower($parts['host']), $legacy, true)) {
            return $stored;
        }

        $path = $parts['path'] ?? '';
        $query = isset($parts['query']) ? '?'.$parts['query'] : '';
        $fragment = isset($parts['fragment']) ? '#'.$parts['fragment'] : '';

        return $base.$path.$query.$fragment;
    }

    /**
     * Build a WHMCS URL from a path, e.g. path('/cart.php?a=view').
     */
    public static function path(string $path = '/'): string
    {
        return rtrim((string) config('whmcs.url'), '/').'/'.ltrim($path, '/');
    }

    /**
     * Does this destination look like a WHMCS action rather than a portfolio page?
     */
    private static function isWhmcsAction(string $url): bool
    {
        $needle = strtolower($url);

        foreach (self::WHMCS_MARKERS as $marker) {
            if (str_contains($needle, $marker)) {
                return true;
            }
        }

        return false;
    }
}
