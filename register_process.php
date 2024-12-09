<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тіркелу</title>
    <style>
        /* Артқы фонды сурет ретінде қою */
        body {
            margin: 0;
            padding: 0;
            background-image: url('https://i.pinimg.com/736x/42/92/8f/42928f151cdf4b825212776fef8b294f.jpg'); /* Суреттің жолы */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100vh;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .form-container {
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 30px;
            border-radius: 10px;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-container label,
        .form-container input,
        .form-container button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form-container input {
            font-size: 16px;
        }

        .form-container button {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #218838;
        }

        .form-container .login-link {
            text-align: center;
            margin-top: 10px;
        }

        .form-container .login-link a {
            color: #007bff;
            text-decoration: none;
        }

        .form-container .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="form-container">
            <h2>Тіркелу</h2>

            <?php
            // Мәліметтер базасына қосылу
            $servername = "localhost";
            $username = "root"; // өз пайдаланушы атыңызды жазып қойыңыз
            $password = ""; // өз құпия сөзіңізді жазып қойыңыз
            $dbname = "restaurant"; // өз деректер базасының атын жазыңыз

            // Деректер базасына қосылу
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Қосылу қатесі болса, хабарлама көрсету
            if ($conn->connect_error) {
                die("Қосылу қатесі: " . $conn->connect_error);
            }

            // Пайдаланушы деректерін алу
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $confirm_password = $_POST['confirm-password'];

                // Құпия сөздер бірдей ме тексеру
                if ($password !== $confirm_password) {
                    echo "<p style='color: red;'>Құпия сөздер сәйкес келмейді!</p>";
                } else {
                    // Құпия сөзді шифрлау
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                    // Деректерді деректер базасына қосу
                    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

                    if ($conn->query($sql) === TRUE) {
                        echo "<p style='color: green;'>Тіркелу сәтті аяқталды! <a href='login.php' style='color: white;'>Кіруге өтуден өтсеңіз болады</a></p>";
                    } else {
                        echo "<p style='color: red;'>Қате: " . $conn->error . "</p>";
                    }
                }
            }
            ?>

            <form action="" method="POST">
                <label for="username">Пайдаланушы аты:</label>
                <input type="text" id="username" name="username" required>

                <label for="email">Электрондық пошта:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Құпия сөз:</label>
                <input type="password" id="password" name="password" required>

                <label for="confirm-password">Құпия сөзді растаңыз:</label>
                <input type="password" id="confirm-password" name="confirm-password" required>

                <button type="submit">Тіркелу</button>
            </form>
        </div>
    </div>

</body>
</html>
