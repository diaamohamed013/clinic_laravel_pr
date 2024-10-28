<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\MajorRequest;
use App\Http\Requests\API\CategoryRequest;
use App\Http\Requests\site\UserRequest;
use App\Models\Category;
use App\Models\Major;
use App\Models\User;
use App\Traits\JsonResponseTrait;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use JsonResponseTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->get();
        return $this->ResponseSuceess('Users retrieved successfully',$users);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $user = User::create($request->validated());
        return $this->ResponseSuceess('User created successfully', $user);
    }

    /**
     * Display the specified resource.
     */
    public function show(USer $user)
    {
        return $this->ResponseSuceess('User retrieved successfully', $user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, USer $user)
    {
        $user->update($request->validated());
        return $this->ResponseSuceess('User Updated successfully', $user);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(USer $user)
    {
        $user->delete();
        return $this->ResponseSuceess('User deleted successfully');
    }
}
