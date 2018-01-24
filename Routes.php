<?php
/**
 * Created by PhpStorm.
 * User: sandruse
 * Date: 24.01.18
 * Time: 12:37 PM
 */

Route::set('index.php', function (){
    Index::CreateView('Index');
});

Route::set('about-us', function (){
    AboutUs::CreateView('AboutUs');
    AboutUs::test();
});

