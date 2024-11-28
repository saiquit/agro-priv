<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Page extends Model
{
    /** @use HasFactory<\Database\Factories\PageFactory> */
    use HasFactory;
    use HasTranslations;

    protected $guarded = [];

    protected $translatable = ['title'];

    public function casts(): array
    {
        return [
            'settings' => 'array',
            'seo_meta' => 'array'
        ];
    }
}
