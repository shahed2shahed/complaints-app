<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ComplaintStatus extends Model
{
        protected $fillable = [
        'status',
    ];

    public function complaints(){
        return $this->hasMany(Complaint::class);
    }

           public function complaintVersions(){
        return $this->hasMany(CopmlaintVersion::class);

    }

}
