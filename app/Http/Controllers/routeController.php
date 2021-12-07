<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curriculum;
use App\Models\Field;
use App\Models\Laboratory;
use App\Models\Teacher;

class routeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function teachers()
    {
        return view('teachers');
    }

    public function curricula()
    {
        return view('curricula');
    }

    public function laboratories()
    {
        return view('laboratories');
    }
    
    public function admissions()
    {
        return view('admissions');
    }

    public function students()
    {
        return view('students');
    }

    public function labo_info(){
        $labo_info =  Laboratory::Join('teachers','laboratories.t_id','=','teachers.id')->select('t_name','l_content')->get();
        return $labo_info;
    }


    public function curricula_info(){
        $labo_info =  Curriculum::Join('teachers','curricula.t_id','=','teachers.id')->select('t_name','c_name','c_content')->get();
        return $labo_info;
    }
}
