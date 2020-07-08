<?php
    // php는 변수 선언에 $ 사용, 문자열 더하기는 .(점)을 사용
    // 0708action.html에서 form을 GET으로 하면 $aidi = $_GET["nm_aidi"];
    // POST로 하면 $aidi = $_POST["nm_aidi"];

    // $aidi = $_POST["nm_aidi"];
    $aidi = $_GET["nm_aidi"];
    $aidi2 = $_GET["nm_kkk"];
    $aidi3 = $_GET["nm_qqq"];
    echo "<h1>".$aidi." ".$aidi2."님 안녕하셩</h1>";
?>