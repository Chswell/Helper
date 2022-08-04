<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="icon.png" type="image/x-icon">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Helper</title>
</head>
<body>
	<div class="container">
		<div class="auth">
			<form action="auth/auth.php" method="post">
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Логин</label>
			    <input type="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="login">
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputPassword1" class="form-label">Пароль</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
			  </div>
			  <button type="submit" class="btn btn-primary">Войти</button>
			</form>
		</div>
	</div>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>