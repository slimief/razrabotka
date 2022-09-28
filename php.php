<?php
    $db_host='localhost'; // ваш хост
    $db_name='laba2'; // ваша бд
    $db_user='root'; // пользователь бд
    $db_pass='root'; // пароль к бд
    
    $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name); // коннект с сервером бд

    $result = $mysqli->query('SELECT * FROM `laba22`'); // запрос на выборку
    while($row = $result->fetch_assoc())// получаем все строки в цикле по одной
    {
        echo '<p>'.'<h1>'.$row['h1'].'</h1>'.'</p>';
        echo '<p>'.$row['content'].'</p>';
    }
?>
