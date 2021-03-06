<?php

namespace App\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['dni', 'first_name', 'last_name', 'user_name', 'email', 'password', 'phone', 'mobile', 'image', 'bio', 'birth_date'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /* RELATIONSHIPS */
    public function articles()
    {
        return $this->hasMany(Article::class, 'author_id');
    }

    /* ATTRIBUTES */
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function getIsAdminAttribute()
    {
        return $this->attributes['role'] == 'admin';
    }

    /* GETTERS */
    public function getRoleAttribute()
    {
        return $this->attributes['role'] == 'admin' ? 'Administrador' : 'Usuario';
    }

    /* SCOPES */
    public function scopeOrdered($query)
    {
        $query->orderBy('role')
            ->orderBy('first_name')
            ->orderBy('last_name')
        ;
    }
}
