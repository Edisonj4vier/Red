<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\report;

class UserController extends Controller
{
    public function getAllEmployees(){
        $employees = report::all;
        return view ('employee', compact ('employees'));
    }
}
