<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name', 'lastname', "email","password",'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    protected $appends = ['list_product'];




    public function getListProductAttribute() {
        return $this->equipments->implode('product', ', ');
    }

    /*
    |--------------------------------------------------------------------------
    | ACL
    |--------------------------------------------------------------------------
    */

    /**
     * Determine if the user may perform the given permission.
     *
     * @param  Permission $permission
     * @return boolean
     */
    public function hasPermission(Permission $permission)
    {
        return $this->hasRole($permission->roles);
    }

     /**
     * Determine if the user has the given role.
     *
     * @param  mixed $role
     * @return boolean
     */
    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->role->key_name == $role;
        }

        if ($role instanceof Role) {
            return $this->role->is($role);
        }

        return $role->contains($this->role);
    }

   /**
     * Determine if logged user has "superadmin" role.
     *
     * @return boolean
     */
    public function isSuperAdmin() {
        return $this->hasRole('superadmin');
    }


    /**
     * Get the section that owns the role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    /**
     * A permission can be applied to many roles.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function equipments()
    {
        return $this->belongsToMany(Equipment::class)->withPivot('quantity');
    }

}
