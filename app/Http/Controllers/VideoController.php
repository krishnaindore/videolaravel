<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    //

    public function index()
    {
        $todos = Video::all();       
        return response()->json([
            'status' => 'success',
            'Video' => $todos,
        ]);
    }
}
