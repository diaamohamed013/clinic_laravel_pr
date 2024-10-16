<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\MajorRequest;
use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $majors = Major::orderBy('id', 'desc')->get();
        return view('admin.pages.majors.index', compact('majors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.majors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MajorRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->storeAs('majors', time() . '.' . $file->getClientOriginalExtension(), 'public');
            $data['image'] = 'storage/' . $filename;
        }
        Major::create($data);
        return redirect()->route('admin.majors.index');
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
    public function edit(Major $major)
    {
        // $major = Major::find($major->id);
        return view('admin.pages.majors.edit', compact('major'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MajorRequest $request, Major $major)
    {
        $data = $request->validated();

        $image = Major::find($major->id);
        if (file_exists(public_path($image->image))) {
            unlink(public_path($image->image));
        }
        
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->storeAs('majors', time() . '.' . $file->getClientOriginalExtension(), 'public');
            $data['image'] = 'storage/' . $filename;
        }

        $major->update($data);
        return redirect()->route('admin.majors.index', compact('major'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Major $major)
    {
        $image = Major::find($major->id);
        if (file_exists(public_path($image->image))) {
            unlink(public_path($image->image));
        }
        $major->delete();
        return redirect()->route('admin.majors.index');
    }
}
