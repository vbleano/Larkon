<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Disclosure extends Model
{
    use HasFactory, Notifiable;
    protected $primaryKey = 'discID';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'discID',
        'Disclosure_Title',
        'Short_Description',
        'Type_of_IP',
        'Funding_Sources',
        'Year_Submitted',
        'Date_Submitted',
        'Month_Submitted',
        'Status',
        'Plan_To_Commercialize',
        'University_Facilities'
    ];

    // /**
    //  * The attributes that should be hidden for serialization.
    //  *
    //  * @var array<int, string>
    //  */
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
            // 'Funding Sources' => 'array'
        ];
    }

    public function files(){
        return $this->hasMany(Files::class, 'DiscID', 'fileId');
    }
    public function IAC(){
        return $this->hasMany(IAC::class, 'DiscID', 'IACid');
    }
}
