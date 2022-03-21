<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrefixController extends Controller
{
    public function kyt(){
        return "Ini Adalah Halaman Helm KYT";
    }
    public function ink(){
        return "Ini Adalah Halaman Helm INK";
    }
    public function agv(){
        return "Ini Adalah Halaman Helm AGV";
    }
    public function karir(){
        return "Program Karir";
    }
    public function magang(){
        return "Program Magang";
    }
    public function kunjungan(){
        return "Program Kunjungan Industri";
    }
}
