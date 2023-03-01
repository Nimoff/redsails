<?php

namespace App\Http\Controllers\Pupil;

use App\Http\Requests\Pupil\StoreRequest;
use App\Http\Requests\Pupil\UpdateRequest;
use App\Models\Pupil;

class PupilController extends BaseController
{
    public function show(Pupil $pupil)
    {
        return view('pupil.show', compact('pupil'));
    }

    public function create()
    {
        return view('pupil.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $pupil = $this->service->store($data);
        return view('pupil.show', compact('pupil'));
    }

    public function update(Pupil $pupil, UpdateRequest $request)
    {
        $data = $request->validated();
        $this->service->update($data, $pupil);
        return view('pupil.show', compact('pupil'));
    }

    public function destroy(Pupil $pupil)
    {
        $pupil->delete();
        return redirect()->route('pupil.index');
    }
}
