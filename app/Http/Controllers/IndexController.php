<?php

namespace App\Http\Controllers;

use App\Models\Pupil;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $count = 1;
        $pupils = Pupil::all()->sortBy('surname');
        return view('main.index', compact('pupils', 'count'));
    }
}
