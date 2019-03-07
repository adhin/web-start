<?php 
// 1번 
function q1(){
    $arr = [0,1,2,3,4,5];

    if($arr[1] - $arr[3] < 0){
        echo '작습니다.';
    }else{
        echo '큽니다.';
    }
}
// q1();

// strlen($isTasty) > 4? '크다' : '작다' 형식은 if문을 간단히 표현한 형식입니다.
// 조건부 삼항 연산자라고 부릅니다.
// ? 이전이 조건이고 조건이 true이면 : 좌측의 '크다'를, 조건이 false이면 : 우측의 '작다'를 값으로 가집니다.
// 2번
function q2(){
    $isTasty = '양배추 즙은 맛이 없습니다.';
    echo $isTasty.' 는 '.mb_strlen($isTasty).'글자로 4보다 '.(strlen($isTasty) > 4? '크다' : '작다');
}
// q2();

// 3번
function q3(){
    $drink = '음료는 결명자차가 좋아요.';
    echo $drink.' 는 보리차라는 단어가 '.(strpos($drink, '보리차')? '있습니다.' : '없습니다.');
}
q3();
?>