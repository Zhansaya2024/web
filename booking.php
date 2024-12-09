<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мейрамханаға брондау</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('https://i.pinimg.com/736x/42/92/8f/42928f151cdf4b825212776fef8b294f.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .content {
            color: white;
            text-align: center;
            padding: 50px 20px;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            max-width: 600px;
            margin: 50px auto;
        }

        .booking-form label,
        .booking-form input {
            margin: 10px 0;
            font-size: 16px;
        }

        .reserve-button {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .reserve-button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <div class="content">
        <h1>Мейрамханаға брондау</h1>
        <form action="booking_confirmation.php" method="POST" class="booking-form">
            <label for="num-people">Адам саны:</label>
            <input type="number" id="num-people" name="num-people" min="1" required>

            <label for="reservation-date">Брондау күні:</label>
            <input type="date" id="reservation-date" name="reservation-date" required>

            <label for="reservation-time">Брондау уақыты:</label>
            <input type="time" id="reservation-time" name="reservation-time" required>

            <button type="submit" class="reserve-button">Брондау жасау</button>
        </form>
    </div>

</body>
</html>
