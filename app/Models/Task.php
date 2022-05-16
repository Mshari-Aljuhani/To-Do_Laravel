<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable= [
        'description',
        'color',
        'dueDate',
        'checked',
    ];

    public function user(){
        $this->belongsTo(User::class,'user_id');
    }
}