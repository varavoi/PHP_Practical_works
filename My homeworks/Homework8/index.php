<?php
/*
Задание 1: Наследование классов

Создайте базовый класс Vehicle со свойствами make и model, а также методом displayInfo(), 
который выводит информацию о марке и модели транспортного средства.

Создайте производный класс Car от класса Vehicle и добавьте в него свойство numDoors.

Создайте объект класса Car и вызовите его метод displayInfo().
*/
/*
echo "<br>Задание 1: Наследование классов<br>";
echo "<br>";
class Vehicle{
   public $make, $model;
   function __construct($make, $model){
    $this->make=$make;
    $this->model=$model;
   }
   function displayInfo(){
    echo "Марка машины: ".$this->make.", модель машины: ".$this->model;
   }
}

class Car extends Vehicle{
    public $numbDoors;
    function __construct($make,$model,$numbDoors){
        parent::__construct($make,$model);
        $this->numbDoors=$numbDoors;
    }
    function displayInfo(){
        parent::displayInfo();
        echo ", количество дверей машины: ".$this->numbDoors."<br>";
       }
}

$car  = new Car("Ауди","А8",2);
$car->displayInfo();
*/
?>

<?php
/*
Задание 2: Модификаторы доступа

В классе Vehicle сделайте свойство make приватным, свойство model защищенным и свойство numDoors в классе Car общедоступным.

Обновите метод displayInfo() в классе Vehicle, чтобы он принимал параметр $showMake, который по умолчанию равен false. 
Если $showMake равно true, метод должен выводить марку транспортного средства.
*/
/*
echo "<br>Задание 2: Модификаторы доступа<br>";
echo "<br>";
class Vehicle{
   private $make;
   protected $model;
   function __construct($make, $model){
    $this->make=$make;
    $this->model=$model;
   }
   function displayInfo($showMake=false){
    if($showMake==true){
        echo "<br>Если разрешено показывать марку машины<br>";
        echo "Марка машины: ".$this->make."; <br>Модель машины: ".$this->model."<br>";
    }
    else if($showMake==false){
        echo "<br>Если запрещено показывать марку машины<br>";
        echo "Модель машины: ".$this->model.";<br>";
    }
    
   }
}

class Car extends Vehicle{
    public $numbDoors;
    function __construct($make,$model,$numbDoors){
        parent::__construct($make,$model);
        $this->numbDoors=$numbDoors;
    }
    function displayInfo($showMake=false){
        parent::displayInfo($showMake);
        echo "Количество дверей машины: ".$this->numbDoors."<br>";
       }
}

$car  = new Car("Ауди","А8",2);
$car->displayInfo(false);
echo "<br>";
$car->displayInfo(true);
*/
?>

<?php
/*
Задание 3: Статические свойства и методы

Добавьте статическое свойство numVehicles в класс Vehicle и инициализируйте его значением 0.

Добавьте статический метод getNumVehicles() в класс Vehicle, который возвращает значение numVehicles.

Увеличивайте значение numVehicles на 1 каждый раз при создании нового объекта класса Vehicle или Car.

Выведите значение numVehicles после создания нескольких объектов классов Vehicle и Car.
*/
/*
echo "<br>Задание 3: Статические свойства и методы<br>";
echo "<br>";
class Vehicle{
   private $make;
   protected $model;
   private static $numVehicles = 0; 
   function __construct($make, $model){
    $this->make=$make;
    $this->model=$model;
    self::$numVehicles +=1;
   }
   function displayInfo($showMake=false){
    if($showMake==true){
        echo "<br>Если разрешено показывать марку машины<br>";
        echo "Марка машины: ".$this->make."; <br>Модель машины: ".$this->model."<br>";
    }
    else if($showMake==false){
        echo "<br>Если запрещено показывать марку машины<br>";
        echo "Модель машины: ".$this->model.";<br>";
    }
   }
   static function getNumVehicles(){
    echo "<br>Количество выпущенных машин = ".self::$numVehicles."<br>";
   }
}

class Car extends Vehicle{
    public $numbDoors;
    function __construct($make,$model,$numbDoors){
        parent::__construct($make,$model);
        $this->numbDoors=$numbDoors;
    }
    function displayInfo($showMake=false){
        parent::displayInfo($showMake);
        echo "Количество дверей машины: ".$this->numbDoors."<br>";
       }
}

$audiA8  = new Car("Ауди","А8",2);
$bmwM6  = new Car("BMW","M6",2);
$ladaGranda  = new Vehicle("Лада","Гранда");
$niva2121  = new Vehicle("Нива","2121");
Vehicle::getNumVehicles();*/
?>