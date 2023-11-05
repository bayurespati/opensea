<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('faqs')->insert([
            [
                'pertanyaan' => 'Pertanyaan 1',
                'jawaban' => 'Jawaban 1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'pertanyaan' => 'Pertanyaan 2',
                'jawaban' => 'Jawaban 2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'pertanyaan' => 'Pertanyaan 3',
                'jawaban' => 'Jawaban 3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'pertanyaan' => 'Pertanyaan 4',
                'jawaban' => 'Jawaban 4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'pertanyaan' => 'Pertanyaan 5',
                'jawaban' => 'Jawaban 5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'pertanyaan' => 'Pertanyaan 6',
                'jawaban' => 'Jawaban 6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'pertanyaan' => 'Pertanyaan 7',
                'jawaban' => 'Jawaban 7',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'pertanyaan' => 'Pertanyaan 8',
                'jawaban' => 'Jawaban 8',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'pertanyaan' => 'Pertanyaan 9',
                'jawaban' => 'Jawaban 9',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'pertanyaan' => 'Pertanyaan 10',
                'jawaban' => 'Jawaban 10',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
