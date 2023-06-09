<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("items")->insert([
            "name" => "ITEM 1",
            "id_menu" => 3
        ]);

        DB::table("items")->insert([
            "name" => "ITEM 2",
            "id_menu" => 3
        ]);

        DB::table("items")->insert([
            "name" => "ITEM 3",
            "id_menu" => 3
        ]);
    }
}
