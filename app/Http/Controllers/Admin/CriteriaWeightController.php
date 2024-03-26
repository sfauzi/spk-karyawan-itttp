<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\CriteriaWeightImport;

use Maatwebsite\Excel\Facades\Excel;
use App\Models\CriteriaWeight;
use Illuminate\Http\Request;

class CriteriaWeightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $criteriaweights = CriteriaWeight::get();
        return view('pages.admin.criteriaweight.index', compact('criteriaweights'))->with('i', 0);
    }

    public function criteriaweightimport(Request $request)
    {
        // Excel::import(new CriteriaWeightImport, request()->file('file'));

        // return back();

        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataCriteriaWeight', $namaFile);

        $filePath = public_path('DataCriteriaWeight' . DIRECTORY_SEPARATOR . $namaFile);

        Excel::import(new CriteriaWeightImport(), $filePath);

        return redirect('/criteriaweights');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.criteriaweight.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'weight' => 'required',
            'description' => 'required',
        ]);

        CriteriaWeight::create($request->all());

        return redirect()->route('criteriaweights.index')->with('success', 'Criteria created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(CriteriaWeight $criteriaweight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $criteriaweight = CriteriaWeight::findOrFail($id);
        return view('pages.admin.criteriaweight.edit', compact('criteriaweight'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CriteriaWeight $criteriaweight)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'weight' => 'required',
            'description' => 'required',
        ]);

        $criteriaweight->update($request->all());

        return redirect()->route('criteriaweights.index')->with('success', 'Criteria updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CriteriaWeight $criteriaweight)
    {
        $criteriaweight->delete();

        return redirect()->route('criteriaweights.index')->with('success', 'Criteria deleted successfully');
    }
}
