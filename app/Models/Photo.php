<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'url'];
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
