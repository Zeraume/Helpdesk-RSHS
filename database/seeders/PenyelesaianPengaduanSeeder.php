<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenyelesaianPengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tanggal = Carbon::now()->format('Ymd');
        DB::table('PENYELESAIAN_PENGADUAN')->insert([
            [
                'ID_PENYELESAIAN' => $tanggal . str_pad(1, 6, '0', STR_PAD_LEFT),
                'PENYELESAIAN_PENGADUAN' => 'Sudah diberikan sanksi',
                'STATUS' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ID_PENYELESAIAN' => $tanggal . str_pad(2, 6, '0', STR_PAD_LEFT),
                'PENYELESAIAN_PENGADUAN' => 'Dibina',
                'STATUS' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
