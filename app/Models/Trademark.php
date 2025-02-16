<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Trademark extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Type_of_Mark',
        'Description_of_the_Mark',
        'Disclaimer',
        'Translation_Transliteration',
        'Collective_Mark',
        'Word_to_be_Trademarked',
        'Mark_has_any_color',
        'Colors_of_the_Mark',
        'List_of_specific_goods_services',
        'Future_Potential_Applications',
        'NICE_Classification',
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
