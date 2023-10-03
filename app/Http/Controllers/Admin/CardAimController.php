<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CardAim;
use Illuminate\Http\Request;

class CardAimCOntroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cards = CardAim::latest()->paginate(2);
        return view('admin.card.index', compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.card.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
        // -------------------------------------
        if ($request->hasFile('rasmbg_uz')) {
            $rasmBgUz = time() . '_uz.' . $request->file('rasmbg_uz')->getClientOriginalExtension();
            $request->file('rasmbg_uz')->move(public_path('upload'), $rasmBgUz);
            $data['rasmbg_uz'] = $rasmBgUz;
        }
        // Upload and save Russian image
        if ($request->hasFile('rasmbg_ru')) {
            $rasmBgRu = time() . '_ru.' . $request->file('rasmbg_ru')->getClientOriginalExtension();
            $request->file('rasmbg_ru')->move(public_path('upload'), $rasmBgRu);
            $data['rasmbg_ru'] = $rasmBgRu;
        }
        // Upload and save Uzbek image
        if ($request->hasFile('rasmbg_en')) {
            $rasmBgEn = time() . '_en.' . $request->file('rasmbg_en')->getClientOriginalExtension();
            $request->file('rasmbg_en')->move(public_path('upload'), $rasmBgEn);
            $data['rasmbg_en'] = $rasmBgEn;
        }
        // Create the category with the updated data
        $data = CardAim::create([
            'rasm_uz' => $rasmUz ?? null,
            'rasm_ru' => $rasmRu ?? null,
            'rasm_en' => $rasmEn ?? null,
            'rasmbg_en' => $rasmBgEn ?? null,
            'rasmbg_ru' => $rasmBgRu ?? null,
            'rasmbg_uz' => $rasmBgUz ?? null,
            'name_uz' => request()->name_uz,
            'name_ru' => request()->name_ru,
            'name_en' => request()->name_en,
            'title_uz' => request()->title_uz,
            'title_ru' => request()->title_ru,
            'title_en' => request()->title_en,
            // Add other category fields here
        ]);

        return redirect()->route('cards.index')->with('msg', 'Successfully created');
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
        $card = CardAim::findOrFail($id);
        return view('admin.card.edit', compact('card'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cards = CardAim::findOrFail($id);
        $data = request()->all();
        // Upload and save English image
        if ($request->hasFile('rasm_uz')) {
            $rasmUz = time() . '_uz.' . $request->file('rasm_uz')->getClientOriginalExtension();
            $request->file('rasm_uz')->move(public_path('upload'), $rasmUz);
            $data['rasm_uz'] = $rasmUz;
        }
        // Upload and save Russian image
        if ($request->hasFile('rasm_ru')) {
            $rasmRu = time() . '_ru.' . $request->file('rasm_ru')->getClientOriginalExtension();
            $request->file('rasm_ru')->move(public_path('upload'), $rasmRu);
            $data['rasm_ru'] = $rasmRu;
        }
        // Upload and save Uzbek image
        if ($request->hasFile('rasm_en')) {
            $rasmEn = time() . '_en.' . $request->file('rasm_en')->getClientOriginalExtension();
            $request->file('rasm_en')->move(public_path('upload'), $rasmEn);
            $data['rasm_uz'] = $rasmEn;
        }
        // -------------------------------------
        if ($request->hasFile('rasmbg_uz')) {
            $rasmUz = time() . '_uz.' . $request->file('rasmbg_uz')->getClientOriginalExtension();
            $request->file('rasmbg_uz')->move(public_path('upload'), $rasmUz);
            $data['rasmbg_uz'] = $rasmUz;
        }
        // Upload and save Russian image
        if ($request->hasFile('rasmbg_ru')) {
            $rasmRu = time() . '_ru.' . $request->file('rasmbg_ru')->getClientOriginalExtension();
            $request->file('rasmbg_ru')->move(public_path('upload'), $rasmRu);
            $data['rasmbg_ru'] = $rasmRu;
        }
        // Upload and save Uzbek image
        if ($request->hasFile('rasmbg_en')) {
            $rasmEn = time() . '_en.' . $request->file('rasmbg_en')->getClientOriginalExtension();
            $request->file('rasmbg_en')->move(public_path('upload'), $rasmEn);
            $data['rasmbg_en'] = $rasmEn;
        }
        $cards->update($data);

        return redirect()->route('cards.index')->with('msg', 'Cards updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        CardAim::destroy($id);
        return redirect()->route('cards.index')->with('msg', 'malumot o\'chirildi');
    }
}
