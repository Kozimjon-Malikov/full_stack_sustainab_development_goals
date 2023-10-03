<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Page::latest()->paginate(4);
        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.pages.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $page = new Page();
        $page->title_uz = $request->title_uz;
        $page->title_ru = $request->title_ru;
        $page->title_en = $request->title_en;
        $page->category_id = $request->category_id;
        $page->editor_uz = $request->editor_uz;
        $page->editor_ru = $request->editor_ru;
        $page->editor_en = $request->editor_en;
       
        $page->save();

        return redirect()->route('pages.index')->with('msg', 'Malumot saqlandi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pages = Page::findOrFail($id);
        return view('admin.pages.show', compact('pages'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pages = Page::findOrFail($id);
        $categories = Category::all();
        return view('admin.pages.edit', compact('pages', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $page = Page::findOrFail($id); // Find the existing page by its ID

        $data = $request->all();

        // Upload and save English image
        if ($request->hasFile('rasm_uz')) {
            $rasmUz = time() . '_uz.' . $request->file('rasm_uz')->getClientOriginalExtension();
            $request->file('rasm_uz')->move(public_path('upload'), $rasmUz);
            $imagePaths['rasm_uz'] = $rasmUz;
        }

        // Upload and save Russian image
        if ($request->hasFile('rasm_ru')) {
            $rasmRu = time() . '_ru.' . $request->file('rasm_ru')->getClientOriginalExtension();
            $request->file('rasm_ru')->move(public_path('upload'), $rasmRu);
            $imagePaths['rasm_ru'] = $rasmRu;
        }

        // Upload and save English image
        if ($request->hasFile('rasm_en')) {
            $rasmEn = time() . '_en.' . $request->file('rasm_en')->getClientOriginalExtension();
            $request->file('rasm_en')->move(public_path('upload'), $rasmEn);
            $imagePaths['rasm_en'] = $rasmEn;
        }

        if (!empty($imagePaths)) {
            // Merge the image file paths with the request data
            $data = array_merge($data, $imagePaths);
        } else {
            $data;
        }
        // Add the image file paths to the request data

        $page->update($data); // Update the page with the new data

        return redirect()->route('pages.index')->with('msg', 'Page updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Page::destroy($id);
        return redirect()->route('pages.index')->with('msg', 'Malumot o\lchirildi');
    }
}
