<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner=Banner::all();
        return view('admin.banner.banner',compact('banner'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData=$request->all();
        $banner = Banner::create($validatedData);
        return redirect()->route('banner.index')->with('msg','Banner muvaffaqiyatli yaratildi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $banner=Banner::findOrFail($id);
        return view('admin.banner.edit',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {   
        $bannerData=Banner::findOrFail($id);
        $banner=$request->all();
        $bannerData->update($banner);
        return redirect()->route('banner.index')->with('msg','Banner updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Banner::destroy($id);
        return redirect()->route('banner.index')->with('msg','Banner o\'chirildi');
    }
}
