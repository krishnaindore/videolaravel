<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $todos = Category::all();
        Category::where('status', 'enable')
        ->orderBy('category_name')       
        ->get();
        return response()->json([
            'status' => 'success',
            'category' => $todos,
        ]);
    }
}
