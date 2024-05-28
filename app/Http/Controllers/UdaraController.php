<?php

namespace App\Http\Controllers;

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

class UdaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $udara = Udara::orderby('id', 'desc')->when($request->has('search') && $request->search != '', function ($query) use ($request) {
        //     $query->where('title', 'LIKE', '%' . $request->search . '%');
        // })
        // ->paginate(10);
        // $mq_135 = MQ135::orderBy('id', 'desc')->get();
        // $mq_09 = MQ09::orderBy('id', 'desc')->get();
        // $mq_07 = DB::table('mq_07')->orderBy('id', 'desc')->get();
        $udara = Udara::orderBy('id','desc')->paginate(10);
        if ($request->penempatan) {
            if ($request->penempatan == 1) {
               $udara = DataLokasi1::with(['lokasi'])->orderBy('id','desc')->paginate(100)->withQueryString();
            }
            if ($request->penempatan == 2) {
               $udara = DataLokasi2::with(['lokasi'])->orderBy('id','desc')->paginate(100)->withQueryString();
            }
            if ($request->penempatan == 3) {
               $udara = DataLokasi3::with(['lokasi'])->orderBy('id','desc')->paginate(100)->withQueryString();
            }
            if ($request->penempatan == 4) {
               $udara = DataLokasi4::with(['lokasi'])->orderBy('id','desc')->paginate(100)->withQueryString();
            }
            if ($request->penempatan == 5) {
               $udara = DataLokasi5::with(['lokasi'])->orderBy('id','desc')->paginate(100)->withQueryString();
            }
            if ($request->penempatan == 6) {
               $udara = DataLokasi6::with(['lokasi'])->orderBy('id','desc')->paginate(100)->withQueryString();
            }
            if ($request->penempatan == 7) {
               $udara = DataLokasi7::with(['lokasi'])->orderBy('id','desc')->paginate(100)->withQueryString();
            }
            if ($request->penempatan == 8) {
               $udara = DataLokasi8::with(['lokasi'])->orderBy('id','desc')->paginate(100)->withQueryString();
            }
            if ($request->penempatan == 9) {
               $udara = DataLokasi9::with(['lokasi'])->orderBy('id','desc')->paginate(100)->withQueryString();
            }
            if ($request->penempatan == 10) {
               $udara = DataLokasi10::with(['lokasi'])->orderBy('id','desc')->paginate(100)->withQueryString();
            }
        }
        return view('udara.index', compact('udara'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('udara.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mq_135 = $request->query('sensorco');
        $mq_09 = $request->query('sensorgas');
        $mq_07 = $request->query('gas');
        // Validate the inputs if necessary

        $data = new Udara([
            'mq_135' => $mq_135,
            'mq_09' => $mq_09,
            'mq_07' => $mq_07,
        ]);

        if ($data->save()) {
            return "Data Tersimpan";
        } else {
            return "Gagal Menyimpan data";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Udara  $udara
     * @return \Illuminate\Http\Response
     */
    public function show(Udara $udara)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Udara  $udara
     * @return \Illuminate\Http\Response
     */
    public function edit(Udara $udara)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Udara  $udara
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Udara $udara)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Udara  $udara
     * @return \Illuminate\Http\Response
     */
    public function destroy(Udara $udara)
    {
        //
    }

    public function sendData() {
        Udara::create([
            'mq_09' => getRandomFloat(0.48, 50.16),
            'mq_07' => getRandomFloat(321, 561),
            'mq_135' => getRandomFloat(18,20, 48.98),
        ]);
        DataLokasi1::create([
            'mq_09' => getRandomFloat(0.48, 50.16),
            'mq_07' => getRandomFloat(321, 561),
            'mq_135' => getRandomFloat(18,20, 48.98),
            'lokasi_id' => 1,
        ]);
        DataLokasi2::create([
            'mq_09' => getRandomFloat(0.48, 50.16),
            'mq_07' => getRandomFloat(321, 561),
            'mq_135' => getRandomFloat(18,20, 48.98),
            'lokasi_id' => 2,
        ]);
        DataLokasi3::create([
            'mq_09' => getRandomFloat(0.48, 50.16),
            'mq_07' => getRandomFloat(321, 561),
            'mq_135' => getRandomFloat(18,20, 48.98),
            'lokasi_id' => 3,
        ]);
        DataLokasi4::create([
            'mq_09' => getRandomFloat(0.48, 50.16),
            'mq_07' => getRandomFloat(321, 561),
            'mq_135' => getRandomFloat(18,20, 48.98),
            'lokasi_id' => 4,
        ]);
        DataLokasi5::create([
            'mq_09' => getRandomFloat(0.48, 50.16),
            'mq_07' => getRandomFloat(321, 561),
            'mq_135' => getRandomFloat(18,20, 48.98),
            'lokasi_id' => 5,
        ]);
        DataLokasi6::create([
            'mq_09' => getRandomFloat(0.48, 50.16),
            'mq_07' => getRandomFloat(321, 561),
            'mq_135' => getRandomFloat(18,20, 48.98),
            'lokasi_id' => 6,
        ]);
        DataLokasi7::create([
            'mq_09' => getRandomFloat(0.48, 50.16),
            'mq_07' => getRandomFloat(321, 561),
            'mq_135' => getRandomFloat(18,20, 48.98),
            'lokasi_id' => 7,
        ]);
        DataLokasi8::create([
            'mq_09' => getRandomFloat(0.48, 50.16),
            'mq_07' => getRandomFloat(321, 561),
            'mq_135' => getRandomFloat(18,20, 48.98),
            'lokasi_id' => 8,
        ]);
        DataLokasi9::create([
            'mq_09' => getRandomFloat(0.48, 50.16),
            'mq_07' => getRandomFloat(321, 561),
            'mq_135' => getRandomFloat(18,20, 48.98),
            'lokasi_id' => 9,
        ]);
        DataLokasi10::create([
            'mq_09' => getRandomFloat(0.48, 50.16),
            'mq_07' => getRandomFloat(321, 561),
            'mq_135' => getRandomFloat(18,20, 48.98),
            'lokasi_id' => 10,
        ]);
        return response()->json([
            'message' => 'success',
        ]);
    }
}
