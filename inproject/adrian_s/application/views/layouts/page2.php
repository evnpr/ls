<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Adrian - Bubble Head!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?=base_url()?>/assets/css/mystyle.css" rel="stylesheet">
    <link href="<?=base_url()?>/assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url()?>/assets/css/page2_style.css" rel="stylesheet">

    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="<?=base_url()?>/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?=base_url()?>/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>/assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>
 
    <div id="header" class="row-fluid" style="margin-top:-60px;">
        <div id="logo" class="span3">
            <img src="" height="60" width="150" />
        </div>
        <div id="search" class="span3 offset6" style="height:58px; float:right;">
            <form class="form-search" style="margin-top: 15px">
            <input type="text" class="input-medium search-query" placeholder="search here">
            <button type="submit" class="btn">Go</button>
            </form>
        </div>
    </div>
    <div class="navbar">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?=site_url()?>">BubbleHead</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li <?php if($location=='index') echo 'class="active"'; ?>><a href="<?=site_url()?>">Home</a></li>
              <li <?php if($location=='order') echo 'class="active"'; ?>><a href="<?=site_url()?>e/order">Order Now</a></li>
              <li <?php if($location=='gallery') echo 'class="active"'; ?>><a href="<?=site_url()?>e/gallery">Gallery</a></li>
              <li <?php if($location=='contact') echo 'class="active"'; ?>><a href="<?=site_url()?>e/contact">Contact Us</a></li>
              <li><a href="<?=site_url()?>e/manufacturer">Manufacturer</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
        
        <?=$main?>
        

    <div style="clear:both"></div> 
     <hr>   
     <footer>
        <p>&copy; Company 2012</p>
      </footer>       
    </div> <!-- /container -->
	
  

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url()?>/assets/js/jquery.js"></script>
    <script src="<?=base_url()?>/assets/js/jquery-scrolltofixed.js"></script>
    <script src="<?=base_url()?>/assets/js/bootstrap-transition.js"></script>
    <script src="<?=base_url()?>/assets/js/bootstrap-alert.js"></script>
    <script src="<?=base_url()?>/assets/js/bootstrap-modal.js"></script>
    <script src="<?=base_url()?>/assets/js/bootstrap-dropdown.js"></script>
    <script src="<?=base_url()?>/assets/js/bootstrap-scrollspy.js"></script>
    <script src="<?=base_url()?>/assets/js/bootstrap-tab.js"></script>
    <script src="<?=base_url()?>/assets/js/bootstrap-tooltip.js"></script>
    <script src="<?=base_url()?>/assets/js/bootstrap-popover.js"></script>
    <script src="<?=base_url()?>/assets/js/bootstrap-button.js"></script>
    <script src="<?=base_url()?>/assets/js/bootstrap-collapse.js"></script>
    <script src="<?=base_url()?>/assets/js/bootstrap-carousel.js"></script>
    <script src="<?=base_url()?>/assets/js/bootstrap-typeahead.js"></script>
    <script src="<?=base_url()?>/assets/js/page2_main.js"></script>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
                    $('.navbar').scrollToFixed();
        });
    </script>
    

  </body>
</html>
