<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
//以下追加
use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;

// implements JWTSubject追加
class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // 以下追加
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    //中間テーブルreservations経由で予約データを取得
    public function reservations(){
        // return $this->belongsToMany(Reservation::class)->withPivot('number_of_people', 'reservation_date');

        // 上記では上手く動作しないので下記の記述をしています
        return $this->belongsToMany(Shop::class, 'reservations', 'user_id', 'shop_id')->withPivot('number_of_people', 'reservation_date');
    }

    // 追加終わり
}
