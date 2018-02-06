<?php
/**
 * Created by PhpStorm.
 * User: hushufeng
 * Date: 18/1/5
 * Time: 15:27
 */

namespace Design\Decorator\Model;

abstract class Decorator extends Component
{
    protected $component;

    /**
     * @param mixed $component
     */
    public function setComponent($component): void
    {
        $this->component = $component;
    }

    public function operation()
    {
        if($this->component != null)
        {
            $this->component->operation();
        }
    }
}