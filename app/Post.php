<?php

namespace hsdntknow;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=['title','body','slug','user_id'];
}
