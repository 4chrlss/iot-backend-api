<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function store (Request $request){
        $request -> validate(['name' => 'required|string']);
        $device = Device::create(['name' => $request -> name]);
        return response()->json($device, 201);
    }
}
