<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityMember extends Model

{

    protected $fillable =['memberId','specializationId'];
    use HasFactory;
}
