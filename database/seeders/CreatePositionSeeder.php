<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;

class CreatePositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Position::create([
            'position' => 'Senior HRD'
        ]);
        Position::create([
            'position' => 'HRD'
        ]);
    }
}
