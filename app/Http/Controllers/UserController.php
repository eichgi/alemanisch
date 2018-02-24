<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function registro(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $nombre = $request->nombre;
        $user = new User;

        $user->email = $email;
        $user->password = Hash::make($password);
        $user->name = $nombre;
        $user->api_token = str_random(60);
        $user->save();

        $status = 'Registro exitoso';
        return response()->json(compact('status'), 200);
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $user = DB::table('users')
            ->join('model_has_roles', 'model_id', '=', 'users.id')
            ->join('roles', 'roles.id', '=', 'role_id')
            ->select('users.id', 'users.name', 'users.password', 'email', 'api_token', 'users.created_at', 'roles.name AS role')
            ->where('email', '=', $email)
            ->first();

        if (!$user) {
            $status = 'Credenciales incorrectas';
            return response()->json(compact('status'), 401);
        }

        $hashedPassword = $user->password;
        unset($user->password);

        if (Hash::check($password, $hashedPassword)) {
            $status = 'Inicio exitoso';
            return response()->json(compact('user', 'status'), 200);
        } else {
            $status = 'Credenciales incorrectas';
            return response()->json(compact('status'), 401);
        }
    }
}
