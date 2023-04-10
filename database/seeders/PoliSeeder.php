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
        $poli = [
            ['nama' => 'Poli Anak'],
            ['nama' => 'Poli Bedah'],
            ['nama' => 'Poli Gigi'],
            ['nama' => 'Poli Kandungan'],
            ['nama' => 'Poli Mata'],
            ['nama' => 'Poli Umum'],
            ['nama' => 'Poli Penyakit Dalam'],
            ['nama' => 'Poli Saraf']
        ];
        
        Poli::insert($poli);
    }
}
