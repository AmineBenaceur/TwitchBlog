<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //table name
    protected $table = 'posts';

    //set prmary key
    public $primaryKey = 'id';

    //time stamps
    public $timestamps = true;

}
