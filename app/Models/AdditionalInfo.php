<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdditionalInfo extends Model
{
    protected $fillable = [
        'complaint_id',
        'employee_id',
        'request_message',
    ];

    public function complaint() {
        return $this->belongsTo(Complaint::class);
    }

    public function employee() {
        return $this->belongsTo(Employee::class);
    }
}
