<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alternative;
use App\Models\AlternativeScore;
use App\Models\CriteriaRating;
use App\Models\CriteriaWeight;
use Illuminate\Http\Request;

class AlternativeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scores = AlternativeScore::select(
            'alternativescores.id as id', 
            'alternatives.id as ida', 
            'criteriaweights.id as idw', 
            'criteriaratings.id as idr', 
            'alternatives.name as name', 
            'criteriaweights.name as criteria', 
            'criteriaratings.rating as rating', 
            'criteriaratings.description as description') 
        ->leftJoin('alternatives', 'alternatives.id', '=', 'alternativescores.alternative_id')
        ->leftJoin('criteriaweights', 'criteriaweights.id', '=', 'alternativescores.criteria_id')
        ->leftJoin('criteriaratings', 'criteriaratings.id', '=', 'alternativescores.rating_id')
        ->get();

        $alternatives = Alternative::get();

        $criteriaweights = CriteriaWeight::get();
        return view('pages.admin.alternative.index', compact('scores','alternatives','criteriaweights'))->with('i', 0);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $criteriaweights = CriteriaWeight::get();
        $criteriaratings = CriteriaRating::get();
        return view('pages.admin.alternative.create', compact('criteriaweights', 'criteriaratings'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $alt = new Alternative;
        $alt->name = $request->name;
        $alt->save();

        $criteriaweight = CriteriaWeight::get();
        foreach($criteriaweight as $cw) {
            $score =  new AlternativeScore();
            $score->alternative_id = $alt->id;
            $score->criteria_id = $cw->id;
            $score->rating_id = $request->input('criteria')[$cw->id];
            $score->save();
        }

        return redirect()->route('alternatives.index')
            ->with('success','Alternative created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alternative $alternative)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alternative $alternative)
    {
        $criteriaweights = CriteriaWeight::get();
        $criteriaratings = CriteriaRating::get();
        $alternativescores = AlternativeScore::where('alternative_id', $alternative->id)->get();
        return view('pages.admin.alternative.edit', compact('alternative','alternativescores', 'criteriaweights', 'criteriaratings'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alternative $alternative)

    {
       $scores = AlternativeScore::where('alternative_id', $alternative->id)->get();
       $criteriaweight = CriteriaWeight::get();
       foreach ($criteriaweight as $key => $cw) {
            $scores[$key]->rating_id = $request->input('criteria')[$cw->id];
            $scores[$key]->save();
       }
       return redirect()->route('alternatives.index')
        ->with('success','Alternative updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $scores = AlternativeScore::where('alternative.index')
            ->with('success', 'Alternative deleted successfully');
    }
}
