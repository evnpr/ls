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
              <li <?php if($location=='index') echo 'class="active"'; ?>><a href="<?=site_url()?>e/manufacturer">Home</a></li>
              <li <?php if($location=='head') echo 'class="active"'; ?>><a href="<?=site_url()?>e/manufacturer_head">Head</a></li>
              <li <?php if($location=='body') echo 'class="active"'; ?>><a href="<?=site_url()?>e/manufacturer_body">Body</a></li>
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
    <script src="<?=base_url()?>/assets/js/main.js"></script>
    <script src="<?=base_url()?>/assets/js/page2_main.js"></script>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
                    $('.navbar').scrollToFixed();
        });
    </script>
    
       <!--
    ========================== FANCY BOX ============================
    -->
      <!-- Add jQuery library -->
	<script type="text/javascript" src="<?=base_url()?>/assets/lib/jquery-1.7.2.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="<?=base_url()?>/assets/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="<?=base_url()?>/assets/source/jquery.fancybox.js?v=2.0.6"></script>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/source/jquery.fancybox.css?v=2.0.6" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/source/helpers/jquery.fancybox-buttons.css?v=1.0.2" />
	<script type="text/javascript" src="<?=base_url()?>/assets/source/helpers/jquery.fancybox-buttons.js?v=1.0.2"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/source/helpers/jquery.fancybox-thumbs.css?v=1.0.2" />
	<script type="text/javascript" src="<?=base_url()?>/assets/source/helpers/jquery.fancybox-thumbs.js?v=1.0.2"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="<?=base_url()?>/assets/source/helpers/jquery.fancybox-media.js?v=1.0.0"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay opening speed and opacity
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedIn : 500,
						opacity : 0.95
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background-color' : '#eee'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
	</style>
    <!--
    ================================== /FANCY BOX ==================
    -->

  </body>
</html>
