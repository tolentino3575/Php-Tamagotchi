<?php

class Tamagotchi
{
    private $name;
    private $stomach;


    function __construct($name)
    {
        $this->name = $name;
        $this->stomach = 10;

    }

    //SETTERS
    function setName($newName)
    {
        $this->name = (string) $newName;
    }

    function setStomach($newStomach)
    {
        $this->stomach = (string) $newStomach;
    }


    //GETTERS
    function getName()
    {
        return $this->name;
    }

    function getStomach()
    {
        return $this->stomach;
    }

    //OTHER FUNCTIONS

    function save()
    {
        array_push($_SESSION['tamagotchi'], $this);
    }

    static function getAll()
    {
        return $_SESSION['tamagotchi'];
    }

    static function deleteAll()
    {
        return $_SESSION['tamagotchi'] = array();
    }


}

    // function hunger()
    // {
    //     if ($this->foodLevel == 0 ) {
    //         exit( "I'm Dead. You forgot to fee me! I removed you from my will too.");
    //     } elseif (($this->foodLevel) <= 2) {
    //         echo "I'm hungry. Please feed me!";
    //     } elseif (($this->foodLevel) >= 8) {
    //         echo "I'm very full. I shouldn't eat anymore..."
    //     } elseif (($this->foodLevel) == 10) {
    //         exit("I ate too much. My stomach exploded.");
    //     } else {
    //         echo "I'm not hungry now :)"
    //     }
    // }
 ?>
