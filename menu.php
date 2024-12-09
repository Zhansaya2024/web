<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Қазақ Ұлттық Тамақтары</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #ff6600;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .menu-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }

        .menu-category {
            background-color: #fff;
            padding: 20px;
            margin: 10px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .menu-category h2 {
            background-color: #ff6600;
            color: white;
            padding: 10px;
            border-radius: 5px;
        }

        .menu-item {
            padding: 5px 0;
            border-bottom: 1px solid #ddd;
        }

        .menu-item:last-child {
            border-bottom: none;
        }

        .menu-item span {
            font-weight: bold;
        }

        .menu-item input[type="checkbox"] {
            margin-right: 10px;
        }

        .total-price {
            text-align: center;
            font-size: 20px;
            margin-top: 20px;
            font-weight: bold;
        }

        footer {
            background-color: #ff6600;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* Дашбордқа қайту батырмасын стильдеу */
        .back-dashboard {
            display: inline-block;
            background-color: #ff6600;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1.1rem;
            text-decoration: none;
            margin-top: 30px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .back-dashboard:hover {
            background-color: #00bfff;
            color: white;
        }
    </style>
</head>
<body>

    <header>
        <h1>Қазақ Ұлттық Тамақтары</h1>
        <p>Біздің ресторанға қош келдіңіз! Келіңіздер, дәмді тағамдарымызды көріңіздер!!</p>
    </header>

    <div class="menu-container">

        <!-- Супы -->
        <div class="menu-category">
            <h2>Супы</h2>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="2500"> <span>1.</span> Сорпа</div>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="2200"> <span>2.</span> Солянка</div>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="2090"> <span>3.</span> Борщ</div>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="1900"> <span>4.</span> Кеспе көже</div>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="1990"> <span>5.</span> Мастава</div>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="1590"> <span>6.</span> Тауық Супы</div>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="1390"> <span>7.</span> Жасымық сорпасы</div>
        </div>

        <!-- Салаттар -->
        <div class="menu-category">
            <h2>Салаттар</h2>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="1590"> <span>1.</span> Қызылша Салаты</div>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="1650"> <span>2.</span> Көкөніс Салаты</div>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="1750"> <span>3.</span> Брокколи Салаты</div>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="1800"> <span>4.</span> Греческий Салаты</div>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="1650"> <span>5.</span> Ян ю Салаты</div>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="1790"> <span>6.</span> Пекинский Салат</div>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="2090"> <span>7.</span> ВосточныйСалаты</div>
        </div>

        <!-- Екінші тағамдар -->
        <div class="menu-category">
            <h2>Екінші Тағамдар</h2>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="4590"> <span>1.</span> Бешбармақ</div>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="4790"> <span>2.</span> Қуырдақ</div>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="3090"> <span>3.</span> Котлет</div>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="3550"> <span>4.</span> Қой Етінен Палау</div>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="2290"> <span>5.</span> Тауық Қуырдақ</div>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="2390"> <span>6.</span> Тефтели с пюре</div>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="2590"> <span>7.</span> Шашлык</div>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="2200"> <span>8.</span> Лағман</div>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="1800"> <span>9.</span> Манты</div>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="1590"> <span>10.</span> Пельмен</div>
        </div>

        <!-- Десерттер -->
        <div class="menu-category">
            <h2>Десерттер</h2>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="1190"> <span>1.</span> Чизкейк</div>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="1200"> <span>2.</span> Сникерс</div>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="1150"> <span>3.</span> Напалеон</div>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="1190"> <span>4.</span> Медовик</div>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="1290"> <span>5.</span> Прага</div>
        </div>

        <!-- Шәйлер -->
        <div class="menu-category">
            <h2>Шәйлер</h2>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="1100"> <span>1.</span> Ташкент Шәй</div>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="1100"> <span>2.</span> Зімбір Шәй</div>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="1100"> <span>3.</span> Маракандық Шәй</div>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="1100"> <span>4.</span> Малина  Шәй</div>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="1100"> <span>5.</span> Жеміс Шәй</div>
        </div>

        <!-- Лимонадтар -->
        <div class="menu-category">
            <h2>Лимонадтар</h2>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="1800"> <span>1.</span> Киви-лайм Лимонады</div>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="1850"> <span>2.</span> Құлпынай Лимонады</div>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="1750"> <span>3.</span> Алма Лимонады</div>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="1900"> <span>4.</span> Классикалық Лимонады</div>
            <div class="menu-item"><input type="checkbox" class="menu-item-checkbox" data-price="1950"> <span>5.</span> Тропикалық Лимонады</div>
        </div>

    </div>

    <div class="total-price">
        <p>Жалпы бағасы: <span id="totalPrice">0</span> тг</p>
    </div>

    <!-- Дашбордқа қайту батырмасы -->
    <div class="back-dashboard-container">
        <a href="dashboard.php" class="back-dashboard">Дашбордқа қайту</a>
    </div>

    <footer>
        <p>Все права защищены © 2024. Добро пожаловать в наш ресторан!</p>
    </footer>

    <script>
        const checkboxes = document.querySelectorAll('.menu-item-checkbox');
        const totalPriceElem = document.getElementById('totalPrice');
        
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', updateTotalPrice);
        });

        function updateTotalPrice() {
            let total = 0;
            checkboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    total += parseInt(checkbox.getAttribute('data-price'));
                }
            });
            totalPriceElem.textContent = total;
        }
    </script>

</body>
</html>

