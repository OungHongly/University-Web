<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LMSController extends Controller
{
    public function index(){
        return view('backend/admin/LMS.index');
    }


     /*---- professor --------*/
    public function indexTeacher(){
        return view ('backend/professor/LMS.index');
    }
}
