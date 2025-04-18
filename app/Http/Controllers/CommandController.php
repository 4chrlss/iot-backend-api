<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\Command;
use Illuminate\Http\Request;

class CommandController extends Controller
{
    public function store(Request $request, Device $device){
        $request ->validate(['command' => 'required|string']);
        $command = Command::create([
            'device_id' => $device->id,
            'command' => $request-> command,
        ]);
        return response()->json($command, 201);
    }

    public function poll (Device $device){
        $command = Command::where('device_id', $device->id)
            ->where('executed', false)
            ->orderBy('created_at')
            ->first();
        if ($command){
            $command ->update(['executed' => true]);
            return response()->json($command);
        }
        return response()->json(['message' => 'No pending commands'], 204 );
    }

    public function pollAll()
        {
            $commands = Command::where('executed', false)->get();
            return response()->json($commands);
        }

}
