<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\MajorRequest;
use App\Http\Requests\API\CategoryRequest;
use App\Models\Category;
use App\Models\Major;
use App\Traits\JsonResponseTrait;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    use JsonResponseTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $majors = Major::orderBy('id', 'DESC')->get();
        return $this->ResponseSuceess('Majors retrieved successfully',$majors);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MajorRequest $request)
    {
        $major = Major::create($request->validated());
        return $this->ResponseSuceess('Major created successfully', $major);
    }

    /**
     * Display the specified resource.
     */
    public function show(Major $major)
    {
        return $this->ResponseSuceess('Major retrieved successfully', $major);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MajorRequest $request, Major $major)
    {
        $major->update($request->validated());
        return $this->ResponseSuceess('Major Updated successfully', $major);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Major $major)
    {
        $major->delete();
        return $this->ResponseSuceess('Major deleted successfully');
    }
}
