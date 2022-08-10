<?php 
	session_start();
	require_once 'auth/connect.php';
	if (!$_SESSION['user']) {
		header('Location: index.php');
	}
?>

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
	<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
	
	<title>ГКБ 11</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="profile.php">ГКБ 11</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	      <div class="navbar-nav">
	        <a class="nav-link active" aria-current="page" href="profile.php">Главная</a>
	        <a class="nav-link" href="#">Стат.отдел</a>
	        <a class="nav-link" href="#">Общая информация</a>
	        <a class="nav-link" href="#">Новости</a>
	        <a class="nav-link position-absolute top-50 end-0 translate-middle-y" href="auth/logout.php" style="padding-right: 50px;">Выход</a>
	      </div>
	    </div>
	  </div>
	</nav>
	<div class="modelImg" id="model-1"> <!-- id идентефикатор нужного изображения выбраного в селекте  -->
				  <img  src="image/ML2160.jpg" alt="Модель 1" /></div>
				<div class="modelImg"  id="model-2">
				  <img src="image/b210.jpg" alt="Модель 2" />
				</div>
				<div class="modelImg"  id="model-3">
				  <img src="image/phaser3020.jpg" alt="Модель 3" />
				</div>
	<div class="container">
		<div class="form_ticket" style="margin: 0 auto 50px auto;">
			<form action="forms/create_ticket.php" method="post">
			  <div class="mb-3 me-6">
			  	<label><h3>Создание заявки</h3></label>
			  	<br>
			  	<label>Принтер</label>
			    <select id="printer" class="model form-select" aria-label="Default select example" name="name">
				  <option selected disabled>Выберите принтер из списка</option>
				  <option data="#model-1" value="1">Sumsung ML-2160</option>
				  <option data="#model-2" value="2">Xerox B210</option>
				  <option data="#model-3" value="3">Xerox Phaser 3020</option>
				  <option data="#model-4" value="4">Другой принтер</option>
				</select>
			  </div>
			  <div class="mb-3">
			  	<label>Причина</label>
			    <select class="form-select" aria-label="Default select example" name="cause">
				  <option selected disabled>Выберите причину поломки</option>
				  <option value="1">Картридж</option>
				  <option value="2">Принтер</option>
				</select>
			  </div>

			  <div class="mb-3">
			  	<label>Номер кабинета</label>
			    <input type="textarea" class="form-control" id="" name="cabinet" placeholder="Напишите номер кабинета">
			  </div>
			  <div class="mb-3">
			  	<label>Дополнительное описание</label>
			    <input type="textarea" class="form-control" id="" name="discription" placeholder="Дополнительное описание">
			  </div>
			  <button type="submit" class="btn btn-primary">Отправить</button>
			</form>
		</div>
		<table id="table-id" class="table table-striped" id="table-id">
			<tr data-sort-method='none'>
				<th>ID</th>
				<th>Название принтера</th>
				<th>Причина</th>
				<th>Кабинет</th>
				<th>Описание</th>
				<th>Статус</th>
				<th>Время обращения</th>
			</tr>

			<?php 
				$tickets = mysqli_query($connect, "SELECT * FROM `tickets`");
				$tickets = mysqli_fetch_all($tickets);
				foreach ($tickets as $ticket) {
			?>
					<tr>
						<td><?= $ticket[0]?></td>
						<td><?= $ticket[1]?></td>
						<td><?= $ticket[2]?></td>
						<td><?= $ticket[3]?></td>
						<td><?= $ticket[4]?></td>
						<td><?= $ticket[5]?></td>
						<td><?= $ticket[6]?></td>
						<td><a href="forms/update.php?id=<?= $ticket[0]?>">Изменить</a></td>
						
					</tr>
			<?php
				}
			?>

		</table>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript">
					$(function() {
						$(".model").change(function(){ //При изменении модели
							var img_id = $(".model").children("option:selected").attr("data"); // Получаем значение атрибута блока с изображением модели автомобиля который нужно показать на изображении
					      $(".modelImg").fadeOut(1); // прячем все блоки с изображением автомобилей
					      $(img_id).fadeIn(10); // показываем нужный блок с изображением автомобиля
						});
					});
				</script>
	<script src='js/tablesort.min.js'></script>
	<script src='js/tablesort.number.js'></script>
	<script src='js/tablesort.date.js'></script>

	<script>
	  new Tablesort(document.getElementById('table-id'));
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>