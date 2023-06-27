<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /* ---- admin --------*/
    public function index(){
        return view('backend/admin/exam.index');
    }


    /* ---- student --------*/
    public function indexStudent(){
        return view('backend/student/Exam.index');
    }

    public function result(){
        return view('backend/student/semester result.index');
    }

    /* ------ Professor --------*/
    public function examProfessor(){
        return view('backend/professor/exam.index');
    }
}
