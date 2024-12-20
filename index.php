<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кіру</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        /* Артқы фонды сурет ретінде қою */
        body {
            margin: 0;
            padding: 0;
            background-image: url('https://i.pinimg.com/736x/42/92/8f/42928f151cdf4b825212776fef8b294f.jpg'); /* Суреттің жолы */
            background-size: cover; /* Сурет экранның толық енін және биіктігін алады */
            background-position: center; /* Сурет орталықта болады */
            background-attachment: fixed; /* Фонды тұрақты етеді */
            height: 100vh;
        }

        /* Контент бөлігін реттеу */
        .auth-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .auth-form {
            background: rgba(0, 0, 0, 0.7); /* Жартылай мөлдір қара фон */
            color: white;
            padding: 30px;
            border-radius: 10px;
            width: 100%;
            max-width: 400px;
        }

        .auth-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .auth-form input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .auth-form button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
        }

        .auth-form button:hover {
            background-color: #0056b3;
        }

        .auth-form .register-link {
            text-align: center;
            margin-top: 10px;
        }

        .auth-form .register-link a {
            color: #007bff;
            text-decoration: none;
        }

        .auth-form .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- Кіру формасы -->
    <div class="auth-container">
        <form class="auth-form" action="login_process.php" method="POST">
            <h2>Кіру</h2>
            <label for="username">Пайдаланушы аты</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Құпия сөз</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Кіру</button>

            <div class="register-link">
                <p>Тіркелмедіңіз бе? <a href="register.php">Тіркеліңіз</a></p>
            </div>
        </form>
    </div>

</body>
</html>
