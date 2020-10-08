<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'PostController@index') -> name('post.index');
