<?php

Route::group(['namespace' => 'MoinDhattiwala\Contact\Http\Controllers'], function () {
    Route::get('/contact', 'ContactController@index');
    Route::post('/contact', 'ContactController@store');
});
