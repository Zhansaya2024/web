<?php
// Пайдаланушының мәліметтерін алу
$num_people = $_POST['num-people'];
$reservation_date = $_POST['reservation-date'];
$reservation_time = $_POST['reservation-time'];

// Деректерді дерекқорға сақтау немесе пайдалану
echo "Брондау сәтті аяқталды!<br>";
echo "Адам саны: " . $num_people . "<br>";
echo "Брондау күні: " . $reservation_date . "<br>";
echo "Брондау уақыты: " . $reservation_time . "<br>";
?>
