<?php

namespace Deki\Matrix;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class MatrixController extends Controller
{
    public function index($timezone)
    {
        echo Carbon::now($timezone)->toDateTimeString();
    }
}
