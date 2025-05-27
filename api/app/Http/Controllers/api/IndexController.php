<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Serie;

class IndexController extends Controller
{
    public function peliculas()
    {
        $ultimos = Movie::orderBy('created_at', 'DESC')->take(10)->get();
        return response()->json(['ultimos' => $ultimos, 'status' => 'success'], 200);
    }

    public function series()
    {
        $series = Serie::orderBy('created_at', 'DESC')->take(10)->get();
        return response()->json(['ultimoss' => $series, 'status' => 'success'], 200);
    }
}
