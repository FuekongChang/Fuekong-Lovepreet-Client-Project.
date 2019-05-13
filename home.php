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
    
    <?php
    $h1 = "<h1>Uppal Transport</h1>";
     $p = "<p><strong>Welcome!</strong> WE are Uppal Transport. We specalize in anytpye of ptransportation</p>";
   
        echo  "$h1";
        echo  "$p";
    ?>
   
    
</body>
</html>