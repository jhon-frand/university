<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request -> validate([
                'name' => 'required|string',
                'email' => 'required|string',
                'password' => 'required|string',
                'rol' => 'required|string'
            ]);

            $user = User::create([
                'name' => $request -> name, 
                'email' => $request -> email,
                'password' => $request ->  password,
                'rol' => $request -> rol
            ]);

            return response() -> json($user, 201);
        } catch (\Exception $e) {
            return response()->json(['msg' => 'error en la ejecución'], $e);
        }
    }

}
