<?php
/**
 * Created by PhpStorm.
 * User: Flo
 * Date: 24/03/2019
 * Time: 18:21
 */

class BrokenShip extends AbstractShip
{
    public function getJediFactor()
    {
        return 0;
    }

    public function getType()
    {
        return 'Broken';
    }

    public function isFunctional()
    {
        return false;
    }

}