<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    
    public function sum($a, $b)
    {
        return $a + $b;
    }
}
