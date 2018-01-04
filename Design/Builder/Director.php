<?php
/**
 * Created by PhpStorm.
 * User: hushufeng
 * Date: 2018/1/4
 * Time: 下午10:29
 */

namespace Design\Builder;

use Design\Builder\Parts\Vehicle;

class Director
{
    public function build(BuilderInterface $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}
