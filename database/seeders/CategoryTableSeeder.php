<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->insert([
            'category_name' => 'Mie Aceh',
            'slug' => 'mie_aceh',
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Nasi Goreng Aceh',
            'slug' => 'nasi_goreng',
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Roti Canai',
            'slug' => 'roti_canai',
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Martabak Aceh',
            'slug' => 'martabak',
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Nasi Briyani',
            'slug' => 'nasi_briyani',
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Minuman',
            'slug' => 'minuman',
        ]);
    }
}
