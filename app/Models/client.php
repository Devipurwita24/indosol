<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    protected $table = 'client';
    protected $primary_key = 'id';
    public $timestamps = false;
    protected $fillable = [
         'logo_client'
    ];
    use HasFactory;
}
