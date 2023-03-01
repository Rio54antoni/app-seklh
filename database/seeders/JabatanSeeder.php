<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Kepala Sekolah',
                'keterangan' => 'Bertanggung jawab atas seluruh kegiatan di sekolah dasar, mulai dari administrasi, kurikulum, hingga pengembangan program dan evaluasi.',
            ],
            [
                'nama' => 'Wakil Kepala Sekolah',
                'keterangan' => 'Membantu Kepala Sekolah dalam mengelola sekolah dan mengkoordinasikan seluruh kegiatan, serta bertanggung jawab atas beberapa program tertentu.',
            ],
            [
                'nama' => 'Koordinator Kurikulum',
                'keterangan' => 'Bertugas untuk mengembangkan kurikulum dan program pembelajaran, serta memantau dan mengevaluasi kegiatan pembelajaran di sekolah.',
            ],
            [
                'nama' => 'Guru Kelas',
                'keterangan' => 'Bertanggung jawab atas pembelajaran di kelas, memberikan materi pelajaran, dan melaksanakan evaluasi hasil belajar siswa.',
            ],
            [
                'nama' => 'Guru Wali Kelas',
                'keterangan' => 'Bertanggung jawab penuh atas seluruh murid didalam satu kelas yang dipilih',
            ],
            [
                'nama' => 'Karyawan Tata Usaha',
                'keterangan' => 'Bertanggung jawab atas administrasi dan tata usaha di sekolah, seperti keuangan, kepegawaian, dan pengarsipan.',
            ],
            [
                'nama' => 'Staf Kesehatan',
                'keterangan' => 'Bertugas untuk mengelola program kesehatan dan kebersihan lingkungan sekolah, serta memberikan layanan kesehatan kepada siswa dan staf sekolah.',
            ],
            [
                'nama' => 'Staf Kesiswaan',
                'keterangan' => 'Bertanggung jawab atas program kesiswaan, seperti kegiatan ekstrakurikuler, bimbingan dan konseling, serta pengembangan kepribadian siswa.',
            ],
        ];
        foreach ($data as $jabatan) {
            Jabatan::create($jabatan);
        }
    }
}
