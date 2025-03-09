<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Helpers\ResponseHelper;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return ResponseHelper::success(
            User::all(),
            'Success get all users'
        );
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());
        return ResponseHelper::success(
            $user,
            'Success create user',
            201
        );
    }

    public function show($user)
    {
        $user = User::find($user);
        if(!$user)
        {
            return ResponseHelper::error(
                'User not found',
                404
            );
        }

        return ResponseHelper::success(
            $user,
            'Success get user'
        );
    }

    public function update(Request $request,$user)
    {
        $user = User::find($user);

        if(!$user)
        {
            return ResponseHelper::error(
                'User not found',
                404
            );
        }

        $user->update($request->all());
        return ResponseHelper::success(
            $user,
            'Success update user'
        );
    }

    public function destroy($user)
    {
        $user = User::find($user);

        if(!$user)
        {
            return ResponseHelper::error(
                'User not found',
                404
            );
        }

        $user->delete();
        return ResponseHelper::success(
            $user,
            'Success delete user',
            204
        );
    }
}
