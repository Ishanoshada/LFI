<? include("../inc/header.php");
	include("popup.php");

?>

    <!-- main_container -->
    <div id="mContainer">
        <div class="mvBox">
            <div class="mVisualWrap clear">
                <div class="mVisual">
                    <div class="cycle-slideshow" data-cycle-fx="fadeout" data-cycle-timeout="3500" data-cycle-pause-on-hover="false">
                        <img src="../images/mainbg1.png" alt="mainbg1" />
                        <img src="../images/mainbg4.png" alt="mainbg4" />
                        <img src="../images/mainbg2.png" alt="mainbg2" />
                        <img src="../images/mainbg3.png" alt="mainbg3" />
                    </div>
                    <script language="javascript" type="text/javascript" src="../js/cycle2.js"></script>
                </div>
            </div>
        </div>
        <div id="mContents">
            <div class="mContentsInner">
                <div class="mContTop clear">


                    <!-- 공지사항 -->

                    <div class="mNotice">
                        <h3>공지사항</h3>
                            <ul style="padding-left:10px;font-size:12px;padding-top:5px;">
                                <?
                                $sql="select * from jboard where code='notice' order by uid desc limit 0,10";
                                $result = mysql_query($sql);
                                while($row=mysql_fetch_array($result)){

                                $title = mb_substr(stripslashes($row["title"]),0,22,"utf-8");
                                ?>
                                <li>
                                    <a href="../contents/sub0201.php?uid=<?=$row[" uid "]?>">
                                    <?=$title?>
                                    </a><span>[<?=date("Y.m.d",$row["signdate"])?>]</span>
                                </li>
                                <?}
                                ?>
                            </ul>
                            <a href="../contents/sub0201.php" class="more"><img src="../images/btnMore1.png" alt="더보기" /></a>
                    </div>


                    <!-- 신제품 소개 -->

                    <div class="mPro">
                        <h3>신제품소개</h3>
                        <div class="swiper-container">
                            <ul class="swiper-wrapper">
                                <?
						$p_sql ="select * from product where 1=1 and new_product='1' and use_yn='Y' order by uid desc limit 0,10";
						$p_result = mysql_query($p_sql);
						while($p_row = mysql_fetch_array($p_result)){
							$p_name = $p_row["name"];
							$p_content = strip_tags(stripslashes($p_row["comment"]));

							$filename = "../admin/product/pds/$p_row[picture1]";
			
						if($p_row[picture1] && file_exists($filename)){
							$image_size = GetImageSize("../admin/product/pds/".$p_row[picture1]);
							
							$width = $image_size[0];
							$height = $image_size[1];
							
							$max_width = 80;
							$max_height = 75;
							
							if($width > $max_width){
								$percent_w = $width / $max_width;
								$width = $max_width;
								$height = $height / $percent_w;
							}else
								$width = $width;
							
							if($height > $max_height){
								$percent_h = $height / $max_height;
								$height = $max_height;
								$width = $width / $percent_h;
							}else
								$height = $height;
						}
						?>
                        <li class="swiper-slide">
                            <div class="pro_pic" style="width:150px;">
                                <?if($p_row[picture1] && file_exists($filename)){ ?>
                                    <a href="/product_view.html?code=<?=$p_row[code]?>&uid=<?=$p_row[uid]?>"><img src="../admin/product/pds/<?=$p_row[picture1]?>" width="100%;"  border="0" alt="<?=substr($p_row[picture1], 10, 100)?>"></a>
                                    <?}?>
                            </div>
                            <div class="pro_tit">
                                <?=$p_name?>
                            </div>
                            <div class="pro_text">
                                <?=$p_content?>
                            </div>
                        </li>
                        <?}?>


                            </ul>
                            <div class="swiper-pagination"></div>
                            <script src="../js/swiper.jquery.min.js" type="text/javascript"></script>
                            <script type="text/javascript">
                                //GNB 열고닫기
                                var swiper = new Swiper('.swiper-container', {
                                    autoplay: 3000,
                                    loop: true,
                                    pagination: '.swiper-pagination',
                                    paginationClickable: true
                                });

                            </script>
                        </div>
                    </div>


                    <!-- 견적 및 주문 -->

                    <div class="mCus">
                        <div class="mcus01"><img src="../images/m_cus01.png" alt=""></div>
                        <div class="mcus02"><a href="../contents/sub0401.php"><img src="../images/order_main.png" alt=""></a></div>
                    </div>
                </div>

                <!-- <div class="table_ver" style="padding-top:15px;">
						<table>
							<caption></caption>
							<colgroup>
								<col width="150">
								<col width="*">
								
							</colgroup>
							<thead></thead>
							
							<tbody>
								<tr>


									<th>PRODUCT<BR>CATEGORY</th>
									<td>
										<?
										$cate_sql = "select * from category where depthno='1' order by priorno01 asc";
											$cate_result = mysql_query($cate_sql);

											while($cate_row=mysql_fetch_Array($cate_result)){
										
												?>
												<a href="../contents/products.php?code=<?=$cate_row["catcode"]?>"><?=$cate_row["catname"]?></a><br>
												<?
												}

										?>
									
									
									
									</td>
								</tr>
								
								
							</tbody>
						</table>
					</div> -->

            </div>
        </div>
    </div>
    <!-- //container -->

    <? include("../inc/mfooter.php"); ?>
