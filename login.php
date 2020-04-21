<?php
		require "db.php";
		$data = $_POST;
		if( isset($data['do_login']))
		{
			$errors = array();
			$user = R::findOne('users', 'login = ?', array($data['login']));
			if( $user )
			{
				// логин существует
				if( password_verify($data['password'], $user->password))
				{
					//логиним пользователя
					$_SESSION['logged_user'] = $user;
					echo '<div style="color: green;
					font-size: 30px;
					margin-top:-500px;
					">Вы авторизованы!<br/>
					Можете перейти на <a href="/">Главную</a> страницу</div><hr>';
				} else 
				{
					$errors[] = 'Не верно введен пароль';
				}
				}else
					{
						$errors[] = 'Пользователь с таким логином не найден';
					}
				if( ! empty($errors)) 
					 {
					  echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
				}
			}
				?>
				<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets2/css/main.css">
</head>
<body>

<div class="container">
		<form action="login.php" method="POST">
	<p>
		<p><strong>Логин</strong>:</p>
		<input type="text" name="login" value="<?php echo @$data['login']; ?>">
	</p>

	<p>
		<p><strong>Пароль</strong>:</p>
		<input type="password" name="password" value="<?php echo @$data['password']; ?>">
	</p>
	<p>
		<button type="submit" name="do_login">Войти</button>
	</p>
</form>
</div>

</body>
</html>