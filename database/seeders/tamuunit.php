<?php

namespace Database\Seeders;

use App\Models\TamuUnit as ModelsTamuUnit;
use Illuminate\Database\Seeder;

class tamuunit extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            [
                'nama' => 'nama 1',
                'no_telpon' => '081257293485',
                'email' => 'email1@gmail.com',
                'keperluan'=>'keperluan 1',
                'instansi'=>'PT/organisasi 1',
                'id_unit'=>'1',
                'tgl'=>now(),
                'status'=>'1',
            ],
            [
                'nama' => 'nama 2',
                'no_telpon' => '081257293485',
                'email' => 'email2@gmail.com',
                'keperluan'=>'keperluan 2',
                'instansi'=>'PT/organisasi 2',
                'id_unit'=>'2',
                'tgl'=>now(),
                'status'=>'1',
            ],
            [
                'nama' => 'nama 3',
                'no_telpon' => '081257293485',
                'email' => 'email3@gmail.com',
                'keperluan'=>'keperluan 3',
                'instansi'=>'PT/organisasi 3',
                'id_unit'=>'3',
                'tgl'=>now(),
                'status'=>'1',
            ],
            [
                'nama' => 'nama 4',
                'no_telpon' => '081257293485',
                'email' => 'email4@gmail.com',
                'keperluan'=>'keperluan 4',
                'instansi'=>'PT/organisasi 4',
                'id_unit'=>'1',
                'tgl'=>now(),
                'status'=>'2',
            ],
            [
                'nama' => 'nama 5',
                'no_telpon' => '081257293485',
                'email' => 'email5@gmail.com',
                'keperluan'=>'keperluan 5',
                'instansi'=>'PT/organisasi 5',
                'id_unit'=>'1',
                'tgl'=>now(),
                'status'=>'2',
            ],
            [
                'nama' => 'nama 6',
                'no_telpon' => '081257293485',
                'email' => 'email6@gmail.com',
                'keperluan'=>'keperluan 6',
                'instansi'=>'PT/organisasi 6',
                'id_unit'=>'1',
                'tgl'=>now(),
                'status'=>'2',
            ],
            [
                'nama' => 'nama 7',
                'no_telpon' => '081257293485',
                'email' => 'email7@gmail.com',
                'keperluan'=>'keperluan 7',
                'instansi'=>'PT/organisasi 7',
                'id_unit'=>'1',
                'tgl'=>now(),
                'status'=>'2',
            ],
            [
                'nama' => 'nama 8',
                'no_telpon' => '081257293485',
                'email' => 'email8@gmail.com',
                'keperluan'=>'keperluan 8',
                'instansi'=>'PT/organisasi 8',
                'id_unit'=>'1',
                'tgl'=>now(),
                'status'=>'2',
            ],
            [
                'nama' => 'nama 9',
                'no_telpon' => '081257293485',
                'email' => 'email9@gmail.com',
                'keperluan'=>'keperluan 9',
                'instansi'=>'PT/organisasi 9',
                'id_unit'=>'1',
                'tgl'=>now(),
                'status'=>'2',
            ],
            [
                'nama' => 'nama 10',
                'no_telpon' => '081257293485',
                'email' => 'email10@gmail.com',
                'keperluan'=>'keperluan 10',
                'instansi'=>'PT/organisasi 10',
                'id_unit'=>'1',
                'tgl'=>now(),
                'status'=>'2',
            ],
            [
                'nama' => 'nama 11',
                'no_telpon' => '081257293485',
                'email' => 'email11@gmail.com',
                'keperluan'=>'keperluan 11',
                'instansi'=>'PT/organisasi 11',
                'id_unit'=>'1',
                'tgl'=>now(),
                'status'=>'2',
            ],
            [
                'nama' => 'nama 12',
                'no_telpon' => '081257293485',
                'email' => 'email12@gmail.com',
                'keperluan'=>'keperluan 12',
                'instansi'=>'PT/organisasi 12',
                'id_unit'=>'1',
                'tgl'=>now(),
                'status'=>'2',
            ],
            ];
            foreach ($data as $key => $value) {
                ModelsTamuUnit::create($value);
            }
    }
}
