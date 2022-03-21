<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParameterController extends Controller
{
    public function rekomendasi(){
        return 'Berikut Rekomendasi Helm';
    }
    public function helm($nama){
        return 'Rekomendasi Pertama Adalah Helm '.$nama;
    }
}
