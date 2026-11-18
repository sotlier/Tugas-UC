<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * @var list<string>
     */
    protected $fillable = [
        'title',
        'description',
        'image_url',
        'project_url',
        'github_url',
        'technologies',
        'sort_order',
    ];
}
