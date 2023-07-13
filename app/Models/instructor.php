<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class instructor extends Model
{
    protected $table = 'instructor';
    protected $primaryKey = 'id';
    protected $fillable = ['document', 'name', 'last_name', 'email', 'telephone'];


    use HasFactory;
}
