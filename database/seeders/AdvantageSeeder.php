<?php

namespace Database\Seeders;

use App\Models\Advantage;
use Illuminate\Database\Seeder;

class AdvantageSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['Lolos Seleksi ATS', 'Setiap template dirancang dengan struktur yang ramah terhadap sistem ATS (Applicant Tracking System) yang digunakan oleh mayoritas perusahaan saat ini. CV Anda tetap terbaca sempurna oleh mesin tanpa kehilangan sentuhan visual yang menarik. Ini berarti peluang Anda untuk lolos ke tahap wawancara jauh lebih besar — tanpa perlu khawatir soal format teknis.', 1],
            ['Dilirik Recruiter', 'Recruiter hanya membutuhkan waktu 6 detik untuk memutuskan apakah CV Anda layak dilirik lebih lanjut. Dengan tata letak profesional dan hierarki informasi yang jelas, CV Anda langsung menonjol di antara tumpukan lamaran lainnya. Anda tidak sekadar bersaing dengan isi pengalaman, tetapi juga dengan kesan pertama yang tak terlupakan.', 2],
            ['Standar Industri Terkini', 'Dunia rekrutmen terus berevolusi, dan template kami selalu diperbarui mengikuti standar HR terkini. CV Anda tidak akan terlihat usang atau ketinggalan zaman — tetap relevan di mata recruiter maupun sistem digital. Anda bisa melamar ke perusahaan mana pun dengan keyakinan bahwa format CV Anda sudah sesuai ekspektasi industri.', 3],
            ['Kesan Profesional Instan', 'Tidak perlu memiliki latar belakang desain grafis untuk menghasilkan CV yang terlihat profesional. Cukup masukkan data Anda, dan template akan mengatur semuanya secara otomatis — mulai dari tipografi, spacing, hingga hierarki visual. Personal branding Anda naik kelas dalam hitungan menit, tanpa perlu menyewa desainer.', 4],
            ['Peluang Karir Lebih Luas', 'CV yang dirancang dengan baik membuka akses ke lebih banyak kesempatan — termasuk perusahaan besar, startup bergengsi, hingga perusahaan multinasional. Jangan biarkan CV biasa-biasa saja menjadi penghalang antara Anda dan posisi impian. Setiap detail dalam template ini dirancang untuk membantu Anda bersaing di level mana pun.', 5],
            ['Percaya Diri Melamar', 'Ketika CV Anda sudah rapi dan profesional, Anda bisa melamar ke lebih banyak posisi tanpa rasa ragu. Tidak ada lagi drama revisi format di menit terakhir atau khawatir tampilan berantakan saat dibuka HRD. Fokus energi Anda sepenuhnya bisa diarahkan ke persiapan interview dan pengembangan diri, bukan soal teknis CV.', 6],
        ];

        foreach ($items as $item) {
            Advantage::create([
                'title' => $item[0],
                'description' => $item[1],
                'sort_order' => $item[2],
                'is_active' => true,
            ]);
        }
    }
}
