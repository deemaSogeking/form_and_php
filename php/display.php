<meta charset="UTF-8" />
<?php
$name = null;
$address = null;
$city = null;

if (isset($_POST['postName'])) {
    $name = $_POST['postName'];
    echo "ФИО: $name <br>";
}
if (isset($_POST['postAddress'])) {
    $address = $_POST['postAddress'];
    echo "Адрес: $address <br>";
}
if (isset($_POST['postCity'])) {
    $city = $_POST['postCity'];
    echo "Выбранный город: $city <br>";
}

if (isset($_POST['add'])) {
    $add  = $_POST['add'];
    foreach ($add as $value) {
        echo "Дополнительные опции: $value <br>";
    }
} else {
    echo "Без дополнительных опций. <br>";
    $add = [];
}
echo "<hr>";
echo "Спасибо что выбрали наш сервис!<br>";
echo '<a href="index.html">Вернуться на главную страницу</a>';



?>