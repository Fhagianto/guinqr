<?php

namespace Database\Seeders;

use App\Models\BukuTamuAcara;
use Illuminate\Database\Seeder;

class btamuacara extends Seeder
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
                'id_tamu_acara' => 'TA-221204000001',
                'cek_in' => now(),
                'no_badge'=>'31',
                'id_user_ci'=>'4',
            ],
            [
                'id_tamu_acara' => 'TA-221204000002',
                'cek_in' => now(),
                'id_user_ci'=>'4',
            ],
            [
                'id_tamu_acara' => 'TA-221204000003',
                'cek_in' => now(),
                'no_badge'=>'1',
                'id_user_ci'=>'4',
            ],
        ];
        foreach ($data as $key => $value) {
            BukuTamuAcara::create($value);
        }
    }
}
