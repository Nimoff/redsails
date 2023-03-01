<?php

namespace App\Http\Controllers;

use App\Http\Filters\PupilFilter;
use App\Http\Requests\Pupil\FilterRequest;
use App\Models\Pupil;

class IndexController extends Controller
{
    public function index(FilterRequest $request)
    {
        $count = 1;
        $data = $request->validated();
        $filter = app()->make(PupilFilter::class, ['queryParams' => array_filter($data)]);

        $pupils = Pupil::filter($filter)->get();


        return view('main.index', compact('pupils', 'count'));
    }
}

