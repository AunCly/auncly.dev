<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Project extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'duration',
        'technologies',
    ];

    protected $casts = [
        'technologies' => 'array',
    ];

    public function categories() {
        return $this->belongsToMany(Category::class, 'project_category');
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

}
