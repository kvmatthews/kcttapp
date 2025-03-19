<?php

namespace App\Models;

use Spatie\Permission\Models\Role as SpatieRole;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\User;

class Role extends SpatieRole
{
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
