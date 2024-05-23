<?php

namespace App\Http\Controllers\General_Controller;

use App\Models\User;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DoctorNotificationController extends Controller
{
    public function doctorNotificationMarkAllAsRead()
    {
        $user = Auth::user();
        $doctor = Doctor::where('user_id', $user->id)->first();
        if(isset($doctor->unreadNotifications)){
            $doctor->unreadNotifications->markAsRead();
        }
        
        return response()->json(['success' => true]);
    }

    public function doctorNotificationMarkAsRead($notificationId)
    {
        $user = Auth::user();
        $doctor = Doctor::where('user_id', $user->id)->first();
        $doctor->notifications()->where('id', $notificationId)->first()->markAsRead();
        return response()->json(['message' => 'Notification marked as read']);
    }

    public function doctorUnreadNotificationsCount()
    {
        $user = Auth::user();
        $doctor = Doctor::where('user_id', $user->id)->first();
        $unreadNotificationsCount = $doctor->unreadNotifications->count();


        return response()->json([
            'message' => 'Doctor Unread notifications count is : ' . $unreadNotificationsCount,
            'unreadNotificationsCount' => $unreadNotificationsCount,
        ]);
    }
}
