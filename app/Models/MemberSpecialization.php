<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberSpecialization extends Model
{
    use HasFactory;
    protected $fillable = ['memberId','specializationId'];
}
