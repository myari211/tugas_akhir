<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticated(Request $request, $user) {

        $personal_information = DB::table('personal_informations')->where('user_id', $user->id)->count();

        if($user->hasRole('Admin')) {
            return redirect()->route('admin.dashboard', $user->id);
        }
        elseif($user->hasRole('User')) {
            if($personal_information > 0 && $personal_information > -1) {
                return redirect()->route('user.dashboard', $user->id);
            }
            else {
                return redirect()->route('talent.first_personal', $user->id);
            }
        }
    }
}
