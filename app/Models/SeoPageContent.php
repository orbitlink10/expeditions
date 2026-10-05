<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeoPageContent extends Model
{
    protected $fillable = [
        'path',
        'content',
    ];

    protected function casts(): array
    {
        return [
            'content' => 'array',
        ];
    }
}
