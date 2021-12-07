<?php
Route::set('home',function(){
 Home::createView('home');
 Home::getposts();
});

Route::set('contact-us',function(){
    Contactus::createView('contactus');
});