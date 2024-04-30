<?php

namespace App\Http\Controllers;

use App\Models\MQ09;
use App\Models\MQ135;
use App\Models\Udara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index()
    {
        $udaras = Udara::orderBy('id', 'desc')->first();
        // dd($udaras);
        $mq_135 = $udaras['mq_135'];
        $mq_09 =$udaras['mq_09'];
        $mq_07 =$udaras['mq_07'];
        $udara = ($mq_135 + $mq_07 + $mq_09) / 3;
        // dd($udara);
        $aqi = round($udara);
        $ke9 = $udaras['mq_09'];
        $ke135  = $udaras['mq_135'];
        $ke7 = $udaras['mq_07'];
        // dd($ke7[1]->mq_07 , $mq_07->mq_07);

        // dd($ke2[1]->mq_09 , $mq_09->mq_09 );

        $udara = Udara::all();
        return view('front.main', compact('udaras', 'aqi', 'ke9','ke7','ke135', 'mq_09','mq_135', 'mq_07'));
    }
}
