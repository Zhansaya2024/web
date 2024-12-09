<?php
session_start(); // Сессияны бастау

// Егер пайдаланушы сессияда жоқ болса, кіруге қайтадан жібереміз
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// Пайдаланушы аты сессиядан алынады
$username = $_SESSION['username'];

// Мысал ретінде пайдаланушының бұрынғы деректерін сақтау
// Нақты деректерді базаға қосу керек
$table_number = "12";  // Брондалған столдың нөмірі
$people_count = "4";   // Адам саны
$reservation_time = "2024-12-15 18:00"; // Брондау уақыты

// Редакциялауды сақтау
$update_success = false; // Қате немесе сәтті жаңарту жайлы хабар
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Пайдаланушыдан енгізілген деректерді алу
    $new_table_number = trim($_POST['table_number']);
    $new_people_count = trim($_POST['people_count']);
    $new_reservation_time = trim($_POST['reservation_time']);

    // Осы жерде деректерді базаға немесе файлға сақтау логикасын қосыңыз
    // Қазіргі уақытта өзгертілген деректерді тек сессияда сақтап жатырмыз
    $_SESSION['table_number'] = $new_table_number;
    $_SESSION['people_count'] = $new_people_count;
    $_SESSION['reservation_time'] = $new_reservation_time;

    // Деректерді базаға сақтау логикасы (мысалы)
    // MySQL арқылы сақтаудың мысалы
    // $conn = new mysqli('localhost', 'username', 'password', 'database');
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }
    // $sql = "UPDATE reservations SET table_number = ?, people_count = ?, reservation_time = ? WHERE username = ?";
    // $stmt = $conn->prepare($sql);
    // $stmt->bind_param('siss', $new_table_number, $new_people_count, $new_reservation_time, $username);
    // $stmt->execute();
    // $stmt->close();
    // $conn->close();

    // Егер сәтті жаңартылған болса
    $update_success = true;

    // Қайта бағыттау немесе хабарлама көрсету
    header("Location: profile.php"); // Профиль бетіне қайта бағыттау
    exit;
}
?>

<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Броньды редакциялау</title>
    <style>
        /* Стильдер */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-size: 1rem;
            margin-bottom: 8px;
            display: block;
        }
        input[type="text"], input[type="number"], input[type="datetime-local"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .cancel-btn {
            background-color: #f44336;
        }
        .cancel-btn:hover {
            background-color: #e53935;
        }
        .success-message {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="form-container">
        <h2>Броньды редакциялау</h2>

        <!-- Егер брондау уақыты өзгертілген болса, хабарлама көрсету -->
        <?php if ($update_success): ?>
            <div class="success-message">
                Брондау уақыты сәтті өзгертілді!
            </div>
        <?php endif; ?>

        <form action="edit_reservation.php" method="POST">
            <label for="table_number">Стол нөмірі:</label>
            <input type="text" id="table_number" name="table_number" value="<?php echo htmlspecialchars($table_number); ?>" required>

            <label for="people_count">Адам саны:</label>
            <input type="number" id="people_count" name="people_count" value="<?php echo htmlspecialchars($people_count); ?>" required>

            <label for="reservation_time">Брондау уақыты:</label>
            <input type="datetime-local" id="reservation_time" name="reservation_time" value="<?php echo date('Y-m-d\TH:i', strtotime($reservation_time)); ?>" required>

            <button type="submit">Сақтау</button>
            <a href="profile.php"><button type="button" class="cancel-btn">Болдырмау</button></a>
        </form>
    </div>
</div>

</body>
</html>
