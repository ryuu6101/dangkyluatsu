<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'username',
    //     'password',
    //     'fullname',
    //     'profile_pic',
    // ];

    protected $guarded = ['id'];

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
        'password' => 'hashed',
    ];

    public function family_members() {
        return $this->hasMany(FamilyMember::class, 'user_id');
    }

    public function working_records() {
        return $this->hasMany(WorkingRecord::class, 'user_id');
    }

    public function degrees() {
        return $this->hasMany(Degree::class, 'user_id');
    }

    public function progresses() {
        return $this->hasMany(Progress::class, 'user_id');
    }

    public function notifications() {
        return $this->hasMany(Notification::class, 'user_id');
    }

    public function getLawDegreeAttribute() {
        return $this->degrees->where('degree_type_id', 1)->first();
    }

    public function getGraduateDegreeAttribute() {
        return $this->degrees->where('degree_type_id', 2)->first();
    }
}
