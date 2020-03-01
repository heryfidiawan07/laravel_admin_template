<?php

Route::get('/', function() {
    return view('admin.dashboard.index');
});

Route::get('/home', function() {
    return view('guest.home');
});

Route::get('/page', function() {
    return view('guest.page');
});

Route::get('/show', function() {
    return view('guest.show');
});

Route::get('/index', function() {
    return view('guest.index');
});

Route::get('/domain', function() {
    return view('guest.domain');
});

