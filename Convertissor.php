<?php

class Convertissor
{
    const CONVERT = 1.60934;

    public static function kmToMiles($distance): float
    {
        return round($distance / self::CONVERT, 2);
    }
    public static function milesToKm($distance): float
    {
        return round($distance * self::CONVERT, 2);
    }
}