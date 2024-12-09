<?php
session_start(); // Сессияны бастау

// Сессияны жою
session_unset(); // Сессиядағы барлық деректерді жоямыз
session_destroy(); // Сессияны жоямыз

// Қайта бағыттау (dashboard.php немесе басқа бет)
header("Location: dashboard.php");
exit;
?>
