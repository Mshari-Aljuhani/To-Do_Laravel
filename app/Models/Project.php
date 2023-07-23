<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable =
        [
            "name",
            "user_id"
        ];
    public function users(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
    return $this->belongsToMany(User::class);
    }
}
