<?php

namespace Database\Seeders;

use App\Models\acara;
use App\Models\Unit;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Seeder;

class Unit_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unit =[
            [
                'nama_unit' => 'Humas',
                'keterangan' => 'lantai 2 gedung utama',
                'email_unit' => 'humas@gmail.com',
            ],
            [
                'nama_unit' => 'Informatika',
                'keterangan' => 'lantai 6 Gedung Utama',
                'email_unit' => 'informatika@gmail.com',
            ],
            [
                'nama_unit' => 'Multimedia dan Jaringan',
                'keterangan' => 'lantai 6 Gedung Utama',
                'email_unit' => 'muljar@gmail.com',
            ]
            ];
            foreach ($unit as $key => $value) {
                Unit::create($value);
            }
        $acara =[
            [
                'nama_acara' => 'PBL',
                'keterangan' => 'lantai 2 gedung utama',
                'email_acara' => 'humas@gmail.com',
                'tgl_start'=> now(),
                'tgl_end'=> now(),
                'id_user_acara'=> '4',

            ],
            ];
            foreach ($acara as $key => $value) {
                acara::create($value);
            }
    }
}
