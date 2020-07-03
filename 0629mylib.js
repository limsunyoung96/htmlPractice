// 순서에 영향받기 때문에 편하게 쓰라고 만들어준 이벤트 window.onload
// page 로딩이 끝난 다음에 자동으로 발생되는 이벤트
// </html>까지 진행된 다음에 onload 실행
// 아주 많이 많이 사용되는 이벤트
var f_denter = function () {
    // alert(document.getElementById("id_test").innerHTML);//? 
    // page 로딩되자마자 가운데로 옮기기
    var v_div = document.getElementById("id_test")
    var v_winWidth = window.innerWidth  // 브라우저 사용자가 보는 화면 넓이
    var v_winHeight = window.innerHeight // 브라우저 사용자가 보는 화면 높이
    var v_centerX = parseInt(v_winWidth / 2) // 수평 중앙 값
    var v_centerY = parseInt(v_winHeight / 2) // 수직 중앙 값
    console.log("width: " + v_div.style.width)
    // id_test를 중앙으로 옮기기
    v_div.style.left = v_centerX - 75 + "px"
    v_div.style.top = v_centerY - 75 + "px"
}

// onload 이벤트때 f_center 함수 call,
// f_denter() 라고 괄호를 붙이면 일반 함수를 호출함.
// f_denter 라고 하면 이벤트 발생할 때 마다 f_denter를 실행함
window.onload = f_denter

window.onresize = function () {  // window 사이즈가 변경되었을 때 자동 발생
    f_denter()  // 중앙정렬 시키는 함수 call
    console.log("window의 폭:", window.innerWidth);
    console.log("window의 높이:", window.innerHeight);
}

var f_myFunc = function (msg) {
    alert(msg);
}