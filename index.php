<?php

echo 'Hello Zhans';

?>


<?php
// Аударма мәліметтерін анықтайтын массив
$translations = [
    'kk' => [
        'menu_title' => 'Европейский асхана - Люкс меню',
        'starters' => 'Бастауыш тағамдар',
        'mains' => 'Негізгі тағамдар',
        'salads' => 'Салаттар',
        'desserts' => 'Десерттер',
        'drinks' => 'Сусындар',
        'seafood' => 'Теңіз өнімдері',
        'kids' => 'Балдар тағамдары',
        'beluga_caviar' => 'Кaviar Beluga с тостами — 25,000 тг',
        'foie_gras' => 'Foie Gras с үйрек етімен — 18,000 тг',
        'wagyu_steak' => 'Сардиндермен қапталған Стейк "Wagyu" — 70,000 тг',
        'seafood_paella' => 'Теңіз өнімдерімен дайындалған «Paella» — 50,000 тг',
        'greek_salad' => 'Грек салаты — 7,000 тг',
        'caesar_salad' => 'Цезарь салаты — 8,000 тг',
        'chocolate_mousse' => 'Шоколадты мусс «Valrhona» — 12,000 тг',
        'wine' => 'Шарап «Château Margaux» — 80,000 тг',
    ],
    'ru' => [
        'menu_title' => 'Европейская кухня - Люкс меню',
        'starters' => 'Закуски',
        'mains' => 'Основные блюда',
        'salads' => 'Салаты',
        'desserts' => 'Десерты',
        'drinks' => 'Напитки',
        'seafood' => 'Морепродукты',
        'kids' => 'Детские блюда',
        'beluga_caviar' => 'Кавиар Белуга с тостами — 25,000 тг',
        'foie_gras' => 'Фуа-гра с уткой — 18,000 тг',
        'wagyu_steak' => 'Стейк "Wagyu" с сардинами — 70,000 тг',
        'seafood_paella' => 'Паэлья с морепродуктами — 50,000 тг',
        'greek_salad' => 'Греческий салат — 7,000 тг',
        'caesar_salad' => 'Цезарь салат — 8,000 тг',
        'chocolate_mousse' => 'Шоколадный мусс «Valrhona» — 12,000 тг',
        'wine' => 'Шарап «Château Margaux» — 80,000 тг',
    ],
    'en' => [
        'menu_title' => 'European Cuisine - Luxury Menu',
        'starters' => 'Starters',
        'mains' => 'Main Courses',
        'salads' => 'Salads',
        'desserts' => 'Desserts',
        'drinks' => 'Drinks',
        'seafood' => 'Seafood',
        'kids' => 'Kids Meals',
        'beluga_caviar' => 'Beluga Caviar with Toasts — 25,000 KZT',
        'foie_gras' => 'Foie Gras with Duck Breast — 18,000 KZT',
        'wagyu_steak' => 'Wagyu Steak with Sardines — 70,000 KZT',
        'seafood_paella' => 'Seafood Paella — 50,000 KZT',
        'greek_salad' => 'Greek Salad — 7,000 KZT',
        'caesar_salad' => 'Caesar Salad — 8,000 KZT',
        'chocolate_mousse' => 'Chocolate Mousse «Valrhona» — 12,000 KZT',
        'wine' => 'Château Margaux Wine — 80,000 KZT',
    ],
    // Қытай, түрік, француз тілдеріне аударуды осылай жалғастыруға болады
];

$selected_lang = isset($_GET['lang']) ? $_GET['lang'] : 'kk';
?>

<!DOCTYPE html>
<html lang="<?php echo $selected_lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $translations[$selected_lang]['menu_title']; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Тіл таңдаушы -->
    <div class="language-selector">
        <a href="?lang=kk">Қазақша</a> | 
        <a href="?lang=ru">Русский</a> | 
        <a href="?lang=en">English</a> 
    </div>

    <h1><?php echo $translations[$selected_lang]['menu_title']; ?></h1>

    <form action="order.php" method="POST">
        <!-- Бастауыш тағамдар -->
        <div class="category">
            <h3><?php echo $translations[$selected_lang]['starters']; ?></h3>

            <div class="menu-item">
                <img src="images/beluga_caviar.jpg" alt="Beluga Caviar with Toasts">
                <label for="starter1"><?php echo $translations[$selected_lang]['beluga_caviar']; ?></label>
                <input type="checkbox" name="starters[]" value="Beluga Caviar with Toasts">
                <p>Құрамы: Белуга уылдырығы, тосттар, лимон, ақжелкек.</p>
            </div>

            <div class="menu-item">
                <img src="images/foie_gras_duck.jpg" alt="Foie Gras with Duck Breast">
                <label for="starter2"><?php echo $translations[$selected_lang]['foie_gras']; ?></label>
                <input type="checkbox" name="starters[]" value="Foie Gras with Duck Breast">
                <p>Құрамы: Үйрек бауыры, үйрек еті, қызанақ, майонез.</p>
            </div>
        </div>

        <!-- Негізгі тағамдар -->
        <div class="category">
            <h3><?php echo $translations[$selected_lang]['mains']; ?></h3>

            <div class="menu-item">
                <img src="images/wagyu_steak.jpg" alt="Wagyu Steak with Sardines">
                <label for="main1"><?php echo $translations[$selected_lang]['wagyu_steak']; ?></label>
                <input type="checkbox" name="mains[]" value="Wagyu Steak with Sardines">
                <p>Құрамы: Wagyu стейк, сардиндер, тұздық, зәйтүн майы.</p>
            </div>

            <div class="menu-item">
                <img src="images/seafood_paella.jpg" alt="Seafood Paella">
                <label for="main2"><?php echo $translations[$selected_lang]['seafood_paella']; ?></label>
                <input type="checkbox" name="mains[]" value="Seafood Paella">
                <p>Құрамы: Теңіз өнімдері, күріш, зәйтүн майы, специя.</p>
            </div>
        </div>

        <!-- Десерттер -->
        <div class="category">
            <h3><?php echo $translations[$selected_lang]['desserts']; ?></h3>

            <div class="menu-item">
                <img src="images/valrhona_mousse.jpg" alt="Valrhona Chocolate Mousse">
                <label for="dessert1"><?php echo $translations[$selected_lang]['chocolate_mousse']; ?></label>
                <input type="checkbox" name="desserts[]" value="Valrhona Chocolate Mousse">
                <p>Құрамы: Valrhona шоколадты мусс, крем, ваниль.</p>
            </div>
        </div>

        <!-- Сусындар -->
        <div class="category">
            <h3><?php echo $translations[$selected_lang]['drinks']; ?></h3>

            <div class="menu-item">
                <img src="images/chateau_margaux_wine.jpg" alt="Château Margaux Wine">
                <label for="drink1"><?php echo $translations[$selected_lang]['wine']; ?></label>
                <input type="checkbox" name="drinks[]" value="Château Margaux Wine">
                <p>Құрамы: Француздық «Château Margaux» шарабы.</p>
            </div>
        </div>
        
        <!-- Submit Button -->
        <button type="submit" class="submit-btn">Тап
