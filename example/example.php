<?php

$data = [
    [
        'user_id' => 101,
        'name' => 'Алиса',
        'active' => true,
        'orders' => [
            ['item' => 'Ноутбук', 'price' => 1200, 'status' => 'paid'],
            ['item' => 'Мышь', 'price' => 30, 'status' => 'pending']
        ]
    ],
    [
        'user_id' => 102,
        'name' => 'Борис',
        'active' => false,
        'orders' => [
            ['item' => 'Клавиатура', 'price' => 75, 'status' => 'paid']
        ]
    ],
    [
        'user_id' => 103,
        'name' => 'Виктор',
        'active' => true,
        'orders' => []
    ]
];

function processUserData($users_data) {
    echo "<h2>Отчет по активным пользователям и их оплаченным заказам:</h2>";

    foreach ($users_data as $user) {
        
        if ($user['active']) {
            
            echo "<div style='margin-left: 20px;'>";
            echo "<h3>Пользователь: " . $user['name'] . " (ID: " . $user['user_id'] . ")</h3>";
            
            if (!empty($user['orders'])) {
                // Уровень 4: Внутри условия if (есть заказы)
                
                echo "<ul>";
                foreach ($user['orders'] as $order) {
                    // Уровень 5: Внутри второго цикла foreach (заказы)
                    
                    if ($order['status'] === 'paid') {
                        // Уровень 6: Внутри условия if (оплаченный заказ)
                        
                        echo "<li>" . $order['item'] . " - Цена: $" . $order['price'] . "</li>";
                        
                    }
                } // Закрытие Уровня 5 (foreach orders)
                echo "</ul>";
                
            } else {
                // Уровень 4b: Внутри условия else (нет заказов)
                echo "<p>Нет заказов для этого пользователя.</p>";
            }
            
            echo "</div>";
            
        }
    } // Закрытие Уровня 2 (foreach users)
    
    // Конец функции (Уровень 1)
}

// Вызов функции для выполнения логики
processUserData($data);

?>
