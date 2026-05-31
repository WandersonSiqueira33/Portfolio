<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
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
