<?php
/**
 * Created by PhpStorm.
 * User: Flo
 * Date: 10/04/2019
 * Time: 17:37
 */

namespace Model;


class BountyHunterShip extends AbstractShip
{
    //when PHP runs, it will copy the contents of the trait and pastes them into this class
    // right before it executes our code. It's as if all the code from the trait actually lives inside this class.
    use SettableJediFactorTrait;

    public function getType()
    {
        return 'Bounty Hunter';
    }

    public function isFunctional()
    {
        return true;
    }


}