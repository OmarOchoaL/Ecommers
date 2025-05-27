<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function login(Request $request)
  {
    // Validate the request
    $request->validate([
      'email' => 'required|email',
      'password' => 'required|string',
    ]);

    // Attempt to authenticate the user
    if (auth()->attempt($request->only('email', 'password'))) {
    $payload = [
      'iss' => "laravel-jwt",         //emisor
      'sub' => auth()->user()->id,    // ID del usuario
      'iat' => time(),                // emitido en
      'exp' => time() + 60*60         // expira en 1 hora          
    ];
    $jwt = $this->generateJWT($payload);

    return response()->json([
      'user'=> auth()->user(),
      'massege'=> 'Login successful',
      'token' => $jwt,]);
    }

    return response()->json(['message' => 'Invalid credentials'], 401);
  }
  private function generateJWT(array $payload)
{
  $header = base64_encode(json_encode(['typ'=> 'JWT', 'alg' => 'HS256']));
  $body = base64_encode(json_encode($payload));
  $secret = env('JWT_SECRET', 'NTId3Mv76R2yluRKWjNNsj7kGKRaiNzWG0MfCuXc6uw2GcKUzQrVlEEfHyjFZQ6J');

  $signature = hash_hmac('sha256', "$header.$body", $secret, true);
  $signature = base64_encode($signature);

  return "$header.$body.$signature";
}

  public function logout(Request $request)
  {
    // Revoke the token that was used to authenticate the request
    auth()->user()->tokens()->delete();

    return response()->json(['message' => 'Logged out successfully']);
  }
  
  public function register(Request $request)
{
    // Validar los datos
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    // Crear el usuario con plan gratuito por defecto
    $user = \App\Models\User::create([
        'username' => $request->name, // suponiendo que usas 'username'
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'plan_id' => 4, // plan gratuito
        'end_Plan' => null,
    ]);

    // Generar token de acceso
    $token = $user->createToken('Personal Access Token')->plainTextToken;

    return response()->json([
        'message' => 'Usuario registrado correctamente. Redirigiendo a la vista de checkout.',
        'token' => $token,
        'user' => $user,
        'redirect_to' => '/checkout', // ruta a la vista de checkout
    ]);
}
}