<?php

/* This file helps you to access routes */

Route::set('index', function () {
   /* ControllerName::Method(); */
    Index::CreatView('Index');
});

Route::set('about-us', function () {
    /* When we access a route we can run a function here */
    AboutUs::CreatView('AboutUs');
});

Route::set('contact-us', function () {
    ContactUs::CreatView('ContactUs');
});

Route::set('login', function () {
    Login::CreatView('user_login');
});

Route::set('register', function () {
    Register::CreatView('user_register');
});

?>
