<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\MajorRequest;
use App\Http\Requests\API\CategoryRequest;
use App\Http\Requests\site\ContactRequest;
use App\Models\Category;
use App\Models\Major;
use App\Models\UserMessages;
use App\Traits\JsonResponseTrait;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    use JsonResponseTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = UserMessages::orderBy('id', 'DESC')->get();
        return $this->ResponseSuceess('Messages retrieved successfully',$messages);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactRequest $request)
    {
        $message = UserMessages::create($request->validated());
        return $this->ResponseSuceess('Message created successfully', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(UserMessages $message)
    {
        return $this->ResponseSuceess('Message retrieved successfully', $message);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContactRequest $request, UserMessages $message)
    {
        $message->update($request->validated());
        return $this->ResponseSuceess('Message Updated successfully', $message);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserMessages $message)
    {
        $message->delete();
        return $this->ResponseSuceess('Message deleted successfully');
    }
}
