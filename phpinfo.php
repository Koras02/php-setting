<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <!-- <?php 
            echo "그는 \"안녕하세요 라고 말했다\"";
        ?>
        <?php
           var_dump(6.1);
        ?> -->

        <?php
         $a = 1;
         echo $a+1; #2
         echo "<br/>";
         $a = 2;
         print $a+1; #3
         ?>
    
       <?php
          define("PHP", "PHP 수업에 잘오셨습니다!<br>");
          echo PHP
        //   define("PHP", "<br>PHP 수업에 잘 오셨습니다!", true);	// 대소문자를 구분하지 않음.
        // //   echo php;		// PHP 수업에 잘 오셨습니다!
        //   echo Php;		// PHP 수업에 잘 오셨습니다!
       ?>

</body>
</html>