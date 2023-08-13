<?php

namespace App\Themes\Infrastructure\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Themes extends Model
{
    use HasFactory;

    protected $table = "theme";

    protected $fillable = [
        'name',
        'description',
        'showcase',
        'theme_config'
    ];

    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'showcase' => 'string',
        'theme_config' => 'object'
    ];
}