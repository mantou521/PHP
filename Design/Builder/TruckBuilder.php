<?php
/**
 * Created by PhpStorm.
 * User: hushufeng
 * Date: 2018/1/4
 * Time: 下午10:41
 */

namespace Design\Builder;

use Design\builder\Parts\Vehicle;

class TruckBuilder implements BuilderInterface
{
    private $truck;

    public function addDoors()
    {
        $this->truck->setPart('rightDoor', new Parts\Door());
        $this->truck->setPart('leftDoor', new Parts\Door());
    }

    public function addEngine()
    {
        $this->truck->setPart('truckEngine', new Parts\Engine());
    }

    public function addWheel()
    {
        $this->truck->setPart('wheel1', new Parts\Wheel());
        $this->truck->setPart('wheel2', new Parts\Wheel());
        $this->truck->setPart('wheel3', new Parts\Wheel());
        $this->truck->setPart('wheel4', new Parts\Wheel());
        $this->truck->setPart('wheel5', new Parts\Wheel());
        $this->truck->setPart('wheel6', new Parts\Wheel());
    }

    public function createVehicle()
    {
        $this->truck = new Parts\Truck();
    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}