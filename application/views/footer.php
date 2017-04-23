<div class="row marginTop20">
            <div class="col-lg-12 col-sm-12">
            	<div class="featuredCategoryTitle"><h3>FEATURED CATEGORIES</h3></div>
                <div class="featuredCategoryBox">
                <?php $type = array('regular', 'small', 'large');?>
                <?php foreach($featured_category as $value): ?>
                    <?php $x = rand(0,2); ?>
                    <span class="<?=$type[$x]?>"><a href="<?=base_url('main/category/'.url_title($value->category, 'dash', true)); ?>"><?=$value->category?></a></span>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="footerTopSection">
	<div class="container">
    	<div class="row">
          	<div class="col-lg-6 col-md-6 col-sm-12">
            	<div class="footerTitle">
                	FEATURED CATEGORIES
                </div>
                <ul class="footerList">
                <?php foreach($featured_list as $value): ?>
                    <li><a href="<?=base_url('main/category/'.$value); ?>"><?=$value->category?></a>
                <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
            	<div class="footerTitle">
                	ABOUT US
                </div>
                <ul class="footerList">
                <div class="text-danger">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="footerSocialSection">
	<div class="container">
    	<div class="row">
          	<div class="col-lg-5 col-md-5 col-sm-12">
                <ul class="socialLinks">
                	<li><a href="<?=base_url('#'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <li><a href="<?=base_url('#'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <li><a href="<?=base_url('#'); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <li><a href="<?=base_url('#'); ?>"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                    <li><a href="<?=base_url('#'); ?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    <li><a href="<?=base_url('#'); ?>"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                    <li><a href="<?=base_url('#'); ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                </ul>
            </div>
            
            <div class="col-lg-7 col-md-7 col-sm-12">
            	<div class="searchBox">
                	<div class="inner-addon left-addon">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <input type="text" class="searchInput" placeholder="Find a service or company" />
                        <button class="searchButton">SEARCH</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="footerBottomSection">
	<div class="container">
    	<div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 flinks">
        <ul class="footerMenu">
          <li><a href="<?=base_url('#'); ?>">Home</a></li>
          <li><a href="<?=base_url('#'); ?>">Sitemap</a></li>
          <li><a href="<?=base_url('#'); ?>">Privacy Policy</a></li>
        </ul>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="copyRight">&copy; 2010-2017 Smartemps.com, All rights reserved. Smartemps  is registered trademark.</div>
      </div>
    </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?=base_url('js/tether.min.js'); ?>"></script>
<script type="text/javascript" src="<?=base_url('js/jquery.min.js'); ?>"></script>
<script type="text/javascript" src="<?=base_url('js/bootstrap.min.js'); ?>"></script>
<script src="<?=base_url('js/owl.carousel.js'); ?>"></script> 

<script>
    $(document).ready(function() {

      var owl = $("#owl-demo");

      owl.owlCarousel({
      autoplay : false,
      items : 5, //3 items above 1000px browser width
      itemsDesktop : [1000,5], //3 items between 1000px and 901px
      itemsDesktopSmall : [900,4], // 2 items betweem 900px and 601px
      itemsTablet: [600,2], //1 items between 600 and 0;
      itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
      navigation : true,
	  responsive: {
0: {
items: 2
},
640: {
items: 2
},
680: {
items: 3
},
1024: {
items: 5
}
}
      });

    });
	
    </script>
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script> 
<script>
	$(document).ready(function() {
	   $(".toggleBar").click(function(){
	   var data=$(this).attr('data-want');
	   if(data=="open") {
	   $(this).attr('data-want','close');
	   $(this).attr('class','fa fa-times toggleBar')
	}
	else if(data=="close") {
	$(this).attr('data-want','open');
	   $(this).attr('class','fa fa-bars toggleBar')
	}
		$(".panel1").slideToggle();
	   });
	$(".has-dropdown").find("a").click(function() {
	
	$(this).parents(".has-dropdown").find(".dropdownlist").slideToggle();
	});
	$(".productFullHeight").mouseover(function() {
	$(".productTitle a").css('color','#000');
	});
	
	$(".productFullHeight").mouseout(function() {
	$(".productTitle a").css('color','#0275d8');
	});
	});
	</script>
</body>
</html>