<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /* ----- Admin ------*/
    public function index(){
        return view('backend/admin/dashboard.index');
    }



    /* ----- Student ------*/
    public function indexStudent(){
        return view('backend.Student.Dashboard.index');
    }


    /* ----- Teacher ------*/
    public function indexTeacher(){
        return view('backend.Professor.Dashboard.index');
    }

}
