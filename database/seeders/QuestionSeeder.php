<?php
namespace Database\Seeders;

use App\Models\Question;
use App\Models\QuestionType;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    public function run()
    {
        $questionTypes = QuestionType::all();

        $questions = [
            [
                'text' => 'Saya lebih fokus pada dunia luar daripada dunia dalam diri saya.',
                'question_type_id' => $questionTypes->where('name', 'EI')->first()->id,
            ],
            [
                'text' => 'Saya lebih suka bekerja dengan fakta dan detail konkret.',
                'question_type_id' => $questionTypes->where('name', 'SN')->first()->id,
            ],
            [
                'text' => 'Saya cenderung mengikuti perasaan dan nilai-nilai saya sendiri.',
                'question_type_id' => $questionTypes->where('name', 'TF')->first()->id,
            ],
            [
                'text' => 'Saya lebih suka merencanakan aktivitas saya daripada mengambil hal-hal sebagaimana adanya.',
                'question_type_id' => $questionTypes->where('name', 'JP')->first()->id,
            ],
            [
                'text' => 'Saya menemukan energi saya dari berinteraksi dengan orang banyak, bahkan jika itu melelahkan saya.',
                'question_type_id' => $questionTypes->where('name', 'EI')->first()->id,
            ],
            [
                'text' => 'Saya suka membuat daftar dan membuat rencana daripada melompat ke sesuatu tanpa rencana yang jelas.',
                'question_type_id' => $questionTypes->where('name', 'JP')->first()->id,
            ],
            [
                'text' => 'Saya lebih suka memutuskan berdasarkan fakta dan bukti yang ada.',
                'question_type_id' => $questionTypes->where('name', 'SN')->first()->id,
            ],
            [
                'text' => 'Saya cenderung lebih sensitif terhadap perasaan orang lain daripada logika dan fakta.',
                'question_type_id' => $questionTypes->where('name', 'TF')->first()->id,
            ],
            [
                'text' => 'Saya merasa nyaman dengan kepastian dan struktur dalam hidup saya.',
                'question_type_id' => $questionTypes->where('name', 'JP')->first()->id,
            ],
            [
                'text' => 'Saya cenderung berpikir lebih banyak tentang masa depan daripada masa lalu.',
                'question_type_id' => $questionTypes->where('name', 'JP')->first()->id,
            ],
            [
                'text' => 'Saya senang berpikir secara abstrak dan mempertimbangkan banyak kemungkinan.',
                'question_type_id' => $questionTypes->where('name', 'SN')->first()->id,
            ],
            [
                'text' => 'Saya lebih suka bekerja sendiri daripada dalam kelompok besar.',
                'question_type_id' => $questionTypes->where('name', 'EI')->first()->id,
            ],
            [
                'text' => 'Saya lebih suka memutuskan sesuatu dengan memperhatikan nilai-nilai dan kepentingan orang lain.',
                'question_type_id' => $questionTypes->where('name', 'TF')->first()->id,
            ],
            [
                'text' => 'Saya merasa terdorong untuk menyelesaikan tugas tepat waktu dan merencanakan dengan baik.',
                'question_type_id' => $questionTypes->where('name', 'JP')->first()->id,
            ],
            [
                'text' => 'Saya cenderung lebih fleksibel dan terbuka terhadap perubahan daripada kaku dan terstruktur.',
                'question_type_id' => $questionTypes->where('name', 'JP')->first()->id,
            ],
            [
                'text' => 'Saya lebih suka belajar dari pengalaman langsung daripada belajar dari teori dan konsep.',
                'question_type_id' => $questionTypes->where('name', 'SN')->first()->id,
            ],
        ];

        foreach ($questions as $question) {
            Question::create($question);
        }
    }
}
