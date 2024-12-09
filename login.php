<?php
session_start(); // Сессияны бастау

// Мәліметтер базасына қосылу
$servername = "localhost";
$username = "root"; // phpMyAdmin-де қолданылатын пайдаланушы аты
$password = ""; // phpMyAdmin-де қолданылатын құпия сөз
$dbname = "restaurant"; // Деректер базасының атын қолданыңыз

// Деректер базасына қосылу
$conn = new mysqli($servername, $username, $password, $dbname);

// Қосылу қатесі болса, хабарлама көрсету
if ($conn->connect_error) {
    die("Қосылу қатесі: " . $conn->connect_error);
}

// Кіру формасын өңдеу
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    // Пайдаланушыны деректер базасынан іздеу
    $sql = "SELECT * FROM users WHERE username = '$input_username' LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Пайдаланушы табылды
        $user = $result->fetch_assoc();

        // Құпия сөзді тексеру
        if (password_verify($input_password, $user['password'])) {
            // Құпия сөз дұрыс
            $_SESSION['username'] = $user['username']; // Сессияға пайдаланушы атын сақтау
            $_SESSION['user_id'] = $user['id']; // Сессияға пайдаланушы ID-ін сақтау
            header("Location: dashboard.php"); // Кіруге сәтті болса, 'dashboard.php' бетіне жіберу
            exit;
        } else {
            // Құпия сөз қате
            $error_message = "Құпия сөз қате!";
        }
    } else {
        // Пайдаланушы табылмады
        $error_message = "Пайдаланушы аты қате!";
    }
}
?>

<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кіру</title>
    <style>
        /* Фонға сурет қою */
        body {
            margin: 0;
            padding: 0;
            background-image: url('https://i3.wp.com/kartinki.pics/uploads/posts/2021-07/1627173060_21-kartinkin-com-p-fon-dlya-menyu-vostochnoi-kukhni-krasivo-23.jpg?ssl=1'); /* Суреттің URL-ін қойыңыз */
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
            <h2>Кіру</h2>

            <!-- Қате туралы хабарлама көрсету -->
            <?php if (isset($error_message)): ?>
                <p style="color: red;"><?php echo $error_message; ?></p>
            <?php endif; ?>

            <!-- Логотип немесе сурет қосу -->
            <div style="text-align: center; margin-bottom: 20px;">
                <img src="https://media.istockphoto.com/id/610566012/ru/фото/пищевая-рамка-на-белом-деревянном-столе-свободное-пространство.jpg?s=612x612&w=0&k=20&c=W-MNSeew3Ay7Tk0tfVyfgthRfgKCgXe1MqP-TK-jjUQ=" alt="Logo" style="max-width: 150px;">
            </div>

            <form action="" method="POST">
                <label for="username">Пайдаланушы аты:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Құпия сөз:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Кіру</button>
            </form>

            <p>Тіркелмегенсіз бе? <a href="register.php">Тіркеліңіз</a></p>
        </div>
    </div>

</body>
</html>
