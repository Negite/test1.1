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

// Отпровляем на почту 
mail("$mail_recipient", "$name", "$message");

// Вычисление времени отправки формы
$dteStart = new DateTime($data_open);
$dteEnd   = new DateTime($data_close); 
$dteSR  = $dteStart->diff($dteEnd);
$dteDiff = $dteSR->format("%H:%I:%S");
echo 'Время от начала заполнения формы и отправки в базу данных: ' .$dteDiff. '<br />';

// Проверяем заполненные поля 
if (empty($name)) echo '<h1>Заполните Заголовок письма!!</h1>';
if (empty($message)) echo '<h1>Заполните Текст письма</h1>';
if (empty($tvchannel)) echo '<h1>Выите любимый канал !!</h1>';
if (empty($browser)) echo '<h1>Выберете любимый браузер!!</h1>';

//Проверка на длину  символов 
function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);

    return $value;
}
function check_length($value = "", $min, $max) {
    $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
    return !$result;
}
if($_SERVER['REQUEST_METHOD'] == 'POST') {	
	$name = $_POST['name'];
	$message = $_POST['message'];
	$name = clean($name);
	$message = clean($message);
	if(!empty($name)) {
	    if(check_length($name, 5, 35)) {
	    } else {
	        echo "<h1>Заголовок письма должен содержать от 5 до 35 символов, вернитесь <a href='index.php'>НАЗАД</a> и введите коректно заголовок письма!</h1>";
        }

	} else {
	    echo "Заполните Заголовок письма";
    }
    // Только цифры и латинские буквы
    if (preg_match('/[^а-яА-Я\s]+/msi', $name)) {
    } else {
    echo("<h3>Загловок письма должен быть только на кирилице! вернитуться <a href='index.php'>НАЗАД</a></h3>");
    }
    //
    if(!empty($message)) {
	    if( check_length($message, 2, 1000)) {

	    } else {
	        echo "<h1>Текст письма должен содержать от 5 до 1000 символов, вернитесь <a href='index.php'>НАЗАД</a> и введите коректно заголовок письма!</h1>";
	    }
	} else {
	    echo "Заполните пустые поля";
	}
} 

// Выводим переменные
echo '<br/> Тема Письма: '.$name.'<br/>';
echo 'Сообщение в письме: '.$message.'<br/>'; 
echo 'Браузер: '.$browser.'<br />';
echo 'Время открытия формы: '.$data_open.'<br />';
foreach ($tvchannel as $key => $tv_line) {
echo "<b>$tv_line </b><br>";
};

// Блок 2: Cоздание подключения к базе данных разница времени,
$link = mysqli_connect($db_host, $db_user, $db_password, $db_base) or die('Ошибка' . mysqli_error($link));

// Блок 3: Записываем в БД
$query_insert = 'INSERT INTO messages (name, message, tvchannel, browser, data_open, data_close, dteDiff ) VALUES ("' . $name . '", "' . $message . '", "' . $comma_separated . '", "' . $browser . '", "' . $data_open . '", "' . $data_close . '", "' . $dteDiff . '")';
mysqli_query($link, $query_insert) or die('Ошибка' . mysqli_error($link));

// Блок 4: Вывод из БД
$query_select = 'SELECT * FROM messages';
$result = mysqli_query($link, $query_select) or die('Ошибка' . mysqli_error($link));
echo '<table>';
echo '<tr style="font-weight:bold"><td>Номер</td><td>Заголовок письма</td><td>Сообщение</td><td>Любимый канал</td><td>Любиый браузер</td><td>Время начала заполнения формы</td><td>Время отправки формы в базу данных</td><td>Разница открытия и отправки формы</td></tr>';
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
$query_insert = 'INSERT INTO messages (name, message, tvchannel, browser, data_open, data_close, dteDiff ) VALUES ("' . $name . '", "' . $message . '", "' . $tvchannel . '", "' . $browser . '", "' . $data_open . '", "' . $data_close . '", "' . $dteDiff . '")';
   echo "<tr><td>" . $row["id"] . '</td><td>' . $row["name"] . '</td><td>' . $row["message"] . '</td><td>' . $row["tvchannel"] .'</td><td>' . $row["browser"] .  '</td><td>' . $row["data_open"] . '</td><td>' . $row["data_close"] . '</td><td>' . $row["dteDiff"] . '</td></tr>';
}
mysqli_free_result($result);
echo '</table>';
// Блок 5: Закрыть подключения к базе данных
mysqli_close($link);
?>