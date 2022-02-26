<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>변수의 종류</title>
</head>
<body>
    <!-- 
        변수의 종류 
        PHP에 변수는 스크립트 내 어느 곳에서나 선언 가능 
        변수의 유효 범위(variables scope) 란 특정 변수를 참조되거나 사용할 수 있는 스크립트 내의 범위를 의미
        PHP에서는 이러한 변수의 유효 범위에 따라서 변수의 종류를 다음과 같이 구분 

        1. 지역 변수 (local variables)
        2. 전역 변수 (global variables)
        3. 정적 변수 (static variable)
     -->

     <!-- 1.지역 변수 
        함수 내부에서 선언된 변수는 오직 함수 내부에서만 접근 가능 
        또한 함수 내부에서 선언된 변수는 함수의 호출이 종료되는 즉시 메모리에서 제거

        이렇게 함수 내부에 선언된 변수를 지역 변수 (local variable) 이라고 한다.
    -->
    <?php
       
       function varFunc() 
       {
           $var = 10; // 지역 변수로 선언
           echo "함수 내에서 호출한 지역 변수 var의 값은 {$var}입니다 <br>";
       }
       varFunc();
       echo "함수 밖에서 호출한 지역 변수 var의 값은 {$var}입니다.";
    ?>
    <!-- 위 예제에는 함수 밖에서 함수 내부의 지역 변수 var을 참조하려 한다.
      하지만 함수의 호출이 종료되므로 함수 내부에 선언된 모든 지역 변수들의 메모리는 제거되었다.
      따라서 함수 밖에서 지역 변수를 참조하려 하면 아무런 값도 얻을 수 없다.
    -->

    <?php 
        echo "<br>";
        echo "====================================================================";
    ?>

    <!-- 전역 변수 
        함수 박에서 선언된 변수는 함수 밖에서만 바로 접근할 수 있다.
        함수 밖에서 선언된 변수를 함수 내부에 접근하고자 할때에는 global 키워드를 함께 사용해야 한다.
    -->

    <?php 
       $var1 = 10; // 전역 변수 선언
        function varFunc1() 
        {
      	echo "함수 내에서 호출한 전역 변수 var의 값은 {$var1}입니다.<br>";
		global $var1;	// 함수 내에서 사용할 전역 변수를 명시함
		echo "함수 내에서 호출한 전역 변수 var의 값은 {$var1}입니다.<br>";
        }
        varFunc1();
        echo "함수 밖에서 호출한 전역 변수 var의 값은 ${var1} 입니다";
    ?>
    <!-- 위 예제에는 맨 처음 호출한 echo 함수는 아무런 값도 출력하지 못함
      하자만 사용할 전역 변수를 global 키워드로 명시하고 나서 다시 호출한 echo 함수는 정확한 전역 변수의 값을 출력

      php 에서는 모든 전역 변수를 $GLOBALS 배열에 저장한다.
      이 배열에 인덱스로 변수의 이름을 사용하면, 해당 전역 변수의 값에 접근할 수 있다.
      이 배열은 함수 내부에서도 접근할 수 있고, 이 배열을 통해서 바로 전역 변수의 값을 변경할 수도 있다.
    -->

    <?php
    $var2 = 10; // 전역 변수로 선언함
    function varFunc2() {
        echo "함수 내부에서 호출한 전역 변수 var의 값은 {$var2}입니다.<br>";
        echo "함수 내부에서 호출한 전역 변수 var의 값은 {$GLOBALS['var2']}입니다.<br>";
    }
    varFunc2();
    echo "함수 밖에서 호출한 전역 변수 var의 값은 {$var2}입니다.";
    ?>

    <!-- 위 예제는 함수 내부에 global 키워드를 사용하는 대신 $GLOBALS 배열을 사용해 전역 변수에 접근하고 있다. -->


    <!-- 슈퍼 글로벌
   PHP는 미리 정의된 전역 변수인 슈퍼 글로벌(superglobal)을 제공합니다.

   이러한 슈퍼 글로벌은 특별한 선언 없이 스크립트 내의 어디에서라도 바로 사용할 수 있습니다.

   PHP에서 제공하는 슈퍼 글로벌은 다음과 같습니다.
    1. $GLOBALS
    2. $_SERVER
    3. $_GET
    4. $_POST
    5. $_FILES
    6. $_COOKIE
    7. $_SESSION
    8. $_REQUEST
    9. $_ENV  
    -->

    <!-- 정적 변수
         정적 변수 (static variable) 이란 함수 내부에 static 키워드로 선언한 변수를 의미

         함수 내부에서 선언된 정적 변수의 경우 함수의 호출이 종료 되더라도 메모리상 사라지지 않는다.
     -->

     <?php 
        echo "<br>";
        echo "====================================================================";
    ?>

     <?php
        function counter() {
            static $count = 0;
            echo "<br>";
            echo "함수 내부에서 호출된 static 변수의 count 값은 {$count}입니다 <br>";
            $count++;
        }
        counter();
        counter();
        counter();
     ?>
     <!-- 위 예제는 정적 변수인 $count가 함수의 호출이 종료되도 계속해서 그값을 유지하고 있습니다. -->

</body>


</html>