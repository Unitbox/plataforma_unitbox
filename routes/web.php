<?php


Route::group(['namespace' => 'Web', 'as' => 'web.' ], function () 
{
    Route::get('/', 'HomeController@index')->name('home');

    Route::resource('interacao', 'InteracaoController');
    Route::get('privacidade', 'HomeController@privacidade')->name('privacidade');
    Route::get('termos', 'HomeController@termos')->name('termos');

    Route::get('/posts', 'PostController@createPost')->name('create.post');

    // Route::get('/scservicos', function() {

    //     return view('web.sc');
    // });

    // Route::get('/scservicos/v1', function() {

    //     return view('web.scv1');
    // });
    
});
