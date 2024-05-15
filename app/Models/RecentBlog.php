<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecentBlog extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function namacategory(){
        return $this->hasOne(Category::class,'id','category_id');
    }

    public function nama(){
        return $this->hasOne(User::class,'id','user_id');
    }

}
