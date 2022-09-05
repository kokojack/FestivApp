<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Festival extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'is_active',
    ];

    protected $dates = ['start_at', 'end_on',];

    public function post(){
        return $this->hasMany(Post::class, 'p_id');
    }
}
