<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class franchisingModel extends Model
{
    use HasFactory;

    protected $table = 'franchising';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
