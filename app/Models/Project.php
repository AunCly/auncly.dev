<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'title',
        'excerpt',
        'content',
        'duration',
        'technologies',
    ];

    protected $casts = [
        'technologies' => 'array',
    ];

    public function categories() {
        return $this->belongsToMany(Category::class);
    }

}
