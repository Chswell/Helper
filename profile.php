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
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">ГКБ 11</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	      <div class="navbar-nav">
	        <a class="nav-link active" aria-current="page" href="#">Главная</a>
	        <a class="nav-link" href="#">Статисты</a>
	        <a class="nav-link" href="#">Общая информация</a>
	        <a class="nav-link" href="#">Новости</a>
	      </div>
	    </div>
	  </div>
	</nav>
	<div class="container">
		<div class="form_ticket" style="margin: 0 auto 50px auto;">
			<form action="" method="post">
			  <div class="mb-3 me-6">
			  	<label><h3>Создание заявки</h3></label>
			    <select class="form-select" aria-label="Default select example">
				  <option selected>Выберите принтер из списка</option>
				  <option value="1">One</option>
				  <option value="2">Two</option>
				  <option value="3">Three</option>
				</select>
			  </div>
			  <div class="mb-3">
			    <select class="form-select" aria-label="Default select example">
				  <option selected>Выберите причину поломки</option>
				  <option value="1">One</option>
				  <option value="2">Two</option>
				</select>
			  </div>

			  <div class="mb-3">
			    <input type="password" class="form-control" id="" name="number_cabinet" placeholder="Напишите номер кабинета">
			  </div>
			  <div class="mb-3">
			    <input type="textarea" class="form-control" id="" name="discription" placeholder="Дополнительное описание">
			  </div>
			  <button type="submit" class="btn btn-primary">Отправить</button>
			</form>
		</div>
		<table class="table table-striped">
			<tr>
				<th>ID</th>
				<th>Название принтера</th>
				<th>Причина</th>
				<th>Кабинет</th>
				<th>Описание</th>
				<th>Статус</th>
				<th>Время обращения</th>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
				<td>6</td>
				<td>7</td>
			</tr>
		</table>
	</div>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>