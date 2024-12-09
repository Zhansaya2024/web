<?php
session_start(); // Сессияны бастау

// Егер пайдаланушы сессияда жоқ болса, кіруге қайтадан жібереміз
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// Пайдаланушы аты сессиядан алынады
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Жеке бет</title>
    <style>
        /* Артқы фон */
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
            background: rgba(0, 0, 0, 0.6); /* Жартылай мөлдір фон */
        }

        .profile-container {
            text-align: center;
            padding: 40px;
            background: rgba(0, 0, 0, 0.8); /* Өткізгіш фон */
            border-radius: 15px;
            width: 80%;
            max-width: 600px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.8);
        }

        .profile-container h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #ffcc00; /* Әдемі сары түс */
            text-transform: uppercase;
        }

        .profile-container p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .profile-container .info {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .profile-container .info p {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        .profile-container a {
            display: inline-block;
            font-size: 1.1rem;
            text-decoration: none;
            color: #00bfff;
            padding: 10px 20px;
            border: 2px solid #00bfff;
            border-radius: 5px;
            margin-top: 10px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .profile-container a:hover {
            background-color: #00bfff;
            color: #fff;
        }

        .buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        /* Редакциялау батырмасының стилі */
        .buttons a.edit {
            background-color: #ffcc00;
            color: black;
            border: none;
        }

        .buttons a.edit:hover {
            background-color: #ffb300;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="profile-container">
            <h2>Қош келдіңіз, <?php echo htmlspecialchars($username); ?>!</h2>

            <div class="info">
                <p><strong>Пайдаланушы аты:</strong> <?php echo htmlspecialchars($username); ?></p>
                <p><strong>Электрондық пошта:</strong> example@example.com</p> <!-- Бұл жерді нақты мәліметтермен ауыстырыңыз -->
                <p><strong>Тіркелген күн:</strong> 2024-12-01</p> <!-- Мысал, нақты мәліметтермен ауыстырыңыз -->
            </div>

            <div class="buttons">
                <a href="edit_profile.php" class="edit">Редакциялау</a>
                <a href="logout.php">Шығу</a>
            </div>
        </div>
    </div>

</body>
</html>
