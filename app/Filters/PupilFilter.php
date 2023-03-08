<?php

namespace App\Filters;

class PupilFilter extends QueryFilter
{
    public function study($id = null)
    {
        return $this->builder->when($id, function ($query) use ($id) {
            $query->where('study', $id);
        });
    }

    public function sex($id)
    {
        return $this->builder
            ->where('sex', $id);
    }

    public function disability($id)
    {
        return $this->builder
            ->where('disability', 'Да');
    }

    public function filter($id){
        dd($id);
    }
}
