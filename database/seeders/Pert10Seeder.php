<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Pert10Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Aboutme
        \App\Models\Aboutme::create([
            'content' => 'Universitas B-University adalah kampus unggulan yang berfokus pada teknologi dan bisnis masa depan. Kami menyediakan fasilitas modern dan tenaga pengajar profesional.',
            'image' => [
                'employeephoto/songhyekyo.jpeg',
                'employeephoto/kimhyeso.jpeg',
                'employeephoto/kimjiwon.jpeg'
            ]
        ]);

        // 2. Visimisi
        \App\Models\Visimisi::create([
            'visi' => 'Menjadi universitas terkemuka di Asia pada tahun 2030 yang menghasilkan lulusan berdaya saing global.',
            'misi' => '<ul><li>1. Menyelenggarakan pendidikan berkualitas.</li><li>2. Mengembangkan penelitian inovatif.</li><li>3. Melakukan pengabdian masyarakat.</li></ul>',
            'image' => [
                'employeephoto/henrycavill.jpeg',
                'employeephoto/tomhardy.jpeg'
            ]
        ]);

        // 3. History
        \App\Models\History::create([
            'content' => 'B-University didirikan pada tahun 1990 dengan visi awal untuk menyediakan pendidikan teknologi bagi masyarakat. Dari gedung kecil, kini berkembang menjadi kampus megah.',
            'image' => 'employeephoto/jasonstatham.jpeg'
        ]);

        // 4. Students
        $students = [
            [
                'namalengkap' => 'Alan Ritchson',
                'namapanggilan' => 'Alan',
                'email' => 'alan@example.com',
                'nomor_hp' => '081234567890',
                'jalur' => 'Reguler',
                'image' => 'employeephoto/alanritschon.jpeg',
                'programstudi_1' => 'Teknik Informatika',
                'programstudi_2' => 'Sistem Informasi'
            ],
            [
                'namalengkap' => 'Bae Suzy',
                'namapanggilan' => 'Suzy',
                'email' => 'suzy@example.com',
                'nomor_hp' => '081234567891',
                'jalur' => 'Beasiswa',
                'image' => 'employeephoto/baesuzy.png',
                'programstudi_1' => 'Manajemen',
                'programstudi_2' => 'Akuntansi'
            ],
            [
                'namalengkap' => 'Han So Hee',
                'namapanggilan' => 'Sohee',
                'email' => 'sohee@example.com',
                'nomor_hp' => '081234567892',
                'jalur' => 'Transfer',
                'image' => 'employeephoto/hansohee.jpeg',
                'programstudi_1' => 'Desain Komunikasi Visual',
                'programstudi_2' => 'Ilmu Komunikasi'
            ]
        ];

        foreach ($students as $student) {
            \App\Models\Student::create($student);
        }
    }
}
