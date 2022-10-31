<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class talk_to_us extends Model
{
    protected $table = 'talk_to_us';
    protected $primary_key = 'id';
    public $timestamps = false;
    protected $fillable = [
        'first_name', 'last_name','email','phone_number','messege'
    ];
    use HasFactory;}
