<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Patents extends Model
{
    use HasFactory, Notifiable;
    protected $primaryKey = 'PatentID';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'discID',
        'Type_of_Invention',
        'Purpose_of_Invention',
        'Background_of_Invention',
        'Potential_Partners',
        'Key_Novel_Features',
        'Application_use_of_Invention',
        'Stage_of_Development',
        'R_and_D_Cost',
        'Past_Oral_Disclosure',
        'Past_Oral_Disclosure_Date',
        'Past_Written_Disclosure',
        'Past_Written_Disclosure_Date',
        'Future_Disclosure_Plans',
        'TRL',
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
public function patents(){
    return $this->hasOne(Disclosure::class, 'DiscID', 'PatentID');
}
}
