<?php


Route::get('/', function () {
    return view('web.home');
});

Route::get('/home', function () {
    return view('demo.web.index');
});


Route::get('/onboarding', function() {  
    return view('demo.web.onboarding');
});

Route::get('/login', function() {  
    return view('demo.auth.login');
});

Route::get('/portifolio', function() {  
    return view('portifolio.master.portifolio');
});


// Route::get('medium', function() {

//     return view('demo.medium');
// });