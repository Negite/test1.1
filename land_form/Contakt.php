<!doctype html>
<html>
<head>
    <title>test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes"/>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> 
   
    <script type="text/javascript" src=" https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <div class="content-box">
        <a href="index.[php]" class="header_logo">Company Name</a>
        <ul class="menu">
            <li class="menu_item"><a href="index.php">Home</a></li>
            <li class="menu_item"><a href="about.php">About Us</a></li>
            <li class="menu_item"><a href="#">Services</a></li>
            <li class="menu_item"><a href="#">Jobs</a></li>
            <li class="menu_item"><a href="Contakt.php">Contact Us</a></li>
        </ul>
    </div>
</header>
    <content>
        <div class="contact">
            <div class="headline">Contact Us</div>
             <form action="form.php" method="post">
                 <label><input type="text" name="name" placeholder="Name" /></label>
                  <label><input type="email" name="email" placeholder="E-mail" /></label>
                  <label>Message<textarea name="comment" cols="40" rows="3"></textarea></label>
                  <input type="submit" />  
                  
            </form>
        </div>
        
    </content>

    <footer>
        
    </footer>
</body>
</html>