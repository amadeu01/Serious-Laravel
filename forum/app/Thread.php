<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    function path(){
        return '/threads/' . $this->id;
    }
}
