<?php
    if(!isset($_GET["id"])){
        die("id not found."); 
       }
       $id=$_GET["id"];
       if(!is_numeric($id)){
           die("id is not a number");
       }

       $sql = <<<multi
       delete from itemlists where itemID =$id
       multi;
       
       require("connDB.php");
       mysqli_query($link, $sql);
       
       header("location:echo.php");
?>