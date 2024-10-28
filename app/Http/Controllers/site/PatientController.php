<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientRequest;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index($id)
    {
        $doctor = Doctor::findOrFail($id);
        // dd($doctor);
        return view('site.pages.appointement' , compact('doctor'));
    }

    public function store(PatientRequest $request , $id){
        $patient = $request->validated();
        $doctorID = Doctor::findOrFail($id);
        $patient['doctor_id'] = $doctorID->id;
        Patient::create($patient);
        return redirect()->route('site.appointement', $doctorID)->with('success','Pateint has been created successfully');
    }
}
