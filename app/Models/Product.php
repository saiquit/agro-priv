<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Product extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
    use HasTranslations;
    use InteractsWithMedia;


    public $translatable = ['name', 'excerpt', 'content', 'key_features', 'other_instructions', 'additional_details'];

    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'key_features' => 'array',
            'additional_details' => 'array'
        ];
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
