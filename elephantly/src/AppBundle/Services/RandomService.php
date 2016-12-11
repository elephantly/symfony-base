<?php
/**
 * Created by PhpStorm.
 * User: benjamin
 * Date: 11/12/16
 * Time: 08:02
 */

namespace AppBundle\Services;


/**
 * Class RandomService
 * @package AppBundle
 */
class RandomService
{
    /**
     * @var int
     */
    private $factor;

    /**
     * RandomService constructor.
     */
    public function __construct()
    {
        $this->factor = mt_rand(0, 10);
    }

    /**
     * @param null $min
     * @param null $max
     * @return int
     * @throws \InvalidArgumentException
     */
    public function randomGenerator($min = null, $max = null)
    {
        if (false === $this->checkMinMax($min, $max)) {
            throw new \InvalidArgumentException();
        }

        return mt_rand($min, $max);
    }

    /**
     * @param null $factor
     * @param null $min
     * @param null $max
     * @return int
     * @throws \InvalidArgumentException
     */
    public function randomGeneratorWithFactor($factor = null, $min = null, $max = null)
    {
        if (false === $this->checkMinMax($min, $max)) {
            throw new \InvalidArgumentException();
        }

        $factor = $factor?: $this->factor;

        $result = mt_rand($min, $max);
        return $result * $factor;
    }

    /**
     * @param null $min
     * @param null $max
     * @return bool
     */
    public function checkMinMax($min = null, $max = null)
    {
        if (!$min && !$max) {
            return true;
        }
        if (!$min || !$max) {
            return false;
        }
        if ($max <= $min) {
            return false;
        }
        return true;
    }
}