<?php
/*  file_get_contents 함수는 url 내용을 읽는 함수, 자바로 만들면 조금 길어짐
    보통 자바의 URL 클래스 이용해서 만듬 
    cross-origin 문제 발생시, 대부분 이럼식으로 서버 경유로 문제 해결    
*/
    // $content = file_get_contents("https://naver.com");
    // echo $content;
     /* php 디버깅시 필요
        error_reporting(E_ALL);
        
        ini_set("display_errors", 1);
        
        header('Content-type:text/json');
    */
    $fileContents= file_get_contents("https://news.google.com/rss/search?q=".urlencode($_GET["search"])."&hl=ko&gl=KR&ceid=KR:ko");
    /* xml 문자열 -> xml 문서 -> json */
    $simpleXml = simplexml_load_string($fileContents);
    $json = json_encode($simpleXml);
    echo $json;

?>