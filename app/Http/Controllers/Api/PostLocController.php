<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LocationData;
use Illuminate\Http\Request;

class PostLocController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Hello World',
        ]);
    }

    public function store(Request $request)
    {

        $locationData = LocationData::create($request->all());

        return response()->json([
            'message' => 'Location data created successfully',
            'data' => $locationData
        ]);
    }
}
