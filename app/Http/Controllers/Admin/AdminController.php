<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard($id) {
        return view('admin.dashboard');
    }

    public function member_list($id) {
        $member = DB::table('users')
            ->leftJoin('model_has_roles', function ($join) {
                $join->on('model_has_roles.model_id', '=', 'users.id');
            })
            ->where('role_id', 2)
            ->paginate(6);

        return view('admin.member_list', compact('member'));
    }
}
