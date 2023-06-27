<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /* -------- admin -----------*/
    public function index(){
        return view('backend/admin/Notice.index');
    }



    /* -------- student -----------*/
    public function indexStudent(){
        return view('backend/Student/Notice.index');
    }


    /* -------- teacher -----------*/
    public function indexTeacher(){
        return view ('backend/Professor/Notice.index');
    }



}
