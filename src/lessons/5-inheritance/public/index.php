<?php


class CarSize{

}
interface Car{
    public function getModel();
    public function getSize();
}

interface ElectroCar{
    public function getCapacity();
}

class Tesla implements Car,ElectroCar {

    public function getModel()
    {
        return "X";
    }

    public function getSize()
    {
        return 10;
    }

    public function getCapacity()
    {
        return "60kWh";
    }
}

class Slavuta implements Car {
    protected $a = 5;
    public function getModel()
    {
        return "pickup";
    }

    public function getSize()
    {
        return 10;
    }
}


class CTO{
    public function __construct(Car $car)
    {
        //do some staff with car
        if($car->getSize() > 15){
            throw new Exception('Car size is too big!');
        }

    }


}
/*$tesl = new Tesla();
$slav = new Slavuta();
$cto = new CTO($tesl);
$elektoCTO = new ElectroCTO($tesl);*/

class ElectroCTO{
    public function __construct(ElectroCar $car)
    {
        //do some staff with car
        if($car->getSize() > 15){
            throw new Exception('Car size is too big!');
        }

    }


}




abstract class AC{
    protected int $size;

    public function getSize($a):int{
        return $this->size;
    }
}

class HHH extends AC{
    protected int $size;

    public function getSize($a):int {
        return "lol";
    }
}

$r = new HHH();
echo $r->getSize();
