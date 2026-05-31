<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image',
        'repository_url',
        'demo_url',
        'technologies',
        'active',
    ];

    protected $casts = [
        'technologies' => 'array',
        'active' => 'boolean',
    ];
}
