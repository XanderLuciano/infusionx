<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class TestAPI extends Controller
{
    public function index()
    {
        $users = User::all();

        return response()->json([
            'data' => $users->toArray()
        ], 200);
    }

    public function show($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'error' => [
                    'message' => 'User does not exist',
                    'code' => 404
                ]
            ], 200);
        } else {
            return response()->json([
                'data' => $user->toArray(),
                'roles' => $user->roles()->pluck('name'),
            ], 200);
        }
    }

    public function create(Request $request)
    {
        return response()->json([
            'debug' => $request->toArray(),
        ], 200);
    }
}
