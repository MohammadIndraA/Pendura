<?php

namespace App\Http\Controllers;

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

        $udara = Udara::all();
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
}
