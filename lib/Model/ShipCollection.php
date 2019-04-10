<?php
/**
 * Created by PhpStorm.
 * User: Flo
 * Date: 10/04/2019
 * Time: 15:19
 */

namespace Model;

// the ShipCollection object can act like an array thanks to the interfaces \ArrayAccess and \IteratorAggregate
use Traversable;

class ShipCollection implements \ArrayAccess, \IteratorAggregate, \Countable
{
    /**
     * @var array AbstractShip[]
     */
    private $ships;

    public function __construct(array $ships)
    {
        $this->ships = $ships;
    }

    public function offsetExists($offset)
    {
        return array_key_exists($offset, $this->ships);
    }

    public function offsetGet($offset)
    {
        return $this->ships[$offset];
    }

    public function offsetSet($offset, $value)
    {
        $this->ships[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->ships[$offset]);
    }

    public function getIterator()
    {
        //tells PHP that when we try to loop over the ShipCollection object, it should actually loop over the $ships array property.
        return new \ArrayIterator($this->ships);
    }

    public function removeAllBrokenShips()
    {
        foreach ($this->ships as $key => $ship) {
            if (!$ship->isFunctional()) {
                unset($this->ships[$key]);
            }
        }

    }

}