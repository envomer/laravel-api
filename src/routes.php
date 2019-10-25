<?php

use Illuminate\Routing\Router;

/**
 * Register the global api routes
 */

$prefix = config('api.prefix');

Route::group($prefix, function(Router $api) {
    $namespace = 'Envomer\\API\Controller@';

    $api->any('/{any}', $namespace . 'notFound');
    $api->get('/{entity}', $namespace . 'index')->name('api-index');
    $api->get('/{entity}/{id}', $namespace . 'show')->name('api-show');
    $api->post('/{entity}/search', $namespace . 'index')->name('api-search');
    $api->post('/{entity}', $namespace . 'store')->name('api-store');
    $api->match(['put', 'post'], '/{entity}/{id}', $namespace . 'update')->name('api-update');
    $api->delete('/{entity}/{id}', $namespace . 'destroy')->name('api-delete');
});
