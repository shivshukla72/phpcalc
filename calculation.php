<?php
    $value1=(float)$_POST['first'];
    $value2=(float)$_POST['second'];
    $operand=$_POST['opt1'];

    
    switch($operand)
    {
        case "+":
                 $result=$value1+$value2;
                 echo $result;
                 break;
         case "-":
                    $result=$value1-$value2;
                    echo $result;
                    break;
         case "*":
                   $result=$value1*$value2;
                   echo $result;
                   break;
         case "/":
                    $result=$value1/$value2;
                    echo $result;
                    break;
              
    }
?>