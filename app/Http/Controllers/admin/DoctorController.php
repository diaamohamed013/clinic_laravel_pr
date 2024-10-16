<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\DoctorRequest;
use App\Models\Doctor;
use App\Models\Major;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::with('major')->get();
        return view('admin.pages.doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $majors = Major::get();
        return view('admin.pages.doctors.create',compact('majors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DoctorRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->storeAs('doctors', time() . '.' . $file->getClientOriginalExtension(), 'public');
            $data['image'] = 'storage/' . $filename;
        }
        Doctor::create($data);
        return redirect()->route('admin.doctors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        $majors = Major::get();
        return view('admin.pages.doctors.edit', compact('majors','doctor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DoctorRequest $request, Doctor $doctor)
    {
        $data = $request->validated();

        $image = Doctor::find($doctor->id);
        if (file_exists(public_path($image->doctor_image))) {
            unlink(public_path($image->doctor_image));
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->storeAs('doctors', time() . '.' . $file->getClientOriginalExtension(), 'public');
            $data['image'] = 'storage/' . $filename;
        }
        $doctor->update($data);
        return redirect()->route('admin.doctors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        $image = Doctor::find($doctor->id);
        if (file_exists(public_path($image->doctor_image))) {
            unlink(public_path($image->doctor_image));
        }
        $doctor->delete();
        return redirect()->route('admin.doctors.index');
    }
}
