<?php

namespace Jaggedsoft\Binance;

use Illuminate\Support\ServiceProvider;

class BinanceServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(Api::class, function() {
            return new Api(
                config('services.binance.key'),
                config('services.binance.secret')
            );
        });
    }
}
