<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Poli;

class PoliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Poli::create(['nama' => 'Poli Anak']);
        Poli::create(['nama' => 'Poli Bedah']);
        Poli::create(['nama' => 'Poli Gigi']);
        Poli::create(['nama' => 'Poli Kandungan']);
        Poli::create(['nama' => 'Poli Mata']);
        Poli::create(['nama' => 'Poli Umum']);
        Poli::create(['nama' => 'Poli Penyakit Dalam']);
        Poli::create(['nama' => 'Poli Saraf']);
    }
}
