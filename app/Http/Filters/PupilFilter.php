<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class PupilFilter extends AbstractFilter
{
    const SEX = 'sex';

    protected function getCallbacks(): array
    {
        return [
            self::SEX => [$this, 'sex']
        ];
    }

    public function sex(Builder $builder, $value)
    {
        $builder->where('sex', $value);
    }
}
