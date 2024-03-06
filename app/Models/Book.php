<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Book extends Model
{
    use HasUuids;
    use HasFactory;
    public function category(): HasMany
    {
        return $this->hasMany(Category::class,'books_has_categories');
    }
    public function image(): HasMany
    {
        return $this->hasMany(Image::class,'books_has_images');
    }
    public function ageClass(): BelongsTo
    {
        return $this->belongsTo(AgeClass::class);
    }
    public function saga(): BelongsTo
    {
        return $this->belongsTo(Saga::class);
    }
    public function comment(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
    public function user(): HasMany
    {
        return $this->hasMany(User::class,'books_has_categories');
    }
}
