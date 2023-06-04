<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حساب</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="math.php" method="POST" dir="rtl">
        <h2> مردود المحلات </h2>

        <br>الكاشير الرئيسي
        <input type="number" name="food1" value="0"><br>
        كاشير واحد
        <input type="number" name="food2" value="0"> <br>
        كاشير اثنين
        <input type="number" name="food3" value="0"><br>
        مورد عملاء
        <input type="number" name="food4" value="0">
        <br>
        <br>

        <br>

        <h3> مصروفات </h3>
        سحب نفقات
        <input type="number" name="pay1" value="0"><br>
        سحب التزامات
        <input type="number" name="pay2" value="0"> <br>
        تبادلات تجاريه
        <input type="number" name="pay3" value="0"><br>
        مخزن علي
        <input type="number" name="pay4" value="0"><br>
        مخزن جازع
        <input type="number" name="pay5" value="0"><br>
        مخزن الكويت
        <input type="number" name="pay6" value="0"><br>
        مخزن بلال
        <input type="number" name="pay7" value="0"><br>
        مخزن الماء
        <input type="number" name="pay8" value="0"><br>
        <br>

        <input type="submit">
    </form>

    <?php
    // these are the food vairavle  
    $food1=$_POST["food1"];
    $food2=$_POST["food2"];
    $food3=$_POST["food3"];
    $food4=$_POST["food4"];
    $sum = $food1 +$food2 +$food3+$food4;
    //these are the payment vairable 
     $pay1=$_POST["pay1"];
     $pay2=$_POST["pay2"];
     $pay3=$_POST["pay3"];
     $pay4=$_POST["pay4"];
     $pay5=$_POST["pay5"];
     $pay6=$_POST["pay6"];
     $pay7=$_POST["pay7"];
     $pay8=$_POST["pay8"];
     $toal=$pay1+$pay2+$pay3+$pay4+$pay5+$pay6+$pay7+$pay8;
     $total = $sum-$toal;

 

     echo " <div class= sum > <p>الناتج</p> $total </div>";
   


    // echo $food1+$food2+$food3+$food4 -$pay1-$pay2-$pay3-$pay4-$pay5-$pay6-$pay7-$pay8;

    
    
    ?>


</body>

</html>