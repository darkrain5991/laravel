<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\InspiringService;

class InspiringController extends Controller
{
    public function inspire()
    {
        return (new InspiringService())->inspire();
    }
}

