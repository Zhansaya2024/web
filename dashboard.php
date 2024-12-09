<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Дашборд</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://static.tildacdn.com/tild3931-3466-4962-b137-633565343733/803.jpg'); /* Фон ретінде сурет қосу */
            background-size: cover; /* Суретті экранның толық көлемінде көрсету */
            background-position: center; /* Суретті экранның ортасына орналастыру */
            background-attachment: fixed; /* Фонды тұрақты қылу */
        }

        header {
            background-color: rgba(255, 102, 0, 0.8); /* Артқы фонның түсі және ашықтық қосылған */
            color: white;
            padding: 20px;
            text-align: center;
            border-bottom: 2px solid #ffffff;
        }

        .dashboard-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }

        .button-container {
            display: flex;
            gap: 20px;
            margin-top: 30px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .dashboard-button {
            display: inline-block;
            background-color: #ff6600;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1.1rem;
            text-decoration: none;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .dashboard-button:hover {
            background-color: #00bfff;
            color: white;
        }

        footer {
            background-color: rgba(255, 102, 0, 0.8); /* Артқы фонның түсі және ашықтық қосылған */
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
            border-top: 2px solid #ffffff;
        }

    </style>
</head>
<body>

    <header>
        <h1>Дашборд</h1>
        <p>Пайдаланушы үшін басқару панелі</p>
    </header>

    <div class="dashboard-container">
        <div class="button-container">
            <a href="profile.php" class="dashboard-button">Жеке бет</a>
            <a href="settings.php" class="dashboard-button">Баптаулар</a>
            <a href="help.php" class="dashboard-button">Көмек</a>
            <a href="menu.php" class="dashboard-button">Меню</a>
            <a href="reservation.php" class="dashboard-button">Брондау</a>
        </div>
    </div>

    <footer>
        <p>Все права защищены © 2024. Ресторан!</p>
    </footer>

</body>
</html>