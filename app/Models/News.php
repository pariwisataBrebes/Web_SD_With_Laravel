<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'summary',
        'content',
        'published_at',
        'status',
        'main_image',
        'gallery_images',
        'tags',
        'user_id',
    ];

    protected $casts = [
        'published_at' => 'date',
        'gallery_images' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Auto generate slug saat membuat berita
    public static function boot()
    {
        parent::boot();

        static::creating(function ($news) {
            if (empty($news->slug)) {
                $news->slug = Str::slug($news->title) . '-' . uniqid();
            }
        });
    }
}
