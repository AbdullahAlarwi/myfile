<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<style>
body {
    background-color: black;
}

* {
    color: yellow;
    /* direction: rtl; */
}

input {
    color: black;
}
</style>

<body>

    <form action="exersize.php" method="post">
        number one <input type="number" name="num1" placeholder="enter the value">
        <br>
        <br>
        number tow <input type="number" name="num2" placeholder="enter the value">
        <br>
        <br>
        <input type="submit" name="sum" value="+">
        <input type="submit" name="sub" value="-">
        <input type="submit" name="multi" value="*">
        <input type="submit" name="div" value="/">
        <input type="submit" name="mod" value="%">





    </form>
    <?php 
  if(isset($_POST['sum'])){
  echo " The resulting :" .$_POST['num1']+$_POST['num2'];
  }
    
  if(isset($_POST['sub'])){
   echo " The resulting :" .$_POST['num1']-$_POST['num2'];
  }
    
  if(isset($_POST['multi'])){
     echo " The resulting :". $_POST['num1']*$_POST['num2'];
  }
    
  if(isset($_POST['div'])){
    echo " The resulting :".$_POST['num1']/$_POST['num2'];
  }
    
  if(isset($_POST['mod'])){
    echo " The resulting :" .$_POST['num1']%$_POST['num2'];
  }
    
    ?>

</body>

</html>