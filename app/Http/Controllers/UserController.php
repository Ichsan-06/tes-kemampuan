<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Success get all users',
            'data' => User::all()
        ]);
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());
        return response()->json([
            'status' => 'success',
            'message' => 'Success create user',
            'data' => $user
        ], 201);
    }

    public function show(User $user)
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Success get user',
            'data' => $user
        ]);
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return response()->json([
            'status' => 'success',
            'message' => 'Success update user',
            'data' => $user
        ]);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Success delete user',
            'data' => $user
        ], 204);
    }
}
