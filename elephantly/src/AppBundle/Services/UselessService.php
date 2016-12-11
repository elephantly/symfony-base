<?php
/**
 * Created by PhpStorm.
 * User: benjamin
 * Date: 11/12/16
 * Time: 09:04
 */

namespace AppBundle\Services;


/**
 * Class UselessService
 * @package AppBundle\Services
 */
class UselessService
{
    /**
     * @var RandomService
     */
    private $random;

    /**
     * UselessService constructor.
     * @param RandomService $random
     */
    public function __construct(RandomService $random)
    {
        $this->random = $random;
    }

    /**
     * @return bool
     */
    public function uselessPairFunction()
    {
        $number = $this->random->randomGenerator();

        if (0 == $number % 2) {
            return true;
        }
        return false;
    }

    /**
     * @return string
     */
    public function namedPairFunction()
    {
        $number = $this->random->randomGeneratorWithFactor();

        if (0 == $number % 2) {
            return 'Pair number!';
        }
        return 'Odd number!';
    }

    /**
     * @param $min
     * @param $max
     * @return string
     */
    public function customPairFunction($min, $max)
    {
        if (false == $this->random->checkMinMax($min, $max)) {
            throw new \InvalidArgumentException();
        }

        $number = $this->random->randomGenerator($min, $max);

        if (0 == $number % 2) {
            return 'Pair number!';
        }
        return 'Odd number!';
    }
}