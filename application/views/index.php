<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Welcome to Smartemps</title>
<link href="<?=base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
<link href="<?=base_url('css/style.css'); ?>" rel="stylesheet">
<link rel="stylesheet" href="<?=base_url('css/font-awesome.min.css'); ?>">
<!-- Owl Carousel Assets -->
<link href="<?=base_url('css/owl.carousel.css'); ?>" rel="stylesheet">
<link href="<?=base_url('css/owl.theme.css'); ?>" rel="stylesheet">
</head>

<body>

<!--=== HEADER SECTION ===-->
<section class="topSection">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-4 col-sm-12">
            	<div class="logo">
                	<a href="<?=base_url('images/logo.png'); ?>" /></a>
                </div>
                <div class="logoNear">
                	<span><?=$total_files; ?> DOCUMENTS</span>
                    <span><?=$total_categories; ?> CATEGORIES</span>
                    <span>ALL FREE</span>
                </div>
            </div>
            
            <div class="col-lg-8 col-sm-12">
            	<div class="mainMenu desktopOnly">
                	<ul>
                        <?php
                        foreach($nav_bar as $nav) {
                            echo "<li><a href='#'>".$nav->mainCategory."</a></li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mobileMenu">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-sm-12">
                <a class="onlymobile toggleli"><i class="fa fa-bars toggleBar" data-want="open"></i> CATEGORIES</a>
                <div class="panel1 onlymobile">
                    <ul>       
                        <li class=""><a href="<?=base_url('#'); ?>">ABOUT</a></li>
                        <li class=""><a href="<?=base_url('#'); ?>">PRODUCTS</a></li>
                        <li class=""><a href="<?=base_url('#'); ?>">CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== SEARCH SECTION ===== --->
<section class="bannerSection">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-2 col-sm-12"></div>
            <div class="col-lg-8 col-sm-12">
            	<div class="searchTitle"><h2>One-Stop Forms & Templates Download</h2></div>
                <div class="searchBox">
                	<div class="inner-addon left-addon">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <input type="text" class="searchInput" placeholder="Find a service or company" />
                        <button class="searchButton">SEARCH</button>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-2 col-sm-12"></div>
            
        </div>
    </div>
</section>

<!-- ==== HOMECATEGORIES SECTION ==== -->
<section class="homeCategoriestSection">
	<div class="container">
    <div class="ad3"><img src="<?=base_url('images/970x90.jpg'); ?>" alt=""/></div>
    
    
    
   	  <div class="row">
        	<div class="categoryTitle"><?=$total_files; ?> Documents in <?=$total_categories; ?> Categories</div>
            <div class="categorySubTitle">See <span><a href="<?=base_url('#_'); ?>">What's New</a></span> in <?=SITE_NAME; ?></div>
        </div>
    	<div class="row marginTop20">
        
        <div class="homecat">
        <ul>
        <?php foreach($random_home as $random) : ?>
        <li>
            <div class="categoryBox">
                	<div class="categoryImage">
                    	<img src="<?=base_url(image_url($random->bigImage)); ?>" />
                    </div>
                    <div class="categoryBoxTitle"><a href="<?=site_url($random->mainID); ?>"><?=$random->name; ?></a></div>
                </div>
        </li>
    <?php endforeach; ?>
        </ul>
        </div>
        </div>
        <div class="row marginTop20">
            <div class="categorySubTitle">Get more manuals and forms from <span><a href="<?=base_url(); ?>"><?=SITE_NAME; ?></a></span> and <span><a href="<?=base_url(); ?>"><?=SITE_NAME; ?></a></span></div>
        </div>
    </div>
</section>

<div class="ad3"><img src="<?=base_url('images/970x90.jpg'); ?>" alt=""/></div>

<section class="submittionSection">
	<div class="container">
    	<div class="row">
            <div class="col-lg-12 col-sm-12">
            	<div class="submittionTitle"><h2>Submit Your Form Now!</h2></div>
                <div class="submittionBox">
                	<a href="<?=base_url('#'); ?>" class="submittionBtn">SUBMISSION FORM</a>
                </div>
                <div class="submittionSubTitle">1,723 forms already submited by our community and counting.</div>
            </div>
        </div>
    </div>
</section>


<section class="recommedationSection">
	<div class="container">
    	<div class="row">
            <div class="col-lg-12 col-sm-12">
            	<div class="recommedationTitle"><h3>OUR RECOMMENDATIONS</h3></div>
           
                
                
                <div class="carousel slide" id="myCarousel">
                         <div id="owl-demo">
                    <?php foreach($random_slider as $key => $value) : ?>
                        <div class="item"> <div class="carouselBox">
                        <div class="item">
                        	<div class="carouselBox">
                            	<div class="recommedationItem">
                                    <div class="recommedationImage">
                                    	<img src="<?=base_url(image_url($value->previewImages)); ?>" />
                                    </div>
                                    <div class="stars">
                                    <?php for($i=0; $i<ceil($value->rating); $i++): ?>
                                    <i class="fa fa-star blue"></i>
                                <?php endfor; ?>
                                    </div>
                                    <div class="recommedationItemTitle">
                                    	<a href="<?=base_url('#'); ?>"><?=$value->name; ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
               </div>
                </div>
                    <?php endforeach; ?>
            </div>
        </div>
        