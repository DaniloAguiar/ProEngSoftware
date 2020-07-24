<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class DaoPet
{
    public static function all()
    {
        return DB::table('pet')->get();
    }
}
