<!Doctype html>
<html>

<head>
    <title>
        kr system monitor
    </title>
    <link rel="stylesheet" href="./style.css"/>
</head>

<body>
 <?php 
    include_once("php\masterConection.php");
    $conector = new PostgressConnection;
    $conector->ConnectDB();
    $conector->showBotProfile();
    $conector->displayAsTable("drivers");
  
   

    

 ?>

 <div id="cssexample" class="botprofile">
    name: cssexample
    <div class="colorblock"></div>
</div>
</body>

</html>