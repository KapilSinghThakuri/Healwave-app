<?php

namespace App\Http\Controllers\Admin_Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountSettingController extends Controller
{
    public function settings()
    {
        return view('admin_Panel.setting.account-setting');
    }

    public function deleteAccount()
    {
        $user = auth()->user();
        $user->delete();
        return redirect()->route('login')->with('message', 'Your account has been deleted successfully!!');
    }
}
