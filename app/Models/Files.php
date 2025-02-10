<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    protected $fillable = ['file_path'];

    public function files(){
        return $this->belongsToOne(Disclosure::class, 'DiscId', 'fileId');
    }
}
