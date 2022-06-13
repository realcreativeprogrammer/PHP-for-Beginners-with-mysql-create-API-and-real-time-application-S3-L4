<?php
class Car{
    private $name;
    public $color;
    public $make;

    function __construct($carName,$carMake,$carColor){
        $this->name=$carName;
        $this->color=$carColor;
        $this->make=$carMake;
    }

    function print(){
        echo 'the car name is '.$this->name.' and the color is '.$this->color.' and maked by '.$this->make; 
    }

    function get_name(){
        return $this->name;
    }

    function set_name($newval){
        $this->name=$newval;
 
    }

}

$obj=new Car('golf','volgswagn','green');
$obj->print();
$carname= $obj->get_name();
echo '<br>'.$carname.'<br>';
$obj=new Car('mustang','ford','red');
$obj->print();
echo '<br>'.$obj->get_name().'<br>';
$obj->set_name('updated name');
$obj->color='gray';
$obj->print();

?>