<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $primaryKey = 'post_id';
    public $timestamps = false;

    protected $fillable = [
        'post_id',
        'title',
        'body',
        'user_id',
    ];
    protected $keyType = 'int';
    public $incrementing = true;


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
