<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ValidateInputMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Definisi aturan validasi
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . ($request->user->id ?? 0),
            'age' => 'required|integer',
        ];

        // Lakukan validasi
        $validator = Validator::make($request->all(), $rules);

        // Jika validasi gagal, kembalikan response error
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        return $next($request);
    }
}
