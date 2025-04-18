<?php

namespace App\Http\Controllers;

use App\Models\SensorReading;
use App\Models\Device;
use Illuminate\Http\Request;

class SensorReadingController extends Controller
{
    public function store(Request $request, Device $device){
        $request ->validate([
            'type' => 'required|string',
            'value' => 'required|numeric'
        ]);

        $reading = SensorReading::create([
            'device_id' => $device -> id,
            'type' => $request -> type,
            'value' => $request -> value
        ]);
        return response()->json ($reading, 201);
    }
}
