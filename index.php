<? header('Content-Type: text/html; charset=utf-8'); ?>
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
    <form method="post" action="post.php">
        <input type="text" name="name" placeholder="Заголовок письма"/><br />
        <textarea rows="10" cols="45" name="message"  placeholder="Текст письма"></textarea><br />

        <p>Radio</p>
        <input type="radio" name="browser" value="Internet Explorer"> Internet Explorer<br />
        <input type="radio" name="browser" value="Opera"> Opera<br />
        <input type="radio" name="browser" value="Firefox"> Firefox<br />

        <p>Checkbox</p>
        <input type="checkbox" name="tvchannel[]" checked="checked" value="Первый канал" />Первый канал<br />
        <input type="checkbox" name="tvchannel[]" checked="checked" value="THT" />ТНТ<br />
        <input type="checkbox" name="tvchannel[]" checked="checked" value="Культура" />Культура<br />

        <input type="hidden" name="name_hidden" value="Negite">
    
        <input type="submit" />        
    </form>
    </div>

</form>




</body>
</html>