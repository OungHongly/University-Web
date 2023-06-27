<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /* ---------- admin ----------*/
    public function index(){
        return view('backend/admin/Subject.index');
    }


    /* ---------- student ----------*/
    public function indexStudent(){
        return view ('backend/student/subject.index');
    }


    /* ---------- Professor ----------*/

    public function subjectProgress(){
        return view ('backend/professor/SubjectProgress.index');
    }

    public function lecture(){
        return view ('backend/professor/Lecture.index');
    }
}
