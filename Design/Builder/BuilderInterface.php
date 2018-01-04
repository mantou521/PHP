<?php
/**
 * Created by PhpStorm.
 * User: hushufeng
 * Date: 2018/1/4
 * Time: 下午10:36
 */

namespace Design\Builder;

use Design\Builder\Parts\Vehicle;

interface BuilderInterface
{
    public function createVehicle();

    public function addWheel();

    public function addEngine();

    public function addDoors();

    public function getVehicle(): Vehicle;
}