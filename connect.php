<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Uppal Transport</title>
     <link rel="stylesheet" href="Content/css.css">

</head>
<body>
 <?php
    require("header.php");
    
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        if(file_exists("Content/$page.php")){
        
            include("Content/$page.php");
            
        }
        else {
            echo "<h1>404: You MAY NOT PASS!</h1>";
        }
    }
    else {
        include("Content/home.php");
    }
    
    require("footer.php");
    ?>
    
</body>
</html>