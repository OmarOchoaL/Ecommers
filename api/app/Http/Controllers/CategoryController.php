<?php

namespace App\Http\Controllers;
use App\Models\Category;



use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function destroy($id)
{
    /*$category = Category::find($id);
    $category->series()->delete();
    if (!$category) {
        return redirect()->route('admin.verdatos')->with('error', 'Genero no encontrado');
    }
    $category->delete();
    return redirect()->route('admin.verdatos')->with('success', 'Genero eliminado correctamente');*/
}
}
