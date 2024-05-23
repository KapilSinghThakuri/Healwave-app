<?php

namespace App\Providers;

use App\Models\Doctor;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class NotificationsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $user = Auth::user();
            $isAdmin = $user && $user->hasRole(['Super Admin', 'Administrator']);
            
            $adminNotifications = $isAdmin ? $user->unreadNotifications : collect();
            $doctorNotifications = collect();
            if($user){
                $doctor = Doctor::where('user_id', $user->id)->first();
                $doctorNotifications = $doctor ? $doctor->unreadNotifications : collect();
            }

            $view->with(['adminNotifications' => $adminNotifications, 'doctorNotifications' => $doctorNotifications]);
        });
    }
}
