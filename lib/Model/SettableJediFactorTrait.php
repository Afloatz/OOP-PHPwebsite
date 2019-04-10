<?php
/**
 * Created by PhpStorm.
 * User: Flo
 * Date: 10/04/2019
 * Time: 17:53
 */

namespace Model;


trait SettableJediFactorTrait
{
    private $jediFactor;

    public function getJediFactor()
    {
        return $this->jediFactor;
    }

    public function setJediFactor($jediFactor)
    {
        $this->jediFactor = $jediFactor;
    }

}