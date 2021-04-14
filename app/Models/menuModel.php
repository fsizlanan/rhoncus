<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menuModel extends Model
{
    use HasFactory;

    protected $table        =   'menu';
    protected $primaryKey   =   'id';
    protected $guarded      =   [];


    public function scopeStatusActive($query){

        return $query->where('status',1);

    }
}
