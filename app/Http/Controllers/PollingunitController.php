<?php

namespace App\Http\Controllers;

use App\Models\AnnouncedPuResult;
use App\Models\PollingUnit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class PollingunitController extends Controller
{
    public function getPollingUnits()
    {
        $results = PollingUnit::paginate(20);
        $data = [
            'results' => $results
        ];

        return view('pages.polling_units', $data);
    }
    public function getPollingResults()
    {

        $results = AnnouncedPuResult::orderBy('polling_unit_id', 'asc')->paginate(9);
        $data = [
            'results' => $results
        ];
        // print_r($results);
        return view('pages.scores', $data);
    }
    public static function newPu(request $request)
    {
        $rules = [
            'polling_unit_id' => 'required',
            'party_abbreviation' => 'required',
            'Party_score' => 'required'

        ];
        // Validator validated required fields
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            // print_r($validator->errors());
            die();
        }

        $pollingUnit = new AnnouncedPuResult();
        $pollingUnit->polling_unit_id = $request->input('polling_unit_id');
        $pollingUnit->party_abbreviation = $request->input('party_abbreviation');
        $pollingUnit->party_score  = $request->input('party_score');
        $pollingUnit->entered_by_user = $request->input('entered_by_user');
        $pollingUnit->user_ip_address = $request->input('user_ip_address');
        $pollingUnit->save();

        // flash('Inventory created sucessfully')->success();
        return view('pages.polling_units');
    }
    public function createNewPu()
    {
        return view('pages.newPu');
    }
}
