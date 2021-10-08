<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Anym;
use Illuminate\Support\Facades\DB;


class anymseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anyms')->insert([
            'name' => 'Heri',
            'level' => 13,
            'amount' => 32,
        ]);
    }
}
