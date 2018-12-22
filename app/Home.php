<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = ['firstname','lastname'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
