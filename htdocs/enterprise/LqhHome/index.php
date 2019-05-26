<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>LqhHome 首页</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
<link href="css/flexslider.css" rel="stylesheet" /> 
<link href="css/style.css" rel="stylesheet" />
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<script src="js/template-native.js"></script>
    <script type="text/template" id='Template1'>
        <% for(var i =0;i<items.length;i++){ %>

        <% }%>
    </script>
</head>
<body>
<div id="wrapper" class="home-page">
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p class="pull-left hidden-xs"><i class="fa fa-clock-o"></i><span>周一至周六8.00 - 18.00。星期天休息</span>
        <p class="pull-right"><i class="fa fa-phone"></i>客服微信：QQ525059989</p>
      </div>
    </div>
  </div>
</div>
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo" style="width: 150px"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">主页</a></li>
						<li><a href="about.php">关于我们</a></li>
						<li><a href="publish.php">发布</a></li>
                        <li><a href="projects.php">项目</a></li>
                        <li><a href="pricing.php">打赏</a></li>
                        <li><a href="contact.php">联系</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->
	<section id="banner">
	 
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="img/slides/2.jpg" alt="" />
                <div class="flex-caption">
                    <h3>特色别墅</h3>
					 
                </div>
              </li>
              <li>
                <img src="img/slides/1.jpg" alt="" />
                <div class="flex-caption">
                    <h3>时尚家居</h3>
					 
                </div>
              </li>
            </ul>
        </div>
	<!-- end slider -->
 
	</section> 
 
	
	<section id="content">
	<div class="container"> 
			<div class="row">
		<div class="skill-home"> <div class="skill-home-solid clearfix">

                <?php
                require_once "../function.php";
                $conn = connectDb();
                $result = mysqli_query($conn,"select * from news");

                while ($result_arr = mysqli_fetch_array($result)){
                    echo "<div class=\"col-md-3 col-sm-6 text-center\">";
                    echo "<span class=\"icons c4\"><i class=\"fa fa-star\"></i></span>";
                    echo "<div class=\"box-area\">";
                    echo "<h3>{$result_arr['tittle']}</h3>";
                    echo "<p>{$result_arr['news']}</p>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>
		</div>
<!--		<div class="col-md-3 col-sm-6 text-center">-->
<!--		<span class="icons c2"><i class="fa fa-rocket"></i></span> <div class="box-area">-->
<!--		<h3>新闻2</h3> <p>Y城大力士搬家团队，5星级团队，今天联系，明天就到，随叫随到，任您差遣，如若效率不够，您不满意，可随时取消服务。</p></div>-->
<!--		</div>-->
<!--		<div class="col-md-3 col-sm-6 text-center">-->
<!--		<span class="icons c3"><i class="fa fa-trophy"></i></span> <div class="box-area">-->
<!--		<h3>新闻3</h3> <p>2019年4月份开始到5月份结束，只要您提前预定房子，即可享受会员全套服务，送现代化家居一套，包您的孩子在本地小学所需住宿费。</p></div>-->
<!--		</div>-->
<!--		<div class="col-md-3 col-sm-6 text-center">-->
<!--		<span class="icons c4"><i class="fa fa-star"></i></span> <div class="box-area">-->
<!--		<h3>新闻4</h3> <p>P城无影团队，始于2002年，积累了大量安装门控的经验，保证您的居住比故宫博物馆还要安全，6月份前预定可享受优惠。</p>-->
<!--		</div></div>-->
<!--		</div></div>-->
<!--		</div> -->
	  
	</div>
	

	
	<section class="section-padding noTopMrgn">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2><span class="coloured">公</span>告</h2>
                        <?php
                        require_once "../function.php";
                        $conn = connectDb();
                        $result = mysqli_query($conn,"select * from announcement");
                        $result_arr = mysqli_fetch_array($result);
                        echo "<p>{$result_arr['details']}</p>";
                        ?>

					</div>
				</div>
			</div>
			<!--<div class="row service-v1 margin-bottom-40">-->
            <!--<div class="col-sm-3 md-margin-bottom-40">-->
               <!--<img class="img-responsive" src="img/img1.jpg" alt="">   -->
                <!--<h3>爱琴海游轮公寓</h3>-->
                <!--<p>爱琴海游轮公寓，位于X市的海边，拥有美丽的海景，而且附近有很多购物商场。</p>-->
            <!--</div>-->
            <!--<div class="col-sm-3 md-margin-bottom-40">-->
                <!--<img class="img-responsive" src="img/img2.jpg" alt="">            -->
                <!--<h3>蔚蓝国际公寓</h3>-->
                <!--<p>蔚蓝国际公寓，位于Y城的S山下，空气环境优秀，而且附近的教育资源充足，是孩子居住的不二之选。</p>-->
            <!--</div>-->
            <!--<div class="col-sm-3 md-margin-bottom-40">-->
              <!--<img class="img-responsive" src="img/img3.jpg" alt="">  -->
                <!--<h3>西西里别墅</h3>-->
                <!--<p>西西里别墅，坐落于莲花山上，在温泉度假村里面，购买者拥有免费泡温泉的特权，山水都有，环境优美。</p>-->
            <!--</div> -->
			    <!--<div class="col-sm-3 md-margin-bottom-40">-->
               <!--<img class="img-responsive" src="img/img4.jpg" alt="">   -->
                <!--<h3>新羽园</h3>-->
               <!--<p>新羽园小区，位于Z城，交通方便，出门驾驶5分钟即可到达最近高速路口，教育资源充沛，附近有小学和高中。</p>-->
            <!--</div> -->
        <!--</div>-->
		</div>
		</section>
	
	
	</section>
	
<!--		<section class="section-padding gray-bg">-->
<!--		<div class="container">-->
<!--			<div class="row">-->
<!--				<div class="col-md-12">-->
<!--					<div class="section-title text-center">-->
<!--						<h2><span class="coloured">新闻</span></h2>-->
<!---->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="row service-v1 margin-bottom-40">-->
<!--            <div class="col-sm-4 md-margin-bottom-40">-->
<!--               <img class="img-responsive" src="img/img5.jpg" alt="">-->
<!--                <h3>红星别墅区</h3>-->
<!--                <p>位于P镇的一个山脚，环境优美，别墅内3房3厅，可免费安装门控系统。</p>-->
<!--            </div>-->
<!--            <div class="col-sm-4 md-margin-bottom-40">-->
<!--                <img class="img-responsive" src="img/img6.jpg" alt="">            -->
<!--                <h3>星洲别墅</h3>-->
<!--                <p>位于G港附近，别墅带有5个车库，是跑车爱好者的不二之选。</p>-->
<!--            </div>-->
<!--            <div class="col-sm-4 md-margin-bottom-40">-->
<!--              <img class="img-responsive" src="img/img7.jpg" alt="">  -->
<!--                <h3>无影门控</h3>-->
<!--                <p>无影门控团队，可帮安装指纹解锁门控，监控等，可帮设计安全系统。</p>-->
<!--            </div>-->
<!--			</div>-->
<!--			<div class="row service-v1 margin-bottom-40">-->
<!--			    <div class="col-sm-4 md-margin-bottom-40">-->
<!--               <img class="img-responsive" src="img/img8.jpg" alt="">   -->
<!--                <h3>天兰公寓</h3>-->
<!--                <p>位于H小岛上，环境优美，空气清新，有大桥可直通Y市，交通方便。</p>-->
<!--            </div>-->
<!--            <div class="col-sm-4 md-margin-bottom-40">-->
<!--                <img class="img-responsive" src="img/img9.jpg" alt="">            -->
<!--                <h3>福林小区</h3>-->
<!--                <p>位于F市中心，小区里有小公园，湖泊，健身房等。</p>-->
<!--            </div>-->
<!--            <div class="col-sm-4 md-margin-bottom-40">-->
<!--              <img class="img-responsive" src="img/img10.jpg" alt="">  -->
<!--                <h3>顶峰小区</h3>-->
<!--                <p>位于L市，交通方便，自带天台，每天可欣赏日出，附近有购物广场。</p>-->
<!--            </div>-->
<!--        </div>-->
<!--		</div>-->
<!--		</section>-->
		<section class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2><span class="coloured">关于</span>我们公司</h2>
						<p>LqhHome 是由一批毕业大学生组成的创业型房地产公司，年轻、富有活力，
							注定一开始就是一家具有广阔发展前景的房地产公司，公司现有员工11人，其中UI2人、
							网站前端4人、网站后台5人，公司注册资金700万元。</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="about-text">
						<p>自2019年代进入X国，LqhHome
							为客户提供创新的地产方案，满足客户的需求。LqhHome为广大客户提供了许多的住宅选择，LqhHome
							凭借其丰富的经验及敏锐的市场洞悉力，成为X国地产界毋庸置疑的领导者。</p>

						<br><br><br><br>
						<a href="contact.php" class="btn btn-primary">联系我们</a>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="about-image">
						<img src="img/about.jpg" alt="About Images">
					</div>
				</div>
			</div>
		</div>
	</section>	  

	<footer>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="copyright">
						<p>
							04161721-李晴欢-企业网站Demo
						</p>
					</div>
				</div>

			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>  
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<!-- Vendor Scripts -->
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script> 
</body>
</html>