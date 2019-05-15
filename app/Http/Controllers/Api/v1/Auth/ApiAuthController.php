<?php

namespace App\Http\Controllers\Api\v1\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\v1\Controller;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class ApiAuthController extends Controller
{
    //
    public function test()
    {
        return auth()->user();
    }

    public function login(Request $request)
    {
        $cres = $request->only(['email', 'password']);
        $token = auth()->attempt($cres);
        if (auth()->attempt($cres)) {
            return response(compact('token', $token), 200);
        }
        return response(['message' => 'error'], 401);
    }

    public function logout()
    {
        try {
            auth()->invalidate(auth()->getToken());

        } catch (TokenInvalidException $e) {
            return response()->json(['error' => $e->getMessage()], 401);
        }
        return 'logout success';
    }

    public function refreshToken()
    {
        try {
            $newToken = auth()->refresh();

        } catch (TokenInvalidException $e) {
            return response()->json(['error' => $e->getMessage()], 401);
        }


        return response(compact('token', $newToken), 200);
    }
}
