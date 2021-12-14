<?php


Route::group(['namespace' => 'Web', 'as' => 'web.' ], function () {

    Route::get('/', 'HomeController@index')->name('home');

    Route::resource('faleconosco', 'FaleConoscoController');

    Route::get('/login', function() {  
        return view('demo.auth.login');
    });
    

    Route::get('/recurso', function() {  
        return view('web.overview_recursos');
    });
     

});