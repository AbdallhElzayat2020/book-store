<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::query()->latest()->get();
        return view('dashboard.category', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:categories,name',
        ], [
            'name.required' => 'اسم القسم مطلوب.',
            'name.string' => 'اسم القسم يجب أن يكون نصًا.',
            'name.exists' => 'اسم القسم غير موجود في النظام.',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->status = $request->status ? 'visible' : 'hidden';
        $category->save();

        return back()->with('success', 'تم اضافه القسم بنجاح');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|unique:categories,name,' . $category->id,
        ], [
            'name.required' => 'اسم القسم مطلوب.',
            'name.string' => 'اسم القسم يجب أن يكون نصًا.',
            'name.exists' => 'اسم القسم غير موجود في النظام.',
        ]);

        $category->name = $request->name;
        $category->status = $request->status ? 'visible' : 'hidden';
        $category->save();

        return back()->with('success', 'تم تعديل القسم بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('success', 'تم حذف القسم بنجاح');
    }
}
