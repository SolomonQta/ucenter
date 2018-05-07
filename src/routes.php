<?php

Route::any(config('ucenter.url').'/api/'.config('ucenter.apifilename'), '\Solomonqta\Ucenter\Controllers\ApiController@run');
