<?php

namespace App\Http\Controllers;

use App\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    //
    public function showHome()
    {
        return view('pages.home');
    }
    public function showDetails(Request $request)
    {

        $request->validate([
            'license' => 'required',
        ]);

        $response = Http::get('https://noditel.eu/api/vehicle-details?t=Dsf4H234BsdfsGERW6300t4HdgdfgbEFDr560GgerDFgre4rr9dF359cr23&regnr=' . $request->license);

        if ($response != "") {
            $response = json_decode($response);

            $drivstoffs = explode(',', $response->TEKN_DRIVST);
            $convertedDrivstoffs = "";
            if (count($drivstoffs) > 0) {
                foreach ($drivstoffs as $drivstoff) {
                    if ($convertedDrivstoffs === "") {
                        $convertedDrivstoffs = Response::TEKN_DRIVST[$drivstoff];
                    } else {
                        $convertedDrivstoffs += ","+Response::TEKN_DRIVST[$drivstoff];
                    }
                }
            }
            $response->TEKN_DRIVST = $convertedDrivstoffs;
            $response->TEKN_REG_F_G = date("j, M, Y", strtotime($response->TEKN_REG_F_G));
            $response->TEKN_REG_F_G_N = date("j, M, Y", strtotime($response->TEKN_REG_F_G_N));
            return view('pages.detail')->with('details', $response)->with('regnr', $request->license);
        } else {
            return back()->withErrors(['license' => 'No Record']);
        }

    }

}
