<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>联系</title>
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

</head>
<body>
<div id="wrapper">
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
				<h2 class="pageTitle">联系我们</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	
	<div class="container">
		<div class="row"> 
							<div class="col-md-12">
								<div class="about-logo">
									<h2><span class="coloured">留言板</span></h2>
								</div>  
							</div>
						</div>
	<div class="row">
								<div class="col-md-6">
								  	
		   <!-- Form itself -->
         <form name="sentMessage" id="contactForm" action="addmessage.php" method="post" novalidate>
	       <h3>联系我</h3>
		 <div class="control-group">
                    <div class="controls">
			<input type="text" class="form-control" name="name"
			   	   placeholder="您的名字" id="name" required
			           data-validation-required-message="请输入你的名字" />
			  <p class="help-block"></p>
		   </div>
	         </div> 	
                <div class="control-group">
                  <div class="controls">
			<input type="email" class="form-control" placeholder="邮箱地址"
			   	            id="email" required name="email"
			   		   data-validation-required-message="请输入您的邮箱地址" />
				<p class="help-block"></p>
		</div>
	    </div> 	
			  
               <div class="control-group">
                 <div class="controls">
				 <textarea rows="10" cols="100" class="form-control" name="message"
                       placeholder="内容" id="message" required
		       data-validation-required-message="请输入您的留言内容" minlength="5"
                       data-validation-minlength-message="Min 5 characters" 
                        maxlength="999" style="resize:none"></textarea>
		</div>
               </div> 		 
	     <div id="success"> </div> <!-- For success/fail messages -->
	    <button type="submit" class="btn btn-primary pull-right">发送</button><br />
          </form>
								</div>

	</div>
	</div>
 
	</section>

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

 <script src="contact/jqBootstrapValidation.js"></script>
 <script src="contact/contact_me.js"></script>
</body>
</html>