<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'role',
        'phone_number',
        'city',
        'country',
        'zip_code',
        'description',
        'company_name',
        'company_website'
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
        'password' => 'hashed',
    ];

    // Example roles property (you may have a different implementation)
    protected $roles = []; // This should be replaced with your actual roles logic

    public function hasRole($role)
    {
        // Check if the user has the specified role
        return in_array($role, $this->roles);
    }

    public function resumes()
    {
        return $this->hasMany(Resume::class);
    }

    public function jobApplications()
    {
        return $this->hasMany(JobApplication::class);
    }

    public function hasAppliedTo(JobPosting $jobPosting)
    {
        return $this->jobApplications()->where('job_posting_id', $jobPosting->id)->exists();
    }
}
