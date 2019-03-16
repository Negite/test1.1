<? 
// Подключаем файл конфигурации
include_once ('config.php');

// Присваеваем переменные 
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

// Выводим переменные
echo '<h1>отправлено</h1>';

// Блок 2: Cоздание подключения к базе данных
$link = mysqli_connect($db_host, $db_user, $db_password, $db_base) or die('Ошибка' . mysqli_error($link));

// Блок 3: Записываем в БД
$query_insert = 'INSERT INTO messages (name, email, comment) VALUES ("' . $name . '", "' . $email . '", "' . $comment . '")';
mysqli_query($link, $query_insert) or die('Ошибка' . mysqli_error($link));

// Блок 5: Закрыть подключения к базе данных
mysqli_close($link);
?>