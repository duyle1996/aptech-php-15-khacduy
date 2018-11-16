<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function passport()
    {
        return $this->hasOne('App\Passport', 'user_id');
    }
}
