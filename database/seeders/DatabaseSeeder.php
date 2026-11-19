<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::firstOrCreate(
            ['email' => 'admin@berita.com'],
            ['name' => 'Admin Berita', 'password' => Hash::make('password')]
        );

        DB::table('articles')->delete();

        // Ambil kolom yang beneran ada di tabel articles
        $cols = Schema::getColumnListing('articles');

        $beritas = [
            ['Banda Aceh Jadi Tuan Rumah Festival Kopi Aceh 2026', 'Kuliner', 'Ribuan pecinta kopi memadati Banda Aceh dalam Festival Kopi Aceh 2026. Acara ini menampilkan kopi Gayo terbaik dari seluruh Aceh dan dihadiri barista nasional.'],
            ['UIN Ar-Raniry Resmikan Gedung Baru Fakultas Sains', 'Pendidikan', 'UIN Ar-Raniry Banda Aceh resmi meresmikan gedung baru Fakultas Sains dan Teknologi. Gedung ini dilengkapi lab komputer modern untuk praktikum Pemrograman Web.'],
            ['Timnas Indonesia Lolos ke Final Piala Asia', 'Olahraga', 'Timnas Indonesia berhasil lolos ke babak final Piala Asia setelah menang dramatis 2-1. Gol kemenangan dicetak di menit akhir pertandingan.'],
            ['Harga Cabai di Pasar Peunayong Turun Drastis', 'Ekonomi', 'Pedagang di Pasar Peunayong Banda Aceh bersyukur harga cabai mulai turun. Warga pun kembali ramai berbelanja untuk kebutuhan harian.'],
            ['Banjir di Aceh Besar Surut, Warga Mulai Bersihkan Rumah', 'Daerah', 'Setelah 2 hari tergenang, banjir di beberapa kecamatan di Aceh Besar mulai surut. Warga bersama relawan gotong royong membersihkan lumpur.'],
            ['Laravel 12 Rilis Fitur Baru, Bikin Web Makin Cepat', 'Teknologi', 'Laravel merilis versi terbaru dengan performa lebih cepat dan sintaks lebih simpel. Cocok untuk mahasiswa yang sedang mengerjakan tugas praktikum web.'],
        ];

        foreach ($beritas as [$judul, $kategori, $isi]) {
            $data = [
                'title' => $judul,
                'slug' => Str::slug($judul),
                'excerpt' => Str::limit($isi, 120),
                'content' => $isi,
                'body' => $isi,
                'description' => $isi,
                'category' => $kategori,
                'category_id' => 1,
                'user_id' => $user->id,
                'author_id' => $user->id,
                'status' => 'published',
                'is_published' => 1,
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ];

            // Hanya insert kolom yang ada di tabel, sisanya dibuang
            $filtered = array_intersect_key($data, array_flip($cols));
            DB::table('articles')->insert($filtered);
        }
    }
}