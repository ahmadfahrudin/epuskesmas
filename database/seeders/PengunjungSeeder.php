<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Pengunjung;
use Carbon\Carbon;


class PengunjungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nik' => '2203304405506601',
                'nama' => 'Lionel Messi',
                'telepon' => '081000111222',
                'alamat' => 'Kalikajar, Wonosobo',
                'tgl_kunjung' => Carbon::now(),
                'poli_id' => '1'
            ],

            [
                'nik' => '2203304405506602',
                'nama' => 'Cristiano Ronaldo',
                'telepon' => '08100011133',
                'alamat' => 'Kertek, Wonosobo',
                'tgl_kunjung' => Carbon::now()->addDay(),
                'poli_id' => '4'
            ],

            [
                'nik' => '2203304405506603',
                'nama' => 'Neymar Jr',
                'telepon' => '081000111444',
                'alamat' => 'Kalibeber, Wonosobo',
                'tgl_kunjung' => Carbon::now()->addDay(3),
                'poli_id' => '3'
            ],

            [
                'nik' => '2203304405506604',
                'nama' => 'Kylian Mbappe',
                'telepon' => '081000111555',
                'alamat' => 'Kejajar, Wonosobo',
                'tgl_kunjung' => Carbon::now()->addDay(2),
                'poli_id' => '6'
            ],

            [
                'nik' => '2203304405506605',
                'nama' => 'Mohammed Salah',
                'telepon' => '081000111666',
                'alamat' => 'Selomerto, Wonosobo',
                'tgl_kunjung' => Carbon::now()->addDay(5),
                'poli_id' => '8'
            ],

            [
                'nik' => '2203304405506606',
                'nama' => 'Kevin De Bruyne',
                'telepon' => '081000111666',
                'alamat' => 'Garung, Wonosobo',
                'tgl_kunjung' => Carbon::now()->addDay(5),
                'poli_id' => '2'
            ],

            [
                'nik' => '2203304405506607',
                'nama' => 'Virgil van Dijk',
                'telepon' => '081000111666',
                'alamat' => 'Kalibawang, Wonosobo',
                'tgl_kunjung' => Carbon::now()->addDay(5),
                'poli_id' => '1'
            ],

            [
                'nik' => '2203304405506608',
                'nama' => 'Robert Lewandowski',
                'telepon' => '081000111666',
                'alamat' => 'Kepil, Wonosobo',
                'tgl_kunjung' => Carbon::now()->addDay(5),
                'poli_id' => '2'
            ],

            [
                'nik' => '2203304405506609',
                'nama' => 'Sergio Ramos',
                'telepon' => '081000111666',
                'alamat' => 'Leksono, Wonosobo',
                'tgl_kunjung' => Carbon::now()->addDay(5),
                'poli_id' => '8'
            ],

            [
                'nik' => '2203304405506610',
                'nama' => 'Manuel Neuer',
                'telepon' => '081000111666',
                'alamat' => 'Sapuran, Wonosobo',
                'tgl_kunjung' => Carbon::now()->addDay(5),
                'poli_id' => '4'
            ]
        ];

        Pengunjung::insert($data);
    }
}
