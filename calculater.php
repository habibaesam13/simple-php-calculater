
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculater</title>
 <!-- <link rel="icon" type="image/x-icon" href="C:\xampp\htdocs\MyPhp\2021_Facebook_icon.svg.png">-->
</head>

<body>
    <form  method="get"action=" ">
    <input type="text" name="first">
    <select  name="operation" method="get">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
        <option>%</option>
    </select>
    <input type="text" name="second">
    <input type="submit" name="done">
</form>

<?php

   if(isset($_GET["done"]))
 {
    $first=$_GET["first"];
    $sec=$_GET["second"];
    $operationnn=$_GET["operation"];
 
    if($first !="" && $sec !="")
    {
        switch($operationnn)
        {
           case "+":
           echo $first+$sec;
           break;
           case "-":
           echo $first-$sec;
           break;
           case "*":
           echo $first*$sec;
           break;
           case "/":
           echo $first/$sec;
           break;
           case "%":
          echo $first%$sec;
           break;
           default:
           echo "Not data found";
        } 
    }
    else
      echo "Enter Numbers To Make Operatin!";
   }
   ?>
</body>

</html>

