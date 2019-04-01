<?php

namespace Service;

// Create the service objects

class Container
{
    private $configuration;

    private $pdo;

    private $shipLoader;

    private $shipStorage;

    private $battleManager;

    public function __construct(array $configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * @return PDO
     */
    public function getPDO()
    {
        // to avoid making multiple connection to the database. We just save it in a property
        if ($this->pdo === null) {
            $this->pdo = new PDO(
                $this->configuration['db_dsn'],
                $this->configuration['db_user'],
                $this->configuration['db_pass']
            );
            // throw exceptions if something goes wrong
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return $this->pdo;
    }

    /**
     * @return ShipLoader
     */
    public function getShipLoader()
    {
        if ($this->shipLoader === null) {
            $this->shipLoader = new ShipLoader($this->getShipStorage());
        }

        return $this->shipLoader;
    }

    /**
     * @return ShipStorageInterface
     */
    public function getShipStorage()
    {
        if ($this->shipStorage === null) {
            // Can load ships either from the database or from a Json file, just uncomment one method
            $this->shipStorage = new PdoShipStorage($this->getPDO());
            //$this->shipStorage = new JsonFileShipStorage(__DIR__.'/../../resources/ships.json');
        }

        return $this->shipStorage;
    }

    public function getBattleManager()
    {
        if ($this->battleManager === null) {
            $this->battleManager = new Battle\BattleManager();
        }

        return $this->battleManager;
    }
}