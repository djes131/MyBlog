<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Регистрация</title>
</head>
<body>
	<form action="class/registr.php" method="post">
		<fieldset>
			<legend>Регистрация нового пользователя</legend>
			<label>Логин:</label>
			<input type="text" name="login" required/><br/><br/>
			<label>Пароль:</label>
			<input type="password" name="password" required/><br/><br/>
			<label>E-mail:</label>
			<input type="text" name="email" required/><br/><br/>
			<input type="submit" name="submit" value="Зарегистрироваться">
		</fieldset>
	</form>
</body>
</html>