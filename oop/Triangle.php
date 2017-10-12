<?php
class Triangle
{
    private $length1;
    private $length2;
    private $length3;
    private $type;
    private $isTriangle;

    function __construct($l1,$l2,$l3)
    {
        $this->length1 = $l1;
        $this->length2 = $l2;
        $this->length3 = $l3;
        $this->whatKindOfTriangle();
        $this->checkIfTriangle();
    }

    function whatKindOfTriangle()
    {
        //equilateral all sides are equal
        if($this->length1 == $this->length2 && $this->length1 == $this->length3 && $this->length2 == $this->length3){
            $this->type = "Equilateral";
        }else if($this->length1 == $this->length2 || $this->length1 == $this->length3 || $this->length2 == $this->length3){
            $this->type = "Isosceles";
        }else if($this->length1 != $this->length2 && $this->length1 != $this->length3 && $this->length2 != $this->length3){
            $this->type = "Scalene";
        }
    }

    function checkIfTriangle()
    {
        if($this->length1 == $this->length2 && $this->length3 > ($this->length1+$this->length2)
           || $this->length2 == $this->length3 && $this->length1 > ($this->length2+$this->length3)
           || $this->length1 == $this->length3 && $this->length2 > ($this->length1+$this->length3)
        ){
            $this->isTriangle = false;
        }else{
        $this->isTriangle = true;
        }

    }
}
var_dump(new Triangle(4,4,4)); //equilateral triangle
var_dump(new Triangle(4,4,5)); // isosceles triangle
var_dump(new Triangle(3,4,5));// scalene triangle
var_dump(new Triangle(2,2,8)); // not a triangle !!:D

?>