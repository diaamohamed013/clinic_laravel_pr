<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $doctors = Doctor::get();
        return view('site.pages.doctors', compact('doctors'));
    }
}
