<?php
session_start();

// Егер пайдаланушы сессияда жоқ болса, жүйеге кіргенше қайта бағыттаймыз
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Жаңа мәліметтерді алу
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Құпия сөзді хэштеу

    // Дерекқорға қосылу және мәліметтерді жаңарту
    // Бұл жерде сіздің дерекқорға қосылу кодыңыз болуы тиіс

    // Мысал ретінде:
    // $conn = new mysqli('localhost', 'root', '', 'your_database');
    // $sql = "UPDATE users SET username = '$username', email = '$email', password = '$password' WHERE id = {$_SESSION['user_id']}";
    // $conn->query($sql);

    // Жаңартулардан кейін пайдаланушыны дашбордқа қайта бағыттаймыз
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Баптауларды өзгерту</title>
    <style>
        /* Артқы фонға сурет қою */
        body {
            margin: 0;
            padding: 0;
            background-image: url('https://avatars.mds.yandex.net/i?id=fb0d3fe8fe33d605fdf31fd5309aee1e_l-10098996-images-thumbs&n=13'); /* Суреттің URL-ін өзгертіңіз */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100vh;
            font-family: 'Arial', sans-serif;
            color: white;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: rgba(0, 0, 0, 0.5); /* Жартылай мөлдір фон */
        }

        .form-container {
            text-align: center;
            padding: 40px;
            background: rgba(0, 0, 0, 0.7); /* Өткізгіш фон */
            border-radius: 15px;
            width: 80%;
            max-width: 800px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.8);
        }

        .form-container h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #ffcc00; /* Әдемі сары түс */
            text-transform: uppercase;
        }

        .form-container form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="password"] {
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
            border: 2px solid #00bfff;
            width: 100%;
            max-width: 300px;
            font-size: 1rem;
            background-color: #333;
            color: white;
        }

        .form-container input[type="submit"] {
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #00bfff;
            color: white;
            font-size: 1.1rem;
            border: none;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .form-container input[type="submit"]:hover {
            background-color: #0099cc;
        }

        a {
            color: #ffcc00;
            text-decoration: none;
            margin-top: 20px;
            display: inline-block;
        }

        a:hover {
            color: #fff;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="form-container">
            <h2>Пайдаланушы баптауларын өзгерту</h2>
            <form action="update_settings.php" method="post">
                <input type="text" name="username" placeholder="Жаңа пайдаланушы аты" required>
                <input type="email" name="email" placeholder="Жаңа электрондық пошта" required>
                <input type="password" name="password" placeholder="Жаңа құпия сөз" required>
                <input type="submit" value="Баптауларды сақтау">
            </form>
            <a href="dashboard.php">Дашбордқа қайту</a>
        </div>
    </div>

</body>
</html>