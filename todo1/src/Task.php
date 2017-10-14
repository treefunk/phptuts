<?php

class Task
{
    private $description;

    public function __construct($description){
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public static function getAll()
    {
        return $_SESSION['alltasks'];
    }

    public function save()
    {
        array_push($_SESSION['alltasks'],$this);
        return $this;
    }

    public static function clearAll()
    {
        $_SESSION['alltasks'] = [];
        return $this;
    }
}

?>