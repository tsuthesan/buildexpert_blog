<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'content',
        'published',
        'created_at',
        ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    protected $except = [
        //
        '/upload',
    ];
}
