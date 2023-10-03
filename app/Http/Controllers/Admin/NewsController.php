<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allnews = News::latest()->paginate(2);
        return view('admin.news.index', compact('allnews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Get all the request data
        $data = $request->all();

        // Initialize an array to store the image file paths
        $imagePaths = [];

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

        // Add the image file paths to the request data
        $data = array_merge($data, $imagePaths);

        // Create the page with the updated data
        $page = News::create($data);

        return redirect()->route('news.index')->with('msg', 'Malumot saqlandi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $all_news = News::findOrFail($id);
        return view('admin.news.show', compact('all_news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $all_news = News::findOrFail($id);
        return view('admin.news.edit', compact('all_news'));
    }
    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, string $id)
    {
        $news = News::findOrFail($id); // Find the existing page by its ID
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
        $news->update($data);// Update the page with the new data

        return redirect()->route('news.index')->with('msg', 'News updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        News::destroy($id);
        return redirect()->route('news.index')->with('msg', "Malumot o'chirildi...");
    }
}
