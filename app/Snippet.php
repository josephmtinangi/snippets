<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Snippet extends Model
{
    protected $fillable = ['title', 'body', 'forked_id'];

    public function forks()
    {
        return $this->hasMany(Snippet::class, 'forked_id');
    }
}
