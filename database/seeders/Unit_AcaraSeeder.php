<?php

namespace Database\Seeders;

use App\Models\acara;
use App\Models\Unit;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Seeder;

class Unit_AcaraSeeder extends Seeder
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
                'username' => 'Humas',
                'password' => bcrypt('Humas123'),
                'keterangan' => 'lantai 2 gedung utama',
                'email_unit' => 'humas@gmail.com',
                'status'=>'1',
                'level'=>'userunit',
            ],
            [
                'nama_unit' => 'Informatika',
                'username' => 'Informatika',
                'password' => bcrypt('Informatika123'),
                'keterangan' => 'lantai 6 Gedung Utama',
                'email_unit' => 'informatika@gmail.com',
                'status'=>'1',
                'level'=>'userunit',
            ],
            [
                'nama_unit' => 'Multimedia dan Jaringan',
                'username' => 'Multimedia dan Jaringan',
                'password' => bcrypt('mulmed123'),
                'keterangan' => 'lantai 6 Gedung Utama',
                'email_unit' => 'muljar@gmail.com',
                'status'=>'1',
                'level'=>'userunit',

            ]
            ];
            foreach ($unit as $key => $value) {
                Unit::create($value);
            }
        $acara =[
            [
                'nama_acara' => 'PBL1',
                'keterangan' => 'lantai 1 gedung utama',
                'email_acara' => 'humas@gmail.com',
                'tgl_start'=> now(),
                'tgl_end'=> now(),
                'id_user_acara'=> '4',
                'status'=>'1',
            ],
            [
                'nama_acara' => 'PBL2',
                'keterangan' => 'lantai 2 gedung utama',
                'email_acara' => 'humas@gmail.com',
                'tgl_start'=> now(),
                'tgl_end'=> now(),
                'id_user_acara'=> '4',
                'status'=>'1',
            ],
            [
                'nama_acara' => 'PBL3',
                'keterangan' => 'lantai 3 gedung utama',
                'email_acara' => 'humas@gmail.com',
                'tgl_start'=> now(),
                'tgl_end'=> now(),
                'id_user_acara'=> '4',
                'status'=>'1',
            ],
            [
                'nama_acara' => 'PBL4',
                'keterangan' => 'lantai 4 gedung utama',
                'email_acara' => 'humas@gmail.com',
                'tgl_start'=> now(),
                'tgl_end'=> now(),
                'id_user_acara'=> '4',
                'status'=>'1',
            ],
            ];
            foreach ($acara as $key => $value) {
                acara::create($value);
            }
    }
}
