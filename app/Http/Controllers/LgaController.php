<?php

namespace App\Http\Controllers;

use App\Models\Lga;
use App\Models\AnnouncedLgaResult;
use Illuminate\Http\Request;

class LgaController extends Controller
{
    //
    public function lgaList()
    {
        $results = Lga::all();
        $data = [
            'results' => $results
        ];

        return view('pages.lgas', $data);
    }
    public function lgaResults($id)
    {
        $results = AnnouncedLgaResult::where('lga_name', $id)->get();
        $data = [
            'results' => $results
        ];
        return view('pages.lgaResults', $data);
    }
}
