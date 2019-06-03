<?php


namespace Algorithm\Sort;


class BitMap
{

    public function bitMap(array $arr): array
    {
        $bitmap = array_fill(0, 10, 0);
        $int_bit_seze = PHP_INT_SIZE * 8;
        foreach ($arr as $item) {
            $bytePos = $item / $int_bit_seze;
            $bitPos = $item % $int_bit_seze;
            $position = 1 << $bitPos;
            $bitmap[$bytePos] = $bitmap[$bytePos] | $position;
        }

        return $bitmap;
    }

    public function outPut($bitmap): array
    {
        $int_bit_size = PHP_INT_SIZE * 8;
        $result = [];
        foreach ($bitmap as $key => $value) {
            for ($i = 0; $i < $int_bit_size; $i++) {
                $temp = 1 << $i;
                $flag = $temp & $value;
                if ($flag) {
                    $result[] = $key * $int_bit_size + $i;
                }
            }
        }

        return $result;
    }
}