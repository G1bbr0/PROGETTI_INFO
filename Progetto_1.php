<html>
<head>
    <title>Pagina php estrazione numeri a caso</title>
</head>
<body>
<?php
    $sum=0;
    $media=0;
    echo("ora verranno stampati 10 numeri casuali da 1 a 10 per la media e la somma");
 echo"\n\n\n\n";
        for($i=0;$i<=10;$i++){
           $arr[$i]=rand(1, 10);
            echo"-".$arr[$i];
        }
        for($i=0; $i<=10; $i++){
            $sum+=$arr[$i];

        }

            $media=$sum/10;
    echo"\n\n\n\n";
            echo "Somma: $sum \n\n Media: $media";
?>

</body>

</html>