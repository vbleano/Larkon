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
    protected $primaryKey = 'IACid';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
            'Country_of_Citizenship' ,
            'Last_Name',
            'First_Name',
            'Middle_Name',
            'Home_Address',
            'Work_Address',
            'Email_Address',
            'Salutatory',
            'Main_Affiliation',
            'Sub_Affiliation',
            'Constituent_University',
            'College_Unit',
            'Deparment/Institutions',
            'Contact_Number',
            'Nature_of_Contribution_Role',
            'Percentage_of_Contribution',
            'Date_of_Birth',
            'Civil_Status',
            'Gender/Sex',
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
    public function IAC(){
        return $this->hasOne(Disclosure::class, 'DiscID', 'IACid');
    }
}
