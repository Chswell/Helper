<?php 
	session_start();
	require_once 'auth/connect.php';
	if ($_SESSION['user']['login'] == 'user') {
		die('Незя так делать');
		header('Location: profile.php');
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
	<title>ADMIN</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="profile.php">ГКБ 11</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse position-relative" id="navbarNavAltMarkup">
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
	<div class="container">

		<table id="table-id" class="table table-striped" style="margin: 50px 0 0 0 ;">
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
						<td><a href="forms/update_admin.php?id=<?= $ticket[0]?>">Изменить</a></td>
						<td><a href="forms/delete_ticket.php?id=<?= $ticket[0]?>" style="color: red;">Удалить</a></td>
						
					</tr>
			<?php
				}
			?>
		</table>
	</div>

	<script src='js/tablesort.min.js'></script>
	<script src='js/tablesort.number.min.js'></script>
	<script src='js/tablesort.date.min.js'></script>

	<script>
	  new Tablesort(document.getElementById('table-id'));
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>