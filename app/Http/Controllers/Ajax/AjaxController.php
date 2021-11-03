<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravolt\Indonesia\Models\City;

class AjaxController extends Controller
{
    public function province($id) {
        $city = City::where('province_id', $id)->pluck('name', 'id');

        return response()->json($city);
    }
}
