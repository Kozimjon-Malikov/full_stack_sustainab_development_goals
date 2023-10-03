<?php

namespace App\Http\Controllers\Admin;

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
        $categories = Category::latest()->paginate(2);
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->all();
        // Upload and save English image
        if ($request->hasFile('rasm_en')) {
            $rasmEn = time() . '_en.' . $request->file('rasm_en')->getClientOriginalExtension();
            $request->file('rasm_en')->move(public_path('upload'), $rasmEn);
        }

        // Upload and save Russian image
        if ($request->hasFile('rasm_ru')) {
            $rasmRu = time() . '_ru.' . $request->file('rasm_ru')->getClientOriginalExtension();
            $request->file('rasm_ru')->move(public_path('upload'), $rasmRu);
        }

        // Upload and save Uzbek image
        if ($request->hasFile('rasm_uz')) {
            $rasmUz = time() . '_uz.' . $request->file('rasm_uz')->getClientOriginalExtension();
            $request->file('rasm_uz')->move(public_path('upload'), $rasmUz);
        }

        // Create the category with the updated data
        $category = Category::create([
            'rasm_uz' => $rasmUz ?? null,
            'rasm_ru' => $rasmRu ?? null,
            'rasm_en' => $rasmEn ?? null,
            'name' => request()->name
            // Add other category fields here
        ]);

        return redirect()->route('sdg-category.index')->with('msg', 'Successfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::findOrFail($id);
        return view('frontend.views', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::findOrFail($id);
        return view('admin.category.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);
        $data=request()->all();
        // Upload and save English image
        if ($request->hasFile('rasm_uz')) {
            $rasmUz = time() . '_uz.' . $request->file('rasm_uz')->getClientOriginalExtension();
            $request->file('rasm_uz')->move(public_path('upload'), $rasmUz);
            $data['rasm_uz']=$rasmUz;
        }

        // Upload and save Russian image
        if ($request->hasFile('rasm_ru')) {
            $rasmRu = time() . '_ru.' . $request->file('rasm_ru')->getClientOriginalExtension();
            $request->file('rasm_ru')->move(public_path('upload'), $rasmRu);
            $data['rasm_ru']=$rasmRu;
        }

        // Upload and save Uzbek image
        if ($request->hasFile('rasm_en')) {
            $rasmEn = time() . '_en.' . $request->file('rasm_en')->getClientOriginalExtension();
            $request->file('rasm_en')->move(public_path('upload'), $rasmEn);
            $data['rasm_uz']=$rasmEn;
        }
        $category->update($data);

        return redirect()->route('sdg-category.index')->with('msg', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::destroy($id);
        return redirect()->route('sdg-category.index')->with('msg', 'Muvaffaqiyatli o\'chirildi');
    }
}
