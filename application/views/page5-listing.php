<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Welcome to Smartemps</title>
<link href="<?=base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?=base_url(); ?>css/style.css" rel="stylesheet">
<link rel="<?=base_url(); ?>stylesheet" href="css/font-awesome.min.css">
<!-- Owl Carousel Assets -->
<link href="<?=base_url(); ?>css/owl.carousel.css" rel="stylesheet">
<link href="<?=base_url(); ?>css/owl.theme.css" rel="stylesheet">
</head>

<body>

<!--=== HEADER SECTION ===-->
<section class="topSection inner">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-sm-12">
        <div class="logo"> <a href="#"><img src="<?=base_url()?>images/logo.png" /></a> </div>
        
        <div class="logoNear"> <span>20284 DOCUMENTS</span> <span>2969 CATEGORIES</span> <span>ALL FREE</span> </div>
      </div>
      <div class="col-lg-8 col-sm-12">
        <div class="searchBox header-search">
          <div class="inner-addon left-addon"> <i class="fa fa-search" aria-hidden="true"></i>
            <input type="text" class="searchInput" placeholder="Find a service or company" />
            <button class="searchButton">SEARCH</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="mobileMenu">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-sm-12"> <a class="onlymobile toggleli"><i class="fa fa-bars toggleBar" data-want="open"></i> CATEGORIES</a>
        <div class="panel1 onlymobile">
          <ul>
            <li><a href="#">Business</a></li>
            <li><a href="#">Education</a></li>
            <li><a href="#">Finance</a></li>
            <li><a href="#">Legal</a></li>
            <li><a href="#">Life</a></li>
            <li><a href="#">Miscellaneous</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==== MENU SECTION ===== -->
<section class="menu-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-sm-12">
        <div class="mainMenu desktopOnly">
          <ul>
            <li><a href="#">Business</a></li>
            <li><a href="#">Education</a></li>
            <li><a href="#">Finance</a></li>
            <li><a href="#">Legal</a></li>
            <li><a href="#">Life</a></li>
            <li><a href="#">Miscellaneous</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-sm-12 dnone1"> <a href="#_" class="btn1">SUBMIT FORM</a> </div>
    </div>
  </div>
</section>

<!-- ==== HOMECATEGORIES SECTION ==== -->
<section class="inner-page">
  <div class="container padding0">
  <div class="page-bg">
    <div class="col-lg-4 col-md-4 col-sm-5 page-left dnone">
    <div class="ads4"><img src="<?=base_url()?>images/300x250.jpg" alt=""/></div>
      <h1 class="page-tital">Loren ipsum</h1>
      <div class="tital">
        <h3>BROWSE BY COUNTRY</h3>
      </div>
      <ul class="links">
        <li><a href="#_">Australia <i class="fa fa-angle-double-right"></i></a></li>
        <li><a href="#_">Australia <i class="fa fa-angle-double-right"></i></a></li>
        <li><a href="#_">Australia <i class="fa fa-angle-double-right"></i></a></li>
        <li><a href="#_">Australia <i class="fa fa-angle-double-right"></i></a></li>
        <li><a href="#_">Australia <i class="fa fa-angle-double-right"></i></a></li>
        <li><a href="#_">Australia <i class="fa fa-angle-double-right"></i></a></li>
        <li><a href="#_">Australia <i class="fa fa-angle-double-right"></i></a></li>
        <li><a href="#_">Australia <i class="fa fa-angle-double-right"></i></a></li>
        <li><a href="#_">Australia <i class="fa fa-angle-double-right"></i></a></li>
        <li><a href="#_">Australia <i class="fa fa-angle-double-right"></i></a></li>
        <li><a href="#_">Australia <i class="fa fa-angle-double-right"></i></a></li>
        <li><a href="#_">Australia <i class="fa fa-angle-double-right"></i></a></li>
        <li><a href="#_">Australia <i class="fa fa-angle-double-right"></i></a></li>
        <li><a href="#_">Australia <i class="fa fa-angle-double-right"></i></a></li>
        <li><a href="#_">Australia <i class="fa fa-angle-double-right"></i></a></li>
        <li><a href="#_">Australia <i class="fa fa-angle-double-right"></i></a></li>
        <li><a href="#_">Australia <i class="fa fa-angle-double-right"></i></a></li>
         <li><a href="#_">Australia <i class="fa fa-angle-double-right"></i></a></li>
        <li><a href="#_">Australia <i class="fa fa-angle-double-right"></i></a></li>
        <li><a href="#_">Australia <i class="fa fa-angle-double-right"></i></a></li>
      </ul>
      <div class="tital">
        <h3>BBROWSE BY COLOR</h3>
      </div>
      <ul class="links">
        <li><a href="#_">Blue <i class="fa fa-angle-double-right"></i></a></li>
        <li><a href="#_">Red <i class="fa fa-angle-double-right"></i></a></li>
        <li><a href="#_">Green <i class="fa fa-angle-double-right"></i></a></li>
        <li><a href="#_">Yellow <i class="fa fa-angle-double-right"></i></a></li>
      </ul>
    
    </div>
    <div class="col-lg-8 col-md-8 col-sm-7 page-right dnone">
    <div class="row ads2"><img src="<?=base_url()?>images/728x90.jpg" class="text-center" alt=""/></div>
      <h1 class="page-tital">Category: <?=ucfirst(str_replace('-', ' ', $this->uri->segment(3)))?></h1>

      <?php foreach($list as $value): ?>
     <div class="row">
        <div class="col-sm-12">
         <div class="price-quote">
         <h3><a href="#_"><?=$value->name?></a></h3>
         <div class="quote-text">
           <div class="img-size1"><img src="<?=base_url($value->bigImage)?>" alt=""/></div> 
           <p>File Type: <?=$value->fileType?></p>
           <p>Pages: <?=$value->pages?></p>
           <p>Size: <?=$value->fileSize?></p>
           <p><i class="fa fa-star blue"></i> <i class="fa fa-star blue"></i> <i class="fa fa-star blue"></i> <i class="fa fa-star blue"></i> <i class="fa fa-star"></i> (<?=$value->rating?> based on <?=$value->numberofVotes?> votes)</p>
           <a href="<?=base_url('main/item/'.$value->id)?>" class="btn2 mtb"><img src="<?=base_url()?>images/icon03.png" alt=""/> View Details</a>
           </div>
         </div> 
        </div>
 </div>
<?php endforeach; ?>
      
      
      
      
      
      
      <!-- <div class="poweredby"><a href="#_">Medical Forms</a> powered by <a href="#_">Sitename.com</a></div> -->
      <div class="pagi">
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item disabled"> <a class="page-link" href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> <span class="sr-only">Previous</span> </a> </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"> <a class="page-link" href="#" aria-label="Next"> <span aria-hidden="true">&raquo;</span> <span class="sr-only">Next</span> </a> </li>
          </ul>
        </nav>
      </div>
    </div>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-7 page-right for-mob">
      <div class="recommedationTitle mt"><h3>SUBCATEGORIES</h3></div>
      <ul class="links">
        <li><a href="#_">Category <i class="fa fa-angle-double-right"></i></a></li>
        <li><a href="#_">Category <i class="fa fa-angle-double-right"></i></a></li>
        <li><a href="#_">Category <i class="fa fa-angle-double-right"></i></a></li>
        <li><a href="#_">Category <i class="fa fa-angle-double-right"></i></a></li>
        <li><a href="#_">Category <i class="fa fa-angle-double-right"></i></a></li>
        <li><a href="#_">Category <i class="fa fa-angle-double-right"></i></a></li>
        <li><a href="#_">Category <i class="fa fa-angle-double-right"></i></a></li>
        <li><a href="#_">Category <i class="fa fa-angle-double-right"></i></a></li>
        <li><a href="#_">Category <i class="fa fa-angle-double-right"></i></a></li>
        <li><a href="#_">Category <i class="fa fa-angle-double-right"></i></a></li>
        <li><a href="#_">Category <i class="fa fa-angle-double-right"></i></a></li>
        <li><a href="#_">Category <i class="fa fa-angle-double-right"></i></a></li>
        
      </ul>
      <div class="row">
        <div class="col-lg-12 col-sm-12">
          <div class="recommedationTitle"><h3>HELP</h3></div>
          <div class="box"> <a href="#_"><img src="<?=base_url()?>images/recommadation-4.png" alt=""/></a>
            <div class="stars"><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star"></i></div>
            <a href="#_">Free Receipt Template</a> 
            <p>File Type: XLS | Google Sheet / Doc</p>
<p>Pages: 11 Page(s)</p>
<p>Size: 125 KB</p>
<a href="#_" class="btn2"><img src="<?=base_url()?>images/icon03.png" alt=""/> MORE INFO</a>
            </div>
            <div class="box"> <a href="#_"><img src="<?=base_url()?>images/recommadation-4.png" alt=""/></a>
            <div class="stars"><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star"></i></div>
            <a href="#_">Free Receipt Template</a> 
            <p>File Type: XLS | Google Sheet / Doc</p>
<p>Pages: 11 Page(s)</p>
<p>Size: 125 KB</p>
<a href="#_" class="btn2"><img src="<?=base_url()?>images/icon03.png" alt=""/> MORE INFO</a>
            </div>
            <div class="box"> <a href="#_"><img src="<?=base_url()?>images/recommadation-4.png" alt=""/></a>
            <div class="stars"><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star"></i></div>
            <a href="#_">Free Receipt Template</a> 
            <p>File Type: XLS | Google Sheet / Doc</p>
<p>Pages: 11 Page(s)</p>
<p>Size: 125 KB</p>
<a href="#_" class="btn2"><img src="<?=base_url()?>images/icon03.png" alt=""/> MORE INFO</a>
            </div>
          <a class="btn2 fs18"><img src="<?=base_url()?>images/icon02.png" alt=""/> LOAD MORE</a>
        </div>
      </div>
      
      
      <div class="row">
        <div class="col-lg-12 col-sm-12">
          <div class="recommedationTitle"><h3>NEWEST</h3></div>
          <div class="carousel slide" id="myCarousel">
            <div id="owl-demo2">
              <div class="item">
                <div class="carouselBox">
                  <div class="recommedationItem">
                    <div class="recommedationImage"> <a href="#"><img src="<?=base_url()?>images/recommadation-1.png" /></a> </div>
                    <div class="stars"><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star"></i></div>
                    <div class="recommedationItemTitle"> <a href="#">Kids' Menu Kids' Breakfast - Oliver..</a> </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="carouselBox">
                  <div class="recommedationItem">
                    <div class="recommedationImage"> <img src="<?=base_url()?>images/recommadation-2.png" /> </div>
                    <div class="stars"><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star"></i></div>
                    <div class="recommedationItemTitle"> <a href="#">Kids Menu</a> </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="carouselBox">
                  <div class="recommedationItem">
                    <div class="recommedationImage"> <img src="<?=base_url()?>images/recommadation-3.png" /> </div>
                    <div class="stars"><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star"></i></div>
                    <div class="recommedationItemTitle"> <a href="#">Kids' Menu Kids' Breakfast - Oliver..</a> </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="carouselBox">
                  <div class="recommedationItem">
                    <div class="recommedationImage"> <img src="<?=base_url()?>images/recommadation-4.png" /> </div>
                    <div class="stars"><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star"></i></div>
                    <div class="recommedationItemTitle"> <a href="#">Kids' Menu Kids' Breakfast - Oliver..</a> </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="carouselBox">
                  <div class="recommedationItem">
                    <div class="recommedationImage"> <img src="<?=base_url()?>images/recommadation-5.png" /> </div>
                    <div class="stars"><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star"></i></div>
                    <div class="recommedationItemTitle"> <a href="#">Kids' Menu Kids' Breakfast - Oliver..</a> </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="carouselBox">
                  <div class="recommedationItem">
                    <div class="recommedationImage"> <img src="<?=base_url()?>images/recommadation-1.png" /> </div>
                    <div class="stars"><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star"></i></div>
                    <div class="recommedationItemTitle"> <a href="#">Kids' Menu Kids' Breakfast - Oliver..</a> </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="carouselBox">
                  <div class="recommedationItem">
                    <div class="recommedationImage"> <img src="<?=base_url()?>images/recommadation-2.png" /> </div>
                    <div class="stars"><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star"></i></div>
                    <div class="recommedationItemTitle"> <a href="#">Kids Menu</a> </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="carouselBox">
                  <div class="recommedationItem">
                    <div class="recommedationImage"> <img src="<?=base_url()?>images/recommadation-3.png" /> </div>
                    <div class="stars"><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star"></i></div>
                    <div class="recommedationItemTitle"> <a href="#">Kids' Menu Kids' Breakfast - Oliver..</a> </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="carouselBox">
                  <div class="recommedationItem">
                    <div class="recommedationImage"> <img src="<?=base_url()?>images/recommadation-4.png" /> </div>
                    <div class="stars"><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star"></i></div>
                    <div class="recommedationItemTitle"> <a href="#">Kids' Menu Kids' Breakfast - Oliver..</a> </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="carouselBox">
                  <div class="recommedationItem">
                    <div class="recommedationImage"> <img src="<?=base_url()?>images/recommadation-5.png" /> </div>
                    <div class="stars"><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star"></i></div>
                    <div class="recommedationItemTitle"> <a href="#">Kids' Menu Kids' Breakfast - Oliver..</a> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-sm-12">
          <div class="recommedationTitle"><h3>LATEST SEARCH</h3></div>
          <div class="carousel slide" id="myCarousel">
            <div id="owl-demo4">
              <div class="item">
                <div class="carouselBox">
                  <div class="recommedationItem">
                    <div class="recommedationImage"> <a href="#"><img src="<?=base_url()?>images/recommadation-1.png" /></a> </div>
                    <div class="stars"><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star"></i></div>
                    <div class="recommedationItemTitle"> <a href="#">Kids' Menu Kids' Breakfast - Oliver..</a> </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="carouselBox">
                  <div class="recommedationItem">
                    <div class="recommedationImage"> <img src="<?=base_url()?>images/recommadation-2.png" /> </div>
                    <div class="stars"><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star"></i></div>
                    <div class="recommedationItemTitle"> <a href="#">Kids Menu</a> </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="carouselBox">
                  <div class="recommedationItem">
                    <div class="recommedationImage"> <img src="<?=base_url()?>images/recommadation-3.png" /> </div>
                    <div class="stars"><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star"></i></div>
                    <div class="recommedationItemTitle"> <a href="#">Kids' Menu Kids' Breakfast - Oliver..</a> </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="carouselBox">
                  <div class="recommedationItem">
                    <div class="recommedationImage"> <img src="<?=base_url()?>images/recommadation-4.png" /> </div>
                    <div class="stars"><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star"></i></div>
                    <div class="recommedationItemTitle"> <a href="#">Kids' Menu Kids' Breakfast - Oliver..</a> </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="carouselBox">
                  <div class="recommedationItem">
                    <div class="recommedationImage"> <img src="<?=base_url()?>images/recommadation-5.png" /> </div>
                    <div class="stars"><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star"></i></div>
                    <div class="recommedationItemTitle"> <a href="#">Kids' Menu Kids' Breakfast - Oliver..</a> </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="carouselBox">
                  <div class="recommedationItem">
                    <div class="recommedationImage"> <img src="<?=base_url()?>images/recommadation-1.png" /> </div>
                    <div class="stars"><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star"></i></div>
                    <div class="recommedationItemTitle"> <a href="#">Kids' Menu Kids' Breakfast - Oliver..</a> </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="carouselBox">
                  <div class="recommedationItem">
                    <div class="recommedationImage"> <img src="<?=base_url()?>images/recommadation-2.png" /> </div>
                    <div class="stars"><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star"></i></div>
                    <div class="recommedationItemTitle"> <a href="#">Kids Menu</a> </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="carouselBox">
                  <div class="recommedationItem">
                    <div class="recommedationImage"> <img src="<?=base_url()?>images/recommadation-3.png" /> </div>
                    <div class="stars"><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star"></i></div>
                    <div class="recommedationItemTitle"> <a href="#">Kids' Menu Kids' Breakfast - Oliver..</a> </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="carouselBox">
                  <div class="recommedationItem">
                    <div class="recommedationImage"> <img src="<?=base_url()?>images/recommadation-4.png" /> </div>
                    <div class="stars"><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star"></i></div>
                    <div class="recommedationItemTitle"> <a href="#">Kids' Menu Kids' Breakfast - Oliver..</a> </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="carouselBox">
                  <div class="recommedationItem">
                    <div class="recommedationImage"> <img src="<?=base_url()?>images/recommadation-5.png" /> </div>
                    <div class="stars"><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star"></i></div>
                    <div class="recommedationItemTitle"> <a href="#">Kids' Menu Kids' Breakfast - Oliver..</a> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
            <div class="item">
              <div class="carouselBox">
                <div class="recommedationItem">
                  <div class="recommedationImage"> <a href="#"><img src="<?=base_url()?>images/recommadation-1.png" /></a> </div>
                  <div class="stars"><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star"></i></div>
                  <div class="recommedationItemTitle"> <a href="#">Kids' Menu Kids' Breakfast - Oliver..</a> </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="carouselBox">
                <div class="recommedationItem">
                  <div class="recommedationImage"> <img src="<?=base_url()?>images/recommadation-2.png" /> </div>
                  <div class="stars"><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star"></i></div>
                  <div class="recommedationItemTitle"> <a href="#">Kids Menu</a> </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="carouselBox">
                <div class="recommedationItem">
                  <div class="recommedationImage"> <img src="<?=base_url()?>images/recommadation-3.png" /> </div>
                  <div class="stars"><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star"></i></div>
                  <div class="recommedationItemTitle"> <a href="#">Kids' Menu Kids' Breakfast - Oliver..</a> </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="carouselBox">
                <div class="recommedationItem">
                  <div class="recommedationImage"> <img src="<?=base_url()?>images/recommadation-4.png" /> </div>
                  <div class="stars"><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star"></i></div>
                  <div class="recommedationItemTitle"> <a href="#">Kids' Menu Kids' Breakfast - Oliver..</a> </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="carouselBox">
                <div class="recommedationItem">
                  <div class="recommedationImage"> <img src="<?=base_url()?>images/recommadation-5.png" /> </div>
                  <div class="stars"><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star"></i></div>
                  <div class="recommedationItemTitle"> <a href="#">Kids' Menu Kids' Breakfast - Oliver..</a> </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="carouselBox">
                <div class="recommedationItem">
                  <div class="recommedationImage"> <img src="<?=base_url()?>images/recommadation-1.png" /> </div>
                  <div class="stars"><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star"></i></div>
                  <div class="recommedationItemTitle"> <a href="#">Kids' Menu Kids' Breakfast - Oliver..</a> </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="carouselBox">
                <div class="recommedationItem">
                  <div class="recommedationImage"> <img src="<?=base_url()?>images/recommadation-2.png" /> </div>
                  <div class="stars"><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star"></i></div>
                  <div class="recommedationItemTitle"> <a href="#">Kids Menu</a> </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="carouselBox">
                <div class="recommedationItem">
                  <div class="recommedationImage"> <img src="<?=base_url()?>images/recommadation-3.png" /> </div>
                  <div class="stars"><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star"></i></div>
                  <div class="recommedationItemTitle"> <a href="#">Kids' Menu Kids' Breakfast - Oliver..</a> </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="carouselBox">
                <div class="recommedationItem">
                  <div class="recommedationImage"> <img src="<?=base_url()?>images/recommadation-4.png" /> </div>
                  <div class="stars"><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star"></i></div>
                  <div class="recommedationItemTitle"> <a href="#">Kids' Menu Kids' Breakfast - Oliver..</a> </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="carouselBox">
                <div class="recommedationItem">
                  <div class="recommedationImage"> <img src="<?=base_url()?>images/recommadation-5.png" /> </div>
                  <div class="stars"><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star blue"></i><i class="fa fa-star"></i></div>
                  <div class="recommedationItemTitle"> <a href="#">Kids' Menu Kids' Breakfast - Oliver..</a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  