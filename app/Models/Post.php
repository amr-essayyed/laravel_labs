<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Post extends Model
{
    use HasFactory;
    use softDeletes;
    protected $fillable = ["title", "body", "user_id", "user_id"];

    protected $casts = [
        'enabled' => 'boolean',
    ];
}
