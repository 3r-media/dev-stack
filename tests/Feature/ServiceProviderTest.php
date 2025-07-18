<?php

use Rrr\DevStack\DevStackServiceProvider;
use Illuminate\Contracts\Foundation\Application;

it('registers the DevStackServiceProvider', function () {
    $app = $this->app;
    $registeredProviders = array_keys($app->getLoadedProviders());
    expect($registeredProviders)->toContain(DevStackServiceProvider::class);
});
