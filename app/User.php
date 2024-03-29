<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;


// class User extends Model
class User extends Authenticatable
{
    use Notifiable;
    use Searchable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     * */
    protected $fillable = [
        'name', 'email', 'password', 'is_admin',
    ];
    protected $primaryKey = 'id';
    public function searchableAs()
    {
        return 'users_index';
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}