<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\DoctorRequest;
use App\Http\Requests\API\CategoryRequest;
use App\Models\Category;
use App\Models\Doctor;
use App\Traits\JsonResponseTrait;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    use JsonResponseTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::orderBy('id', 'DESC')->get();
        return $this->ResponseSuceess('Doctors retrieved successfully',$doctors);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DoctorRequest $request)
    {
        $doctor = Doctor::create($request->validated());
        return $this->ResponseSuceess('Doctor created successfully', $doctor);
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        return $this->ResponseSuceess('Doctor retrieved successfully', $doctor);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DoctorRequest $request, Doctor $doctor)
    {
        $doctor->update($request->validated());
        return $this->ResponseSuceess('Doctor Updated successfully', $doctor);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return $this->ResponseSuceess('Doctor deleted successfully');
    }
}
