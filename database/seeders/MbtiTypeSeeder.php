<?php

namespace Database\Seeders;

use App\Models\MbtiType;
use Illuminate\Database\Seeder;

class MbtiTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $mbtiTypes = [
            [
                'type' => 'ISTJ',
                'description' => 'Penyelidik yang teliti, penuh dedikasi, dan sangat bertanggung jawab. Mereka cenderung konservatif dalam cara mereka memandang dunia dan mengikuti tradisi yang mapan. Mereka memprioritaskan kenyamanan dan keamanan, sangat peduli dengan kualitas dan keandalan dalam semua aspek kehidupan mereka.',
                'suitable_jobs' => 'Akuntan, Pengacara, Administrator',
                'suitable_education' => 'Akuntansi, Hukum, Manajemen',
            ],
            [
                'type' => 'ISFJ',
                'description' => 'Penjaga yang sangat peduli, setia, dan peka terhadap perasaan orang lain. Mereka cenderung bekerja keras untuk mendukung dan melindungi mereka yang mereka pedulikan. Mereka mempunyai rasa tanggung jawab yang tinggi dan siap membantu dalam situasi apapun.',
                'suitable_jobs' => 'Perawat, Guru, Konselor',
                'suitable_education' => 'Keperawatan, Pendidikan, Psikologi',
            ],
            [
                'type' => 'INFJ',
                'description' => 'Pengawas yang idealis, kreatif, dan peduli. INFJ cenderung memiliki visi yang kuat dan dedikasi untuk mewujudkan tujuan mereka, sering kali dengan cara yang unik. Mereka sangat peka terhadap perasaan orang lain dan memiliki kemampuan untuk membaca dan memahami dinamika sosial dengan baik.',
                'suitable_jobs' => 'Psikolog, Penulis, Seniman',
                'suitable_education' => 'Psikologi, Sastra, Seni',
            ],
            [
                'type' => 'INTJ',
                'description' => 'Penyelidik yang strategis, inovatif, dan logis. INTJ cenderung memiliki pandangan jauh ke depan dan fokus pada pencapaian tujuan jangka panjang. Mereka merupakan pemikir yang mandiri dan suka mengembangkan solusi untuk masalah yang rumit.',
                'suitable_jobs' => 'Ilmuwan, Insinyur, Strategis',
                'suitable_education' => 'Sains, Teknik, Manajemen Strategis',
            ],
            [
                'type' => 'ISTP',
                'description' => 'Ahli yang handal, praktis, dan penuh dengan rasa ingin tahu. ISTP cenderung hidup dalam momen dan mengambil keputusan berdasarkan fakta dan logika. Mereka mahir dalam menangani alat dan teknologi, serta memiliki kecakapan yang kuat dalam menyelesaikan masalah teknis.',
                'suitable_jobs' => 'Mekanik, Insinyur, Teknisi',
                'suitable_education' => 'Teknik, Teknologi, Ilmu Komputer',
            ],
            [
                'type' => 'ISFP',
                'description' => 'Pelaksana yang penuh kasih, kreatif, dan toleran. ISFP cenderung menghargai keindahan dan ekspresi pribadi dalam segala hal. Mereka menghormati nilai-nilai pribadi dan berkomitmen untuk menciptakan keharmonisan dalam kehidupan sehari-hari.',
                'suitable_jobs' => 'Desainer, Seniman, Pekerja Sosial',
                'suitable_education' => 'Desain, Seni, Pekerjaan Sosial',
            ],
            [
                'type' => 'INFP',
                'description' => 'Visioner yang kreatif, idealis, dan empatik. INFP cenderung memegang teguh nilai-nilai moral dan bermimpi untuk menciptakan dunia yang lebih baik. Mereka sangat peka terhadap emosi diri sendiri dan orang lain, sering kali mencari makna dalam segala sesuatu yang mereka lakukan.',
                'suitable_jobs' => 'Penulis, Konselor, Psikolog',
                'suitable_education' => 'Sastra, Psikologi, Konseling',
            ],
            [
                'type' => 'INTP',
                'description' => 'Arsitek yang inovatif, analitis, dan skeptis. INTP cenderung mengeksplorasi ide-ide baru dan membangun sistem logis untuk memahami dunia di sekitar mereka. Mereka suka memecahkan teka-teki intelektual dan mengembangkan teori baru.',
                'suitable_jobs' => 'Ilmuwan, Peneliti, Programmer',
                'suitable_education' => 'Sains, Penelitian, Ilmu Komputer',
            ],
            [
                'type' => 'ESTP',
                'description' => 'Pebisnis yang berani, praktis, dan energik. ESTP cenderung mengambil tindakan cepat dalam situasi yang menuntut, memanfaatkan keberanian dan keterampilan praktis mereka. Mereka mahir dalam menavigasi tantangan dan mencari kesempatan baru.',
                'suitable_jobs' => 'Pengusaha, Penjual, Penasihat Keuangan',
                'suitable_education' => 'Bisnis, Keuangan, Pemasaran',
            ],
            [
                'type' => 'ESFP',
                'description' => 'Pelawak yang ramah, antusias, dan ceria. ESFP cenderung menikmati momen dan berkontribusi untuk menciptakan atmosfer yang menyenangkan di sekeliling mereka. Mereka sangat responsif terhadap kebutuhan orang lain dan cenderung menjadi sosial dalam berbagai situasi.',
                'suitable_jobs' => 'Aktor, Musisi, Pekerja Sosial',
                'suitable_education' => 'Teater, Musik, Pekerjaan Sosial',
            ],
            [
                'type' => 'ENFP',
                'description' => 'Juru bicara yang ramah, bersemangat, dan kreatif. ENFP cenderung memiliki energi yang besar dan antusiasme untuk mencoba hal-hal baru. Mereka sangat peduli dengan pertumbuhan pribadi dan mencari makna dalam hubungan antarpribadi.',
                'suitable_jobs' => 'Public Relations, Konselor, Motivator',
                'suitable_education' => 'Komunikasi, Psikologi, Konseling',
            ],
            [
                'type' => 'ENTP',
                'description' => 'Visioner yang cerdik, inovatif, dan penuh semangat. ENTP cenderung memiliki kecerdasan tajam dan suka menantang status quo. Mereka berbakat dalam mengembangkan ide-ide baru dan menemukan solusi kreatif untuk masalah yang kompleks.',
                'suitable_jobs' => 'Pengusaha, Penasihat Hukum, Analis',
                'suitable_education' => 'Bisnis, Hukum, Ekonomi',
            ],
            [
                'type' => 'ESTJ',
                'description' => 'Pengusaha yang praktis, langsung, dan penuh dengan rasa tanggung jawab. ESTJ cenderung menghargai disiplin dan keteraturan dalam kehidupan mereka. Mereka efisien dalam mengelola waktu dan sumber daya untuk mencapai tujuan yang ditetapkan.',
                'suitable_jobs' => 'Manajer, Administrator, Militer',
                'suitable_education' => 'Manajemen, Administrasi, Ilmu Militer',
            ],
            [
                'type' => 'ESFJ',
                'description' => 'Pemimpin yang peduli, ramah, dan bertanggung jawab. ESFJ cenderung berorientasi pada orang lain dan senang memberikan bantuan kepada mereka yang membutuhkan. Mereka memprioritaskan hubungan dan keharmonisan dalam kelompok sosial mereka.',
                'suitable_jobs' => 'Guru, Konselor, Perawat',
                'suitable_education' => 'Pendidikan, Konseling, Keperawatan',
            ],
            [
                'type' => 'ENFJ',
                'description' => 'Guru yang karismatik, peduli, dan visioner. ENFJ cenderung memimpin dengan contoh dan memotivasi orang lain untuk mencapai potensi terbaik mereka. Mereka sangat peka terhadap kebutuhan kelompok dan berkomitmen untuk menciptakan perubahan positif dalam masyarakat.',
                'suitable_jobs' => 'Guru, Pemimpin Organisasi, Konselor',
                'suitable_education' => 'Pendidikan, Psikologi, Administrasi Publik',
            ],
            [
                'type' => 'ENTJ',
                'description' => 'Marsupilami yang berani, logis, dan strategis. ENTJ cenderung memiliki visi jauh ke depan dan mencapai tujuan mereka dengan cara yang sistematis. Mereka terampil dalam mengorganisir dan memimpin orang lain menuju kesuksesan yang diinginkan.',
                'suitable_jobs' => 'Manajer, Eksekutif, Pengusaha',
                'suitable_education' => 'Manajemen, Bisnis, Administrasi',
            ],
        ];

        foreach ($mbtiTypes as $type) {
            MbtiType::create($type);
        }
    }
}
