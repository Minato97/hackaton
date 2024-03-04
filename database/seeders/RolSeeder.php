<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'rol'=>'Administrador'
            ],
            [
                'rol' =>'Paciente'
            ],
            [
                'rol' =>'Dependencia'
            ],
            [
                'rol' =>'Profesionista'
            ]
        ];
        DB::table('roles')->insert($data);
    }
}
