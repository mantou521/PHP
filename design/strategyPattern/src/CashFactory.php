<?php
/**
 * Created by PhpStorm.
 * User: hushufeng
 * Date: 2017/12/29
 * Time: 上午12:50
 */

namespace Strategy;

class CashFactory
{
    public static function createCashAccept($type)
    {
        $cs = null;
        switch ($type)
        {
            case "正常收费":
                $cs = new CashNomal();
                break;
            case "满300减100":
                $cr1 = new CashReturn();
                $cs = $cr1;
        }

    }
}
