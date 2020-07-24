<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class DaoCliente
{
    public static function all()
    {
        return DB::table('cliente')->get();
    }
}
