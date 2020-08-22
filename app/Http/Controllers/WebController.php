<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pricing;
use App\Features;


class WebController extends Controller
{
    //
    public function index()
    {
        // $pricing = Pricing::orderBy('price')->get();
        // return response([
        //     'success' => true,
        //     'message' => 'List Pricing',
        //     'data' => $pricing
        // ], 200);
        // $features = Features::orderBy('id')->get();
        // return response([
        //     'success' => true,
        //     'message' => 'List Pricing',
        //     'data' => $features
        // ], 200);
        $features = Pricing::with(['features'])->get();
        return response()->json(['data' => $features]);

        // $pricing = DB::table('pricings')
        // ->leftjoin('features', 'pricings.id', '=', 'features.pricings_id')
        // ->select('pricings.*', 'features.fname', 'features.fdesc')
        // ->get();
        // return response()->json($pricing, 200);
    }
    public function features()
    {
        $pricing = Pricing::orderBy('price')->get();
        return response([
            'success' => true,
            'message' => 'List Pricing',
            'data' => $pricing
        ], 200);

    }


}
