<?php

namespace cls;


class Cow extends Pet
{
    protected $milk; // pet product

    public function __construct()
    {
        // set the number for the pet
        $this->serialNumberPet = Pet::randomString(7);
        $this->milk = Pet::Production(8, 12);
    }

    public function getMilk()
    {
        return $this->milk;
    }

}