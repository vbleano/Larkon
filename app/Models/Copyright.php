<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Copyright extends Model
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'CopyrightID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'discID',
        'Date_of_Creation_of_Copyrightable_Material',
        'Place_of_Creation',
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
    public function copyright(){
        return $this->hasOne(Patents::class, 'DiscID', 'CopyrightID');
    }
}
