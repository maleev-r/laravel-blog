<?php
use \LuckyRomka\Blog\Controllers\BlogController;
Route::get('/blog',[BlogController::class,'index']);
