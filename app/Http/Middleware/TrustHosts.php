<?php

namespace App\Http\Middleware;

use Illuminate\Config\Repository as Config;
use Illuminate\Foundation\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware
{
    /**
     * The trusted host patterns.
     *
     * @var array
     */
    protected $trustedHosts = [];

    public function __construct(Config $config)
    {
        $this->trustedHosts = explode(',', $config->get('app.trusted_hosts'));

        // or maybe we can generate trusted hosts pattern from APP_URL
    }
}
