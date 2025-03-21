<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use Illuminate\Support\Facades\Storage;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::makeDirectory('public/customers');

        for ($i = 1; $i <= 10; $i++) {
            Customer::create([
                'name' => 'Customer ' . $i,
                'cif' => '0000000' . $i,
                'gambar_kctt' => 'customers/image' . $i . '.png', // Default image path
                'keterangan' => 'Generated customer ' . $i,
                'branch_id' => 1,
            ]);
        }
    }
}
