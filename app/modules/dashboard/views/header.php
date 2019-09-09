<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="apple-touch-icon" href="<?=base_url()?>_template/dashboard/images/apple-touch-icon.png" />
<link rel="apple-touch-startup-image" href="<?=base_url()?>_template/dashboard/images/apple-touch-startup-image-640x920.png">
<title><?=$title?></title>
<link rel="stylesheet" href="<?=base_url()?>_template/dashboard/css/framework7.css">
<link rel="stylesheet" href="<?=base_url()?>_template/dashboard/style.css">
<link type="text/css" rel="stylesheet" href="<?=base_url()?>_template/dashboard/css/swipebox.css" />
<link type="text/css" rel="stylesheet" href="<?=base_url()?>_template/dashboard/css/animations.css" />
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,900" rel="stylesheet">


<script src="<?=base_url()?>_template/dashboard/js/jquery-1.10.1.min.js"></script>
<script src="<?=base_url()?>_template/dashboard/js/jquery.validate.min.js" ></script>
<script src="<?=base_url()?>_template/dashboard/js/framework7.js"></script>
</head>
<body id="mobile_wrap">

    <div class="statusbar-overlay"></div>

    <div class="panel-overlay"></div>

    <div class="panel panel-left panel-reveal">
	<div class="view view-subnav">
	<div class="pages">
		<div data-page="panel-leftmenu" class="page pagepanel">
      <div class="page-content">
  			<nav class="main_nav_underline">
    			<ul>
    			<li><a href="<?=site_url("dashboard/dashboard")?>" class="close-panel" data-view=".view-main"><img src="<?=base_url()?>_template/dashboard/images/icons/white/home.png" alt="" title="" /><span>Home</span></a></li>
    			<li><a href="<?=site_url("dashboard/dashboard/about")?>" class="close-panel" data-view=".view-main"><img src="<?=base_url()?>_template/dashboard/images/icons/white/mobile.png" alt="" title="" /><span>About</span></a></li>
    			<li><a href="features.html" class="close-panel" data-view=".view-main"><img src="<?=base_url()?>_template/dashboard/images/icons/white/features.png" alt="" title="" /><span>Features</span></a></li>

    			<li><a href="#" data-popup=".popup-login" class="open-popup close-panel"><img src="<?=base_url()?>_template/dashboard/images/icons/white/lock.png" alt="" title="" /><span>Login</span></a></li>
    			<li><a href="team.html" class="close-panel" data-view=".view-main"><img src="<?=base_url()?>_template/dashboard/images/icons/white/users.png" alt="" title="" /><span>Team</span></a></li>
    			<li><a href="blog.html" class="close-panel" data-view=".view-main"><img src="<?=base_url()?>_template/dashboard/images/icons/white/blog.png" alt="" title="" /><span>Blog</span></a></li>

    			<li><a href="photos.html" class="close-panel" data-view=".view-main"><img src="<?=base_url()?>_template/dashboard/images/icons/white/photos.png" alt="" title="" /><span>Photos</span></a></li>
    			<li><a href="videos.html" class="close-panel" data-view=".view-main"><img src="<?=base_url()?>_template/dashboard/images/icons/white/video.png" alt="" title="" /><span>Videos</span></a></li>
    			<li><a href="music.html" class="close-panel" data-view=".view-main"><img src="<?=base_url()?>_template/dashboard/images/icons/white/music.png" alt="" title="" /><span>Music</span></a></li>

    			<li><a href="shop.html" class="close-panel" data-view=".view-main"><img src="<?=base_url()?>_template/dashboard/images/icons/white/shop.png" alt="" title="" /><span>Shop</span></a></li>
    			<li class="subnav"><a href="categories.html"><img src="<?=base_url()?>_template/dashboard/images/icons/white/categories.png" alt="" title="" /><span>Sub level menu</span></a></li>
    			<li><a href="cart.html" class="close-panel" data-view=".view-main"><img src="<?=base_url()?>_template/dashboard/images/icons/white/cart.png" alt="" title="" /><span>Cart</span></a></li>

    			<li><a href="tables.html" class="close-panel" data-view=".view-main"><img src="<?=base_url()?>_template/dashboard/images/icons/white/tables.png" alt="" title="" /><span>Tables</span></a></li>
    			<li><a href="chat.html" class="close-panel" data-view=".view-main"><img src="<?=base_url()?>_template/dashboard/images/icons/white/message.png" alt="" title="" /><span>Chat messages</span></a></li>
    			<li><a href="form.html" class="close-panel" data-view=".view-main"><img src="<?=base_url()?>_template/dashboard/images/icons/white/form.png" alt="" title="" /><span>Custom Form</span></a></li>


    			<li><a href="tel:012345678" class="close-panel external" data-view=".view-main"><img src="<?=base_url()?>_template/dashboard/images/icons/white/phone.png" alt="" title="" /><span>Call now!</span></a></li>
    			<li><a href="contact.html" class="close-panel" data-view=".view-main"><img src="<?=base_url()?>_template/dashboard/images/icons/white/contact.png" alt="" title="" /><span>Contact</span></a></li>
    			</ul>
  			</nav>
    </div>
		</div>
	  </div>
	</div>
    </div>

    <div class="panel panel-right panel-reveal">
      <div class="user_login_info">

                <div class="user_thumb">
                <img src="<?=base_url()?>_template/dashboard/images/page_photo.jpg" alt="" title="" />
                  <div class="user_details">
                   <p>Welcome, <span>Nathalie</span></p>
                  </div>
                  <div class="user_avatar"><img src="<?=base_url()?>_template/dashboard/images/avatar.jpg" alt="" title="" /></div>
                </div>

                  <nav class="user-nav">
                    <ul>
                      <li><a href="features.html" class="close-panel"><img src="<?=base_url()?>_template/dashboard/images/icons/white/settings.png" alt="" title="" /><span>Account Settings</span></a></li>
                      <li><a href="features.html" class="close-panel"><img src="<?=base_url()?>_template/dashboard/images/icons/white/briefcase.png" alt="" title="" /><span>My Account</span></a></li>
                      <li><a href="features.html" class="close-panel"><img src="<?=base_url()?>_template/dashboard/images/icons/white/message.png" alt="" title="" /><span>Messages</span><strong>12</strong></a></li>
                      <li><a href="features.html" class="close-panel"><img src="<?=base_url()?>_template/dashboard/images/icons/white/love.png" alt="" title="" /><span>Favorites</span><strong>5</strong></a></li>
                      <li><a href="index.html" class="close-panel"><img src="<?=base_url()?>_template/dashboard/images/icons/white/lock.png" alt="" title="" /><span>Logout</span></a></li>
                    </ul>
                  </nav>
      </div>
    </div>



        <div class="views">

          <div class="view view-main">
