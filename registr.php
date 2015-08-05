<?php
session_start();
function ServerDB()
{
	$db_hostname='localhost';
	$db_username='root';
	$db_password='';
	$db_table='users';
	$connect=mysql_connect("localhost","root","","blog") or die("Error " . mysqli_error($connect));
	mysql_select_db('blog');
}

function Insert(){
	ServerDB();
	if(isset($_POST['submit']))
	{
		$login=$_POST['login'];
		$password=$_POST['password'];
		$email=$_POST['email'];
		
		$query=mysql_query("INSERT INTO userss VALUES(NULL,'$login','$password','$email',NULL,NULL)") or die(mysql_error());
		return true;
	} 
	return false;
}

//Функция проверки заполнения пользователем полей в форме 
//если какое-то поле пусто отправить его назад на эту же форму регистрации
$login=isset($_POST['login']);
$password=isset($_POST['password']);
$email=isset($_POST['email']);

function checkEmptyField()
{
	if(empty($_POST['login']) || empty($_POST['password']) || empty($_POST['email']))
	{
		header('Location: /regictrtion.php');
		exit;
	}
}
checkEmptyField();
Insert();
?>
<meta charset="utf-8">
<h1 style='color:green'>Регистрация прошла успешно!!!</h1>