<?
header('Content-Type: text/html; charset=utf-8');
$data = date("Y-m-d H:i:s");
?>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<div style="width: 1000px; padding: 50px; margin: auto;">
    <h2>Эта форма отправляет методом GET</h2>
    <form method="get" action="get.php">
        <input type="text" name="name" /><br />
        <input type="text" name="message" /><br />
        <input type="submit" />        
    </form>
    <h2>Эта форма отправляет методом POST</h2>
    <form method="post" action="form.php">
        <input type="hidden" name="data_open" value="<?echo $data; ?>"> 
        <input type="text" name="name" required  placeholder="Заголовок письма"/><br />
        <textarea rows="10" cols="45"  required  name="message"  placeholder="Текст письма"></textarea><br />
        <p>Каким браузером пользуемся?</p>
        <label><input type="radio" name="browser" value="Internet Explorer">Internet Explorer</label><br/>
        <label><input type="radio" name="browser" value="Opera">Opera</label><br/>
        <label><input type="radio" name="browser" value="Firefox">Firefox</label><br/>
        <p>Любимый канал?</p>
        <label><input type="checkbox" name="tvchannel[]" value="Первый канал" />Первый канал<label><br/>
        <label><input type="checkbox" name="tvchannel[]" value="СТС" />СТС<label><br/>
        <label><input type="checkbox" name="tvchannel[]" value="THT" />ТНТ<label><br/>
        <label><input type="checkbox" name="tvchannel[]" value="РЕН ТВ" />РЕН ТВ<label><br/>
        <label><input type="checkbox" name="tvchannel[]" value="Матч ТВ" />Матч ТВ<label><br/>
        <label><input type="checkbox" name="tvchannel[]" value="Культура" />Культура<label><br/>
        <input type="submit" />        
    </form>
    </div>
</body>
</html>