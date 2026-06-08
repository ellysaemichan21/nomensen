<?php

namespace Database\Seeders;

use App\Models\Aboutme;
use App\Models\Admin;
use App\Models\Announcement;
use App\Models\Cooperation;
use App\Models\Facility;
use App\Models\Footer;
use App\Models\Greeting;
use App\Models\History;
use App\Models\Lecture;
use App\Models\News;
use App\Models\Rektor;
use App\Models\Student;
use App\Models\User;
use App\Models\Visimisi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class DummyDataSeeder extends Seeder
{
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        $user = User::first();
        if (!$user) {
            $user = User::create([
                'name' => 'Admin Test',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('password'),
            ]);
        }

        // Clean tables
        Aboutme::truncate();
        Admin::truncate();
        Announcement::truncate();
        Cooperation::truncate();
        Facility::truncate();
        Footer::truncate();
        Greeting::truncate();
        History::truncate();
        Lecture::truncate();
        News::truncate();
        Rektor::truncate();
        Student::truncate();
        Visimisi::truncate();

        // 1. Aboutme
        for ($i = 1; $i <= 5; $i++) {
            Aboutme::create([
                'content' => "Ini adalah konten profil universitas ke-$i yang berisi informasi detail tentang visi dan misi secara umum.",
                'image' => "about_$i.jpg",
            ]);
        }

        // 2. Admin
        for ($i = 1; $i <= 5; $i++) {
            Admin::create([
                'nama' => "Staf Admin $i",
                'nip' => "12345678$i",
                'jabatan' => "Bagian Tata Usaha $i",
                'image' => "admin_$i.jpg",
            ]);
        }

        // 3. Announcement
        for ($i = 1; $i <= 5; $i++) {
            Announcement::create([
                'title' => "Pengumuman Penting $i",
                'content' => "Isi pengumuman nomor $i: Segera kumpulkan berkas administrasi sebelum akhir bulan.",
                'users_id' => $user->id,
                'slug' => Str::slug("Pengumuman Penting $i"),
            ]);
        }

        // 4. Cooperation
        for ($i = 1; $i <= 5; $i++) {
            Cooperation::create([
                'image' => "logo_mitra_$i.png",
            ]);
        }

        // 5. Facility
        for ($i = 1; $i <= 5; $i++) {
            Facility::create([
                'content' => "Fasilitas Kampus $i: Ruangan ini dilengkapi dengan AC, Proyektor, dan jaringan WiFi cepat.",
                'image' => "fasilitas_$i.jpg",
            ]);
        }

        // 6. Footer (Biasanya cuma 1, tapi user minta 5 per resource)
        for ($i = 1; $i <= 5; $i++) {
            Footer::create([
                'image' => "footer_logo_$i.png",
                'link_instagram' => "https://instagram.com/nommensen_$i",
                'link_youtube' => "https://youtube.com/nommensen_$i",
                'link_linkedin' => "https://linkedin.com/company/nommensen_$i",
                'link_facebook' => "https://facebook.com/nommensen_$i",
                'alamat' => "Jl. Sutomo No. $i, Medan, Sumatera Utara",
                'email' => "info$i@nommensen.ac.id",
                'wa' => "08123456789$i",
                'link_gmaps' => "https://maps.google.com/?q=nommensen",
            ]);
        }

        // 7. Greeting
        for ($i = 1; $i <= 5; $i++) {
            Greeting::create([
                'content' => "Selamat datang di Universitas HKBP Nommensen. Kami berkomitmen memberikan pendidikan terbaik untuk masa depan Anda ($i).",
                'image' => "rektor_greeting_$i.jpg",
            ]);
        }

        // 8. History
        for ($i = 1; $i <= 5; $i++) {
            History::create([
                'content' => "Sejarah Universitas HKBP Nommensen dimulai pada tahun 1954 dengan semangat melayani bangsa... (Versi $i)",
                'image' => "history_$i.jpg",
            ]);
        }

        // 9. Lecture
        for ($i = 1; $i <= 5; $i++) {
            Lecture::create([
                'nama' => "Dosen Teladan $i, S.Kom., M.T.",
                'nidn' => "010203040$i",
                'pendidikan' => "S2 Teknik Informatika",
                'jabatan' => "Lektor",
                'email' => "dosen$i@gmail.com",
                'topik' => "Kecerdasan Buatan & Web Development",
                'image' => "dosen_$i.jpg",
            ]);
        }

        // 10. News
        for ($i = 1; $i <= 5; $i++) {
            News::create([
                'title' => "Berita Kampus Hari Ini $i",
                'content' => "Universitas HKBP Nommensen kembali meraih prestasi gemilang di tingkat nasional dalam ajang... ($i)",
                'image' => "berita_$i.jpg",
                'users_id' => $user->id,
                'slug' => Str::slug("Berita Kampus Hari Ini $i"),
            ]);
        }

        // 11. Rektor
        for ($i = 1; $i <= 5; $i++) {
            Rektor::create([
                'nama' => "Dr. Nama Rektor $i",
                'jabatan' => "Rektor / Wakil Rektor $i",
                'image' => "pimpinan_$i.jpg",
            ]);
        }

        // 12. Student
        for ($i = 1; $i <= 5; $i++) {
            Student::create([
                'namalengkap' => "Mahasiswa Baru Ke-$i",
                'namapanggilan' => "Maba $i",
                'email' => "student$i@gmail.com",
                'nomor_hp' => "08987654321$i",
                'jalur' => "Reguler",
                'image' => "maba_$i.jpg",
                'programstudi_1' => "Teknik Informatika",
                'programstudi_2' => "Sistem Informasi",
            ]);
        }

        // 13. Visimisi
        for ($i = 1; $i <= 5; $i++) {
            Visimisi::create([
                'visi' => "Menjadi universitas unggul di tingkat Asia pada tahun 2030... (Visi $i)",
                'misi' => "1. Menyelenggarakan pendidikan berkualitas... 2. Meningkatkan riset... ($i)",
                'image' => "visimisi_$i.jpg",
            ]);
        }
        Schema::enableForeignKeyConstraints();
    }
}
