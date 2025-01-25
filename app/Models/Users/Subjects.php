<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

use App\Models\Users\User;

class Subjects extends Model
{
    const UPDATED_AT = null;


    protected $fillable = [
        'subject'
    ];

    public function users(){
        return $this->belongsToMany(
            Users::class,
            'subject_users', //省略可
            'subject_id', //省略可
            'user_id' //省略可
        );
    }
}
