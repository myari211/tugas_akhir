<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravolt\Indonesia\Models\Province;
use Validator;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Ramsey\Uuid\Uuid;
use Alert;

class UserController extends Controller
{
    public function dashboard($id) {

        $personal = DB::table('personal_informations')
            ->leftJoin('indonesia_provinces', function ($join) {
                $join->on('personal_informations.indonesia_province_location', '=', 'indonesia_provinces.id');
            })
            ->leftJoin('indonesia_cities', function ($join) {
                $join->on('indonesia_cities.id', 'personal_informations.indonesia_city_location');
            })
            ->where('user_id', $id)
            ->select('*', 'indonesia_provinces.name as provinces', 'indonesia_cities.name as city')
            ->get();

        $class = DB::table('class_informations')
            ->leftJoin('indonesia_provinces', function ($join) {
                $join->on('indonesia_provinces.id', '=', 'class_informations.province_location');
            })
            ->leftJoin('indonesia_cities', function ($join) {
                $join->on('indonesia_cities.id', '=', 'class_informations.city_location');
            })
            ->select('*', 'indonesia_cities.name as city', 'indonesia_provinces.name as province')
            ->where('user_id', $id)
            ->get();

        // dd($personal);

        return view('user.dashboard', compact('personal', 'class'));
    }

    public function first_profile_personal_information($id) {

        $province = Province::pluck('name', 'id');

        return view('user.first_login.profile', compact('province'));
    }

    public function first_profile_personal_post(Request $request, $id) {
        
        $validator = Validator::make($request->all(), [
            "first_name" => ['required'],
            "last_name" => ['required'],
            "gender" => ['required'],
            "phone" => ['required'],
            "provinces" => ['required'],
            "city" => ['required'],
            'address' => ['required'],
        ]);

        if($validator->fails()){
            return response()->json($validator->messages()->all()[0]);
        }

        $this->PersonalPost($request, $id);

        return redirect()->to(route('talent.class_information', $id));
    }

    private function PersonalPost($request, $id) {
        // dd($request->all());

        DB::table('personal_informations')
        ->insert([
            "id" => Uuid::uuid4()->getHex(),
            "no_telp" => $request->phone,
            "gender" => $request->gender,
            "indonesia_province_location" => $request->provinces,
            "indonesia_city_location" => $request->city,
            "address" => $request->address,
            "user_id" => $id,
            "address" => $request->address,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table('users')
            ->where('id', $id)
            ->update([
                "first_name" => $request->first_name,
                "last_name" => $request->last_name,
            ]);
    }

    public function first_profile_class() {

        $provinces = Province::pluck('name', 'id');

        return view('user.first_login.class', compact('provinces'));
    }

    public function avatar(Request $request, $id) {
        $file = $request->file('file');

        $name = time()."_".$file->getClientOriginalName();

        $destination = "avatar";

        $file->move($destination, $name);

        DB::table('users')
            ->where('id', $id)
            ->update([
                "avatar" => $name,
            ]);

        return redirect()->back();
    }

    public function class_information(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            "npm" => ['required'],
            "class" => ['required'],
            "major" => ['required'],
            "province" => ['required'],
            "city" => ['required'],
            "reason" => ['required'],
            "campus" => ['required'],
        ]);

        if($validator->fails()) {
            dd($validator->messages()->all());
            toast($validator->messages()->all()[0], 'error');
            // return redirect()->back();
        }

        $this->postClassInformation($request, $id);
        return redirect()->route('user.dashboard', $id);
    }

    private function postClassInformation($request, $id) {
        DB::table('class_informations')
            ->insert([
                "id" => Uuid::uuid4()->getHex(),
                "npm" => $request->npm,
                "class" => $request->class,
                "major" => $request->major,
                "campus" => $request->campus,
                "province_location" => $request->province,
                "city_location" => $request->city,
                "reason" => $request->reason,
                "user_id" => $id,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);
    }
}