<?php
/**
 * Created by PhpStorm.
 * User: Flo
 * Date: 09/03/2019
 * Time: 17:59
 */

class BattleResult
{
    private $usedJediPowers;

    private $winningShip;

    private $losingShip;

    public function __construct($usedJediPowers, Ship $winningShip, Ship $losingShip)
    {
        $this->usedJediPowers = $usedJediPowers;
        $this->winningShip = $winningShip;
        $this->losingShip = $losingShip;
    }

    /**
     * @return boolean
     */
    public function wereJediPowersUsed()
    {
        return $this->usedJediPowers;
    }

    /**
     * @return Ship
     */
    public function getWinningShip()
    {
        return $this->winningShip;
    }

    /**
     * @return Ship
     */
    public function getLosingShip()
    {
        return $this->losingShip;
    }

}