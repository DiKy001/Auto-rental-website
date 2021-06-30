<!DOCTYPE html>

<head>
	<title>Бронирование</title>
	<link href="./img/logo.png" rel="icon" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400" rel="stylesheet">
    <link href="./styles/global.css" rel="stylesheet" >
	<link href="./styles/Booking.css" rel="stylesheet" type="text/css" />
	<link href="./styles/navigation.css" rel="stylesheet" type="text/css" />
	<link href="./styles/contacts.css" rel="stylesheet" type="text/css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
	<?php include("./components/navigation.php") ?>
	<form class="row g-3 needs-validation" onsubmit="getBooking()" novalidate>
		<fieldset>
			<legend>Личные данные</legend>
			<div class="col-md-4 position-relative">
				<label for="firstName" class="form-label">Имя</label>
				<input type="text" class="form-control" id="firstName" placeholder="Ваше имя" required>
				<div class="invalid-tooltip">
					Пожалуйста, введите имя.
				</div>
			</div>
			<div class="col-md-4 position-relative">
				<label for="lastName" class="form-label">Фамилия</label>
				<input type="text" class="form-control" id="lastName" placeholder="Ваше имя" required>
				<div class="invalid-tooltip">
					Пожалуйста, введите фамилию.
				</div>
			</div>
			<div class="col-md-4 position-relative">
				<label for="email" class="form-label">Email</label>
				<div class="input-group has-validation">
					<span class="input-group-text" id="emailPrepend">@</span>
					<input type="email" class="form-control" id="email" placeholder="Ваш электронный адрес" aria-describedby="emailPrepend" required>
					<div class="invalid-tooltip">
						Пожалуйста, введите корректный электронный адрес.
					</div>
				</div>
			</div>
			<div class="col-md-4 position-relative">
				<label for="phone" class="form-label">Телефонный номер</label>
				<input type="tel" class="form-control" id="phone" placeholder="Ваш номер" required>
				<div class="invalid-tooltip">
					Пожалуйста, введите телефонный номер.
				</div>
			</div>
			<div class="col-md-4 position-relative">
				<label for="town" class="form-label">Город</label>
				<input type="text" class="form-control" id="town" placeholder="Ваш город" required>
				<div class="invalid-tooltip">
					Пожалуйста, введите город проживания.
				</div>
			</div>
			<div class="col-md-4 position-relative">
				<label for="adress" class="form-label">Домашний адрес</label>
				<input type="text" class="form-control" id="adress" placeholder="Ваш адрес" required>
				<div class="invalid-tooltip">
					Пожалуйста, введите адрес проживания.
				</div>
			</div>
			<div class="col-md-4 position-relative">
				<label for="age" class="form-label">Возраст</label>
				<select class="form-control" id="age" aria-label="Default select example" required>
					<option selected disabled value="">Выберите</option>
					<option value="18-25">18-25</option>
					<option value="26-35">26-35</option>
					<option value="36-50">36-50</option>
					<option value="51-65">51-65</option>
					<option value="over65">более 65</option>
				</select>
				<div class="invalid-tooltip">
					Пожалуйста, выберите один из вариантов.
				</div>
			</div>
		</fieldset>
		<fieldset>
			<legend>Предпочитаемый тип автомобиля</legend>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="flexRadio1" id="flexRadio1" required>
				<label class="form-check-label" for="flexRadio1">
					Маленькие авто
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="flexRadio1" id="flexRadio1" required>
				<label class="form-check-label" for="flexRadio1">
					Среднеразмерные седаны
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="flexRadio1" id="flexRadio1" required>
				<label class="form-check-label" for="flexRadio1">
					Внедорожники
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="flexRadio1" id="flexRadio1" required>
				<label class="form-check-label" for="flexRadio1">
					Минивэны
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="flexRadio1" id="flexRadio1" required>
				<label class="form-check-label" for="flexRadio1">
					Кабриолет
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="flexRadio1" id="flexRadio1" required>
				<label class="form-check-label" for="flexRadio1">
					Микроавтобусы
				</label>
				<div class="invalid-tooltip" style="margin-top:150px;">
					Пожалуйста, выберите один из вариантов.
				</div>
			</div>
		</fieldset>
		<fieldset>
			<legend>Срок аренды</legend>
			<div class="col-md-4 position-relative">
				<label for="startDate" class="form-label">Начало аренды</label>
				<input type="date" class="form-control" id="startDate" min="<?php echo date("Y-m-d")?>" required>
				<div class="invalid-tooltip">
					Пожалуйста, выберите дату начала бронирования.
				</div>
			</div>
			<div class="col-md-4 position-relative">
				<label for="finishDate" class="form-label">Завершение аренды</label>
				<input type="date" class="form-control" id="finishDate" required>
				<div class="invalid-tooltip">
					Пожалуйста, выберите дату окончания бронирования.
				</div>
			</div>
		</fieldset>
		<div class="col-12">
			<button class="btn btn-primary" type="submit">Заказать</button>
		</div>
	</form>
	<br />
	<br />
	<br />
	<?php include("./components/contacts.php") ?>
	<script src="./script/validation.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>