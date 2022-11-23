<?php

namespace Database\Seeders;

use App\Models\BukuTamuUnit;
use Illuminate\Database\Seeder;

class btamuunit extends Seeder
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
                'id_tamu_unit' => '4',
                'cek_in' => now(),
                'no_badge'=>'31',
                'id_user_ci'=>'4',
            ],
            [
                'id_tamu_unit' => '5',
                'cek_in' => now(),
                'no_badge'=>'12',
                'id_user_ci'=>'4',
            ],
            [
                'id_tamu_unit' => '6',
                'cek_in' => now(),
                'cek_out' => now(),
                'no_badge'=>'22',
                'id_user_ci'=>'4',
            ],
        ];
        foreach ($data as $key => $value) {
            BukuTamuUnit::create($value);
        }
    }
}
