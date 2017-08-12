<?php

namespace Cashewdigital\Utility;


class Probability
{
    private $probability;

    public function __construct($probability)
    {
        $this->probability = $probability;
    }

    public function run()
    {
        $probability = $this->probability;

        $randomNumber = mt_rand(0, 999);
        $passingNumber = $probability*1000;

        if ($randomNumber > $passingNumber) {
            return false;
        } else {
            return true;
        }
    }

}