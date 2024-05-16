<?php

namespace App\Http\Controllers\Admin_Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\User;
use Spatie\Permission\Models\Role;

class NotificationController extends Controller
{

    public function markAllAsRead()
    {
        $users = User::role(['Super Admin', 'Administrator'])->get();
        foreach ($users as $user) {
            $user->unreadNotifications->markAsRead();
        }
        return response()->json(['success' => true]);
    }

    public function markAsRead($notificationId)
    {
        $user = User::find(auth()->user()->id);
        $user->notifications()->where('id', $notificationId)->first()->markAsRead();
        return response()->json(['message' => 'Notification marked as read']);
    }

    public function unreadNotificationsCount()
    {
        $user = User::find(auth()->user()->id);
        $unreadNotificationsCount = $user->unreadNotifications->count();


        return response()->json([
            'message' => 'Unread notifications count is : ' . $unreadNotificationsCount,
            'unreadNotificationsCount' => $unreadNotificationsCount,
        ]);
    }
}
