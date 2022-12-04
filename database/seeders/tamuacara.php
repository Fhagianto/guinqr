<?php

namespace Database\Seeders;

use App\Models\TamuAcara as ModelsTamuAcara;
use Illuminate\Database\Seeder;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class tamuacara extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id = IdGenerator::generate(['table' => 'tamu_acaras', 'length' => 15, 'prefix' =>"TA-".date('ymd')]);
        $data =[
            [
                'id_tamu_acara'=> $id,
                'nama' => 'nama 2 acara',
                'no_telpon' => '081257293485',
                'email' => 'email2acara@gmail.com',
                'id_acara'=>'1',
                'status'=>'1',
            ],
        ];
        foreach ($data as $key => $value) {
            ModelsTamuAcara::create($value);
        }
    }
}
