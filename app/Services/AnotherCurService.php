<?php

    namespace App\Services;
    use App\Contracts\CurServiceInterfase;

class AnotherCurService implements CurServiceInterfase
{
 public function getRate(){
     dd('AnotherCurService');
 }
}
