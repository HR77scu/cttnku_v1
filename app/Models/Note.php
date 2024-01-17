<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Note extends Model
{
    use HasFactory;

    protected $table = 'notes';
    protected $primaryKey = 'id';


    public static function sum_a_created_note($date){
        $query = DB::select("SELECT SUM(created_at) as sum_crt FROM notes WHERE DATE(created_at) = '$date'");
        return $query;
    }
}
