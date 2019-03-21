<?php
/**
 * Created by PhpStorm.
 * User: Flo
 * Date: 14/03/2019
 * Time: 17:58
 */

class RebelShip extends Ship
{
    public function getFavoriteJedi()
    {
        $coolJedis = array('Yoda', 'Ben Kenobi');
        $key = array_rand($coolJedis);

        return $coolJedis[$key];
    }

    // Override the method getType of the Ship class
    public function getType()
    {
        return 'Rebel';
    }

    public function isFunctional()
    {
        return true;
    }

    public function getNameAndSpecs($useShortFormat = false)
    {
        $val = parent::getNameAndSpecs($useShortFormat);
        $val .= ' (Rebel)';

        return $val;
          }

}