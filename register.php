<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
</head>
<body>
	<form action="auth/reg.php" method="post">
	  <div class="mb-3">
	    <label for="exampleInputEmail1" class="form-label">Логин</label>
	    <input type="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="login">
	  </div>
	  <div class="mb-3">
	    <label for="exampleInputPassword1" class="form-label">Пароль</label>
	    <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
	  </div>
	  <div class="mb-3">
	    <label for="exampleInputEmail1" class="form-label">Роль</label>
	    <input type="role" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="role">
	  </div>
	  <button type="submit" class="btn btn-primary">Регистрация</button>
	</form>
</body>
</html>