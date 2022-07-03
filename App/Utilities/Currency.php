<?php
namespace App\Utilities;

class Currency
{
    public static function format_price_in_hezar_toman(int $amount):int
    {
        return $amount / 1000 ;
    }
}