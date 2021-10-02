<?php

namespace Jaggedsoft\Binance;

use Illuminate\Support\ServiceProvider;

class BinanceServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(API::class, function() {
            return new API(
                config('services.binance.key'),
                config('services.binance.secret')
            );
        });
    }
}
