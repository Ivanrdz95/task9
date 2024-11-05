<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Task9Controller extends Controller
{
    public function home() {
        return view('sections.home');
    }
    
    public function section1() {
        return view('sections.section1');
    }
    
    public function section2() {
        return view('sections.section2');
    }
    
}
