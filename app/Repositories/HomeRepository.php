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
                "detail_url" => "https://upgrisba.ac.id",
                "body" => "Pejabat Pengelola Informasi dan Dokumentasi" // nullable
            ],
            [
                "icon" => "fa-envelope",
                "title" => "dip",
                "detail_url" => "https://upgrisba.ac.id",
                "body" => "Daftar informasi Publik yang sudah dimutahirkan"
            ],
            [
                "icon" => "fa-book",
                "title" => "standar pelayanan",
                "detail_url" => "https://upgrisba.ac.id",
                "body" => "Pelayanan yang sudah distandarisasi"
            ],
            [
                "icon" => "fa-edit",
                "title" => "formulir online",
                "detail_url" => "https://upgrisba.ac.id",
                "body" => null
            ],
            [
                "icon" => "fa-bullhorn",
                "title" => "pelayanan informasi publik",
                "detail_url" => "https://upgrisba.ac.id",
                "body" => null
            ],
            [
                "icon" => "fa-lock",
                "title" => "informasi yang dikecualikan",
                "detail_url" => "https://upgrisba.ac.id",
                "body" => null
            ],
            [
                "icon" => "fa-wheelchair",
                "title" => "layanan disabilitas",
                "detail_url" => "https://upgrisba.ac.id",
                "body" => null
            ],
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
}
