<?

echo ' Задание 1<br><br>';
for($i = 1; $i <= 10; $i++){
    if($i <= 9){
        echo $i;
        echo '-';
    }
    if($i == 10){
            echo $i;
    }
    
    
    
}
echo '<br><br>Задание 2<br><br>';

for($a = 0; $a <= 30; $a++){
    echo  $a.' ';
    
}


echo '<br><br> Задание 3<br><br>';

// for($y = 00; $y <=99; $y++){
//     echo $y;
// }






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="max-width: 250px" class="header">
        <?php
            for($a=0; $a< 10; $a++)
            { 
              for($b=0; $b< 10; $b++)
                 {
                    echo $a.$b.", "; 
                    
                 }
                 
            }
            
        ?>
    </div>
</body>
</html>