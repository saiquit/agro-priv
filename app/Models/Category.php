<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;
    use HasTranslations;

    public $translatable = ['name', 'description'];
    protected $guarded = [];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
