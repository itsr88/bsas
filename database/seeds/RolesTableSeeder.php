<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'id' => 1,
                'name' => 'Администратор',
            ],
            [
                'id' => 2,
                'name' => 'Проектировщик',
            ],
            [
                'id' => 3,
                'name' => 'Бухгалтер',
            ],
            [
                'id' => 4,
                'name' => 'Аудитор',
            ],
        ]);
    }
}
