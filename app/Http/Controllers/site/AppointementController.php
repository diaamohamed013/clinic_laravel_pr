<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Major;
use Illuminate\Http\Request;

class AppointementController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(Doctor $doctor)
    {
        $doctor = Doctor::find($doctor->id);
        return view('site.pages.appointement', compact( 'doctor'));
    }
}
