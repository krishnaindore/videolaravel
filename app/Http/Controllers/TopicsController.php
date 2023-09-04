<?php

namespace App\Http\Controllers;
use App\Models\Topics;

use Illuminate\Http\Request;

class TopicsController extends Controller
{
    public function index()
    {
        $todos = Topics::all();
        Topics::where('status', 'enable')
        ->orderBy('topics_name')       
        ->get();
        return response()->json([
            'status' => 'success',
            'Topics' => $todos,
        ]);
    }

}
