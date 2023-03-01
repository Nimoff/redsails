<?php

namespace App\Http\Controllers\Pupil;

use App\Http\Controllers\Controller;
use App\Service\PupilService;

class BaseController extends Controller
{
    protected $service;

    public function __construct(PupilService $service)
    {
        $this->service = $service;
    }
}
