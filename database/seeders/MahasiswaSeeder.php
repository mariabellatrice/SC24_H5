<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("mahasiswa")->insert([
            "nim" => "F1E122181",
            "nama" => "Satria Bahari",
            "kelas" => "R-005",
            "des" => "Saya sedang belajar laravel"
        ]);

        DB::table("mahasiswa")->insert([
            "nim" => "F1E122182",
            "nama" => "Mukhtada",
            "kelas" => "R-003",
            "des" => "Saya sedang belajar php"
        ]);

        DB::table("mahasiswa")->insert([
            "nim" => "F1E122183",
            "nama" => "Muhammad Nurman",
            "kelas" => "R-005",
            "des" => "Saya sedang belajar Javacript"
        ]);

        DB::table("mahasiswa")->insert([
            "nim" => "F1E122184",
            "nama" => "Muhammad Zidan",
            "kelas" => "R-005",
            "des" => "Saya sedang belajar Bootstrap"
        ]);
    }
}
