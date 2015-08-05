<?php
require_once 'dbconnect.php';
class User extends DbConnect
{
	public function getUserById($id)
	{
		$result = '';
		$query = "SELECT * FROM users WHERE id = {$id}";	
		$result = $this->runQuery($query);

		return $result;
	}
}