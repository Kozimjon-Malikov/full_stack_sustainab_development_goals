<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tarjima;
use Illuminate\Http\Request;

class TarjimaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_tarjima=Tarjima::latest()->paginate(5);
        return view('admin.tarjima.index',compact('all_tarjima'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tarjima.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=request()->all();
        $newData=Tarjima::create($data);
        return redirect()->route('tarjima.index')->with('msg','Tarjima muvaffaqiyatli yaratildi');
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
        $data=Tarjima::findOrFail($id);
        return view('admin.tarjima.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=$request->all();
        $data_new=Tarjima::findOrFail($id);
        $data_new->update($data);
        return redirect()->route('tarjima.index')->with('msg','Malumot yangilandi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tarjima::destroy($id);
        return redirect()->route('tarjima.index')->with('msg','Malumot o\'chirildi');
    }
}
