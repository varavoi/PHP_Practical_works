<?php
/*
Задание 1

определите Trait с именем `SharedTrait`.
Trait должен содержать следующие методы:
`public function greet($name)`: Принимает аргумент типа строка, возвращает приветствие с именем пользователя типа строка.
`public function calculate($a, $b, $operator)`: Выполняет арифметическую операцию с числами $a и $b в соответствии 
с оператором $operator (например, "+" для сложения, "-" для вычитания и т.д.).

Создайте новый класс `User` и используйте Trait `SharedTrait` в этом классе.
Класс `User` должен содержать следующие свойства и методы:
Свойства: `name`, `age`.
Методы: `__construct($name, $age)`, `greet()`, `calculate($a, $b, $operator)` (используя методы из Trait).

Создайте новый класс `Order` и используйте Trait `SharedTrait` в этом классе.
Класс `Order` должен содержать следующие свойства и методы:
Свойства: `product`, `quantity`.
Методы: `__construct($product, $quantity)`, `greet()`, `calculate($a, $b, $operator)` (используя методы из Trait).

Cоздайте экземпляры классов `User` и `Order`, и вызовите методы `greet()` и `calculate()` для каждого из них, чтобы убедиться,
 что Trait работает правильно.
Запустите `index.php` и проверьте результаты.*/

echo "<br><br>";
echo "<br>1-я задача<br>";
echo "<br>";

trait SharedTrait{
   public function greet($name){
      return "<br>Привет ".$name."<br>";
   }
   public function calculate($a, $b, $operator){
      switch($operator){
         case "+":return  $a+$b;
         case "-":return $a-$b;
         case "/":return $a/$b;
         case "*":return $a*$b;
         case "%":return $a%$b;
         case "^":return $a**$b;
         default: return $a."".$b;
      }
   }
}

interface ShowInfo{
   public function getInfo();
}

class User implements ShowInfo{
   private $name;
   private $age;
   function __construct($name, $age){
      $this->name=$name;
      $this->age=$age;
   }
   use SharedTrait;
   public function greeting($name =null){
      if($name ===null){
         $name=$this->name;  
      }
      echo $this->greet($name);  
   }
   public function calc($a, $b, $operator){
      echo "<br>Результат $a $operator $b = ".$this->calculate($a, $b, $operator)."<br>";
   }
   public function getInfo(){
      echo "<br>Экземпляр класса User, имя: $this->name; возраст:$this->age<br>";
   }
}

class Order implements ShowInfo{
   private $product;
   private $quantity;
   function __construct($product, $quantity){
      $this->product=$product;
      $this->quantity=$quantity;
   }
   use SharedTrait;
   public function greeting($name=""){
         echo $this->greet($name);
   }
   public function calc($a, $b, $operator){
      echo "<br>Результат $a $operator $b = ".$this->calculate($a, $b, $operator)."<br>";
   }
   public function getInfo(){
      echo "<br>Экземпляр класса Order, название продукта: $this->product; количество:$this->quantity<br>";
   }
}

$user = new User("Валера",24);
$user->getInfo();
$user->greeting();
$user->calc(4,5,"+");
echo "<br><br>";
$order = new Order("Хлеб",240);
$order->getInfo();
$order->greeting("Алла");
$order->calc(50,4,"*");

?>
<?php
/*
Задание 2
Напишите следующий код:

Создайте файл `example.txt` в той же директории, где находится файл `file_handling.php`, и добавьте в него некоторый текст.
Запустите `file_handling.php` и проверьте результаты.
Если файл `example.txt` существует и доступен для чтения, код должен успешно прочитать его содержимое и вывести на экран. 
В случае возникновения ошибки при открытии файла, код должен перехватить исключение и вывести сообщение об ошибке.
*/


echo "<br><br>";
echo "<br>2-я задача<br>";
echo "<br>";
try {
   $file = fopen("example.txt", "r");
   if ($file) {
      //$content = fread($file, filesize("example.txt"));
       $content = fread($file, filesize("exmple.txt"));
       fclose($file);
       echo "File content: " . $content . "\n";
   } 
} catch (Throwable $e) {
   echo "<br>Error: " . $e->getMessage() . "<br>";
   echo "<br>Строка ошибки: ".$e->getLine()."<br>";
   echo "<br>Код исключения: ".$e->getCode()."<br>";
   echo "<br>Полная информация про исключение: ".$e->__toString()."<br>";
}

?>