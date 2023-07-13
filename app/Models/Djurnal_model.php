<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Djurnal_model extends Model
{
    use HasFactory;
    protected $table ="djurnal";
    protected $primaryKey ="id";

    public function tampil_djurnal(){
        $query = \DB::table('djurnal')->get();
        return $query;
    }
}
