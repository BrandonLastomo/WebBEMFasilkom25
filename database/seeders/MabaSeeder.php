<?php

namespace Database\Seeders;

use App\Models\Maba;
use Illuminate\Database\Seeder;

class MabaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Maba::factory()->create();
    }
}
