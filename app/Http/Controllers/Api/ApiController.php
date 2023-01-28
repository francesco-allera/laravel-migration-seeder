<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getEntities() {
        $entities = Student::all();
        return response()->json($entities);
    }

    public function index() {
        return view('api');
    }
}
