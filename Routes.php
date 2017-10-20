<?php

/* This file helps you to access routes */

Route::set('index', function () {
    Index::CreatView('Index');
});

Route::set('about-us', function () {
    /* When we access a route we can run a function here */
    AboutUs::CreatView('AboutUs');
});

Route::set('contact-us', function () {
    ContactUs::CreatView('ContactUs');
});

?>