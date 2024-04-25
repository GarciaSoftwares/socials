<?php


use Creativeorange\Gravatar\Facades\Gravatar;
use Illuminate\Support\Facades\Route;

//dd(
//    Gravatar::get('jeancesargarcia@gmail.comededede')
//);


Route::get('/', function () {
    return view('welcome');
});
