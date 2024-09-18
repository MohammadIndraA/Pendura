<?php

namespace App\Http\Controllers;

use App\Events\aqiInformation;
use App\Events\get_content_aqi;
use App\Events\getContentAqi;
use App\Models\DataLokasi1;
use App\Models\DataLokasi10;
use App\Models\DataLokasi2;
use App\Models\DataLokasi3;
use App\Models\DataLokasi4;
use App\Models\DataLokasi5;
use App\Models\DataLokasi6;
use App\Models\DataLokasi7;
use App\Models\DataLokasi8;
use App\Models\DataLokasi9;
use App\Models\MQ09;
use App\Models\MQ135;
use App\Models\Udara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index(Request $request)
    {
        $udaras = Udara::orderBy('id', 'desc')->first();
        // dd($udaras);
        $mq_135 = $udaras['mq_135'];
        $mq_09 =$udaras['mq_09'];
        $mq_07 =$udaras['mq_07'];
        // $udara = ($mq_135 + $mq_07 + $mq_09) / 3;
        // // dd($udara);
        // $aqi = round($udara);
        $ke9 = $udaras['mq_09'];
        $ke135  = $udaras['mq_135'];
        $ke7 = $udaras['mq_07'];
        // dd($ke7[1]->mq_07 , $mq_07->mq_07);

        $aqi = round(collect([$udaras['mq_135'], $udaras['mq_09'], $udaras['mq_07']])->avg());

           if ($aqi >= 0 && $aqi <= 50) {
            $dataUdara = view('components.udara.baik', compact('aqi', 'ke9','ke7','ke135','mq_09','mq_135', 'mq_07'))->render();
           }
            if($aqi >= 51 && $aqi <= 100){
                $dataUdara = view('components.udara.sedang', compact('aqi', 'ke9','ke7','ke135','mq_09','mq_135', 'mq_07'))->render();

            }
            if($aqi >= 101 && $aqi <= 150) {
                $dataUdara = view('components.udara.sebagian-kelompok', compact('aqi', 'ke9','ke7','ke135','mq_09','mq_135', 'mq_07'))->render();

            }
            if($aqi >= 151 && $aqi <= 200){
            $dataUdara = view('components.udara.tidak-sehat', compact('aqi', 'ke9','ke7','ke135','mq_09','mq_135', 'mq_07'))->render();
            }

            if($aqi >= 201 && $aqi <= 300) {
            $dataUdara = view('components.udara.sangat-tidak-sehat', compact('aqi', 'ke9','ke7','ke135','mq_09','mq_135', 'mq_07'))->render();
            }
            if($aqi >= 301){
            $dataUdara = view('components.udara.bahaya', compact('aqi', 'ke9','ke7','ke135','mq_09','mq_135', 'mq_07'))->render();

            }
            getContentAqi::dispatch($dataUdara, $aqi, 'success');
            // return response()->json([
            //     'dataUdara' => $dataUdara,
            //     'data' => $aqi,
            //     'message' => 'success'
            // ]);
        // dd($ke2[1]->mq_09 , $mq_09->mq_09 );

        $udara = Udara::all();
        return view('front.main', compact('udaras', 'aqi', 'ke9','ke7','ke135', 'mq_09','mq_135', 'mq_07'));
    }

    public function getData(){

        // lokasi 1
        $lokasi1 = DataLokasi1::with('lokasi')->orderBy('id', 'desc')->first();
        $aqi1 = round(collect([$lokasi1['mq_135'], $lokasi1['mq_09'], $lokasi1['mq_07']])->avg());

        // lokasi 2
        $lokasi2 = DataLokasi2::with('lokasi')->latest()->first();
        $aqi2 = round(collect([$lokasi2['mq_135'], $lokasi2['mq_09'], $lokasi2['mq_07']])->avg());

        // lokasi 3
        $lokasi3 = DataLokasi3::with('lokasi')->orderBy('id', 'desc')->first();
        $aqi3 = round(collect([$lokasi3['mq_135'], $lokasi3['mq_09'], $lokasi3['mq_07']])->avg());
        
        // lokasi 4
        $lokasi4 = DataLokasi4::with('lokasi')->orderBy('id', 'desc')->first();
        $aqi4 = round(collect([$lokasi4['mq_135'], $lokasi4['mq_09'], $lokasi4['mq_07']])->avg());
       
        // lokasi 5
        $lokasi5 = DataLokasi5::with('lokasi')->orderBy('id', 'desc')->first();
        $aqi5 = round(collect([$lokasi5['mq_135'], $lokasi5['mq_09'], $lokasi5['mq_07']])->avg());
        
        // lokasi 6
        $lokasi6 = DataLokasi6::with('lokasi')->orderBy('id', 'desc')->first();
        $aqi6 = round(collect([$lokasi6['mq_135'], $lokasi6['mq_09'], $lokasi6['mq_07']])->avg());
        // dd($lokasi6);
       
        // lokasi 7
        $lokasi7 = DataLokasi7::with('lokasi')->orderBy('id', 'desc')->first();
        $aqi7 = round(collect([$lokasi7['mq_135'], $lokasi7['mq_09'], $lokasi7['mq_07']])->avg());
       
        // lokasi 8
        $lokasi8 = DataLokasi8::with('lokasi')->orderBy('id', 'desc')->first();
        $aqi8 = round(collect([$lokasi8['mq_135'], $lokasi8['mq_09'], $lokasi8['mq_07']])->avg());
       
        // lokasi 9
        $lokasi9 = DataLokasi9::with('lokasi')->orderBy('id', 'desc')->first();
        $aqi9 = round(collect([$lokasi9['mq_135'], $lokasi9['mq_09'], $lokasi9['mq_07']])->avg());
       
        // lokasi 10
        $lokasi10 = DataLokasi10::with('lokasi')->orderBy('id', 'desc')->first();
        $aqi10 = round(collect([$lokasi10['mq_135'], $lokasi10['mq_09'], $lokasi10['mq_07']])->avg());

        // $data = [
        //     [
        //         'aqi1' => $aqi1,
        //         'lokasi1' => $lokasi1,
        //     ],
        //     [
        //         'aqi2' => $aqi2,
        //         'lokasi2' => $lokasi2,
        //     ],
        //     [
        //         'aqi3' => $aqi3,
        //         'lokasi3' => $lokasi3,
        //     ],
        //     [
        //         'aqi4' => $aqi4,
        //         'lokasi4' => $lokasi4,
        //     ],
        //     [
        //         'aqi5' => $aqi5,
        //         'lokasi5' => $lokasi5,
        //     ],
        //     [
        //         'aqi6' => $aqi6,
        //         'lokasi6' => $lokasi6,
        //     ],
        //     [
        //         'aqi7' => $aqi7,
        //         'lokasi7' => $lokasi7,
        //     ],
        //     [
        //         'aqi8' => $aqi8,
        //         'lokasi8' => $lokasi8,
        //     ],
        //     [
        //         'aqi9' => $aqi9,
        //         'lokasi9' => $lokasi9,
        //     ],
        //     [
        //         'aqi10' => $aqi10,
        //         'lokasi10' => $lokasi10,
        //     ],
        // ];
        // Menggabungkan data aqi dan lokasi ke dalam satu array
        $data = [];

        // Loop untuk menggabungkan data aqi dan lokasi
        for ($i = 1; $i <= 10; $i++) {
            // Menggunakan array_push untuk menambahkan data ke dalam array $data
            array_push($data, [
                'aqi' => ${'aqi' . $i}, // Menggunakan variabel dinamis untuk aqi
                'lokasi' => ${'lokasi' . $i} // Menggunakan variabel dinamis untuk lokasi
            ]);
        }
        return response()->json([
            'data' => $data,
            'message' => 'success',
        ]);

    }
}
