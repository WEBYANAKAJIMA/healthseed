<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthyFoodController extends Controller
{
    // ソイプロテインLP画面
    public function soyprotein()
    {
        return view('healthyfood/soyprotein');
    }
}
