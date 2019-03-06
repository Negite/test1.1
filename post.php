<? 

$name = $_POST['name'];
echo 'Тема Письма: '.$name.'<br/>';


$message = $_POST['message'];
echo 'Сообщение в письме: '.$message.'<br/>'; 

$browser = $_POST['browser'];
echo 'Браузер: '.$browser.'<br />';
    

$tvchannel = $_POST['tvchannel'];
echo 'Каналы: '.$tvchannel.'<br />';
var_dump($tvchannel);
echo '<br />' ;


$name_hidden = $_POST['name_hidden'];
echo 'Секретное поле: '.$name_hidden.'<br />';

//mail("negite@mail.ru", "$name", "$message", "From: negite@mail.ru");


?>