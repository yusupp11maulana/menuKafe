<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriMenuSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('kategoriMenu')->insert([
            'namaKategori' => "Snack",
            'createdKategori' => Carbon::now()->isoFormat('YYYY-MM-DD H:m:s')
        ]);

        DB::table('kategoriMenu')->insert([
            'namaKategori' => "Main Course",
            'createdKategori' => Carbon::now()->isoFormat('YYYY-MM-DD H:m:s')
        ]);

        DB::table('kategoriMenu')->insert([
            'namaKategori' => "Coffee",
            'createdKategori' => Carbon::now()->isoFormat('YYYY-MM-DD H:m:s')
        ]);

        DB::table('kategoriMenu')->insert([
            'namaKategori' => "Smoothies",
            'createdKategori' => Carbon::now()->isoFormat('YYYY-MM-DD H:m:s')
        ]);

        DB::table('kategoriMenu')->insert([
            'namaKategori' => "Mocktail",
            'createdKategori' => Carbon::now()->isoFormat('YYYY-MM-DD H:m:s')
        ]);
    }
}
