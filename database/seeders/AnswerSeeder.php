<?php
// database/seeders/AnswerSeeder.php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    public function run()
    {
        DB::table('answers')->insert([
            [
                'question_id' => 1,
                'text' => 'Saya lebih fokus pada dunia luar daripada dunia dalam diri saya.',
                'value' => 'E',
                'created_at' => '2024-07-14 23:39:43',
                'updated_at' => '2024-07-14 23:39:43',
            ],
            [
                'question_id' => 1,
                'text' => 'Saya lebih fokus pada dunia dalam diri saya daripada dunia luar.',
                'value' => 'I',
                'created_at' => '2024-07-14 23:39:43',
                'updated_at' => '2024-07-14 23:39:43',
            ],
            [
                'question_id' => 2,
                'text' => 'Saya lebih suka bekerja dengan fakta dan detail konkret.',
                'value' => 'S',
                'created_at' => '2024-07-14 23:39:43',
                'updated_at' => '2024-07-14 23:39:43',
            ],
            [
                'question_id' => 2,
                'text' => 'Saya lebih suka mempertimbangkan konsep dan ide.',
                'value' => 'N',
                'created_at' => '2024-07-14 23:39:43',
                'updated_at' => '2024-07-14 23:39:43',
            ],
            [
                'question_id' => 3,
                'text' => 'Saya cenderung mengikuti perasaan dan nilai-nilai saya sendiri.',
                'value' => 'F',
                'created_at' => '2024-07-14 23:39:43',
                'updated_at' => '2024-07-14 23:39:43',
            ],
            [
                'question_id' => 3,
                'text' => 'Saya lebih memperhatikan logika dan fakta.',
                'value' => 'T',
                'created_at' => '2024-07-14 23:39:43',
                'updated_at' => '2024-07-14 23:39:43',
            ],
            [
                'question_id' => 4,
                'text' => 'Saya lebih suka merencanakan aktivitas saya daripada mengambil hal-hal sebagaimana adanya.',
                'value' => 'J',
                'created_at' => '2024-07-14 23:39:43',
                'updated_at' => '2024-07-14 23:39:43',
            ],
            [
                'question_id' => 4,
                'text' => 'Saya lebih suka mengambil hal-hal sebagaimana adanya daripada merencanakan aktivitas saya.',
                'value' => 'P',
                'created_at' => '2024-07-14 23:39:43',
                'updated_at' => '2024-07-14 23:39:43',
            ],
            [
                'question_id' => 5,
                'text' => 'Saya menemukan energi saya dari berinteraksi dengan orang banyak, bahkan jika itu melelahkan saya.',
                'value' => 'E',
                'created_at' => '2024-07-14 23:39:43',
                'updated_at' => '2024-07-14 23:39:43',
            ],
            [
                'question_id' => 5,
                'text' => 'Saya menemukan energi saya dari waktu yang saya habiskan sendirian atau dalam kelompok kecil.',
                'value' => 'I',
                'created_at' => '2024-07-14 23:39:43',
                'updated_at' => '2024-07-14 23:39:43',
            ],
            [
                'question_id' => 6,
                'text' => 'Saya suka membuat daftar dan membuat rencana daripada melompat ke sesuatu tanpa rencana yang jelas.',
                'value' => 'J',
                'created_at' => '2024-07-14 23:39:43',
                'updated_at' => '2024-07-14 23:39:43',
            ],
            [
                'question_id' => 6,
                'text' => 'Saya lebih suka improvisasi daripada mengikuti rencana yang ketat.',
                'value' => 'P',
                'created_at' => '2024-07-14 23:39:43',
                'updated_at' => '2024-07-14 23:39:43',
            ],
            [
                'question_id' => 7,
                'text' => 'Saya lebih suka memutuskan berdasarkan fakta dan bukti yang ada.',
                'value' => 'S',
                'created_at' => '2024-07-14 23:39:43',
                'updated_at' => '2024-07-14 23:39:43',
            ],
            [
                'question_id' => 7,
                'text' => 'Saya lebih suka memutuskan berdasarkan intuisi dan perasaan saya.',
                'value' => 'N',
                'created_at' => '2024-07-14 23:39:43',
                'updated_at' => '2024-07-14 23:39:43',
            ],
            [
                'question_id' => 8,
                'text' => 'Saya cenderung lebih sensitif terhadap perasaan orang lain daripada logika dan fakta.',
                'value' => 'F',
                'created_at' => '2024-07-14 23:39:43',
                'updated_at' => '2024-07-14 23:39:43',
            ],
            [
                'question_id' => 8,
                'text' => 'Saya lebih memperhatikan logika dan fakta daripada perasaan orang lain.',
                'value' => 'T',
                'created_at' => '2024-07-14 23:39:43',
                'updated_at' => '2024-07-14 23:39:43',
            ],
            [
                'question_id' => 9,
                'text' => 'Saya merasa nyaman dengan kepastian dan struktur dalam hidup saya.',
                'value' => 'J',
                'created_at' => '2024-07-14 23:39:43',
                'updated_at' => '2024-07-14 23:39:43',
            ],
            [
                'question_id' => 9,
                'text' => 'Saya merasa nyaman dengan fleksibilitas dan spontanitas dalam hidup saya.',
                'value' => 'P',
                'created_at' => '2024-07-14 23:39:43',
                'updated_at' => '2024-07-14 23:39:43',
            ],
            [
                'question_id' => 10,
                'text' => 'Saya cenderung berpikir lebih banyak tentang masa depan daripada masa lalu.',
                'value' => 'J',
                'created_at' => '2024-07-14 23:39:43',
                'updated_at' => '2024-07-14 23:39:43',
            ],
            [
                'question_id' => 10,
                'text' => 'Saya lebih memperhatikan pengalaman dan kehidupan saya saat ini daripada masa depan.',
                'value' => 'P',
                'created_at' => '2024-07-14 23:39:43',
                'updated_at' => '2024-07-14 23:39:43',
            ],
            [
                'question_id' => 11,
                'text' => 'Saya menemukan energi dari berinteraksi dengan orang banyak, bahkan jika itu melelahkan saya.',
                'value' => 'E',
                'created_at' => '2024-07-14 23:39:43',
                'updated_at' => '2024-07-14 23:39:43',
            ],
            [
                'question_id' => 11,
                'text' => 'Saya menemukan energi dari waktu yang saya habiskan sendirian atau dalam kelompok kecil.',
                'value' => 'I',
                'created_at' => '2024-07-14 23:39:43',
                'updated_at' => '2024-07-14 23:39:43',
            ],
            [
                'question_id' => 12,
                'text' => 'Saya lebih suka membuat daftar dan membuat rencana daripada melompat ke sesuatu tanpa rencana yang jelas.',
                'value' => 'J',
                'created_at' => '2024-07-14 23:39:43',
                'updated_at' => '2024-07-14 23:39:43',
            ],
            [
                'question_id' => 12,
                'text' => 'Saya lebih suka improvisasi daripada mengikuti rencana yang ketat.',
                'value' => 'P',
                'created_at' => '2024-07-14 23:39:43',
                'updated_at' => '2024-07-14 23:39:43',
            ],
            [
                'question_id' => 13,
                'text' => 'Saya lebih suka memutuskan berdasarkan fakta dan bukti yang ada.',
                'value' => 'S',
                'created_at' => '2024-07-14 23:39:43',
                'updated_at' => '2024-07-14 23:39:43',
            ],
            [
                'question_id' => 13,
                'text' => 'Saya lebih suka memutuskan berdasarkan intuisi dan perasaan saya.',
                'value' => 'N',
                'created_at' => '2024-07-14 23:39:43',
                'updated_at' => '2024-07-14 23:39:43',
            ],
            [
                'question_id' => 14,
                'text' => 'Saya lebih sensitif terhadap perasaan orang lain daripada logika dan fakta.',
                'value' => 'F',
                'created_at' => '2024-07-14 23:39:43',
                'updated_at' => '2024-07-14 23:39:43',
            ],
            [
                'question_id' => 14,
                'text' => 'Saya lebih memperhatikan logika dan fakta daripada perasaan orang lain.',
                'value' => 'T',
                'created_at' => '2024-07-14 23:39:43',
                'updated_at' => '2024-07-14 23:39:43',
            ],
            [
                'question_id' => 15,
                'text' => 'Saya merasa nyaman dengan kepastian dan struktur dalam hidup saya.',
                'value' => 'J',
                'created_at' => '2024-07-14 23:39:43',
                'updated_at' => '2024-07-14 23:39:43',
            ],
            [
                'question_id' => 15,
                'text' => 'Saya merasa nyaman dengan fleksibilitas dan spontanitas dalam hidup saya.',
                'value' => 'P',
                'created_at' => '2024-07-14 23:39:43',
                'updated_at' => '2024-07-14 23:39:43',
            ],
            [
                'question_id' => 16,
                'text' => 'Saya lebih suka berpikir tentang masa depan daripada masa lalu.',
                'value' => 'J',
                'created_at' => '2024-07-14 23:39:43',
                'updated_at' => '2024-07-14 23:39:43',
            ],
            [
                'question_id' => 16,
                'text' => 'Saya lebih memperhatikan pengalaman dan kehidupan saya saat ini daripada masa depan.',
                'value' => 'P',
                'created_at' => '2024-07-14 23:39:43',
                'updated_at' => '2024-07-14 23:39:43',
            ],
        ]);
    }
}
