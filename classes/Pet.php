<?php

namespace cls;

abstract class Pet
{

    protected $serialNumberPet;

    public static function randomString($lenght)
    {
        return substr(md5(microtime()), 0, $lenght);
    }

    public static function Production($min, $max)
    {
        return rand($min, $max);
    }

}