<?php
namespace Deki\Matrix;

use Illuminate\Support\Facades\Facade;

class MatrixFacade extends Facade
{
    protected static function getFacadeAccessor() { 
        return 'deki-matrix';
    }
}