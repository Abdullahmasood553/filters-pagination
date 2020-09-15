<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function getFullNameAttribute() {
        $fullName = ucfirst($this->fname) . ' ' . ucfirst($this->lname);
        if(strlen($fullName) <= 20) {
            return $fullName;
        } else {
            return substr($fullName, 0, 20) . '...';
        }
    }


    public static function getUsers($search_keyword) {
        $users = DB::table('users');


        if($search_keyword && !empty($search_keyword)) {
            $users->where(function($q) use ($search_keyword) {
                $q->where('users.fname', 'like', "%{$search_keyword}%")
                ->orWhere('users.lname', 'like', "%{$search_keyword}%");
            });
        }
        return $users->paginate(PER_PAGE_LIMIT);
    }
}
