<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagsBlog extends Model
{
    use HasFactory;

    protected $tabel = 'tags_blog';
    protected $guarded = [];
}
