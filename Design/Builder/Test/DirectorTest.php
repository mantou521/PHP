<?php
/**
 * Created by PhpStorm.
 * User: hushufeng
 * Date: 2018/1/4
 * Time: 下午11:05
 */
namespace Design\Builder\Tests;

use Design\Builder\Director;
use Design\Builder\Parts\Car;
use Design\Builder\Parts\Truck;
use Design\Builder\TruckBuilder;
use Design\Builder\CarBuilder;
use PHPUnit\Framework\TestCase;

class DirectorTest extends TestCase
{
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVelhicle = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVelhicle);
    }

    public function testCanbuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);

        $this->assertInstanceOf(Car::class, $newVehicle);
    }
}