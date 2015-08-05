<?php
require_once 'dbconnect.php';
class Registration extends DbConnect
{
	protected $login;
	protected $password;
	protected $email;

	function __construct()
	{
		parent::__construct();
		$this->login=$_POST['login'];
		$this->password=$_POST['password'];
		$this->email=$_POST['email'];
	}

	 public function UserRegistration()
	 {
        $success = true;

        $this -> password = md5(md5($this -> password));

        

        if($success) 
        {

            $result = "SELECT id FROM userss WHERE login='{$this -> login}'";
            $queryResult = $this -> conn->query($result);

            $myrow = mysqli_fetch_array($queryResult);
            if (!empty($myrow['id'])) 
            {
				exit ("К сожалению, вы ввели логин который уже зарегистрирован. Пожалуйста, введите другое имя пользователя.");
				
            }
            // если такого нет, то сохраняем данные
            $this -> result2 = 'INSERT INTO userss VALUES ("", "' . $this -> login . '", "' . $this ->password . '", "' . $this -> email . '","","")';
            $queryResult2 = $this -> conn->query($this -> result2);

            if ($queryResult2 == 'TRUE')
             {
                echo "<h1 style='color:green'>Вы успешно вошли в систему!</h1>";
            } else {
                echo "<h1 style='color:red'>Ошибка! Вы не зарегестрированы.</h1>";
            }
        }
        echo ($this -> error != "") ? $this -> error : "";
    }

}

$objregistration = new Registration();
$objregistration -> UserRegistration();



