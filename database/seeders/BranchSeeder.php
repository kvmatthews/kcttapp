<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Branch;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Branch::truncate();
        
        Branch::create([
            'kode_branch' => '001',
            'nama_branch' => 'Kantor Cabang Utama',
        ]);

        Branch::create([
            'kode_branch' => '002',
            'nama_branch' => 'Kantor Cabang Melonguane',
        ]);

        Branch::create([
            'kode_branch' => '003',
            'nama_branch' => 'Kantor Cabang Kotamobagu',
        ]);
        
        Branch::create([
            'kode_branch' => '004',
            'nama_branch' => 'Kantor Cabang Tomohon',
        ]);

        Branch::create([
            'kode_branch' => '005',
            'nama_branch' => 'Kantor Cabang Amurang',
        ]);

        Branch::create([
            'kode_branch' => '006',
            'nama_branch' => 'Kantor Cabang Manado',
        ]);

        Branch::create([
            'kode_branch' => '007',
            'nama_branch' => 'Kantor Cabang Airmadidi',
        ]);

        Branch::create([
            'kode_branch' => '008',
            'nama_branch' => 'Kantor Cabang Tahuna',
        ]);
    }
}
