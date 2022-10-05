<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        return response()->json(['message' => __METHOD__]);
    }


    public function store(Request $request)
    {
        return response()->json(['message' => __METHOD__]);
    }


    public function show($id)
    {
        return response()->json(['message' => __METHOD__]);
    }


    public function update(Request $request, $id)
    {
        return response()->json(['message' => __METHOD__]);
    }


    public function destroy($id)
    {
        return response()->json(['message' => __METHOD__]);
    }
}
