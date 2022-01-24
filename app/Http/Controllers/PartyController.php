<?php

namespace App\Http\Controllers;

use App\Models\Party;
use Illuminate\Http\Request;

class PartyController extends Controller
{
    //
    public function partyList()
    {
        $results = Party::all();
        $data = [
            'results' => $results
        ];

        return view('pages.partyList', $data);
    }
}
