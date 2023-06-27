<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class CourseController extends Controller
{
    public function index(){
        return view ('backend/admin/course.index');
    }
}
