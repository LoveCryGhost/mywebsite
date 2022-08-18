<?php

namespace App\Models\Admin;

use Carbon\Carbon;
//use App\Notifications\AdminResetPasswordNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\MustVerifyEmail as MustVerifyEmailTrait;
//use Spatie\Permission\Traits\HasRoles;

;

class Admin extends Authenticatable implements MustVerifyEmailContract
{
    use HasFactory;
    use Notifiable, MustVerifyEmailTrait;
    //use HasRoles;

    protected $table = "admins";
    protected $primaryKey='id';

    protected $fillable = [
        'is_checked',
        'is_confirmed',
        'released_at',
        "barcode",
        "sort_order",

        'name',
        "email",
        'avatar',
        "birthday_at",
        "locales",
        'tel',
        'phone',
        'description',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute($value)
    {
        if (empty($value)) {
            return '/images/default/avatars/avatar.jpg';
        }
        return $value;
    }

    public function getLocalesAttribute($value)
    {
        $value = explode(",", $value);
        return $value;
    }
    public function setLocalesAttribute($value)
    {
        if(is_array($value)){
            $value = implode(",",$value);
            $this->attributes["locales"] = $value;
        }else{
            $this->attributes["locales"] = $value;
        }
    }

    public function setAvatarAttribute($value)
    {
        if (empty($value)) {
            $this->attributes["avatar"] =  '/images/default/avatars/avatar.jpg';
        }
    }

}
