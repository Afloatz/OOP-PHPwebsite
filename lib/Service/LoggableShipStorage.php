<?php
/**
 * Created by PhpStorm.
 * User: Flo
 * Date: 10/04/2019
 * Time: 18:17
 */

namespace Service;


class LoggableShipStorage implements ShipStorageInterface
{
    private $shipStorage;

    public function __construct(ShipStorageInterface $shipStorage)
    {
        $this->shipStorage = $shipStorage;
    }

    public function fetchAllShipsData()
    {
        $ships = $this->shipStorage->fetchAllShipsData();

        $this->log(sprintf('Just fetched %s ships', count($ships)));

        return $ships;
    }

    public function fetchSingleShipData($id)
    {
        return $this->shipStorage->fetchSingleShipData($id);
    }

    private function log($message)
    {
        echo $message;
    }


}