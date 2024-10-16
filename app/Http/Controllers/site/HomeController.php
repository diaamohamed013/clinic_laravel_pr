<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Major;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $majors = Major::get();
        $doctors = Doctor::with('major')->get();
        return view('site.pages.home',compact('majors','doctors'));
    }
    public function loginDash()
    {
        return view('admin.pages.login');
    }
}
