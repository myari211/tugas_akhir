<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function history() {
        return view('guest.history');
    }

    public function profile() {
        return view('guest.profile');
    }
}
