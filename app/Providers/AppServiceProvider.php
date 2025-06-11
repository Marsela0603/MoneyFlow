<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Notification;
use Illuminate\Support\Facades\View;

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
        if (auth()->check()) {
            $notifications = Notification::where('user_id', auth()->id())
                ->latest()
                ->take(5)
                ->get();

            $unreadCount = Notification::where('user_id', auth()->id())
                ->where('is_read', false)
                ->count();

            $view->with('headerNotifications', $notifications)
                ->with('unreadNotificationCount', $unreadCount);
        }
    });
}

    
}
