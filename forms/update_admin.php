<?php
	session_start();
	require_once '../auth/connect.php';

	$ticket_id = $_GET['id'];
	$ticket = mysqli_query($connect, "SELECT * FROM `tickets` WHERE `id` = '$ticket_id'");
	$ticket = mysqli_fetch_assoc($ticket);

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../icon.png" type="image/x-icon">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<title>Helper</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="../profile.php">ГКБ 11</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	      <div class="navbar-nav">
	        <a class="nav-link active" aria-current="page" href="../profile.php">Главная</a>
	        <a class="nav-link" href="#">Статисты</a>
	        <a class="nav-link" href="#">Общая информация</a>
	        <a class="nav-link" href="#">Новости</a>
	      </div>
	    </div>
	  </div>
	</nav>
	<div class="container">
		<div class="form_ticket" style="margin: 0 auto 50px auto;">
			<form action="update_ticket_admin.php" method="post">
			  <div class="mb-3 me-6">
			  	<label><h3>Изменение заявки</h3></label>
			  	<input type="hidden" name="id" value="<?= $ticket['id']?>">
			  	<?php
			  		if($ticket['name'] == 1) {
			  	?>
			  			<br><label>Принтер</label>
			  		    <select class="form-select" aria-label="Default select example" name="name">
							<option disabled>Выберите принтер из списка</option>
							<option selected value="1">One</option>
							<option value="2">Two</option>
							<option value="3">Three</option>
						</select>
				<?php }
				
			  		  elseif ($ticket['name'] == 2) {
			  	?>		<label>Принтер</label>
			  			<select class="form-select" aria-label="Default select example" name="name">
						  <option disabled>Выберите принтер из списка</option>
						  <option value="1">One</option>
						  <option selected value="2">Two</option>
						  <option value="3">Three</option>
						</select>
				<?php }		
			  		 elseif ($ticket['name'] == 3) {
			  	?>		<label>Принтер</label>
			  			<select class="form-select" aria-label="Default select example" name="name">
						  <option disabled>Выберите принтер из списка</option>
						  <option value="1">One</option>
						  <option value="2">Two</option>
						  <option selected value="3">Three</option>
						</select>
			  	<?php } elseif($ticket['name'] == 0) {
			  	?>
			  			<br><label>Принтер</label>
			  		    <select class="form-select" aria-label="Default select example" name="name">
							<option selected disabled>Выберите принтер из списка</option>
							<option value="1">One</option>
							<option value="2">Two</option>
							<option value="3">Three</option>
						</select>
				<?php }
			  	?>
			    
			  </div>
			  <div class="mb-3">
			  	<?php 
			  	if($ticket['cause'] == 'Картридж') {
			  	?>		
			  			<label>Причина</label>
			  		    <select class="form-select" aria-label="Default select example" name="cause">
						  <option disabled>Выберите причину поломки</option>
						  <option selected value="1">Картридж</option>
						  <option value="2">Принтер</option>
						</select>
			  	<?php	} elseif ($ticket['cause'] == 'Принтер') {
			  	?>		<label>Причина</label>
			  			<select class="form-select" aria-label="Default select example" name="cause">
						  <option disabled>Выберите причину поломки</option>
						  <option value="1">Картридж</option>
						  <option selected value="2">Принтер</option>
						</select>
			  	<?php	} elseif($ticket['cause'] == '') {
			  	?>		
			  			<label>Причина</label>
			  		    <select class="form-select" aria-label="Default select example" name="cause">
						  <option selected disabled>Выберите причину поломки</option>
						  <option value="1">Картридж</option>
						  <option value="2">Принтер</option>
						</select>
			  	<?php	}
			  			if($_SESSION['user']['login'] === 'admin') {
			  				?>
			  				<label>Статус</label>
			  				<select class="form-select" aria-label="Default select example" name="status">
							  <option selected disabled>Статус</option>
							  <option value="1">Отправлено</option>
							  <option value="2">На рассмотрении</option>
							  <option value="3">Готово</option>
							</select>
						<?php 
			  			}
			  	?>
			    
			  </div>

			  <div class="mb-3">
			  	<label>Номер кабинета</label>
			    <input type="text" class="form-control" value="<?= $ticket['cabinet'] ?>" name="cabinet" placeholder="Напишите номер кабинета">
			  </div>
			  <div class="mb-3">
			  	<label>Дополнительное описание</label>
			    <input type="text" class="form-control" value="<?= $ticket['discription'] ?>" name="discription" placeholder="Дополнительное описание">
			  </div>
			  <button type="submit" class="btn btn-primary">Изменить</button>
			</form>
		</div>
	</div>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>