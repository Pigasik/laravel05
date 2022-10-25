<?php

namespace App\Services;
use App\Contracts\CurServiceInterfase;


class CurrencyService implements CurServiceInterfase
{
    public function getRate(){
        dd('getRate');
    }
}
