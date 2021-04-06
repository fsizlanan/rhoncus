<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessageModel extends Model
{
    use HasFactory;

    protected $table        =    '_contact_message';
    protected $primaryKey   =    'id';
    protected $guarded      =     [];
} 
