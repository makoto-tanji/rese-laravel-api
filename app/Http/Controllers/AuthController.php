<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// 以下追加
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    public function register(Request $request)
    {
        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ]);

        return response()->json(['message' => 'Successfully user create']);
    }

    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function me()
    {
        // JWTをpublish時に作成されたため残してあります
        // return response()->json(
        //     auth()->user()
        // );

        // TODO
        // http://127.0.0.1:8000/api/auth/userから
        // 中間テーブルの情報を含んだUser情報を取得したい
        // $user = auth()->user()->with('reservations')->get();

        $userId = auth()->user()->id;
        $user = User::with('reservations')->with('favorites')->find($userId);
        return $user;
    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
