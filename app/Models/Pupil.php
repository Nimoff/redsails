<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pupil extends Model
{
    use HasFactory;
    use Filterable;

    protected $table = 'pupil';
    protected $guarded = false;
    public $timestamps = false;
}
