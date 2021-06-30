<!DOCTYPE html>

<head>
	<title>Арендная стоимость</title>
	<link href="./img/logo.png" rel="icon" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400" rel="stylesheet">
    <link href="./styles/global.css" rel="stylesheet" >
	<link href="./styles/RentalRates.css" rel="stylesheet" type="text/css" />
	<link href="./styles/navigation.css" rel="stylesheet" type="text/css" />
	<link href="./styles/contacts.css" rel="stylesheet" type="text/css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
	<?php include("./components/navigation.php") ?>
	<h2>
		В данной таблице представлены наши тарифы.<br />
		Мы предоставим значительную скидку на долгосрочную аренду.
	</h2>
	<br />
	<div class="row">
		<h2>Арендная стоимость</h2>
		<table class="table">
			<thead>
				<tr style="background-color: #f1c40f">
					<th>Тип автомобиля</th>
					<th>Трансмиссия</th>
					<th>1-дневная аренда</th>
					<th>5-дневная аренда</th>
					<th>30-дневная аренда</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Маленькие авто</td>
					<td>АКПП или МКПП</td>
					<td>50 BYN</td>
					<td>230 BYN</td>
					<td>1270 BYN</td>
				</tr>
				<tr>
					<td>Среднеразмерные седаны</td>
					<td>АКПП</td>
					<td>90 BYN</td>
					<td>410 BYN</td>
					<td>2260 BYN</td>
				</tr>
				<tr>
					<td>Внедорожник</td>
					<td>АКПП</td>
					<td>100 BYN</td>
					<td>450 BYN</td>
					<td>2480 BYN</td>
				</tr>
				<tr>
					<td>Минивэн</td>
					<td>АКПП</td>
					<td>120 BYN</td>
					<td>540 BYN</td>
					<td>2970 BYN</td>
				</tr>
				<tr>
					<td>Кабриолет</td>
					<td>АКПП</td>
					<td>120 BYN</td>
					<td>540 BYN</td>
					<td>2970 BYN</td>
				</tr>
				<tr>
					<td>Микроавтобус</td>
					<td>АКПП или МКПП</td>
					<td>100 BYN</td>
					<td>410 BYN</td>
					<td>2260 BYN</td>
				</tr>
			</tbody>
		</table>
	</div>
	<br />
	<br />
	<br />
	<div class="row">
		<h2>Способы оплаты</h2>
		<p>Мы предлагаем разнообразные способы оплаты, включающие:</p>
		<ul>
			<li>Оплата в нашем салоне: наличная или безналичная;</li>
			<li>Онлайн оплата при бронировании авто;</li>
			<li>Оплата с помощью электронного кошелька при бронировании авто;</li>
			<li>Оплата с помощью системы расчетов ЕРИП при бронировании авто;</li>
		</ul>
	</div>
	<br/>
	<br/>
	<div class="row">
		<h2>Бронирование</h2>
		<p>Мы предлагаем вам забронировать подходящий вам автомобиль на удобную для вас дату и время</p>
		<p>При отмене бронирования не позднее чем за 7 суток до начала аренды, то мы вам вернем всю предоплаченную сумму, 
			в противном случае, нам придется взыскать штраф в размере 30% от полной стоимости аренды.</p>
	</div>
	<br/>
	<br/>
	<?php include("./components/contacts.php") ?>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>