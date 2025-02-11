<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'path', 'tel','city_id','discount','userstatus_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function city()
  {
    return $this->belongsTo('App\City');
  }
  public function zayavki()
  {
    return $this->hasMany('App\Regzayavki');
  }
  public function userstatus()
  {
    return $this->belongsTo('App\Userstatus');
  }
    public function roles()
    {
        return $this
            ->belongsToMany('App\Role')
            ->withTimestamps();
    }

            public function authorizeRoles($roles)
        {
        if ($this->hasAnyRole($roles)) {
            return true;
        }
        // abort(401, 'Действие незарегистрировано.');
       return redirect('/');
        }
        public function hasAnyRole($roles)
        {
        if (is_array($roles)) {
            foreach ($roles as $role) {
            if ($this->hasRole($role)) {
                return true;
            }
            }
        } else {
            if ($this->hasRole($roles)) {
            return true;
            }
        }
        return false;
        }
        public function hasRole($role)
        {
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
        }
}
