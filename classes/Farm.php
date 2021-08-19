<?php

namespace cls;


class Farm
{
    public $countChick;
    public $countCow;

    public $totalEggs;
    public $totalMilk;

    public function __construct($countChick, $countCow)
    {
        $this->countChick = $countChick;
        $this->countCow = $countCow;

        $this->totalEggs = $this->countEggs();
        $this->totalMilk = $this->countMilk();
    }

    public function countEggs()
    {
        for ($i = 0; $i < $this->countChick; $i++) {
            $chick = new Chick();
            $this->totalEggs += $chick->getEggs();
        }

        return $this->totalEggs;
    }

    public function countMilk()
    {
        for ($i = 0; $i < $this->countCow; $i++) {
            $cow = new Cow();
            $this->totalMilk += $cow->getMilk();
        }

        return $this->totalMilk;
    }

    /**
     * get the total value of eggs
     */
    public function getTotalEggs()
    {
        return $this->totalEggs;
    }

    /**
     * get the total value of milk
     */
    public function getTotalMilk()
    {
        return $this->totalMilk;
    }

    public function answer()
    {
        $out = "Total eggs collected: <strong>{$this->getTotalEggs()}</strong><br />";
        $out .= "Total milk collected: <strong>{$this->getTotalMilk()}</strong>";

        return $out;
    }
}