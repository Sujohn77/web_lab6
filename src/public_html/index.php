<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Швейцария, Switzerland - отдых, путешествия, туризм</title>
        <meta charset="UTF-8">
        <meta name="keywords" content="Швейцария, Switzerland, отдых, путешествия, туризм" />
        <meta name="description" content="Швейцария, Switzerland, отдых, путешествия, туризм" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    </head>
    <body>
        <?php    
            // SET CHARSET FOR RUSSIAN LANG
            header('Content-Type: text/html; charset=utf-8');
            // load up your config file
            require_once("../resources/config.php");
        ?>
    <div class="width=100% height=100% align-left"></div><div class="width=100% height=100% align-left"></div><div class="align-left"></div><div style="display:none;"><a href="http://sexmamba.ru/">����������</a> <!-- div --><!-- div end --> <a href="http://tutlove.ru/">����</a> <!-- div --><!-- div end --> <a href="http://unishablon.com/">html php</a> <a href="http://amurplanet.ru/">���� ���������</a> <a href="http://mmmcentr.com/">���</a></div><div class="padding valign-image-left"></div><div class="padding  valign-image-right"></div><div class="padding valign-image-center"></div>
    <div id="wrapper">
        <!-- HEADER -->
        <?php    
            require_once(TEMPLATES_PATH . "/header/header.php");
        ?>
        <!-- MODULE ACCOUNT -->
        <?php 
            require_once("../resources/data/account.php");
        ?>
        <!-- MAIN CONTENT-->
        <?php  
            require_once(TEMPLATES_PATH . "/main.php");
        ?>
        <!-- FOOTER-->
        <?php 
            require_once(TEMPLATES_PATH . "/footer.php");
        ?>
    </div>
    <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
    </body>
</html>
