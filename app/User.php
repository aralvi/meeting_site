<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Customer;
use App\Client;
use App\Admin;
use App\Permission;
use App\Role;

class User extends Authenticatable
{
    use Notifiable; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id','first_name', 'last_name','email', 'password','status',
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

    public function customer()
    {
        return $this->hasOne(Customer::class);
    }

    public function client()
    {
        return $this->hasOne(Client::class);
    }

    public function admin()
    {
        return $this->hasOne(Admin::class);
    }
     /**
     * @return mixed
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class,'users_roles','user_id');
    }

    /**
     * @return mixed
     */
    public function permissions()
    {
        return $this->belongsToMany(Permission::class,'users_permissions','user_id');
    }
    /**
     * User has Permission
     * @return mixed
     */
    public function hasPermission($permission){
        $role = $this->role;
        $role->hasPermission($permission);
    }
    
    /**
     * User has Role
     * @return mixed
     */
    public function hasRole($roles ) {
          if ($this->roles->contains('name', $roles)) {
            return true;
          }
        
        return false;
    }
    
    protected function getAllPermissions(array $permissions) {

        return Permission::whereIn('permission_name',$permissions)->get();
        
      }
}
