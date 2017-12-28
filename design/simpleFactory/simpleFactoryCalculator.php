<?php
abstract class Calculator
{
    private $number1;
    private $number2;
    public $result;
    /**
     * @return the $number2
     */
    public function getNumber2() {
        return $this->number2;
    }

    /**
     * @param field_type $number2
     */
    public function setNumber2($number2) {
        $this->number2 = $number2;
    }

    /**
     * @return the $number1
     */
    public function getNumber1() {
        return $this->number1;
    }

    /**
     * @param field_type $number1
     */
    public function setNumber1($number1) {
        $this->number1 = $number1;
    }

    abstract function get_result($number1, $number2);
}

class Add extends Calculator
{
    public function get_result($number1,$number2)
    {
        return $number1+$number2;
    }
}

class Sub extends Calculator
{
    public function get_result($number1,$number2)
    {
        return $number1-$number2;
    }
}

class Mul extends Calculator
{
    public function get_result($number1,$number2)
    {
        return $number1*$number2;
    }
}

class Div extends Calculator
{
    public function get_result($number1,$number2)
    {
        return $number1/$number2;
    }
}

class Factory
{
    public static function Building($operation)
    {
        $oper = '';
        switch ($operation) {
            case "+":
                $oper = new Add();
                break;
            case "-":
                $oper = new Sub();
                break;
            case "*":
                $oper = new Mul();
                break;
            case "/":
                $oper = new Div();
                break;
            default:
                echo "Operation not exit";
        }
        return $oper;
    }
}

$oper = Factory::Building('+');
$oper->setNumber1(1);
$oper->setNumber2(2);
$result = $oper->get_result(1,2);
var_dump($result);