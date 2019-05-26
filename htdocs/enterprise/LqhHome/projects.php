<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>项目</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
<link href="css/flexslider.css" rel="stylesheet" />
<!-- Vendor Styles -->
<link href="css/magnific-popup.css" rel="stylesheet"> 
<!-- Block Styles -->
<link href="css/style.css" rel="stylesheet" />
<link href="css/gallery-1.css" rel="stylesheet">
 
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
	</header><!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">项目</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">

<!--						<div class="row"> -->
<!--							<div class="col-md-12">-->
<!--								<div class="about-logo">-->
<!--									<h2><span class="coloured">最佳</span>项目</h2>-->
<!--									<p>最佳的项目</p>-->
<!--								</div>  -->
<!--							</div>-->
<!--						</div> -->

	</div>
	</section>
			  <!-- Start Gallery 1-2 -->
    <section id="gallery-1" class="content-block section-wrapper gallery-1">
    	 	<div class="container">

<!--			<div class="editContent">-->
<!--	            <ul class="filter">-->
<!--	                <li class="active"><a href="#" data-filter="*">所有</a></li>-->
<!--	                <li><a href="#" data-filter=".apartments">公寓</a></li>-->
<!--	                <li><a href="#" data-filter=".villas">别墅</a></li>-->
<!--	                <li><a href="#" data-filter=".commercial">广告</a></li>-->
<!--	                <li><a href="#" data-filter=".gated">门控</a></li>-->
<!--	                <li><a href="#" data-filter=".housing">住房</a></li>-->
<!--	            </ul>-->
<!--			</div>-->
            <!-- /.gallery-filter -->
            
            <div class="row">
                <div id="isotope-gallery-container">
<!--                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper apartments villas">-->
<!--                        <div class="gallery-item">-->
                            <?php
                            require_once "../function.php";
                            $conn = connectDb();
                            $result = mysqli_query($conn,"select * from project");

                            while ($result_arr = mysqli_fetch_array($result)){
                                echo "<div class=\"col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper apartments villas\">";
                                echo "<div class=\"gallery-item\">";
                                echo "<div class=\"gallery-thumb\">";
                                echo "<img src=\"img/works/{$result_arr['img']}.jpg\" class=\"img-responsive\" alt=\"1st gallery Thumb\">";
                                echo "<div class=\"image-overlay\">";
                                echo "</div>";
                                echo "<a href=\"img/works/{$result_arr['img']}.jpg\" class=\"gallery-zoom\">";
                                echo "<i class=\"fa fa-eye\">";
                                echo "</i>";
                                echo "</a>";
                                echo "<a href=\"#\" class=\"gallery-link\">";
                                echo "<i class=\"fa fa-link\">";
                                echo "</i>";
                                echo "</a>";
                                echo "</div>";
                                echo "<div class=\"gallery-details\">";
                                echo "<div class=\"editContent\">";
                                echo "<h5>{$result_arr['tittle']}</h5>";
                                echo "</div>";
                                echo "<div class=\"editContent\">";
                                echo "<p>{$result_arr['details']}</p>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                            }
                            ?>

<!--                            <div class="gallery-thumb">-->
<!---->
<!--                                <img src="img/works/1.jpg" class="img-responsive" alt="1st gallery Thumb">-->
<!--                                <div class="image-overlay"></div>-->
<!--                                <a href="img/works/1.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>-->
<!--                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>-->
<!--                            </div>-->
<!--                            <div class="gallery-details">-->
<!--                            	<div class="editContent">-->
<!--	                                <h5>第一项目</h5>-->
<!--                            	</div>-->
<!--                            	<div class="editContent">-->
<!--	                                <p>第一项目简介</p>-->
<!--                            	</div>-->
<!--                            </div>-->
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
<!--                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper commercial gated">-->
<!--                        <div class="gallery-item">-->
<!--                            <div class="gallery-thumb">-->
<!--                                <img src="img/works/2.jpg" class="img-responsive" alt="2nd gallery Thumb">-->
<!--                                <div class="image-overlay"></div>-->
<!--                                <a href="img/works/2.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>-->
<!--                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>-->
<!--                            </div>-->
<!--                            <div class="gallery-details">-->
<!--                            	<div class="editContent">-->
<!--                                	<h5>第二项目</h5>-->
<!--                            	</div>-->
<!--                            	<div class="editContent">-->
<!--                                	<p>第二项目简介</p>-->
<!--                            	</div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <!-- /.gallery-item-wrapper -->-->
<!--                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper housing apartments">-->
<!--                        <div class="gallery-item">-->
<!--                            <div class="gallery-thumb">-->
<!--                                <img src="img/works/3.jpg" class="img-responsive" alt="3rd gallery Thumb">-->
<!--                                <div class="image-overlay"></div>-->
<!--                                <a href="img/works/3.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>-->
<!--                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>-->
<!--                            </div>-->
<!--                            <div class="gallery-details">-->
<!--                            	<div class="editContent">-->
<!--                                	<h5>第三项目</h5>-->
<!--                            	</div>-->
<!--                            	<div class="editContent">-->
<!--                                	<p>第三项目简介</p>-->
<!--                            	</div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <!-- /.gallery-item-wrapper -->-->
<!--                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper villas commercial">-->
<!--                        <div class="gallery-item">-->
<!--                            <div class="gallery-thumb">-->
<!--                                <img src="img/works/4.jpg" class="img-responsive" alt="4th gallery Thumb">-->
<!--                                <div class="image-overlay"></div>-->
<!--                                <a href="img/works/4.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>-->
<!--                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>-->
<!--                            </div>-->
<!--                            <div class="gallery-details">-->
<!--                            	<div class="editContent">-->
<!--                                	<h5>第四项目</h5>-->
<!--                            	</div>-->
<!--                            	<div class="editContent">-->
<!--                                	<p>第四项目简介</p>-->
<!--                            	</div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <!-- /.gallery-item-wrapper -->-->
<!--                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper commercial">-->
<!--                        <div class="gallery-item">-->
<!--                            <div class="gallery-thumb">-->
<!--                                <img src="img/works/5.jpg" class="img-responsive" alt="5th gallery Thumb">-->
<!--                                <div class="image-overlay"></div>-->
<!--                                <a href="img/works/5.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>-->
<!--                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>-->
<!--                            </div>-->
<!--                            <div class="gallery-details">-->
<!--                            	<div class="editContent">-->
<!--                                	<h5>第五项目</h5>-->
<!--                            	</div>-->
<!--                            	<div class="editContent">-->
<!--                                	<p>第五项目简介</p>-->
<!--                            	</div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <!-- /.gallery-item-wrapper -->-->
<!--                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper apartments villas">-->
<!--                        <div class="gallery-item">-->
<!--                            <div class="gallery-thumb">-->
<!--                                <img src="img/works/6.jpg" class="img-responsive" alt="6th gallery Thumb">-->
<!--                                <div class="image-overlay"></div>-->
<!--                                <a href="img/works/6.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>-->
<!--                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>-->
<!--                            </div>-->
<!--                            <div class="gallery-details">-->
<!--                            	<div class="editContent">-->
<!--                                	<h5>第六项目</h5>-->
<!--                            	</div>-->
<!--                            	<div class="editContent">-->
<!--                                	<p>第六项目简介</p>-->
<!--                            	</div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    -->
                </div>
                <!-- /.isotope-gallery-container -->
            </div>
            <!-- /.row --> 
        <!-- /.container -->
		</div>
    </section>
    <!--// End Gallery 1-2 -->  
	</div>

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
<!-- Vendor Scripts -->
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
 
</body>
</html>