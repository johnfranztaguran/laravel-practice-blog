<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name
    // Optional (can call even not here)
    protected $table = 'posts';
    // Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;
}
