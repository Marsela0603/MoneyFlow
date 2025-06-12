<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Notification;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
   public function boot()
{
    View::composer('*', function ($view) {
        if (Auth::check()) {
            $headerNotifications = Notification::where('user_id', Auth::id())->latest()->take(5)->get();
            $unreadNotificationCount = Notification::where('user_id', Auth::id())->where('is_read', false)->count();

            $view->with(compact('headerNotifications', 'unreadNotificationCount'));
        }
    });
}
}
