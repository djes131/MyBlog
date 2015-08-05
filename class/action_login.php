<?php
session_start();
require_once 'dbconnect.php';
class Loggin extends DbConnect
{
    protected $username;
    protected $pass;

    function __construct()
    {
        parent :: __construct();
        if (isset($_POST['username'])) { $this -> username = $_POST['username'];}
        if (isset($_POST['pass'])) { $this -> pass=$_POST['pass'];}

       /* if (empty($this -> username) or empty($this -> pass))
        {
            exit ("You do not have entered all the information , go back and fill in all fields !");
        }
		*/
        $this -> username = stripslashes($this -> username);
        $this -> username = htmlspecialchars($this -> username);
        $this -> pass = stripslashes($this -> pass);
        $this -> pass = htmlspecialchars($this -> pass);

        $this -> username = trim($this -> username);
        $this -> pass = trim($this -> pass);
    }

    public function UserLoggin(){
        $result = "SELECT * FROM userss WHERE login='{$this -> username}'";
        $queryResult = $this -> conn->query($result);

        $myrow = mysqli_fetch_array($queryResult);

        if (empty($myrow['pass']))
        {
            exit ("Sorry, you entered an incorrect login or password. <a href='../index.php'>Main page</a> ");
        }
        else {
            //если существует, то сверяем пароли
            if ($myrow['pass']==$this -> pass) {
                $_SESSION['username']=$myrow['username'];
                $_SESSION['id']=$myrow['id'];
                echo "You have successfully logged in ! <a href='../index.php'>Main page</a>";
            }
            else {
                exit ("Sorry, you entered an incorrect login or password .<a href='../index.php'>Main page</a>");
            }
        }
    }
}
$objloggin = new Loggin();
$objloggin -> UserLoggin();


