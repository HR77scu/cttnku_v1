<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class Note extends Model
{
    use HasFactory;

    protected $table = 'notes';
    protected $primaryKey = 'id';

    static function count_by_today_created_at(){
        $today = Carbon::today();
        return DB::table('notes')->whereDate('created_at', $today)->count();
    }
}
