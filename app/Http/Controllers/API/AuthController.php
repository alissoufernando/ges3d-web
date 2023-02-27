<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $input = $request->all();
        $validation = Validator::make($input,[
            'email' => 'required',
            'password' => 'required',
        ]);

        if($validation->fails())
        {
            return response()->json(['error' => $validation->errors()]);
        }

        if(Auth::attempt(['email' => $input['email'], 'password' => $input['password']]))
        {
            $data = Auth::user();
            $token = $data->createToken('user');
            return response()->json(['token' => $token]);
        }
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['success' => 'logout']);

    }
}
