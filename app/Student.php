<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    //
    use Notifiable;
    protected $guard='student';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'First_name','Middle_name','Surname','RegNo','Phone','DOB','Year_joined','County','Avatar','gender', 'Email'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'Password', 'remember_token',
    ];
    public function alumni(){
        return $this->belongsTo('App\Student');
    }
}
