<?php

namespace Interview;

use Algorithm\Sort;

require __DIR__.'/../vendor/autoload.php';

class Question_1
{
    /**
     * @array 四个点坐标
     */
    protected $points_id;

    /**
     * @array 一点到另外三点长度
     */
    protected $lengths;

    /**
     * question_1 constructor.
     * @param array $points 四个坐标点
     */
    public function __construct($points)
    {
        foreach ($points as $point) {
            $this->points_id[] = $point;
        }
    }

    //a^2 + b^2 = c^2
    public function isRectangle()
    {
        //获取一点到另外三点的距离
        $this->getLengths($this->points_id);

        $Sort = new Sort();
        $Sort->bubble_sort($this->lengths);
        $a = $this->lengths[0];
        $b = $this->lengths[1];
        $c = $this->lengths[2];

        if ($c == $a + $b) {
            return true;
        }

        return false;
    }

    /**
     * 获取一点到另外n个点的距离
     *
     * @param array $points
     */
    public function getLengths(array $points)
    {
        for ($i = 1; $i < count($points); $i++) {
            $this->lengths[] = $this->getTwoPointsLength($points[0], $points[$i]);
        }
    }


    /**
     * 获取两点之间的距离的平方数
     *
     * @param $point_1 [0,0]
     * @param $point_2 [1,1]
     * @return float
     */
    public function getTwoPointsLength($point_1, $point_2) :float
    {
        $length = pow((abs($point_2[1] - $point_1[1])), 2) + pow(abs($point_2[0] - $point_1[0]), 2);

        return $length;
    }
}

$points_id = [
    [0, 0],
    [0, 1],
    [1, 1],
    [1, 0],
];

$isRectangle = (new Question_1($points_id))->isRectangle();
var_dump($isRectangle);