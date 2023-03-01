<?php

namespace App\Service;

use App\Models\Pupil;

class PupilService
{
    public function store($data)
    {
//        try {
        $data['birthday'] = date('Y-m-d', strtotime($data['birthday']));
        $data['entrance'] = date('Y-m-d', strtotime($data['entrance']));
        $data['date_get'] = date('Y-m-d', strtotime($data['date_get']));
        $data['age'] = (strtotime(date('Y-m-d')) - strtotime($data['birthday'])) / 86400 / 365.25;
        return Pupil::firstOrCreate($data);
//        } catch (\Exception $exception) {
//            abort(404);
//        }
    }

    public function update($data, $pupil)
    {
        try {
            $data['birthday'] = date('Y-m-d', strtotime($data['birthday']));
            $data['entrance'] = date('Y-m-d', strtotime($data['entrance']));
            $data['date_get'] = date('Y-m-d', strtotime($data['date_get']));
            $pupil->update($data);
        } catch (\Exception $exception) {
            abort(404);
        }
    }
}
