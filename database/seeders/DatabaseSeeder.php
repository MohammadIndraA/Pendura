<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Udara;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();
        //  Udara::factory(30)->create();


        // udaras
        $startDate = Carbon::create(2024, 4, 1);
        $endDate = Carbon::create(2024, 5, 27);
        while ($startDate->lte($endDate)) {
            // Generate random minutes and seconds
            $randomMinutes = rand(1, 60);
            $randomSeconds = rand(1, 60);

            // Clone the start date and set random minutes and seconds
            $randomDateTime = $startDate->copy()->setTime(0, $randomMinutes, $randomSeconds);

            DB::table('udaras')->insert([
                'mq_135' =>  rand(40, 150),
                'mq_09' =>  rand(40, 150),
                'mq_07' =>  rand(40, 150),
                'timestamps' =>  $randomDateTime->toDateTimeString(),
                'created_at' => $randomDateTime->toDateTimeString(),
                'updated_at' => $randomDateTime->toDateTimeString(),
            ]);

            // Increment the date by one day
            $startDate->addDay();
        }
    



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

       
         // Set timezone to UTC
        //  $timezone = 'Asia/Jakarta';
         // Start and end dates
        //  $startDate = Carbon::create(2024, 5, 1, 0, 0, 0, $timezone);
        //  $endDate = Carbon::create(2024, 5, 31, 23, 0, 0, $timezone);
 
        //  $currentDate = $startDate;
 
         // Array to store batch insert data
    //      $data = [];
    //      $data1 = [];
 
    //      while ($startDate <= $endDate) {
    //         for ($hour = 6; $hour <= 17; $hour++) {
    //             // Generate 12 random data points for each hour
    //             for ($i = 0; $i < 12; $i++) {
    //                 $randomMinutes = rand(1, 60);
    //                 $randomSeconds = rand(1, 60);
        
    //                 $currentDate = $startDate->copy()->setTime($hour, $randomMinutes, $randomSeconds);
        
    //                 $data1[] = [
    //                     'mq_09' => rand(80, 110),
    //                     'mq_07' => rand(80, 110),
    //                     'mq_135' => rand(80, 110),
    //                     'timestamps' => $currentDate,
    //                     'created_at' => $currentDate,
    //                     'updated_at' => $currentDate,
    //                 ];
    //                 $data[] = [
    //                     'mq_09' => rand(80, 110),
    //                     'mq_07' => rand(80, 110),
    //                     'mq_135' => rand(80, 110),
    //                     'lokasi_id' => rand(1,10),
    //                     'created_at' => $currentDate,
    //                     'updated_at' => $currentDate,
    //                 ];
    //             }
    //         }
    //         // Increment the current date by one day
    //         $startDate->addDay();
    //     }
        
    //     // Batch insert into the database
    //     try {
    //         DB::table('udaras')->insert($data1);
    //         DB::table('data_lokasi1s')->insert($data);
    //         DB::table('data_lokasi2s')->insert($data);
    //         DB::table('data_lokasi3s')->insert($data);
    //         DB::table('data_lokasi4s')->insert($data);
    //         DB::table('data_lokasi5s')->insert($data);
    //         DB::table('data_lokasi6s')->insert($data);
    //         DB::table('data_lokasi7s')->insert($data);
    //         DB::table('data_lokasi8s')->insert($data);
    //         DB::table('data_lokasi9s')->insert($data);
    //         DB::table('data_lokasi10s')->insert($data);
    //     } catch (Exception $e) {
    //         // $query = DB::table('udaras')->toSql();
    //         // $bindings = DB::table('udaras')->getBindings();
    //         $query = DB::table('data_lokasi1s')->toSql();
    //         $bindings = DB::table('data_lokasi1s')->getBindings();
    //         // $query = DB::table('data_lokasi2s')->toSql();
    //         // $bindings = DB::table('data_lokasi2s')->getBindings();
    //         // $query = DB::table('data_lokasi3s')->toSql();
    //         // $bindings = DB::table('data_lokasi3s')->getBindings();
    //         // $query = DB::table('data_lokasi4s')->toSql();
    //         // $bindings = DB::table('data_lokasi4s')->getBindings();
    //         // $query = DB::table('data_lokasi5s')->toSql();
    //         // $bindings = DB::table('data_lokasi5s')->getBindings();
    //         // $query = DB::table('data_lokasi6s')->toSql();
    //         // $bindings = DB::table('data_lokasi6s')->getBindings();
    //         // $query = DB::table('data_lokasi7s')->toSql();
    //         // $bindings = DB::table('data_lokasi7s')->getBindings();
    //         // $query = DB::table('data_lokasi8s')->toSql();
    //         // $bindings = DB::table('data_lokasi8s')->getBindings();
    //         // $query = DB::table('data_lokasi9s')->toSql();
    //         // $bindings = DB::table('data_lokasi9s')->getBindings();
    //         // $query = DB::table('data_lokasi10s')->toSql();
    //         // $bindings = DB::table('data_lokasi10s')->getBindings();
    //         throw new \Illuminate\Database\QueryException($query, $bindings, $e);
    //     }
     }
    
    }
