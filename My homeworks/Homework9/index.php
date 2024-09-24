<?php
/*
Задание заключается в создании абстрактного класса `User` на PHP,
 который будет реализовывать базовую логику для различных типов пользователей сайта.

Абстрактный класс `User` должен содержать следующие элементы:

Защищенные свойства `$username`, `$email` и `$role`, которые будут хранить информацию о пользователе.
Конструктор `__construct()`, который будет принимать параметры `$username`, `$email` и `$role` и инициализировать соответствующие свойства.
Абстрактный метод `canAccess()`, который будет определять, имеет ли пользователь доступ к определенному ресурсу. 
Этот метод должен быть реализован в классах-наследниках.
Дополнительные методы для получения значений свойств: `getUsername()`, `getEmail()` и `getRole()`.
Классы-наследники `Admin` и `RegularUser` должны наследоваться от `User` и реализовывать метод `canAccess()` в соответствии с их ролями.

Класс `Admin` должен возвращать `true` в методе `canAccess()` для любого ресурса, так как администратор имеет полный доступ ко всем ресурсам.
Класс `RegularUser` должен возвращать `true` только для общедоступных ресурсов (например, `'public'`), а для других ресурсов - `false`.
В конце задания предложено привести примеры использования созданных классов, чтобы показать,
 как можно проверять доступ пользователя к различным ресурсам в зависимости от его роли.
*/

abstract class User{
    protected $username;
    protected $email;
    protected $role;
    function __construct($username,$email,$role){
        $this->username=$username;
        $this->email=$email;
        $this->role=$role;
    }
    abstract function canAccess($resource);
    abstract function getUsername();
    abstract function getEmail();
    abstract function getRole();
}

class Admin extends User{
     function canAccess($resource){
        return true;
     }
     function getUsername(){
        return $this->username;
     }
     function getEmail(){
        return $this->email;
     }
     function getRole(){
        return $this->role;
     }
}

class RegularUser extends User{
    function canAccess($resource){
        if($resource=="public"){
            return true;
        }
        else{
            return false;
        }
    }
      function getUsername(){
        return $this->username;
     }
     function getEmail(){
        return $this->email;
     }
     function getRole(){
        return $this->role;
     }
}

$admin=new Admin("Jack","jk@gmail.com","admin");
echo "<br> The user's name is ".$admin->getUsername()."<br>";
echo "<br> The user's email is ".$admin->getEmail()."<br>";
echo "<br> The user's role is ".$admin->getRole()."<br>";
echo "<br>Question: If ".$admin->getRole()." ".$admin->getUsername()." have an access of 'private' resource?<br>";
echo "<br>Answer: ".($admin->canAccess('private')?"Yes":"No")."<br>";
echo "<br>Question: If ".$admin->getRole()." ".$admin->getUsername()." have an access of 'public' resource?<br>";
echo "<br>Answer: ".($admin->canAccess('public')?"Yes":"No")."<br>";

echo "<br><br>";

$regularUser=new RegularUser("Jane","jk@gmail.com","regular user");
echo "<br> The user's name is ".$regularUser->getUsername()."<br>";
echo "<br> The user's email is ".$regularUser->getEmail()."<br>";
echo "<br> The user's role is ".$regularUser->getRole()."<br>";
echo "<br>Question: If ".$regularUser->getRole()." ".$regularUser->getUsername()." have an access of 'private' resource?<br>";
echo "<br>Answer: ".($regularUser->canAccess('private')?"Yes":"No")."<br>";
echo "<br>Question: If ".$regularUser->getRole()." ".$regularUser->getUsername()." have an access of 'public' resource?<br>";
echo "<br>Answer: ".($regularUser->canAccess('public')?"Yes":"No")."<br>";

?>