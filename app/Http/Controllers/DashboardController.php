<?php

namespace App\Http\Controllers;

use App\Models\DataLokasi1;
use App\Models\Udara;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // semua
        // $chart_mq135 = Udara::pluck('mq_135')->toArray();
        // $chart_mq09 = Udara::pluck('mq_09')->toArray();
        // $chart_mq07 = Udara::pluck('mq_07')->toArray();
        // $time = Udara::pluck('created_at')->map(function ($createdAt) {
        //     return $createdAt->format('Y-m-d'); // Extract date part in 'YYYY-MM-DD' format
        // })->toArray();

        // Mendapatkan tanggal hari ini dalam format 'Y-m-d'
        // $today = Carbon::today()->toDateString();

        // // Mengambil data hanya untuk hari ini
        // $chart_mq135 = DataLokasi1::whereDate('created_at', $today)->pluck('mq_135')->toArray();
        // $chart_mq09 = DataLokasi1::whereDate('created_at', $today)->pluck('mq_09')->toArray();
        // $chart_mq07 = DataLokasi1::whereDate('created_at', $today)->pluck('mq_07')->toArray();
        // $time = DataLokasi1::whereDate('created_at', $today)->pluck('created_at')->map(function ($createdAt) {
        //     return $createdAt->format('Y-m-d'); // Extract date part in 'YYYY-MM-DD' format
        // })->toArray();
        // Mendapatkan bulan dan tahun saat ini
            $currentMonth = Carbon::now()->month;
            $currentYear = Carbon::now()->year;

            // Mengambil data hanya untuk bulan dan tahun saat ini
            $chart_mq135 = Udara::whereMonth('created_at', $currentMonth)
                                ->whereYear('created_at', $currentYear)
                                ->pluck('mq_135')
                                ->toArray();

            $chart_mq09 = Udara::whereMonth('created_at', $currentMonth)
                                ->whereYear('created_at', $currentYear)
                                ->pluck('mq_09')
                                ->toArray();

            $chart_mq07 = Udara::whereMonth('created_at', $currentMonth)
                                ->whereYear('created_at', $currentYear)
                                ->pluck('mq_07')
                                ->toArray();

            $time = Udara::whereMonth('created_at', $currentMonth)
                            ->whereYear('created_at', $currentYear)
                            ->pluck('created_at')
                            ->map(function ($createdAt) {
                                return $createdAt->format('Y-m-d'); // Extract date part in 'YYYY-MM-DD' format
                            })
                            ->toArray();
        // persen
        // Contoh nilai awal dan akhir
        $nilai_awal_mq135 = $chart_mq135[0]; // Anggap ini adalah nilai awal
        $nilai_akhir_mq135 = $chart_mq135[count($chart_mq135) - 1]; // Anggap ini adalah nilai akhir

        // Menghitung perubahan nilai
        $perubahan_nilai_mq135 = $nilai_akhir_mq135 - $nilai_awal_mq135;

        // Menghitung persentase
        $persentase_mq135 = ($perubahan_nilai_mq135 / $nilai_awal_mq135) * 100;


        // Contoh nilai awal dan akhir
        $nilai_awal_mq09 = $chart_mq09[0]; // Anggap ini adalah nilai awal
        $nilai_akhir_mq09 = $chart_mq09[count($chart_mq09) - 1]; // Anggap ini adalah nilai akhir

        // Menghitung perubahan nilai
        $perubahan_nilai_mq09 = $nilai_akhir_mq09 - $nilai_awal_mq09;

        // Menghitung persentase
        $persentase_mq09 = ($perubahan_nilai_mq09 / $nilai_awal_mq09) * 100;



        // Contoh nilai awal dan akhir
        $nilai_awal_mq07 = $chart_mq07[0]; // Anggap ini adalah nilai awal
        $nilai_akhir_mq07 = $chart_mq07[count($chart_mq07) - 1]; // Anggap ini adalah nilai akhir

        // Menghitung perubahan nilai
        $perubahan_nilai_mq07 = $nilai_akhir_mq07 - $nilai_awal_mq07;

        // Menghitung persentase
        $persentase_mq07 = ($perubahan_nilai_mq07 / $nilai_awal_mq07) * 100;


        // aqi
        $udaras = Udara::orderBy('id', 'desc')->first();
        $chart_aqi = Udara::all();

        $aqi = round(($udaras['mq_135'] + $udaras['mq_09'] + $udaras['mq_07']) / 3);
        $aqi1 = round(($chart_aqi[0]['mq_135'] + $chart_aqi[0]['mq_09'] + $chart_aqi[0]['mq_07']) / 3);
          // Contoh nilai awal dan akhir
          $nilai_awal_aqi = $aqi1; // Anggap ini adalah nilai awal
          $nilai_akhir_aqi = $aqi; // Anggap ini adalah nilai akhir
  
          // Menghitung perubahan nilai
          $perubahan_nilai_aqi = $nilai_akhir_aqi - $nilai_awal_aqi;
  
          // Menghitung persentase
          $persentase_aqi = round(($perubahan_nilai_aqi / $nilai_awal_aqi) * 100);


        return view('dashboard.index', compact('persentase_aqi','aqi','chart_mq135','chart_mq09','chart_mq07','time','persentase_mq135','persentase_mq09','persentase_mq07'));
    }
    // public function front()
    // {
    //     // $udara = Udara::latest()->get();
    //     $udara = Udara::all();
    //     return view('front.main', compact('udara'));
    // }
}
