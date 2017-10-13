<?php
class Car
{
    public $car_model;
    public $car_price;
    public $car_color;

    function isSimilar($param1){
        if(strpos(strtolower($this->car_model),strtolower($param1)) !== false)
            return true;
    }

}
?>