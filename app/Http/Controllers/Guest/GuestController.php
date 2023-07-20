<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Auth;
use Validator;
use Ramsey\Uuid\Uuid;
use Hash;

class GuestController extends Controller
{
    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if($validator->fails()) {
            alert()->warning('Gagal', $validator->messages()->all()[0]);
            return redirect()->back();
        }
        else {
            $user = User::create([
                'id' => Uuid::uuid4()->toString(),
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            $user->assignRole('User');
    
            return redirect()->to('/login');
        }
    }

    public function index() {
        if(Auth::check()) {
            $id = Auth::user()->id;
            $user = DB::table('users')
                ->leftJoin('model_has_roles', function($join) {
                    $join->on('model_has_roles.model_id', '=', 'users.id');
                })
                ->where(function($query) use ($id) {
                    $query->where('users.id', $id);
                })
                ->first();

            $personal_information = DB::table("personal_informations")
                ->where(function ($query) use ($id) {
                    $query->where('personal_informations.user_id', $id);
                })
                ->count();

                if($user->role_id == 2) {
                    if($personal_information < 1) {
                        return redirect()->to('/user/first_profile/personal_information/'.Auth::user()->id);
                    }
                    else
                    {
                        return redirect()->to('/user/'. Auth::user()->id);
                    }
                }
                else if($user->role_id == 1) {
                    return route('admin.dashboard', Auth::user()->id);
                }
                else
                {
                    return view('guest.index');
                }
        }
        return view('guest.index');
        // if(Auth::check()) {
        //     $id = Auth::user()->id;
        //     

        //     if($user->role_id == 2) {
        //         return redirect('user.dashboard', $id);
        //     }
        //     else if($user->role_id == 1) {
        //         return redirect('admin.dashboard', $id);
        //     }
        //     else {
        //         return redirect('guest.index');
        //     }
        // }
        // else
        // {
        //     return view('guest.index');
        // }
    }
    
    public function history() {
        return view('guest.history');
    }

    public function profile() {
        return view('guest.profile');
    }
}
