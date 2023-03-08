<?php

namespace App\Http\Controllers;

use App\Filters\PupilFilter;
use App\Http\Requests\IndexRequest;
use App\Models\Pupil;

class IndexController extends Controller
{
    public function index(PupilFilter $filter)
    {
        $count = 1;

        $pupils = Pupil::filter($filter)->get();


        return view('main.index', compact('pupils', 'count'));
    }

    public function filter(IndexRequest $request)
    {
        $count = 1;

        $data = $request->validated();
        $pupils = Pupil::where('corpus', $data['filter'])->get();

        return view('main.index', compact('pupils', 'count'));
    }
}

