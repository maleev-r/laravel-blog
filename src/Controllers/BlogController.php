<?php


namespace LuckyRomka\Blog\Controllers;


use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index(){
        return view('LaravelBlog::index');
    }
}
