<?php

namespace Database\Seeders;

use App\Models\QuestionType;
use Illuminate\Database\Seeder;

class QuestionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            ['name' => 'EI'],
            ['name' => 'SN'],
            ['name' => 'TF'],
            ['name' => 'JP'],
        ];

        foreach ($types as $type) {
            QuestionType::create($type);
        }

    }
}
