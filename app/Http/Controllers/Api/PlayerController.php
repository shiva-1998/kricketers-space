<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Player;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class PlayerController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:players,email',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $player = Player::create([
            'role' => $request->role ?? 'player',
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'otp' => rand(100000, 999999),
            'your_role' => $request->your_role,
            'batting_style' => $request->batting_style,
            'bowling_type' => $request->bowling_type,
            'team_name' => $request->team_name,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Player created successfully',
            'data' => $player
        ]);
    }
}
