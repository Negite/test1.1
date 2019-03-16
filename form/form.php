<? 
// Подключаем файл конфигурации
include_once ('config.php');

// Присваеваем переменные 
$name = $_POST['name'];
$message = $_POST['message'];
$browser = $_POST['browser'];
$tvchannel = $_POST['tvchannel'];
$data_open = $_POST['data_open'];
$data_close = date("Y-m-d H:i:s");
$comma_separated = implode(",", $tvchannel);

// Проверяем заполненные поля 
if (empty($name)) echo '<h1>Заполните Заголовок письма!!</h1>';
if (empty($message)) echo '<h1>Заполните Текст письма</h1>';
if (empty($tvchannel)) echo '<h1>Выите любимый канал !!</h1>';
if (empty($browser)) echo '<h1>Выберете любимый браузер!!</h1>';

// Выводим переменные
echo 'Тема Письма: '.$name.'<br/>';
echo 'Сообщение в письме: '.$message.'<br/>'; 
echo 'Браузер: '.$browser.'<br />';
echo 'Время открытия формы: '.$data_open.'<br />';
foreach ($tvchannel as $key => $omg) {
echo "<b>$omg </b><br>";
};


// Блок 2: Cоздание подключения к базе данных
$link = mysqli_connect($db_host, $db_user, $db_password, $db_base) or die('Ошибка' . mysqli_error($link));

// Блок 3: Записываем в БД
$query_insert = 'INSERT INTO messages (name, message, tvchannel, browser, data_open, data_close ) VALUES ("' . $name . '", "' . $message . '", "' . $comma_separated . '", "' . $browser . '", "' . $data_open . '", "' . $data_close . '")';
mysqli_query($link, $query_insert) or die('Ошибка' . mysqli_error($link));

// Блок 4: Вывод из БД
$query_select = 'SELECT * FROM messages';
$result = mysqli_query($link, $query_select) or die('Ошибка' . mysqli_error($link));

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
$query_insert = 'INSERT INTO messages (name, message, tvchannel, browser, data_open, data_close ) VALUES ("' . $name . '", "' . $message . '", "' . $omg . '", "' . $browser . '", "' . $data_open . '", "' . $data_close . '")';
    echo "<div>" . $row["id"] . ' ' . $row["name"] . ' ' . $row["message"] . ' ' . $row["tvchannel"] .' ' . $row["message"] .  ' ' . $row["data_open"] . ' ' . $row["data_close"] . '  </div>';

}
mysqli_free_result($result);

// Блок 5: Закрыть подключения к базе данных
mysqli_close($link);
?>