<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;
use Hash;
use App\User;
use RealRashid\SweetAlert\Facades\Alert;
use Laravolt\Indonesia\Models\Province;
use Validator;

class AdminController extends Controller
{
    public function dashboard($id) {
        $user = DB::table('users')
            ->leftJoin('model_has_roles', function ($join) {
                $join->on('model_has_roles.model_id', '=', 'users.id');
            })
            ->where('model_has_roles.role_id', 2)
            ->get();

        return view('admin.dashboard', compact('user'));
    }

    public function member_list($id) {
        $member = DB::table('users')
            ->leftJoin('model_has_roles', function ($join) {
                $join->on('model_has_roles.model_id', '=', 'users.id');
            })
            ->leftJoin('personal_informations', function ($join) {
                $join->on('personal_informations.user_id', '=', 'users.id');
            })
            ->leftJoin('class_informations', function ($join) {
                $join->on('class_informations.user_id', '=', 'users.id');
            }) 
            ->leftJoin('indonesia_provinces', function ($join) {
                $join->on('indonesia_provinces.id', '=', 'class_informations.province_location');
            })
            ->leftJoin('indonesia_cities', function ($join) {
                $join->on('indonesia_cities.id', '=', 'class_informations.city_location');
            })
            ->select('*', 'indonesia_provinces.name as province', 'indonesia_cities.name as city', 'users.id as user_id')
            ->where('role_id', 2)
            ->paginate(6);

        return view('admin.member_list', compact('member'));
    }

    public function member_details($id) {
        $personal = DB::table('personal_informations')
            ->leftJoin('users', function ($join) {
                $join->on('users.id', '=', 'personal_informations.user_id');
            })
            ->leftJoin('indonesia_provinces', function ($join) {
                $join->on('indonesia_provinces.id', '=', 'personal_informations.indonesia_province_location');
            })
            ->leftJoin("indonesia_cities", function ($join) {
                $join->on('indonesia_cities.id', '=', 'personal_informations.indonesia_city_location');
            })
            ->select("*", 'indonesia_provinces.name as province', 'indonesia_cities.name as city')
            ->where('user_id', $id)
            ->get();

        $class_information = DB::table('class_informations')
            ->leftJoin('indonesia_provinces', function ($join) {
                $join->on("indonesia_provinces.id", '=', 'class_informations.province_location');
            })
            ->leftJoin('indonesia_cities', function ($join) {
                $join->on('indonesia_cities.id', '=', 'class_informations.city_location');
            })
            ->select('*', 'indonesia_provinces.name as province', 'indonesia_cities.name as city')
            ->where("user_id", $id)
            ->get();

        return view('admin.member_details', compact('personal', 'class_information'));
    }

    public function create_member(Request $request, $id) {
        $this->createMemberProcess($request);

        Alert::success('Complete', 'Success Create user');
        return redirect()->back();
    }

    private function createMemberProcess($request) {
        $user = User::create([
            "id" => Uuid::uuid4()->toString(),
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);
        $user->assignRole('User');
    }

    public function campus() {
        
        $province = Province::pluck('name', 'id');

        $campus = DB::table('campuses')
            ->leftJoin('indonesia_provinces', function ($join) {
                $join->on('campuses.province_location', '=', 'indonesia_provinces.id');
            })
            ->leftJoin('indonesia_cities', function ($join) {
                $join->on('campuses.city_location', '=', 'indonesia_cities.id');
            })
            ->select('*', 'indonesia_provinces.name as province', 'indonesia_cities.name as city', 'campuses.id as campus_id')
            ->get();

        $campus_count = DB::table('campuses')
            ->count();

        return view('admin.campus', compact('province', 'campus', 'campus_count'));
    }


    public function campus_post(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            "campus_name" => ['required'],
            "province" => ['required'],
            "city" => ['required'],
            "address" => ['required'],
            "phone_number" => ['required'],
            "zip_code" => ['required'],
        ]);

        if($validator->fails()) {
            toast($validator->messages()->all()[0], 'error');
            return redirect()->back();
        }

        $this->campus_post_process($request);

        toast('Campus Created', 'success');
        return redirect()->back();
    }


    private function campus_post_process($request) {
        DB::table('campuses')
            ->insert([
                "id" => Uuid::uuid4()->getHex(),
                "name_university" => $request->campus_name,
                "province_location" => $request->province,
                "city_location" => $request->city,
                "address" => $request->address,
                "phone" => $request->phone_number,
                "zip_code" => $request->zip_code,
            ]);
    }


    public function campus_delete($id) {
        $this->campus_delete_process($id);
    
        toast('Successfully Delete Campus', 'success');
        return redirect()->back();
    }

    private function campus_delete_process($id) {
        DB::table('campuses')
            ->where('id', $id)
            ->delete();
    }
}
