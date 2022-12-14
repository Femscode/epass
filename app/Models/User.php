<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Models\Album;
use App\Models\schools;
use App\Models\Follower;
use App\Models\Category;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    protected $table = 'users';
   	 
  public function department() {
    return $this->belongsTo(Department::class,'department_id','uuid');
  }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
  public function company() {
    return $this->belongsTo(schools::class);
  }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // public function following(){
    //     return $this->belongsToMany(User::class,'followers','follower_id','following_id');
    // }

    // public function amIfollowing($userId){
    //     return \DB::table('followers')->where('follower_id',auth()->user()->id)->where('following_id',$userId)->exists();
    // }
   

}
