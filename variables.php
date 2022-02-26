<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 변수
          변수(variables)란 데이터를 저장하기 위한 프로그램에의해 이름을 할당받은 메모리 공간
          즉, 변수란 데이터(data)를 저장할 수 있는 메모리 공간이며, 저장된 값은 변경될 수 있다.
     -->

     <!-- 변수의 선언
      PHP에서는 달러($) 기호를 사용해 다음과 같이 변수를 선언 
      $변수이름 = 초기값;
      
      또한 C언어와는 달리 변수를 선언시 타입을 따로 명시 X
      PHP에서 변수 타입은 해당 변수에 대입하는 값에 따라 자동 결정
    -->


    <?php 
       $var = 10; // 정수 값을 대입
       echo gettype($var); //  해당 변수의 타입을 출력
       echo " : $var <br>";
       $var = 3.14;
       echo gettype($var);
       echo " : $var <br>";
       $var = "PHP";
       echo gettype($var);
       echo " : $var ";
    ?>

</body>

</html>