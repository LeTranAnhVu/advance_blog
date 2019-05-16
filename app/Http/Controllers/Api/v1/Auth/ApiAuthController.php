<?php

namespace App\Http\Controllers\Api\v1\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use JWTAuth;

class ApiAuthController extends Controller
{

    public function login(Request $request)
    {
        $cres = $request->only(['email', 'password']);
        $token = JWTAuth::attempt($cres);
        if (JWTAuth::attempt($cres)) {
            return response(['user' => JWTAuth::user()], 200)->withCookie(cookie('token', $token));
        }
        return response(['message' => 'Email or password invalid'], 400);
    }

    public function logout()
    {
        try {
            JWTAuth::invalidate(JWTAuth::getToken());

        } catch (TokenInvalidException $e) {
            return response()->json(['error' => $e->getMessage()], 401);
        }
        return 'logout success';
    }

    public function refreshToken()
    {
        try {
            $newToken = JWTAuth::refresh();

        } catch (TokenInvalidException $e) {
            return response()->json(['error' => $e->getMessage()], 401);
        }
        return response(compact('token', $newToken), 200);
    }
}
