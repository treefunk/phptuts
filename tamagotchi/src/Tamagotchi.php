<?php
class Tamagotchi
{
    private $name;
    public static $all = [];
    public $hunger = 10;
    public $attention = 10;
    public $energy = 10;
    public $isAlive = true;
    public $id;

    public function __construct($name){
        $this->name = $name;
        self::$all[] = $this;
        $this->id = count($_SESSION['alltamagotchies'])+1;
    }

    public function getName()
    {
        return $this->name;
    }

    public static function allTamagotchies()
    {
        // return self::$all;
        return $_SESSION['alltamagotchies'];
    }

    public function save(){
        $_SESSION['alltamagotchies'][] = $this;
    }

    public function decrease(){
        if($this->hunger < 1){
            $this->isAlive = false;
            return;
        }
        $this->hunger--;
        $this->attention--;
        $this->energy--;
        return $this;
    }

    public static function findById($id){
        foreach(self::$all as $tamagotchi){
            if($id == $tamagotchi.id)
            return $tamagotchi;
            else
            return false;
        }
    }
}

?>