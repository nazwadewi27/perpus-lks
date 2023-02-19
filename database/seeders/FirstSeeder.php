<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Buku;
use App\Models\User;
use App\Models\Peminjaman;
use App\Models\Penerbit;
use App\Models\Kategori;
use App\Models\Pemberitahuan;
use App\Models\Pesan;
use App\Models\Identitas;


class FirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'kode'           => 'A01',
            'fullname'       => 'admin',
            'nis'            => null,
            'username'       => 'admin',
            'password'       => bcrypt('admin'),
            'kelas'          => null,
            'alamat'         => 'Jl. affh yh',
            'verif'          => 'verified',
            'role'           => 'admin',
            'join_date'      => '2023-06-01',
            'terakhir_login' => '2023-06-01',
            'foto'           => null,
        ]);

        User::create([
            'kode'           => 'U01',
            'fullname'       => 'User',
            'nis'            => '402958034',
            'username'       => 'user1',
            'password'       => bcrypt('user'),
            'kelas'          => 'XII RPL',
            'alamat'         => 'Jl. affh yh',
            'verif'          => 'verified',
            'role'           => 'user',
            'join_date'      => '2023-06-01',
            'terakhir_login' => '2023-06-01',
            'foto'           => null,
        ]);

        Kategori::create([
            'kode' => 'B01',
            'nama' => 'Umum',
        ]);

        Kategori::create([
            'kode' => 'B02',
            'nama' => 'Sains',
        ]);

        Kategori::create([
            'kode' => 'B03',
            'nama' => 'Sejarah',
        ]);

        Penerbit::create([
            'kode' => 'P01',
            'nama' => 'Erlangga',
            'verif' => 'verified',
        ]);

        Penerbit::create([
            'kode' => 'P02',
            'nama' => 'BSE',
            'verif' => 'verified',
        ]);

        Penerbit::create([
            'kode' => 'P03',
            'nama' => 'KKPK',
            'verif' => 'verified',
        ]);

        Buku::create([
            'judul' =>   'Cara Memasak Nasi',
            'kategori_id' => '1',
            'penerbit_id' => '2',
            'pengarang' => 'PHP',
            'tahun_terbit'=>'2012',
            'isbn' => null,
            'j_buku_baik' => '20',
            'j_buku_rusak' => '12',
        ]);

        Buku::create([
            'judul' =>   'The Issues',
            'kategori_id' => '1',
            'penerbit_id' => '3',
            'pengarang' => 'Augustddrugs',
            'tahun_terbit'=>'2022',
            'isbn' => '123142134',
            'j_buku_baik' => '20',
            'j_buku_rusak' => '12',
        ]);

        Buku::create([
            'judul' =>   'Sejarah Borobudur',
            'kategori_id' => '3',
            'penerbit_id' => '1',
            'pengarang' => 'NN',
            'tahun_terbit'=>'2004',
            'isbn' => '21453116',
            'j_buku_baik' => '20',
            'j_buku_rusak' => '12',
        ]);

        Peminjaman::create([
            'user_id' => '2',
            'buku_id' => '2',
            'tanggal_peminjaman' => '2023-06-01',
            'tanggal_pengembalian' => '2023-07-01',
            'kondisi_buku_saat_dipinjam' => 'baik',
            'kondisi_buku_saat_dikembalikan' => 'baik',
            'denda' => '20000',
        ]);

        Peminjaman::create([
            'user_id' => '2',
            'buku_id' => '1',
            'tanggal_peminjaman' => '2023-06-01',
            'tanggal_pengembalian' => null,
            'kondisi_buku_saat_dipinjam' =>'baik',
            'denda' => null,
        ]);

        Pemberitahuan::create([
            'isi'   => 'Mohon Maaf',
            'level_user'  => null,
            'status' => 'nonaktif',
        ]);

        Pemberitahuan::create([
            'isi'   => 'Tidak Buka',
            'level_user'  => null,
            'status' => 'nonaktif',
        ]);

        Pemberitahuan::create([
            'isi'   => 'Melayani Pengembalian Buku',
            'level_user'  => null,
            'status' => 'aktif',
        ]);

        Pesan::create([
            'penerima_id' => '2',
            'pengirim_id' => '1',
            'judul' => 'Buku dipinjam',
            'isi' => 'Buku Sedang dipinjam',
            'status' => 'terkirim',
            'tanggal_terkirim' => '2021-06-01',
        ]);

        Pesan::create([
            'penerima_id' => '2',
            'pengirim_id' => '1',
            'judul' => 'Anda Merusak buku >:|',
            'isi' => 'Anda Terkena denda 100000',
            'status' => 'terkirim',
            'tanggal_terkirim' => '2023-06-01',
        ]);

        Pesan::create([
            'penerima_id' => '2',
            'pengirim_id' => '1',
            'judul' => 'Buku telah dikembalikan',
            'isi' => 'Terimakasi telah meminjam buku di perpustakaan :>',
            'status' => 'dibaca',
            'tanggal_terkirim' => '2023-06-01',
        ]);

        Identitas::create([
            'nama_app' => 'PERPUS SMKN 10 JAKARTA',
            'alamat_app' => 'Jl. SMEAN 6, Cawang, Kramat Jati, Jakarta Timur',
            'email_app' => 'email@smkn10jakarta.sch.id',
            'nomor_hp' => '081234567890',
            'foto'      => null,
        ]);
    }
}
