<?php

use Botble\Base\Facades\AdminHelper;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'FriendsOfBotble\ExpectedDeliveryDate\Http\Controllers', 'middleware' => ['web', 'core']], function () {
    AdminHelper::registerRoutes(function (): void {
        Route::group(['prefix' => 'delivery-estimates', 'as' => 'delivery-estimates.'], function () {
            // Add routes if needed
        });

        Route::group(['prefix' => 'settings'], function (): void {
            Route::get('expected-delivery-date', [
                'as' => 'expected-delivery-date.settings',
                'uses' => 'Settings\ExpectedDeliveryDateSettingController@edit',
                'permission' => 'expected-delivery-date.settings',
            ]);

            Route::put('expected-delivery-date', [
                'as' => 'expected-delivery-date.settings.update',
                'uses' => 'Settings\ExpectedDeliveryDateSettingController@update',
                'permission' => 'expected-delivery-date.settings',
            ]);
        });
    });
});