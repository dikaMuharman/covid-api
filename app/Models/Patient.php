<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone', 'alamat', 'status_patient_id' ,'in_date_at', 'out_date_at'];

    public function statusPatient() 
    {
        return $this->belongsTo(StatusPatient::class);
    }
}
