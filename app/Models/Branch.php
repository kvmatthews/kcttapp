<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Branch extends Model
{
    use HasFactory;

    protected $table = 'branches';

    protected $fillable = [
        'kode_branch',
        'nama_branch',
    ];

    public function customers()
    {
        return $this->hasMany(Customer::class, 'branch_id');
    }
}
