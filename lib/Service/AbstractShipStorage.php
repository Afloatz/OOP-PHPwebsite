<?php
/**
 * Created by PhpStorm.
 * User: Flo
 * Date: 25/03/2019
 * Time: 18:07
 */

abstract class AbstractShipStorage
{
    abstract public function fetchAllShipsData();

    abstract public function fetchSingleShipData($id);
}