<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class DataPullController extends Controller
{
    //
    public function index() {
        $columns = ['id', 'name'];
        $users = Test::select($columns)->get();
        return view('tests.index', compact('users'));
    }
}
