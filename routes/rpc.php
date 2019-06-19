<?php

\LumenHproseRouter::add('demo', function () {
    return 'demo';
});


\LumenHproseRouter::group(['namespace' => 'App\Controllers', 'prefix' => 'admin'], function ($route) {
    $route->add('getByName', function ($name) {
        return 'name: ' . $name;
    });

});
