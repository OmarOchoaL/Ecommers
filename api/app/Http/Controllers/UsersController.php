<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\support\Facades\Mail;
use App\Models\User;
use App\Models\Category;
use App\Models\Serie;
use App\Models\Movie;
use App\Models\Plan;
use App\Models\Viewing;
use Carbon\Carbon;

class UsersController extends Controller
{
    public function index(){
        $users = User::all();
        $categorys=Category::all();
        $series = Serie::all();
        $movies = Movie::all();
        $plans = Plan::all();
    return view('admin.verdatos', compact('users','categorys','series','movies','plans'));
}
public function index2(){
    $views = Viewing::all();
return view('admin.viewinghistory', compact('views'));
}
    public function sendEmail(){
        $data['code']=rand(1000,9999);
        $to="omartadeo648@outlook.com";
        $subject="codigo de verificacion";
        Mail::send('mails.verification',$data, function($massage) use ($to,$subject){
            $massage->to($to,'Mi tienda Online')
            ->subject($subject);
            $massage->from('omartadeo648@outlook.com','Test');
        });
        echo "Se envio el correo";
    }
    public function insertUser(Request $request){
        /*print_r($_POST);
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'plans' => 'required|integer',   ]); */

            $user = new User();
                $user->username = $request->post('nombre');
                $user->password = $request->post('password');
                $user->email = $request->post('correo'); // Cifra la contraseña
                $user->plan_id = $request->post('plans');
                $user->end_plan = Carbon::now()->addDays(30);  // Calcula la fecha de fin del plan (hoy + 30 días)
                $user->save();
        
            return redirect()->to(url('/admin'))->with('success', 'Usuario creado correctamente.');
    }
    public function insertarGenero(Request $request){
        $genero = new Category();
        $genero->name = $request->post('genero');
        $genero->slug = $request->post('slug');
        $genero->description = $request->post('descrip');
        $genero->save();
        return redirect()->to(url('/admin/insert'))->with('success', 'Genero creado correctamente.');
    }
    public function insertarPelicula(Request $request){
        $pelicula = new Movie();
        $pelicula->title = $request->post('nombre');
        $pelicula->slug = $request->post('slug');
        $pelicula->category_id = $request->post('category');
        $pelicula->time = $request->post('time');
        $pelicula->image = $request->post('imagen');
        $pelicula->media = $request->post('movie');
        $pelicula->typefile = $request->post('typefile');
        $pelicula->description = $request->post('descrip');
        $pelicula->save();
        return redirect()->to(url('/admin/insert'))->with('success', 'Pelicula creada');
    }

public function destroy($id)
{
    $user = User::find($id);

    if (!$user) {
        return redirect()->route('admin.verdatos')->with('error', 'Usuario no encontrado');
    }
    $user->delete();
    return redirect()->route('admin.verdatos')->with('success', 'Usuario eliminado correctamente');
}
public function deleteMovie($id)

    {
        // Buscar la película por su ID
        $movie = Movie::find($id);

        // Verificar si la película existe
        if ($movie) {
            // Eliminar la película
            $movie->delete();

            // Redirigir con un mensaje de éxito
            return redirect()->route('admin.verdatos')->with('success', 'Película eliminada correctamente.');
        } else {
            // Si no se encuentra la película
            return redirect()->route('admin.verdatos')->with('error', 'Película no encontrada.');
        }
    }
public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.verdatos', compact('user'));
    }
    
public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string|max:20' ,
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            
        ]);
        $user = User::findOrFail($id);
            $user->username = $request->input('username');
            $user->password = $request->input('password');
            $user->email = $request->input('email');
            $user->save();
            return redirect()->route('users.edit', ['id' => $user->id])->with('success', 'Usuario actualizado correctamente');
        }

public function updatePlan(Request $request)
    {
        $user = auth()->user(); // O usa $request->user() si estás autenticando con Sanctum

        if (!$user) {
            return response()->json(['error' => 'Usuario no autenticado'], 401);
        }

        $planId = $request->input('plan_id');

        // Validación opcional
        if (!in_array($planId, [1, 2, 3, 4])) {
            return response()->json(['error' => 'Plan inválido'], 422);
        }

        $user->plan_id = $planId;
        $user->save();

        return response()->json(['message' => 'Plan actualizado correctamente', 'plan_id' => $planId]);
    }
}
