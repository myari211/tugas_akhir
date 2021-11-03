<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravolt\Indonesia\Models\Province;

class UserController extends Controller
{
    public function dashboard($id) {
        return view('user.dashboard');
    }

    public function first_profile_personal_information($id) {

        $province = Province::pluck('name', 'id');

        return view('user.first_login.profile', compact('province'));
    }
}
