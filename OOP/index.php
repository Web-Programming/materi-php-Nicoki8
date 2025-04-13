//Perkenalan PHP OPP
//PHP OOP -OBJECT ORIENTED PROGAMING-

<?php

class robot{
    public $suara ='ngik ngik';
    public $berat = 30;

    public function bersuara(){
        echo 'suara robotnya ...' . $this->suara;
    }
    public function berat_robot(){
        return $this->berat;
    }
}

$robot1 = new robot;
$robot1->bersuara();
echo $robot1->berat_robot();

?>