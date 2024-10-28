<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\CategoryRequest;
use App\Models\Category;
use App\Traits\JsonResponseTrait;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use JsonResponseTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        return $this->ResponseSuceess('Categories retrieved successfully',$categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $category = Category::create($request->validated());
        return $this->ResponseSuceess('Category created successfully', $category);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return $this->ResponseSuceess('Category retrieved successfully', $category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->validated());
        return $this->ResponseSuceess('Category Updated successfully', $category);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return $this->ResponseSuceess('Category deleted successfully');
    }
}
