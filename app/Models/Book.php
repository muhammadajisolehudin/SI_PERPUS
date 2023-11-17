<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'year',
        'publisher',
        'city',
        'quantity',
        'bookshelf_id',
        'cover',
    ];

     public function bookshelf(): BelongsTo
    {
        return $this->belongsTo(Bookshelf::class);
    }

}
