<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Uppal Transport</title>
   
</head>
<body>

    <?php
    require('moduals/header.php');
    
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        if(file_exists("?page.php")){
        
            include("$page.php");
            
        }
        else{
            echo "<h1>404: You MAY NOT PASS!</h1>";
        }
    }
    else{
        include("home.php");
    }
    
    require('moduals/footer.php');
    ?>
</body>
</html>