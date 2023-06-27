<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /* ------------ student -------------*/

    public function indexStudent(){
        return view('backend/student/schedule.index');
    }

    /* ------------ student -------------*/
}
