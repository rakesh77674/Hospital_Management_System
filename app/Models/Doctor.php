<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorForm extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'speciality',
        'phone',
        'room',
        'image',
        'zipcode',
        'state_id',
        'city_id',
    

 ];
}
