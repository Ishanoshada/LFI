	<? include("../inc/header.php"); ?>

	<!-- container -->
	<div id="container">
		<div class="sub_visual">
			<? include("../inc/s_visual.php"); ?>
		</div>

		<!-- wrap_cont -->
		<div class="wrap_cont">
			<? include("../inc/lnb03.php"); ?>
			<script type="text/javascript">
				$('#lnb li:nth-child(1)').addClass("current");
			</script>

			<!-- contents -->
			<div id="contents">
				<!-- title_area -->
				<div class="title_area">
					<h3>찾아오시는길</h3>
					<!--
					<? include("../inc/location.php"); ?>
					-->
					<div class="location">
						HOME &gt;
						 About Us &gt;
						<span>찾아오시는길</span>
					</div>
				</div>

				<!-- cont_area -->
				<div class="cont_area">
					<div id="con_title">MAP</div>
					<div style="padding-bottom:25px;">

						<!-- * 카카오맵 - 지도퍼가기 -->
						<!-- 1. 지도 노드 -->
						<div id="daumRoughmapContainer1569816042145" class="root_daum_roughmap root_daum_roughmap_landing"></div>

						<!--
						2. 설치 스크립트
						* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
						-->
						<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

						<!-- 3. 실행 스크립트 -->
						<script charset="UTF-8">
						new daum.roughmap.Lander({
						"timestamp" : "1569816042145",
						"key" : "v8c6",
						"mapWidth" : "640",
						"mapHeight" : "360"
						}).render();
						</script>


					</div>
					<div id="map_contents">
						<div>
							<div id="con_title">Contact Information</div>
							<div class="map_text">
								<li><span class="b_red">주소</span> : 서울특별시 강남구 개포로 623 (대청타워) 대청비즈오피스 434호, 435호</li>
								<li><span class="b_red">우편번호</span> : 06336</li>
								<li><span class="b_red">전화</span> : 02)3412-6999</li>
								<li><span class="b_red">팩스</span> : 02)3412-6009</li>
							</div>
						</div>

					</div>



				</div>
			</div>
		</div>
	</div>

	<? include("../inc/footer.php"); ?>