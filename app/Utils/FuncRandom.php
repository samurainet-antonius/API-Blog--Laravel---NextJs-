<?php

namespace App\Utils;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
trait FuncRandom
{
    public function uuid (){
        return Str::uuid()->toString();
    }

    public function uuid_short(){
        $uuid = DB::select("SELECT UUID_SHORT() as uuid")[0]->uuid;
        return $uuid;
    }
}
