<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alternative;
use App\Models\AlternativeScore;
use App\Models\CriteriaWeight;
use Illuminate\Http\Request;

class RankController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
            'criteriaratings.description as description'
        )
            ->leftJoin('alternatives', 'alternatives.id', '=', 'alternativescores.alternative_id')
            ->leftJoin('criteriaweights', 'criteriaweights.id', '=', 'alternativescores.criteria_id')
            ->leftJoin('criteriaratings', 'criteriaratings.id', '=', 'alternativescores.rating_id')
            ->get();

        // duplicate scores object to get rating value later,
        // because any call to $scores object is pass by reference
        // clone, replica, tobase didnt work
        $cscores = AlternativeScore::select(
            'alternativescores.id as id',
            'alternatives.id as ida',
            'criteriaweights.id as idw',
            'criteriaratings.id as idr',
            'alternatives.name as name',
            'criteriaweights.name as criteria',
            'criteriaratings.rating as rating',
            'criteriaratings.description as description'
        )
            ->leftJoin('alternatives', 'alternatives.id', '=', 'alternativescores.alternative_id')
            ->leftJoin('criteriaweights', 'criteriaweights.id', '=', 'alternativescores.criteria_id')
            ->leftJoin('criteriaratings', 'criteriaratings.id', '=', 'alternativescores.rating_id')
            ->get();



        $alternatives = Alternative::get();

        $criteriaweights = CriteriaWeight::get();

        // Normalization
        foreach ($alternatives as $a) {
            // Get all scores for each alternative id
            $afilter = $scores->where('ida', $a->id)->values()->all();
            // Loop each criteria
            foreach ($criteriaweights as $icw => $cw) {
                // Get all rating value for each criteria
                $rates = $cscores->map(function ($val) use ($cw) {
                    if ($cw->id == $val->idw) {
                        return $val->rating;
                    }
                })->toArray();

                // array_filter for removing null value caused by map,
                // array_values for reiindex the array
                $rates = array_values(array_filter($rates));

                if ($cw->type == 'benefit') {
                    $result = $afilter[$icw]->rating / max($rates);
                    $msg = 'rate ' . $afilter[$icw]->rating . ' max ' . max($rates) . ' res ' . $result;
                } elseif ($cw->type == 'cost') {
                    $result = min($rates) / $afilter[$icw]->rating;
                }
                $result *= $cw->weight;
                $afilter[$icw]->rating = round($result, 2);
            }
        }

        return view('pages.admin.rank', compact('scores', 'alternatives', 'criteriaweights'))->with('i', 0);
    }

    // public function downloadpdf(){
    //     $data = rank::all();

    //     view()->share('data', $data);
    //     return 'berhasil';
    // }

    // public function downloadpdf(){
    //     $data = rank::limit(100)->get();
    //     $pdf = PDF::loadView('rank-pdf',compact('data'));
    //     $pdf->setPaper('A4', 'potrait');
    //     return $pdf->stream('rank-pdf'); 
    // }
}

// {
//     public function index(Request $request)
//     {
//         $scores = AlternativeScore::select(
//             'alternativescores.id as id',
//             'alternatives.id as ida',
//             'criteriaweights.id as idw',
//             'criteriaratings.id as idr',
//             'alternatives.name as name',
//             'criteriaweights.name as criteria',
//             'criteriaratings.rating as rating',
//             'criteriaratings.description as description'
//         )
//             ->leftJoin('alternatives', 'alternatives.id', '=', 'alternativescores.alternative_id')
//             ->leftJoin('criteriaweights', 'criteriaweights.id', '=', 'alternativescores.criteria_id')
//             ->leftJoin('criteriaratings', 'criteriaratings.id', '=', 'alternativescores.rating_id')
//             ->get();

//         $cscores = AlternativeScore::select(
//             'alternativescores.id as id',
//             'alternatives.id as ida',
//             'criteriaweights.id as idw',
//             'criteriaratings.id as idr',
//             'alternatives.name as name',
//             'criteriaweights.name as criteria',
//             'criteriaratings.rating as rating',
//             'criteriaratings.description as description'
//         )
//             ->leftJoin('alternatives', 'alternatives.id', '=', 'alternativescores.alternative_id')
//             ->leftJoin('criteriaweights', 'criteriaweights.id', '=', 'alternativescores.criteria_id')
//             ->leftJoin('criteriaratings', 'criteriaratings.id', '=', 'alternativescores.rating_id')
//             ->get();
        
//         $alternatives = Alternative::get();

//         $criteriaweights = CriteriaWeight::get();

//         foreach ($alternatives as $a) {

//             $afilter = $scores->where('ida', $a->id)->values()->all();

//             foreach ($criteriaweights as $icw => $cw) {

//                 $rates = $cscores->map(function ($val) use ($cw) {
//                     if ($cw->id == $val->idw) {
//                         return $val->rating;
//                     }
//                 })->toArray();

//                 $rates = array_values(array_filter($rates));

//                 if ($cw->type == 'benefit') {
//                     $result = $afilter[$icw]->rating / max($rates);
//                     $msg = 'rate' . $afilter[$icw]->rating . ' max ' . max($rates) . ' res ' . $result;
//                 }elseif ($cw->type == 'cost') {
//                     $result = min($rates) / $afilter[$icw]->rating;
//                 }
//                 $result *= $cw->weight;
//                 $afilter[$icw]->rating = round($result, 2);
//             }
//         }

//         return view('pages.admin.rank', compact('scores', 'alternatives','criteriaweights'))->with('i', 0);
//     }
// }
