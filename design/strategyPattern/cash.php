<?php
//现金收费抽象类
abstract class Cashsuper
{
    abstract public function acceptCash($money);
}

//正常收费子类
class CashNomal extends Cashsuper
{
     public function acceptCash($money)
    {
        return $money;
    }
}

//打折收费子类
class CashRebate extends Cashsuper
{
    private $moneyRebate = 1;

    /**
     * @param float $moneyRebate
     */
    public function setMoneyRebate($moneyRebate = 0.8)
    {
        $this->moneyRebate = $moneyRebate;
    }

    public function acceptCash($money)
    {
        return $money * $this->moneyRebate;
    }
}

//返利收费子类
class CashReturn extends Cashsuper
{
    private $moneyCondition = 0;
    private $moneyReturn = 0;

    /**
     * @return int
     */
    public function getMoneyCondition()
    {
        return $this->moneyCondition;
    }

    /**
     * @param int $moneyCondition
     */
    public function setMoneyCondition($moneyCondition)
    {
        $this->moneyCondition = $moneyCondition;
    }

    /**
     * @return int
     */
    public function getMoneyReturn()
    {
        return $this->moneyReturn;
    }

    /**
     * @param int $moneyReturn
     */
    public function setMoneyReturn($moneyReturn)
    {
        $this->moneyReturn = $moneyReturn;
    }

    public function acceptCash($money)
    {
        $result = $money;
        if($money >= $this->moneyCondition) {
            $result = $money - floor($money / $this->moneyCondition) * $this->moneyReturn;
        }

        return $result;
    }
}
