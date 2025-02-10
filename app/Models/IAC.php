<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class IAC extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
            'Country_of_Citizenship' ,
            'First_Name',
            'Last_Name',
            'Middle_Name',
            'Work_Address',
            'Home_Address',
            'Constituent_University',
            'College_Unit',
            'Deparment/Institutions',
            'Salutatory',
            'Main_Affiliation',
            'Sub_Affiliation',
            'Nature_of_Contribution',
            'Percentage_of_Contribution',
            'Email_Address',
            'Contact_Number',
            'Date_of_Birth',
            'Gender/Sex',
            'Civil_Status',
            'Nationality',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'remember_token'
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'Funding Sources' => 'array'
        ];
    }
}
