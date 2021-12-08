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

    public function faq()
    {
        return view('faq');
    }

    public function labo_info(){
        $labo_info =  Laboratory::Join('teachers','laboratories.t_id','=','teachers.id')
        ->where('teachers.delete_flag','=','0')
        ->where('laboratories.delete_flag','=','0')
        ->select('t_name','l_content')->get();
        return $labo_info;
    }

    public function curricula_info(){
        $labo_info =  Curriculum::Join('teachers','curricula.t_id','=','teachers.id')
        ->where('teachers.delete_flag','=','0')
        ->where('curricula.delete_flag','=','0')
        //あとで加筆削除されたやつは出さない
        ->select('t_name','c_name','c_content','f_id')->get();
        return $labo_info;
    }

    public function apitest_c()
    {
        return view('apitest.apitest_c');
    }

    public function apitest_t()
    {
        return view('apitest.apitest_t');
    }

    public function apitest_l()
    {
        return view('apitest.apitest_l');
    }


    public function apitest_f()
    {
        return view('apitest.apitest_f');
    }
}
