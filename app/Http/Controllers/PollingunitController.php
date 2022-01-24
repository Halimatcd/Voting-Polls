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
            'ward_id' => 'required',
            'lga_id' => 'required'

        ];
        // Validator validated required fields
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            print_r($validator->errors());
            die('ko le werk');
        }

        $pollingUnit = new PollingUnit();
        $pollingUnit->polling_unit_id = $request->input('polling_unit_id');
        $pollingUnit->ward_id = $request->input('ward_id');
        $pollingUnit->lga_id  = $request->input('lga_id');
        $pollingUnit->uniquewardid = $request->input('uniquewardid');
        $pollingUnit->polling_unit_number = $request->input('polling_unit_number');
        $pollingUnit->polling_unit_name = $request->input('polling_unit_name');
        $pollingUnit->polling_unit_description = $request->input('polling_unit_description');
        $pollingUnit->lat = $request->input('lat');
        $pollingUnit->long = $request->input('long');
        $pollingUnit->entered_by_user = $request->input('entered_by_user');
        $pollingUnit->user_ip_address = $request->input('user_ip-address');
        $pollingUnit->save();

        // flash('Inventory created sucessfully')->success();
        return redirect()->to('polling_units');
    }
    public function createNewPu()
    {
        return view('pages.newPu');
    }
}
