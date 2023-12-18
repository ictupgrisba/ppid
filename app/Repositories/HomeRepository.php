<?php

namespace App\Repositories;

use Illuminate\Support\Collection;

class HomeRepository
{
    function listOfDisclaimers(): Collection|array
    {
        return [
            [
                "headline" => "services",
                "title" => "waktu pelayanan",
                "body" => "Pukul 08:00 sd 17:00 WIB",
                "img_url" => "assets/img/blog-1.jpg",
                "time" => "Senin - Jumat:" // nullable
            ],
            [
                "headline" => "informations",
                "title" => "informasi Publik",
                "body" => "Informasi publik bersifat <b>Terbuka</b> dan dapat diakses oleh setiap Pangguna Informasi Publik",
                "img_url" => "assets/img/blog-2.jpg",
                "time" => null
            ],
            [
                "headline" => "payments",
                "title" => "biaya layanan",
                "body" => "biaya layanan informasi publik adalah <b>GRATIS</b> kecuali biaya pengiriman, penggandaan dokumen atau media penyimpanan dibebankan kepada pemohon",
                "img_url" => "assets/img/blog-3.jpg",
                "time" => null
            ],
        ];
    }

    function listOfServices(): Collection|array
    {
        return [
            [
                "icon" => "fa-user",
                "title" => "profil ppid",
                "detail_url" => "/profil",
                "body" => "Pejabat Pengelola Informasi dan Dokumentasi" // nullable
            ],
            [
                "icon" => "fa-envelope",
                "title" => "dip",
                "detail_url" => "/home-detail/iframe",
                "detail_data" => asset("assets/pdf/Placeholder.pdf"),
                "body" => "Daftar informasi Publik yang sudah dimutahirkan",
            ],
            [
                "icon" => "fa-book",
                "title" => "standar pelayanan",
                "detail_url" => "/home-detail/table-tile",
                "detail_data" => json_encode($this->dataOfServicesStandard()),
                "body" => "Pelayanan yang sudah distandarisasi"
            ],
            [
                "icon" => "fa-edit",
                "title" => "formulir online",
                "detail_url" => "/home-detail/row-card",
                "detail_data" => json_encode([
                    [
                        "title" => "Formulir Permohonan Informasi",
                        "cover_url" => asset("assets/img/project-4.jpg"),
                        "detail_data" => "https://docs.google.com/forms/d/e/1FAIpQLSe06HQ5eEdY96SmtKIf7nSnoKoLXKmltaoL65_2uckPkZnXXg/viewform?embedded=true",
                        "detail_url" => "/home-detail/iframe",
                    ],
                    [
                        "title" => "Formulir Pengajuan Keberatan",
                        "cover_url" => asset("assets/img/project-5.jpg"),
                        "detail_data" => "https://docs.google.com/forms/d/e/1FAIpQLSe06HQ5eEdY96SmtKIf7nSnoKoLXKmltaoL65_2uckPkZnXXg/viewform?embedded=true",
                        "detail_url" => "/home-detail/iframe",
                    ],
                    [
                        "title" => "Formulir Survei Layanan Informasi",
                        "cover_url" => asset("assets/img/project-6.jpg"),
                        "detail_data" => "https://docs.google.com/forms/d/e/1FAIpQLSe06HQ5eEdY96SmtKIf7nSnoKoLXKmltaoL65_2uckPkZnXXg/viewform?embedded=true",
                        "detail_url" => "/home-detail/iframe",
                    ],
                ]),
                "body" => "Formulir online"
            ],
            [
                "icon" => "fa-bullhorn",
                "title" => "pelayanan informasi publik",
                "detail_url" => "/home-detail/table-tile",
                "detail_data" => json_encode($this->dataOfServicePublicInformations()),
                "body" => "pelayanan informasi publik"
            ],
            [
                "icon" => "fa-lock",
                "title" => "informasi yang dikecualikan",
                "detail_url" => "/home-detail/iframe",
                "detail_data" => asset("assets/pdf/Placeholder.pdf"),
                "body" => "informasi yang dikecualikan"
            ],
            /*[
                 "icon" => "fa-wheelchair",
                 "title" => "layanan disabilitas",
                 "detail_url" => "https://upgrisba.ac.id",
                 "body" => null
            ],*/
        ];
    }

    function listOfPublicInformations(): Collection|array
    {
        return [
            [
                "title" => "Informasi Yang Wajib",
                "body" => "Disediakan dan Dimumkan Secara Berkala",
                "img_url" => "assets/img/project-1.jpg",
                "detail_url" => "https://upgrisba.ac.id"
            ],
            [
                "title" => "Informasi Yang Wajib",
                "body" => "Tersedia Setiap Saat",
                "img_url" => "assets/img/project-2.jpg",
                "detail_url" => "https://upgrisba.ac.id"
            ],
            [
                "title" => "Informasi Yang Wajib",
                "body" => "Disediakan dan Diumumkan secara Serta Merta",
                "img_url" => "assets/img/project-3.jpg",
                "detail_url" => "https://upgrisba.ac.id"
            ],
            [
                "title" => "Informasi Publik",
                "body" => "Regulasi Pengelolaan Informasi Publik",
                "img_url" => "assets/img/project-4.jpg",
                "detail_url" => "https://upgrisba.ac.id"
            ],
        ];
    }

    function listOfInformations(): Collection|array
    {
        return [
            "maklumat_url" => "https://via.placeholder.com/150",
            "data" => [
                [
                    "detail_url" => "https://upgrisba.ac.id",
                    "body" => "Surat Edaran Komisi Informasi Pusat tentang Pelayanan Informasi dalam Masa Darurat Kesehatan Akibat COVID-19",
                ],
                [
                    "detail_url" => "https://upgrisba.ac.id",
                    "body" => "Struktur Organisasi",
                ],
                [
                    "detail_url" => "https://upgrisba.ac.id",
                    "body" => "Tugas dan Fungsi PPID",
                ],
                [
                    "detail_url" => "https://upgrisba.ac.id",
                    "body" => "Laporan Layanan Informasi Publik",
                ],
                [
                    "detail_url" => "https://upgrisba.ac.id",
                    "body" => "Kalender Akademik UPGRISBA",
                ],
                [
                    "detail_url" => "https://upgrisba.ac.id",
                    "body" => "Peraturan mengenai Keterbukaan Informasi Publik",
                ],
                [
                    "detail_url" => "https://upgrisba.ac.id",
                    "body" => "Penanganan Sengket Informasi Publik",
                ],
            ]
        ];
    }

    function dataOfPolicy(): array
    {
        return [
            "cover_url" => "https://ppid.unp.ac.id/wp-content/uploads/2020/02/hukum.jpg",
            "data" => [
                [
                    "body" => "Peraturan Menteri Pendidikan Dan Kebudayaan Republik Indonesia <a>Nomor 2 Tahun 2020</a> Tentang Tata Cara Pelaksanaan Uji Kompetensi Mahasiswa Bidang Kesehatan (Jenis : Informasi Setiap Saat)",
                    "file_url" => "assets/img/project-1.pdf", // nullable
                    "detail_url" => "https://upgrisba.ac.id", // nullable
                    "children" => null // nullable
                ],
                [
                    "body" => "Peraturan Menteri Pendidikan Dan Kebudayaan Republik Indonesia <a>Nomor 3 Tahun 2020</a> Tentang Standar Nasional Pendidikan Tinggi (Jenis : Informasi Setiap Saat)",
                    "file_url" => "assets/img/project-1.pdf", // nullable
                    "detail_url" => "https://upgrisba.ac.id", // nullable
                    "children" => null
                ],
                [
                    "body" => "Peraturan Menteri Pendidikan Dan Kebudayaan Republik Indonesia Nomor 5 Tahun 2020 Tentang Akreditasi Program Studi Dan Perguruan Tinggi (Jenis : Informasi Setiap Saat)",
                    "file_url" => "assets/img/project-1.pdf", // nullable
                    "detail_url" => "https://upgrisba.ac.id", // nullable
                    "children" => null
                ],
                [
                    "body" => "Peraturan Menteri Pendidikan Dan Kebudayaan Republik Indonesia Nomor 6 Tahun 2020 Tentang Penerimaan Mahasiswa Baru Program Sarjana Pada Perguruan Tinggi Negeri (Jenis : Informasi Setiap Saat)",
                    "file_url" => "assets/img/project-1.pdf", // nullable
                    "detail_url" => "https://upgrisba.ac.id", // nullable
                    "children" => null
                ],
                [
                    "body" => "Peraturan Menteri Pendidikan Dan Kebudayaan Republik Indonesia Nomor 7 Tahun 2020 Tentang Pendirian, Perubahan, Pembubaran Perguruan Tinggi Negeri, Dan Pendirian, Perubahan, Pencabutan Izin Perguruan Tinggi Swasta (Jenis : Informasi Setiap Saat)",
                    "file_url" => "assets/img/project-1.pdf", // nullable
                    "detail_url" => "https://upgrisba.ac.id", // nullable
                    "children" => null
                ],
                [
                    "body" => "Pedoman Pengelolaan Kepegawaian",
                    "file_url" => null,
                    "detail_url" => null,
                    "children" => [
                        [
                            "body" => "Permenristekdikti Nomor 98 Tahun 2016, Tentang Pemberian Kuasa dan Delegasi Wewenang Pelaksanaan Kegiatan Administrasi Kepegawaian Kepada Pejabat Tertentu di Lingkungan Kemenristekdikti",
                            "file_url" => "assets/img/project-1.pdf",
                            "detail_url" => "https://upgrisba.ac.id",
                            "children" => null
                        ],
                        [
                            "body" => "Permenristekdikti Nomor 8 Tahun 2018, Tata Cara Pengangkatan Pegawai Negeri Sipil dalam Jabatan Fungsional Dosen melalui Penyesuaian atau Impasing",
                            "file_url" => "assets/img/project-1.pdf",
                            "detail_url" => "https://upgrisba.ac.id",
                            "children" => null
                        ],
                        [
                            "body" => "Permenristekdikti Nomor 38 Tahun 2016, Tentang Tata Cara Pengangkatan dan Pemberhentian Dosen dan Tenaga Kependidikan sebagai Pegawai Pemerintah dengan Perjanjian Kerja",
                            "file_url" => "assets/img/project-1.pdf",
                            "detail_url" => "https://upgrisba.ac.id",
                            "children" => null
                        ],
                        [
                            "body" => "Permenristekdikti Nomor 14 Tahun 2019, Tentang Pelaksanaan Pemberian Tunjangan Kinerja Pegawai di Lingkungan Kemenristekdikti",
                            "file_url" => "assets/img/project-1.pdf",
                            "detail_url" => "https://upgrisba.ac.id",
                            "children" => null
                        ],
                        [
                            "body" => "Permenristekdikti Nomor 19 Tahun 2017, Tentang Pengangkatan Pemberhentian Pemimpin PTN",
                            "file_url" => "assets/img/project-1.pdf",
                            "detail_url" => "https://upgrisba.ac.id",
                            "children" => null
                        ],
                        [
                            "body" => "Permenristekdikti Nomor 91 Tahun 2017, Tentang Perpindahan Dosen dan Alih Tugas PNS Non Dosen menjadi Dosen",
                            "file_url" => "assets/img/project-1.pdf",
                            "detail_url" => "https://upgrisba.ac.id",
                            "children" => null
                        ]
                    ]
                ]
            ]
        ];
    }

    function dataOfAspirations(): array
    {
        return [
            [
                "title" => "Lapor!",
                "body" => "Sampaikan aspirasi dan pengaduan secara online",
                "img_url" => "assets/img/project-1.jpg",
                "detail_url" => "https://upgrisba.ac.id"
            ],
            [
                "title" => "Formulir Informasi dan Keberatan",
                "body" => "Dapatkan formulir online Tentang Pengajuan Informasi dan Keberatan",
                "img_url" => "assets/img/project-2.jpg",
                "detail_url" => "https://upgrisba.ac.id"
            ],
            [
                "title" => "Informasi Mahasiswa Baru",
                "body" => "Dapatkan Informasi Penerimaan Mahasiswa Baru Universitas PGRI Sumatera Barat",
                "img_url" => "assets/img/project-3.jpg",
                "detail_url" => "https://pmb.upgrisba.ac.id"
            ]
        ];
    }

    function dataOfServicePublicInformations(): array
    {
        return [
            "PPID" => [
                ["title" => "Tugas Dan Fungsi Mengelola Informasi Publik", "detail_url" => "#"],
                ["title" => "Struktur PPID", "detail_url" => "#"],
                ["title" => "Peraturan Rektor PPID", "detail_url" => "#"],
                ["title" => "Daftar Informasi Publik (DIP) yang Telah Dimutakhirkan", "detail_url" => "#"],
                ["title" => "Laporan Layanan Informasi Publik", "detail_url" =>
                    [
                        "2018" => "#",
                        "2019" => "#",
                        "2020" => "#",
                        "2021" => "#",
                        "2022" => "#"
                    ]
                ],
                ["title" => "Bukti Laporan Layanan Informasi Publik Ke Komisi Informasi", "detail_url" =>
                    [
                        "2019" => "#",
                        "2020" => "#",
                        "2021" => "#",
                        "2022" => "#"
                    ]
                ],
                ["title" => "Laporan Layanan Informasi Publik Tahun 2018 Ke Komisi Informasi", "detail_url" => "#"],
                ["title" => "Laporan Survey Kepuasan Masyarakat Pelayanan Informasi", "detail_url" =>
                    [
                        "Laporan 2019" => "#",
                        "Laporan 2020" => "#",
                        "Laporan 2021" => "#",
                        "Laporan 2022" => "#",
                        "Laporan 2023" => "#"
                    ]
                ],
            ],
            "Fasilitas/kelengkapan layanan informasi publik" => [
                ["title" => "Meja, kursi, kursi tunggu dan sarana penerimaan (desk information)", "detail_url" =>
                    ["Formulir" => "#", "Tanda Terima" => "#"]
                ],
                ["title" => "Formulir Keberatan (Offline)", "detail_url" => "#"],
                ["title" => "Formulir Online", "detail_url" => "#"],
                ["title" => "Jadwal pelayanan informasi publik", "detail_url" => "#"],
                ["title" => "Profil Pegawai", "detail_url" => "#"],
                ["title" => "Daftar Penetapan Tarif Layanan", "detail_url" => "#"],
            ]
        ];
    }

    function dataOfServicesStandard(): array
    {
        return [
            [
                ["title" => "Keputusan Rektor Standar Pelayanan", "detail_url" => "#"],
                ["title" => "Maklumat Pelayanan", "detail_url" => "#"],
                ["title" => "Pedoman Pengelolaan Layanan Informasi Publik", "detail_url" => "#"]
            ],
            "Sandar Pelayanan" => [
                ["title" => "Penerimaan Mahasiswa Baru Jalur SBMPTN", "detail_url" => "#"],
                ["title" => "Surat Keterangan Pengganti Ijazah/ Transkrip Nilai yang Hilang/rusak/kesalahan data", "detail_url" => "#"],
                ["title" => "Kerjasama Universitas PGRI Sumatera Barat", "detail_url" => "#"],
                ["title" => "Informasi Publik", "detail_url" => "#"],
                ["title" => "Sewa Barang Milik Negara", "detail_url" => "#"],
                ["title" => "Kartu Keanggotaan Perpustakaan", "detail_url" => "#"],
                ["title" => "Peminjaman Buku Bahan Perpustakaan", "detail_url" => "#"],
                ["title" => "Kursus Bahasa Inggris", "detail_url" => "#"],
                ["title" => "Tes Toefl Prediction", "detail_url" => "#"],
                ["title" => "Penerjemah", "detail_url" => "#"],
                ["title" => "Legalisir Ijazah, Transkrip Nilai dan SKPI", "detail_url" => "#"],
                ["title" => "Pengujian Laboratorium", "detail_url" => "#"],
                ["title" => "Pindah Mahasiswa antar PTN", "detail_url" => "#"],
                ["title" => "Perkenalan Kehidupan Kampus Mahasiswa Baru", "detail_url" => "#"],
                ["title" => "Cuti Kuliah", "detail_url" => "#"],
                ["title" => "Akrif Kuliah Kembali", "detail_url" => "#"],
                ["title" => "Kesehatan", "detail_url" => "#"],
                ["title" => "Publikasi Ilmiah", "detail_url" => "#"],
                ["title" => "Penelitian", "detail_url" => "#"],
                ["title" => "Asrama Mahasiswa", "detail_url" => "#"],
                ["title" => "Wisuda", "detail_url" => "#"],
                ["title" => "Sertifikasi Dosen sebagai Pengusul", "detail_url" => "#"],
                ["title" => "Praktek Lapangan Kependidikan Mahasiswa", "detail_url" => "#"],
                ["title" => "Penerbitan Jurnal Ilmiah", "detail_url" => "#"],
                ["title" => "Surat Keterangan Lulus", "detail_url" => "#"],
                ["title" => "Pembuatan Kartu Mahasiswa", "detail_url" => "#"],
                ["title" => "Penerimaan Mahasiswa Asing", "detail_url" => "#"],
                ["title" => "Permohonan Pengurangan UKT", "detail_url" => "#"],
                ["title" => "Rekomendasi Ujian Akhir Mahasiswa", "detail_url" => "#"],
                ["title" => "Akreditasi Prodi", "detail_url" => "#"],
                ["title" => "Pengaduan", "detail_url" => "#"],
                ["title" => "Beasiswa Mahasiswa", "detail_url" => "#"],
                ["title" => "Perjalanan Dinas Luar Negeri (PPLN) UPGRISBA", "detail_url" => "#"],
                ["title" => "Proses Pembuatan Passport di UPGRISBA", "detail_url" => "#"],
                ["title" => "Penerimaan Dosen Asing UPGRISBA", "detail_url" => "#"],
                ["title" => "Penerimaan Mahasiswa Asing UPGRISBA", "detail_url" => "#"],
                ["title" => "Visiting Researcher di UPGRISBA", "detail_url" => "#"],
            ],
            "STANDAR OPERASIONAL PROSEDUR (SOP)" => [
                ["title" => "Pembuatan NIM", "detail_url" => "#"],
                ["title" => "Pembuatan Kalender Akademik", "detail_url" => "#"],
                ["title" => "Evaluasi Perkuliahan", "detail_url" => "#"],
                ["title" => "Monitoring Perkuliahan", "detail_url" => "#"],
                ["title" => "Buku Pedoman Akademik", "detail_url" => "#"],
                ["title" => "Pembuatan SK Rektor", "detail_url" => "#"],
                ["title" => "Penanganan Sengketa Informasi Publik", "detail_url" => "#"],
                ["title" => "Penetapan dan Pemutakhiran DIP", "detail_url" => "#"],
                ["title" => "Permohonan Informasi Publik", "detail_url" => "#"],
                ["title" => "Pendokumentasian Informasi Publik", "detail_url" => "#"],
                ["title" => "Uji Konsekuensi Informasi Publik", "detail_url" => "#"],
                ["title" => "Pengajuan Keberatan Pelayanan Informasi Publik", "detail_url" => "#"],
                ["title" => "Pengelolaan Pelayanan Pengaduan (Lapor)", "detail_url" => "#"],
                ["title" => "Penyusunan Proker Akademik", "detail_url" => "#"],
                ["title" => "Portal Akademik", "detail_url" => "#"],
                ["title" => "Portal SIE", "detail_url" => "#"],
                ["title" => "Portal Sistem Informasi Keuangan", "detail_url" => "#"],
                ["title" => "Semester Pendek", "detail_url" => "#"],
                ["title" => "Surat Akademik", "detail_url" => "#"],
                ["title" => "Surat Izin Penelitian", "detail_url" => "#"],
                ["title" => "Penerimaan Mahaisiswa Baru", "detail_url" => "#"],
                ["title" => "Prosedur dan Diagram Alir Kenaikan Jabatan Akademik Dosen ke Asisten Ahli dan Lektor", "detail_url" => "#"],
                ["title" => "Prosedur dan Diagram Alir Kenaikan Jabatan Akademik Dosen ke Lektor Kepala dan Guru Besar", "detail_url" => "#"],
                ["title" => "Pembuatan Surat Tugas", "detail_url" => "#"],
                ["title" => "Pengajuan Cuti Bagi PNS", "detail_url" => "#"],
                ["title" => "Pengajuan Kenaikan Gaji Berkala", "detail_url" => "#"],
                ["title" => "Pembukaan Program Studi Baru", "detail_url" => "#"],
                ["title" => "Penutupan Program Studi", "detail_url" => "#"],
                ["title" => "Monev Pembelajaran", "detail_url" => "#"],
                ["title" => "Proses Audit Mutu Internal", "detail_url" => "#"],
                ["title" => "Pengusulan Akreditasi Internasional", "detail_url" => "#"],
                ["title" => "Pemindahan Pengelolaan Program Studi", "detail_url" => "#"]
            ]
        ];
    }
}
