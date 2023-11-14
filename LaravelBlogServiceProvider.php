<?php

namespace LuckyRomka\LaravelBlog;

use Illuminate\Support\ServiceProvider;

class LaravelBlogServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            include __DIR__.'/routes.php';
        }
    }
}
