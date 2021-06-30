<!DOCTYPE html>

<head>
    <title>Типы авто</title>
    <link href="./img/logo.png" rel="icon" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400" rel="stylesheet">
    <link href="./styles/VehicleTypes.css" rel="stylesheet" type="text/css" >
    <link href="./styles/navigation.css" rel="stylesheet" type="text/css" >
    <link href="./styles/contacts.css" rel="stylesheet" type="text/css" >
    <link href="./styles/grid.css" rel="stylesheet" >
    <link href="./styles/global.css" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <?php include("./components/navigation.php") ?>
    <nav class="types">
        <ol>
            <li><a href="#smallVehicle"><button type="button" class="btn btn-primary">Маленькие авто</button></a></li>
            <li><a href="#mediumVehicle"><button type="button" class="btn btn-primary">Среднеразмерные седаны</button></a></li>
            <li><a href="#largeVehicle"><button type="button" class="btn btn-primary">Внедорожники</button></a></li>
        </ol>
    </nav>-->
    <a name="smallVehicle"></a>
    <h2>Маленькие авто</h2>
    <div class="group vehicleType smallVehicle">
        <div>
            <div class="image span_1_of_2">
                <img class="rounded" src="./img/VehiclesTypes/PoloSmallVehicle.jpg" alt="small_vehicle_manual" />
            </div>
            <div class="panelA span_2_of_2">
                <h4> Volkswagen Polo</h4>
                <ul>
                    <li>5 Дверей</li>
                    <li>МКПП</li>
                    <li>Медиа плеер</li>
                    <li>Кондиционер</li>
                    <li>Дневная аренда: 50 BYN</li>
                    <li><a href="https://www.volkswagen.by/models/new-polo/"><button type="button" class="btn btn-outline-primary">Подробнее</button></a></li>
                </ul>
            </div>
            <br/>
            <div class="image span_1_of_2">
                <img class="rounded" src="./img/VehiclesTypes/AccentSmallVehicle.jpg" alt="small_vehicle_auto" />
            </div>
            <div class="panelA span_2_of_2">
                <h4>Hyundai Accent</h4>
                <ul>
                    <li>5 Дверей</li>
                    <li>АКПП</li>
                    <li>Медиа плеер</li>
                    <li>Кондиционер</li>
                    <li>Дневная аренда: 50 BYN</li>
                    <li><a href="https://hyundai.by/showroom/cars/new-accent/highlights/"><button type="button" class="btn btn-outline-primary">Подробнее</button></a></li>
                </ul>
            </div>
        </div>
    </div>
    <a name="mediumVehicle"></a><br />
    <h2>Среднеразмерные седаны</h2>
    <div class="group vehicleType mediumVehicle">
        <div class="image span_1_of_2">
            <img class="rounded" src="./img/VehiclesTypes/CamryMediumVehicle.jpg" alt="medium_vehicle" />
        </div>
        <div class="panelA span_2_of_2">
            <h4>Toyota Camry</h4>
            <ul>
                <li>4 Двери</li>
                <li>АКПП</li>
                <li>Медиа установка</li>
                <li>Климат-контроль</li>
                <li>Дневная аренда: 90 BYN</li>
                <li><a href="https://toyota.by/toyota/camry-2021?trade_source=menu"><button type="button" class="btn btn-outline-primary">Подробнее</button></a></li>
            </ul>
        </div>
        <br/>
        <div class="image span_1_of_2">
            <img class="rounded" src="./img/VehiclesTypes/PassatMediumVehicle.jpg" alt="medium_vehicle" />
        </div>
        <div class="panelA span_2_of_2">
            <h4>Volkswagen Passat</h4>
            <ul>
                <li>4 Двери</li>
                <li>АКПП</li>
                <li>Медиа установка</li>
                <li>Климат-контроль</li>
                <li>Дневная аренда: 90 BYN</li>
                <li><a href="https://www.volkswagen.by/models/new-passat/"><button type="button" class="btn btn-outline-primary">Подробнее</button></a></li>
            </ul>
        </div>
    </div>
    <a name="largeVehicle"></a><br />
    <h2>Внедорожники</h2>
    <div class="group vehicleType largeVehicle">
        <div class="image span_1_of_2">
            <img class="rounded" src="./img/VehiclesTypes/PradoLargeVehicle.jpg" alt="medium_vehicle" />
        </div>
        <div class="panelA span_2_of_2">
            <h4>Toyota Land Cruiser Prado</h4>
            <ul>
                <li>5 Дверей</li>
                <li>АКПП</li>
                <li>Высокая проходимость</li>
                <li>Климат-контроль</li>
                <li>Дневная аренда: 90 BYN</li>
                <li><a href="https://toyota.by/toyota/land-cruiser-prado-2020?trade_source=menu"><button type="button" class="btn btn-outline-primary">Подробнее</button></a></li>
            </ul>
        </div>
        <br/>
        <div class="image span_1_of_2">
            <img class="rounded" src="./img/VehiclesTypes/MuranoLargeVehicle.jpg" alt="medium_vehicle" />
        </div>
        <div class="panelA span_2_of_2">
            <h4>Nissan Murano</h4>
            <ul>
                <li>5 Дверей</li>
                <li>АКПП</li>
                <li>Высокая проходимость</li>
                <li>Климат-контроль</li>
                <li>Дневная аренда: 90 BYN</li>
                <li><a href="https://nissan-belarus.by/models/murano/"><button type="button" class="btn btn-outline-primary">Подробнее</button></a></li>
            </ul>
        </div>
    </div>
    <br />
    <?php include("./components/contacts.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>