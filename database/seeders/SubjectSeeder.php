<?php

namespace Database\Seeders;

use App\Models\Subjek;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subjek::create(['kata_subjek' => 'test']);
    }
}
