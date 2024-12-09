<?php
session_start(); // Сессияны бастау

// Егер пайдаланушы сессияда жоқ болса, кіруге қайтадан жібереміз
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION['username'];

// Комментарий қосу формасын өңдеу
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['comment'])) {
    $comment = htmlspecialchars($_POST['comment']);
    
    // Дерекқорға қосылу және комментарийді сақтау
    // Бұл жерде дерекқорға қосылу кодыңыз болуы керек
    // Мысалы:
    // $conn = new mysqli('localhost', 'root', '', 'your_database');
    // $sql = "INSERT INTO comments (username, comment) VALUES ('$username', '$comment')";
    // $conn->query($sql);
    
    // Комментарийді сақтағаннан кейін, парақты қайта жүктейміз
    header("Location: help.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Көмек</title>
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

        .help-container {
            text-align: center;
            padding: 40px;
            background: rgba(0, 0, 0, 0.7); /* Өткізгіш фон */
            border-radius: 15px;
            width: 80%;
            max-width: 800px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.8);
        }

        .help-container h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #ffcc00; /* Әдемі сары түс */
            text-transform: uppercase;
        }

        .help-container p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        /* Меню стилі */
        .menu {
            display: inline-flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }

        .menu a {
            color: #ffcc00;
            border: none;
            background: none;
            font-size: 1.2rem;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .menu a:hover {
            color: #fff;
            background-color: #00bfff;
            text-decoration: none;
        }

        /* Көмек бөлімі */
        .help-content {
            font-size: 1.1rem;
            color: #ffffff;
            margin-top: 20px;
            line-height: 1.6;
        }

        /* Комментарий бөлімі */
        .comment-section {
            margin-top: 30px;
            background: rgba(0, 0, 0, 0.8);
            padding: 20px;
            border-radius: 10px;
        }

        .comment-section textarea {
            width: 100%;
            max-width: 500px;
            padding: 10px;
            border-radius: 5px;
            border: 2px solid #00bfff;
            background-color: #333;
            color: white;
            font-size: 1rem;
            resize: vertical;
        }

        .comment-section input[type="submit"] {
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #00bfff;
            color: white;
            font-size: 1.1rem;
            border: none;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.3s ease;
        }

        .comment-section input[type="submit"]:hover {
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
        <div class="help-container">
            <h2>Қош келдіңіз, <?php echo htmlspecialchars($username); ?>!</h2>

            <!-- Меню бөлімі -->
            <div class="menu">
                <a href="profile.php">Жеке бет</a>
                <a href="settings.php">Баптаулар</a>
                <a href="help.php">Көмек</a>
            </div>

            <p>Бұл бетте біз сізге көмек көрсету үшін қажетті барлық ақпаратты ұсынамыз.</p>

            <!-- Көмек бөлімі -->
            <div class="help-content">
                <h3>Жиі қойылатын сұрақтар:</h3>
                <ul>
                    <li><strong>Жүйеге қалай кіресіз?</strong> Жүйеге кіру үшін пайдаланушы аты мен құпия сөзді енгізіңіз.</li>
                    <li><strong>Құпия сөзді қалай қалпына келтіремін?</strong> Құпия сөзді қалпына келтіру үшін "Құпия сөзді ұмыттыңыз ба?" сілтемесін пайдаланыңыз.</li>
                    <li><strong>Деректерімді қалай жаңартып отырамын?</strong> Пайдаланушы баптауларын өзгерту үшін "Баптаулар" бөлімін пайдаланыңыз.</li>
                </ul>

                <p>Егер қосымша сұрақтар туындаса, бізге хабарласыңыз!</p>
            </div>

            <!-- Комментарий қалдыру бөлімі -->
            <div class="comment-section">
                <h3>Комментарий қалдырыңыз:</h3>
                <form action="help.php" method="post">
                    <textarea name="comment" placeholder="Сіздің пікіріңіз..." rows="4" required></textarea>
                    <input type="submit" value="Комментарийді жіберу">
                </form>
            </div>

            <a href="dashboard.php">Дашбордқа қайту</a>
        </div>
    </div>

</body>
</html>