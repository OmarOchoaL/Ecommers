<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Movie;

class   MovieController extends Controller
{
    public function show($id)
    {
        // Buscar la película por ID
        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json(['error' => 'Película no encontrada'], 404);
        }

        return response()->json($movie);
    }
}