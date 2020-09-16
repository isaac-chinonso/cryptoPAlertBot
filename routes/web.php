<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('get-me', 'TelegramController@getMe');

Route::get('set-hook', 'TelegramController@setWebHook');

public function setWebHook()
{
    $url = 'https://applicationdomain.com/' . env('TELEGRAM_BOT_TOKEN') . '/webhook';
    $response = $this->telegram->setWebhook(['url' => $url]);
 
    return $response == true ? redirect()->back() : dd($response);
}