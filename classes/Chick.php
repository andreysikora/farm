<?php

namespace cls;


class Chick extends Pet
{
    protected $eggs; // pet product

    public function __construct()
    {
        // set the number for the pet
        $this->serialNumberPet = Pet::randomString(7);
        $this->eggs = Pet::Production(0, 1);
    }

    public function getEggs()
    {
        return $this->eggs;
    }
}