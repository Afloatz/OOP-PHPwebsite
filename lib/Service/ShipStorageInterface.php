<?php
/**
 * Created by PhpStorm.
 * User: Flo
 * Date: 25/03/2019
 * Time: 18:07
 */

interface ShipStorageInterface
{
    /**
     * Returns an array of ships arrays, with keys id, name, weaponPower, defense.
     *
     * @return array
     */
    public function fetchAllShipsData();

    /**
     * @param integer $id
     * @return array()
     */
    public function fetchSingleShipData($id);
}