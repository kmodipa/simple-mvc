<?php

/* This file helps you to access routes */

Route::set('index', function () {
   /* ControllerName::Method(); */
    Index::CreatView('Index');
});

Route::set('about-us', function () {
    /* When we access a route we can run a function here
     * The code for the function goes here
     */
    AboutUs::CreatView('AboutUs');
});

Route::set('user-profile', function () {
    UserProfile::CreatView('UserProfile');
});

Route::set('login', function () {
    Login::CreatView('user_login');
});

Route::set('register', function () {
    Register::CreatView('user_register');
    Register::create();
});

Route::set('forgot_password', function () {
    Recovery::CreatView('forgot_password');
    Recovery::recover();
});

?>
