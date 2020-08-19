<br />
<b>Notice</b>:  Undefined index: mv_code in <b>/home/ssam/jsstudy/AJAX/around272.php</b> on line <b>4</b><br />









	
	
	
	
	
	

<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="imagetoolbar" content="no">
<title></title>

	
	
	
	
	
		
		
	



<meta property="me2:image" content="https://ssl.pstatic.net/imgmovie/today/naverme/naverme_profile.jpg"/>
<meta property="me2:post_tag" content="네이버영화 "/>
<meta property="me2:category1" content="네이버영화"/>
<meta property="me2:category2" content=""/>



	
	
	
		<meta property="og:title" content=""/>
	


<meta property="og:type" content="article"/>

<meta property="og:url" content="https://movie.naver.com/movie/bi/mi/basic.nhn?code="/>


	
	
		<meta property="og:image" content="https://ssl.pstatic.net/static/m/movie/icons/OG_270_270.png"/>
	



	<meta property="og:description" content="네이버 영화 : 영화정보"/>


<meta property="og:article:thumbnailUrl" content="https://ssl.pstatic.net/imgmovie/today/naverme/naverme_profile.jpg"/>
<meta property="og:article:author" content="네이버 영화"/>
<meta property="og:article:author:url" content="https://movie.naver.com/"/>




	
	
	
	
		<link rel="shortcut icon" href="https://ssl.pstatic.net/static/m/movie/icons/naver_movie_favicon.ico" type="image/x-icon">
			



<link rel="stylesheet" type="text/css" href="/css/deploy/movie.all.css?20200806170632" />



<script type="text/javascript" src="/js/deploy/movie.all.js?20200806170632"></script>



</head>
<body >
<div id="wrap" class="basic">

	<!-- GNB -->
	



<script type="text/javascript">
function delayed_submit(object) {
	if (navigator.userAgent.indexOf('MSIE') == -1) {
		var b = c = new Date();
      	while ((b.getTime() - c.getTime()) < 100) {
			b = new Date();
      	}
	} 
}
</script>

<script type="text/javascript">
	var gnb_service = "movie";
	var gnb_logout = "http://movie.naver.com/movie/bi/mi/basic.nhn%3Fcode%3D";
	var gnb_template = "gnb_utf8";
	var gnb_brightness=3;
	var gnb_response = true;
	
	jindo.$Fn(function(){
		getGNB();
	}).attach(window, "load");
	
	jindo.$Fn(function(oEvent){ var welSource = jindo.$Element(oEvent.element);
			if (!welSource.isChildOf(jindo.$Element("gnb"))) {
				gnbAllLayerClose();
			}
	}).attach(document, 'click');
</script>
 <!-- skip navigation -->
<div id="u_skip">
         <a href="#header" onclick="document.getElementById('header').tabIndex=-1;document.getElementById('header').focus();return false;"><span>메인 메뉴로 바로가기</span></a>
         <a href="#content" id="gnb_goContent" onclick="document.getElementById('content').tabIndex=-1;document.getElementById('content').focus();return false;"><span>본문으로 바로가기</span></a>
</div>
<!-- //skip navigation -->
<div class="gnb_container">
	<div class="gnb_content">
		<div class="gnb_box">
			<div class="gnb_wrap">
				<div id="gnb">
				    <script type="text/javascript" charset="utf-8" src="https://ssl.pstatic.net/static.gn/templates/gnb_utf8.nhn"></script>
				</div>
			</div>
			<!-- 검색창 -->
			<form id="jSearchForm" action="/movie/search/result.nhn" method="get" style="margin:0;display:none;">
				<input type="text" name="query" maxlength="100" title="영화검색" />
				<input type="hidden" name="section" value="all"/>
				<input type="hidden" name="ie" value="utf8"/>
			</form>
			<fieldset id="jSearchArea" class="srch_area">
				<legend><span class="blind">영화검색 영역</span></legend>
				<div class="srch_field_on _view">
					<span class="ipt_srch">
						<label for="ipt_tx_srch" id="search_placeholder">영화검색</label>
						<input type="text" id="ipt_tx_srch" class="ipt_tx_srch" name="query" maxlength="100" accesskey="s" style="ime-mode:active;" autocomplete="off" />
						<span class="align"></span>
						<span class="auto_tx"><a href="#" title="자동완성 펼치기"><img src="https://ssl.pstatic.net/static/movie/2012/06/srch_arrow_down.gif" width="7" height="4" title="자동완성 펼치기" alt="자동완성 펼치기" /></a></span>
					</span>
					<button type="submit" title="검색" class="btn_srch" onClick="clickcr(this,'GNB.search','','',event); delayed_submit(this);"><span class="blind">검색</span></button>
					 <!-- 자동 완성 영역임 #autocomplate_template-->
				</div>
			</fieldset>
			<!-- //검색창 -->
		</div>
	</div>
</div>

	<!-- //GNB -->

	<!-- header -->
	





	<div id="header">
		<a href="#content" title="본문으로 이동" class="blind">본문 바로가기</a>
		<h1 class="svc_name">
			<a href="http://www.naver.com/" title="naver로 바로가기" class="ci_logo" id="lnb_gonaver"><img src="https://ssl.pstatic.net/static/movie/2013/07/logo_ci.png" width="62" height="13" alt="NAVER" /></a><!-- N=a:LNB.naver -->
			<a href="/" title="영화서비스홈으로 바로가기" class="svc_logo"><img src="https://ssl.pstatic.net/static/movie/2012/06/logo_svc.png" width="34" height="19" alt="영화" /></a><!-- N=a:LNB.movie -->
		</h1>
		<div id="scrollbar" class="scrollbar scrollbar-noscript">
			<div class="scrollbar-box">
				<div class="scrollbar-content">
                    <div class="in_scroll">
                        <ul class="navi">
                        <li>
                            <a href="/" title="영화홈" class="menu01"><strong>영화홈</strong></a><!-- N=a:LNB.home -->
                        </li>
                        <li>
                            <a href="/movie/running/current.nhn" title="상영작·예정작" class="menu02"><strong>상영작·예정작</strong></a><!-- N=a:LNB.movies -->
                            <ul class="navi_sub" id="navi_movie" style="display:none">
                            <li><a href="/movie/running/current.nhn" title="현재 상영영화" class="sub2_1"><em>현재 상영영화</em></a><!-- N=a:LNB.now --></li>
                            <li><a href="/movie/running/premovie.nhn" title="개봉 예정영화" class="sub2_2"><em>개봉 예정영화</em></a><!-- N=a:LNB.soon --></li>
                            
                            <li><a href="/movie/running/movieclip.nhn" title="예고편" class="sub2_4"><em>예고편</em></a><!-- N=a:LNB.tailer --></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/movie/sdb/rank/rmovie.nhn" title="영화랭킹" class="menu03"><strong>영화랭킹</strong></a><!-- N=a:LNB.db -->
                        </li>
                        <li>
                            <a href="/movie/bi/mi/reserve.nhn" title="예매" class="menu05"><strong>예매</strong></a><!-- N=a:LNB.ticket -->
                        </li>

                        <li>
							<a href="/movie/point/af/list.nhn" title="평점&middot리뷰" class="menu07"><strong>평점&middot리뷰</strong></a><!-- N=a:LNB.comm -->
                        </li>
                        <li>
                            <a href="https://serieson.naver.com/movie/home.nhn" title="다운로드" class="menu08" target="_blank"><strong>다운로드</strong></a><!-- N=a:LNB.download -->
                        </li>
						<li class="nav_indi">
						        <a href="http://tv.naver.com/indiecinema" title="인디극장 UP" target="_blank"><strong>인디극장 UP</strong></a><!-- N=a:LNB.indie -->
						</li>                        
                        </ul>
                        
	                        <!-- [D] view 모드 전환간 클래스는 _on,_off / 비활성화는 _disabled -->
	                        <div id="viewmode-option-area" class="lnb_etc">
								<div class="info_view">
									<a href="#" class="_info-anchor btn_view_md"><em>보기옵션</em></a>
									<div class="ly_info_view" id="_viewmode-option-info-layer" style="display:none">
										<span></span>
										브라우저의 해상도에 따라 기본 혹은 넓게보기가 가능합니다. 넓게보기는 가로해상도 1872픽셀 이상에서만 동작합니다.
									</div>
								</div>
								<div class="view_mode">
									<a href="#" title="" class="_basic-btn normal_on"><em>기본보기</em></a>
                                    <a href="#" title="" class="_wide-btn wide_off"><em>넓게보기</em></a>
								</div>
							</div>
						
                    </div>
				</div>
			</div>
			<div class="scrollbar-v">
				<div class="scrollbar-button-up"></div>
				<div class="scrollbar-track">
					<div class="scrollbar-thumb"></div>
				</div>
				<div class="scrollbar-button-down"></div>
			</div>
		</div>
	</div>
	
	<script type="text/javascript">
	if ("" == "상영작·예정작"
			|| "" == "현재 상영영화"
			|| "" == "개봉 예정영화"
			|| "" == "TV 방영영화"
			|| "" == "예고편") {
		jindo.$Element("navi_movie").show();
	}
	</script>
	<!-- //header -->
	
	<!-- container -->
	<div id="container">
			<script type="text/javascript">
		alert("영화 코드값 오류입니다.");
		history.back();
	</script>
	</div>
	<!-- //container -->
	
	<!-- footer -->
	



<div id="footer">
	<div class="in_footer">
		<div class="foot_con">
				<ul>
					<li class="first"><a href="http://www.naver.com/rules/service.html" target="_blank">이용약관</a><!-- N=a:fot.agreement --></li>
					<li><a href="http://www.naver.com/rules/privacy.html" target="_blank"><strong>개인정보처리방침</strong></a><!-- N=a:fot.privacy --></li>
					<li><a href="http://www.naver.com/rules/disclaimer.html" target="_blank">책임의 한계와 법적고지</a><!-- N=a:fot.disclaimer --></li>
					<li><a href="https://help.naver.com/support/service/main.nhn?serviceNo=800" target="_blank">영화 고객센터</a><!-- N=a:fot.help --></li>
				</ul>
				<p class="info">본 콘텐츠의 저작권은 저작권자 또는 제공처에 있으며, 이를 무단 이용하는 경우 저작권법 등에 따라 법적 책임을 질 수 있습니다.</p>
				<p class="info">
					사업자등록번호 : 220-81-62517<span>통신판매업 신고번호</span> : 경기성남 제 2006 - 692호<span>대표이사 : 한성숙</span><span><a href="http://www.ftc.go.kr/info/bizinfo/communicationList.jsp">사업자등록정보 확인</a><!-- N=a:fot.bizinfo --></span><br>
					주소 : 경기도 성남시 분당구 불정로 6 네이버 그린팩토리 <span>대표전화 : 1588-3820</span>
				</p> 
				<address>
					<a href="http://www.navercorp.com/" target="_blank" class="logo"><img src="https://ssl.pstatic.net/static/movie/2013/07/logo_naver.png" width="63" height="11" alt="NAVER"></a><!-- N=a:fot.nhn -->
					<em>Copyright ©</em>
					<a href="http://www.navercorp.com/" target="_blank">NAVER Corp.</a><!-- N=a:fot.corp -->
					<span>All Rights Reserved.</span>
				</address>
		</div>
	</div>
</div>








<script type="text/javascript">

if (false) {
	var alertType = "NONE";
	var koreanTitle = "";
	var movieCode = "0";
	var userReserveCount = "0";
	var todayDatetime = "20200819153705";
	var endDatetimeAfterTwoDays = "00000000000000";
	
	
	if (movieCode > 0) {
		openWriteActualPointAlert (alertType, koreanTitle, movieCode, userReserveCount, todayDatetime, endDatetimeAfterTwoDays);
	}
}

function openWriteActualPointAlert (alertType, koreanTitle, movieCode, count, today, endDate) {
	if (alertType == "ONE") {
		setCookieLastUserReserveDate(today, endDate);
		if (confirm("관람하신 " + koreanTitle + "에\n평점 등록 시 네이버페이 포인트 500원 적립!\n지금 평점쓰기 메뉴로 이동하시겠습니까?")) {
			top.location.href = "https://movie.naver.com/movie/bi/mi/point.nhn?code=" + movieCode;
		}
	} else if (alertType == "MORE") {
		setCookieLastUserReserveDate(today, endDate);
		if (confirm("관람하신 작품에 평점을 등록해주세요\n작품당 네이버페이 포인트 500원씩 적립!\n평점 미등록작 리스트를 확인하시겠습니까?")) {
			top.location.href = "http://ticket.movie.naver.com/Order/OverdueList.aspx";
		}
	}
}

function setCookieLastUserReserveDate(today, endDate) {
	var cookieForNotOpenActualPointPopup = jindo.$Cookie();
	
	
	cookieForNotOpenActualPointPopup.remove("lastUserReserveDatetime");
	cookieForNotOpenActualPointPopup.remove("lastUserReserveCheckDatetime");
	
	cookieForNotOpenActualPointPopup.set("lastUserReserveDatetime", endDate, 9999, "movie.naver.com");
	cookieForNotOpenActualPointPopup.set("lastUserReserveCheckDatetime", today, 9999, "movie.naver.com");
}

</script>








<script type="text/javascript">
	
		
		
		
		
			var alertMessage = "지원되지 않는 브라우저로 서비스 이용에 제한이 있습니다.";
		
	

	function getBrowser() {
		var ua = navigator.userAgent;
		if (/NAVER/.test(ua)) {
			return "NAVER_APP";
		} else if (/IEMobile/.test(ua)) {
			return "INTERNET_EXPLORER_MOBILE";
		} else if (/MSIE/.test(ua) || /Trident/.test(ua)) {
			return "INTERNET_EXPLORER";
		} else if (/Firefox/.test(ua)) {
			return "FIREFOX";
		} else if (/Opera\//.test(ua) || /OPR\//.test(ua)) {
			return "OPERA";
		}  else if (/Swing\//.test(ua)) {
			return "SWING";
		} else if (/Chrome\//.test(ua) || /CriOS\//.test(ua)) {
			return "CHROME";
		} else if (/BAND\//.test(ua)) {
			return "BAND_APP";
		} else if (/FBAN\/FBIOS/.test(ua)) {
			return "FACEBOOK_APP";
		} else if (/Twitter/.test(ua)) {
			return "TWITTER_APP";
		} else if (/KAKAOTALK/.test(ua)) {
			return "KAKAOTALK_APP";
		} else if (/Android/.test(ua) && /Safari/.test(ua)) {
			return "ANDROID_INTERNET_APP";
		} else if (/Safari/.test(ua)) {
			return "SAFARI";
		}

		return "";
	}

	if (getBrowser() === "UNKNOWN" && jindo.$Cookie().get("notSupportBrowserAlert") != 'true') {
		alert(alertMessage);
		jindo.$Cookie().set("notSupportBrowserAlert", "true", "9999", "movie.naver.com");
	}


</script>


	<!-- //footer -->
</div>
<script type="text/javascript">
var isRecentTab = false;

jindo.$Fn(function (we) {
	
	    // 윈도우창 리사이징에 따른 레이아웃 1/2단 관리
	    var oViewMode = new nhn.movie.end.ViewMode();
	

	// 상단 검색영역
	var oSearch = new nhn.movie.Search({
		area : "jSearchArea",
		autosearch : "https://auto-movie.naver.com/ac?q_enc=UTF-8&st=1&r_lt=1&n_ext=1&t_koreng=1&r_format=json&r_enc=UTF-8&r_unicode=0&r_escape=1&q=",
		movelink : "/movie/bi/mi/basic.nhn?code=",
		peoplelink : "/movie/bi/pi/basic.nhn?code="
	});

    // 좌측 LNB
    var oLNB = new nhn.movie.LNB();
	if( typeof oViewMode != "undefined") {
		oViewMode.attach('change', jindo.$Fn(oLNB.update, oLNB).bind());
	}

    // 2단일때, 2열에 상단 회색 라인 없애기
	if( typeof oViewMode != "undefined") {
	    oViewMode.attach('change', function (oEvent) {
	        var welSecondSectionGroup = jindo.$Element('content').queryAll('.section_group')[1];
	        var wel2column1rowSection;
	
	        if (welSecondSectionGroup) {
	            wel2column1rowSection = welSecondSectionGroup.query('.obj_section');
	
	            if (oEvent.sStyle == 'wide') {
	                wel2column1rowSection.addClass('noline');
	            } else {
	                wel2column1rowSection.removeClass('noline');
	            }
	        }
	
		    //포토 묻어가기
		    if( typeof oPhoto != "undefined" ){
			    if (oEvent.sStyle == 'wide') {
				    oPhoto.setWide("wide");
			    } else {
				    oPhoto.setWide("basic");
			    }
		    }
		    // 비디오 묻어가기
		    if( typeof oMovie != "undefined" ){
			    if (oEvent.sStyle == 'wide') {
				    oMovie.setWide("wide", 1);
			    } else {
				    oMovie.setWide("basic", 1);
			    }
		    }
	
	    });
	}

    // 상단썸네일영역
    
    
    
    
	
    var waelScriptOrderList = jindo.$ElementList('._gnb_another_service_layer');
    
    jindo.$A(waelScriptOrderList.$value()).forEach(function(value, index, array) {
		jindo.$Fn(reviewOrderLayerToggle, this).attach(value, "blur");
	});
    //자동닫힘 기능 끝.
    
  //영화검색 결과에서 포커스 아웃될 경우, 검색 결과를 지우도록 변경.
    jindo.$Element("lnb_gonaver").attach("focus",function(e){
    	
    	jindo.$Element('search_placeholder').attr({
    		"style" : "display: inline;"
    	})
    	jindo.$Element('ipt_tx_srch').$value().value="";
    	
    	if(jindo.$Element("jAutoComplate") != null){
    		jindo.$Element("jAutoComplate").hide();
    	}
    });    

    

	
}).attach(document, 'domready');
/**
 * 기타 공통
 */
jindo.$Fn(function() {
    try{ lcs_do(); } catch(e){}
}).attach(window, "pageshow");
</script>
<script type="text/javascript">
	//nClick 초기화 영역
	//클릭로그 집계 코드 추가
	var ccsrv="cc.naver.com";
	var nclk_evt = 1;
	
	nclk_do();
	//nClick 초기화 영역 끝
</script>
</body>
</html>