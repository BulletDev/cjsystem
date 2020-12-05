<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contestants extends Model
{
    protected $table = "contestants";
    protected $primaryKey = 'id';
    protected $fillable = [
            'contestant_no',
            'first_name',
            'middle_name',
            'last_name',
            'gender',
            'age',
            'photo',
            'attainment',
            'school',
            'course',
            'year',
            'weight',
            'height',
            'bust_line',
            'waist_line',
            'hip_line',
            'nationality',
            'biography',
        ];

}
