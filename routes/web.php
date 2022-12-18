<?php

use Illuminate\Support\Facades\Route;

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

Route::permanentRedirect('/', 'https://www.twitch.tv/rhk3d');
Route::permanentRedirect('/gps', 'https://rtirl.com/twitch:224839786');
Route::permanentRedirect('/discord', 'https://discord.gg/QugpXEyh4d');

Route::view('/test', 'overlays.main');
