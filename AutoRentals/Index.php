<!DOCTYPE html>

<head>
    <title>Аренда авто</title>
    <link href="./img/logo.png" rel="icon" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400" rel="stylesheet">
    <link href="./styles/grid.css" rel="stylesheet" >
    <link href="./styles/global.css" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="./styles/Home.css" rel="stylesheet" type="text/css" />
    <link href="./styles/navigation.css" rel="stylesheet" type="text/css" />
    <link href="./styles/contacts.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <?php include("./components/navigation.php") ?>
    <header>
        <div class="heroText">
            <h1>Вы выбрали правильный сайт для аренды авто</h1>
            <a class="btn btnRes" href="./Booking.php">Забронировать</a>
        </div>
    </header>
    <div class="group row">
        <div class="col span_1_of_3 intro">
            <h2><i><img class="icons" src="./img/service.png"/></i>Наш сервис</h2>
            <p>
                Выбирайте тариф самостоятельно. У нас всегда найдётся тариф, который Вас устроит.
                На то, чтобы оформить услугу проката необходима только пара-другая минут.
                Мы предлагаем взять в аренду автомобиль в любое время суток.
                Специалисты нашей компании окажут вам квалифицированную помощь в выборе автомобиля и разъяснят все условия аренды.
            </p>
        </div>
        <div class="col span_2_of_3 intro">
            <h2><i><img class="icons" src="./img/anvantages.png"/></i>Наши преимущества</h2>
            <p>
                Большой современный автопарк. Оперативное получение авто. Весь транспорт застрахован по АВТОКАСКО.
                Машины в исправном техническом состоянии. Постоянные акции, бонусы и скидки. Возможность выезда за границу.
                Круглосуточная техподдержка. Чистые и ухоженные авто не только снаружи, но и внутри.
            </p>
        </div>
        <div class="col span_3_of_3 intro">
            <h2><i><img class="icons" src="./img/auto.png"/></i>Наши авто</h2>
            <p>
                Каждый предлагаемый нами автомобиль на прокат находится в идеальном техническом состоянии и не доставит вам никаких проблем в эксплуатации.
                Вместе с машиной вы получаете страховку на нее и полный пакет необходимой документации.
                В нашем автопарке подобрать автомобиль сможет каждый желающий - выбор вариантов по-настоящему велик.
            </p>
        </div>
    </div>
    <div class="group row">
        <h1 class="vehicleTypeTitle">Типы автомобилей</h1>
        <div class="col span_1_of_3 vehicle">
            <img class="carIcon" src="./img/city-car.png" alt="small car">
            <h2>Маленькие авто</h2>
            <ul>
                <li>Polo или Accent </li>
                <li>АКПП или МКПП</li>
                <li>4 места</li>
                <li>2 <i class="ion-ios-briefcase"></i> и 4<i class="ion-person"></i></li>
                <li>Бензиновый двигатель</li>
            </ul>
        </div>
        <div class="col span_2_of_3 vehicle">
            <img class="carIcon" src="./img/sedan.png" alt="sedan">
            <h2>Среднеразмерные седаны</h2>
            <ul>
                <li>Camry или Passat</li>
                <li>АКПП</li>
                <li>5 мест</li>
                <li>3 <i class="ion-ios-briefcase"></i> и 5<i class="ion-person"></i></li>
                <li>Бензиновый двигатель</li>
            </ul>
        </div>
        <div class="col span_3_of_3 vehicle">
            <img class="carIcon" src="./img/SUV.png" alt="suv">
            <h2>Внедорожники</h2>
            <ul>
                <li>Prado или MURANO</li>
                <li>АКПП</li>
                <li>5 или 7 мест</li>
                <li>4 <i class="ion-ios-briefcase"></i> и 5<i class="ion-person"></i></li>
                <li>Дизельный двигатель</li>
            </ul>
        </div>
    </div>
    <div class="group row">
        <div class="col span_1_of_3 vehicle">
            <img class="carIcon" src="./img/minivan.png" alt="miniVan">
            <h2>Минивэны</h2>
            <ul>
                <li>Zafira или S-MAX</li>
                <li>АКПП</li>
                <li>8 мест</li>
                <li>4 <i class="ion-ios-briefcase"></i> и 8<i class="ion-person"></i></li>
                <li>Бензиновый или дизельный двигатель</li>
            </ul>
        </div>
        <div class="col span_2_of_3 vehicle">
            <img class="carIcon" src="./img/cabriolet.png" alt="cabriolt">
            <h2>Кабриолет</h2>
            <ul>
                <li>Сhevrolet Camaro</li>
                <li>АКПП</li>
                <li>2 места</li>
                <li>2 <i class="ion-ios-briefcase"></i> и 2<i class="ion-person"></i></li>
                <li>Бензиновый двигатель</li>
            </ul>
        </div>
        <div class="col span_3_of_3 vehicle">
            <img class="carIcon" src="./img/van.png" alt="van">
            <h2>Микроавтобусы</h2>
            <ul>
                <li>Master или Transit</li>
                <li>АКПП или МКПП</li>
                <li>2 места</li>
                <li>12 <i class="ion-ios-briefcase"></i> и 2<i class="ion-person"></i></li>
                <li>Дизельный двигатель</li>
            </ul>
        </div>
    </div>
    <?php include("./components/carousel.php") ?>
    <div class="group row">
        <div class="col">
            <h2>Суточная аренда</h2>
            <table class="table rateTable">
                <thead>
                    <tr style="background-color: #f1c40f">
                        <th>Тип автомобиля</th>
                        <th>Трансмиссия</th>
                        <th>Дневная аренда</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Маленькие авто</td>
                        <td>АКПП или МКПП</td>
                        <td>50 BYN</td>
                    </tr>
                    <tr>
                        <td>Среднеразмерные седаны</td>
                        <td>АКПП</td>
                        <td>90 BYN</td>
                    </tr>
                    <tr>
                        <td>Внедорожник</td>
                        <td>АКПП</td>
                        <td>100 BYN</td>
                    </tr>
                    <tr>
                        <td>Минивэн</td>
                        <td>АКПП</td>
                        <td>120 BYN</td>
                    </tr>
                    <tr>
                        <td>Кабриолет</td>
                        <td>АКПП</td>
                        <td>120 BYN</td>
                    </tr>
                    <tr>
                        <td>Микроавтобус</td>
                        <td>АКПП или МКПП</td>
                        <td>100 BYN</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php include("./components/contacts.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>