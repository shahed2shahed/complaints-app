<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ComplaintType extends Model
{
        protected $fillable = [
        'type',
    ];

    public function complaints(){
        return $this->hasMany(Complaint::class);
    }

           public function complaintVersions(){
        return $this->hasMany(CopmlaintVersion::class);

    }

}
