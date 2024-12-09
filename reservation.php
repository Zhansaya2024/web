<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Брондау</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background-image: url('https://i.pinimg.com/originals/72/43/12/72431223307912311aadca156487c7e7.jpg'); /* Суретті көрсетіңіз */
            background-size: cover;
            background-position: center center;
            background-color: rgba(0, 0, 0, 0.5); /* Егер суретпен бірге жартылай мөлдір қабат қажет болса */
            color: white;
        }

        header {
            background-color: rgba(255, 102, 0, 0.8); /* Жартылай мөлдір фоны */
            color: white;
            padding: 20px;
            text-align: center;
        }

        .reservation-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            margin-top: 50px;
        }

        .reservation-container input {
            margin: 10px;
            padding: 10px;
            font-size: 1rem;
        }

        .tables-container {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 10px;
            margin-top: 20px;
            width: 100%;
            max-width: 800px;
        }

        .table {
            background-color: #fff;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }

        .table.available {
            background-color: #28a745; /* Available table */
            color: white;
        }

        .table.booked {
            background-color: #dc3545; /* Booked table */
            color: white;
            pointer-events: none;
        }

        .table p {
            margin: 0;
            font-size: 1.2rem;
        }

        .total-tables {
            font-size: 1.2rem;
            margin-top: 20px;
        }

        .time-selection {
            margin-top: 10px;
            display: none; /* Initially hidden */
        }

        .time-selection input {
            padding: 10px;
            font-size: 1rem;
        }

        #confirmationMessage {
            margin-top: 20px;
            padding: 10px;
            background-color: #28a745;
            color: white;
            font-size: 1.2rem;
            display: none; /* Initially hidden */
        }
    </style>
</head>
<body>

    <header>
        <h1>Брондау</h1>
        <p>Ресторанда үстелдерді брондау</p>
    </header>

    <div class="reservation-container">
        <label for="numPeople">Адам саны:</label>
        <input type="number" id="numPeople" min="1" max="20" placeholder="Адам санын енгізіңіз" onchange="filterTables()">
        
        <div class="tables-container" id="tablesContainer">
            <!-- Столдар осы жерде көрсетіледі -->
        </div>

        <div class="total-tables" id="totalTables"></div>

        <!-- Брондау хабарламасы -->
        <div id="confirmationMessage"></div>
    </div>

    <script>
        // Столдар мен олардың сыйымдылығы
        const tables = [
            { tableNumber: 1, capacity: 4, booked: false },
            { tableNumber: 2, capacity: 8, booked: false },
            { tableNumber: 3, capacity: 10, booked: false },
            { tableNumber: 4, capacity: 15, booked: false },
            { tableNumber: 5, capacity: 20, booked: false },
            { tableNumber: 6, capacity: 4, booked: true },
            { tableNumber: 7, capacity: 8, booked: false },
            { tableNumber: 8, capacity: 10, booked: true },
            { tableNumber: 9, capacity: 15, booked: false },
            { tableNumber: 10, capacity: 20, booked: false },
            { tableNumber: 11, capacity: 4, booked: false },
            { tableNumber: 12, capacity: 8, booked: true },
            { tableNumber: 13, capacity: 10, booked: false },
            { tableNumber: 14, capacity: 15, booked: false },
            { tableNumber: 15, capacity: 20, booked: true },
            { tableNumber: 16, capacity: 12, booked: false },
            { tableNumber: 17, capacity: 18, booked: false },
            { tableNumber: 18, capacity: 30, booked: false },
            { tableNumber: 19, capacity: 25, booked: false },
            { tableNumber: 20, capacity: 12, booked: true }
        ];

        // Функция, которая фильтрует столы в зависимости от числа людей
        function filterTables() {
            const numPeople = document.getElementById("numPeople").value;
            const tablesContainer = document.getElementById("tablesContainer");
            tablesContainer.innerHTML = '';  // Очищаем контейнер перед обновлением

            const filteredTables = tables.filter(table => table.capacity >= numPeople && !table.booked);

            filteredTables.forEach(table => {
                const tableDiv = document.createElement("div");
                tableDiv.classList.add("table", "available");
                tableDiv.innerHTML = `<p>Стол №${table.tableNumber}</p> ${table.capacity} адам</p>`;
                
                // Әр үстел үшін уақыт таңдау формуласын қосамыз
                const timeSelection = document.createElement('div');
                timeSelection.classList.add('time-selection');
                timeSelection.innerHTML = `
                    <label for="time-${table.tableNumber}">Уақыт таңдаңыз:</label>
                    <input type="time" id="time-${table.tableNumber}" onchange="selectTime(${table.tableNumber})">
                `;
                tableDiv.appendChild(timeSelection);

                // Әр үстелді басқанда уақыт таңдау терезесі ашылады
                tableDiv.addEventListener('click', function() {
                    timeSelection.style.display = 'block'; // Уақыт терезесін көрсету
                });

                tablesContainer.appendChild(tableDiv);
            });

            document.getElementById("totalTables").textContent = `Барлығы ${filteredTables.length} бос үстелдер бар.`;
        }

        // Уақыт таңдалған соң, оны көрсететін функция
        function selectTime(tableNumber) {
            const selectedTime = document.getElementById(`time-${tableNumber}`).value;
            const confirmationMessage = document.getElementById("confirmationMessage");
            
            if (selectedTime) {
                // Брондау хабарламасы
                confirmationMessage.style.display = "block";
                confirmationMessage.textContent = `Стол №${tableNumber} үшін ${selectedTime} уақытына орын брондалды!`;
                
                // Үстелді брондау
                tables.find(table => table.tableNumber === tableNumber).booked = true;
                
                // Күйді жаңарту
                filterTables();
            }
        }

        // Инициализация фильтрации при загрузке страницы
        filterTables();
    </script>

</body>
</html>
