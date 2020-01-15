
<!DOCTYPE html>
<html lang="en">
<head>
<title>BetterGrade</title>
<link rel="icon" href="images/ico.png" type="image/x-icon" />
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Landing Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- animation css files -->
	<link rel="stylesheet" href="css/animation-aos.css">
	<link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
	<!-- //animation css files -->

	<!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/fontawesome-all.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //google fonts -->
	<style>

    
    
    .img-fun {
    position: relative;
    width: 230px;
    height: 230px;
    border-radius: 50%;
    display: inline-block;
    border:6px solid white;
    }

    .img-fun:before {
      position: absolute;
    display: block;
    content: '';
    width: 80%;
    height: 100%;
    border-radius: 50%;
    box-shadow: inset 0 0 0 6px rgba(255, 255, 255, 0.6), 0 1px 2px rgba(0, 0, 0, 0.3);
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
    }
    .img-fun {
    border-radius: 50%;}

    .banner-text {
      padding-top: 0vh;
      padding-bottom : 0vh;
    }
    .img-fun:hover{
      opacity: 0.2;
      
    }
    .text a{
      color: white;
    }

    .overlay:after{
  background-color: #008CBA;
}

     .overlay2 {
  
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #008CBA;
  border-radius: 50%;
} 


.container:hover .overlay2 {
  opacity: 1;
  border-radius: 50%;
}

.text {
  color: white;
  font-size: 24px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}


.header3{
  padding: 15em 0 4em 0;
  color:#fff;
  text-align:center;
}
.header h1{
  text-size :10em;
}
.container{
  height : 100vh;
}

    </style>
</head>
<body >

<!-- header -->
<header class="index-banner">
    <!-- nav -->
    <nav class="main-header">
      <div id="brand" data-aos="zoom-in-up">
        <div id="logo">
          <a href="index.php">
            <i class="fab fa-blackberry"></i>
          </a>
        </div>
        <div id="word-mark">
          <h1>
            <a href="index.php">BetterGrade</a>
          </h1>
        </div>
      </div>
      <div id="menu">
        <div id="menu-toggle">
          <div id="menu-icon">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
          </div>
        </div>
        <ul class="text-center text-capitalize nav-agile" data-aos="zoom-in-up">
          <li>
            <a href="http://18.130.209.13/" class="active">Letter Format</a>
		  </li>
		  <li>
            <a href="https://machinereading.azurewebsites.net/" class="active">Comprehension</a>
		  </li>
		  <li>
            <a href="summerization.php" class="active">Summarization</a>
		  </li>
		  <li>
            <a href="chat.php" class="active">Chatbot</a>
          </li>
          
          <li>
          <a href="index.php" style="color: black" class="btn w3ls-btn" aria-pressed="false"> Logout</a>
              
            
          </li>
        </ul>
      </div>
    </nav>
    <!-- //nav -->
	<!-- banner -->
	<div class="banner layer" id="home">
		<div class="container">
      <div class="header3" data-aos="zoom-in-up">
      <h1 class="display-5"><b>Select an option to begin Learning</b></h1>
      </div>
			<div class="row banner-text">
      
            <div class="col-lg-3 col-md-6 mt-lg-0 mt-5 banner-form" data-aos="fade-left">
              <h2 data-aos="fade-down">
                <img src="images/1.jpg" alt="Avatar" class="img-fun">
                <div class="overlay2">
                  <div class="text"><a href="http://18.130.209.13/" class="active">Letter Format</a></div>
                </div>
              </h2>
            </div>
            <div class="col-lg-3 col-md-6 mt-lg-0 mt-5 banner-form" data-aos="fade-left">
              <h2 data-aos="fade-down">
              <img src="images/2.jpg" alt="Avatar" class="img-fun">
              <div class="overlay2">
                  <div class="text"><a href="https://machinereading.azurewebsites.net/" class="active">Comprehension</a></div>
                </div>
              </h2>
            </div>
            <div class="col-lg-3 col-md-6 mt-lg-0 mt-5 banner-form" data-aos="fade-left">
              <h2 data-aos="fade-down">
              <img src="images/3.jpg" alt="Avatar" class="img-fun">
              <div class="overlay2">
                  <div class="text"><a href="summerization.php" class="active">Summarization</a></div>
                </div>
              </h2>
            </div>
            <div class="col-lg-3 col-md-6 mt-lg-0 mt-5 banner-form" data-aos="fade-left">
              <h2 data-aos="fade-down">
              <img src="images/4.jpg" alt="Avatar" class="img-fun">
              <div class="overlay2">
                  <div class="text"><a href="chat.php" class="active">Chatbot</a></div>
                </div>
              </h2>
            </div>
            
					</div>
					</div>
				
			</div>
		</div>
	</div>
	<!-- //banner -->
</header>
<!-- //header -->



    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- //js -->
	
	<!-- animation js -->
	<script src='js/aos.js'></script>
	<script>
		AOS.init({
            easing: 'ease-out-back',
            duration: 1000
        });

    </script>
	<!-- //animation js -->

	<!-- testimonials  Responsiveslides -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use"$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- //testimonials  Responsiveslides -->

	<!-- sticky nav bar-->
	<script>
		$(() => {

		  //On Scroll Functionality
		  $(window).scroll(() => {
			var windowTop = $(window).scrollTop();
			windowTop > 100 ? $('nav').addClass('navShadow') : $('nav').removeClass('navShadow');
			windowTop > 100 ? $('ul.nav-agile').css('top', '50px') : $('ul.nav-agile').css('top', '160px');
		  });

		  //Click Logo To Scroll To Top
		  $('#logo').on('click', () => {
			$('html,body').animate({
			  scrollTop: 0
			}, 500);
		  });

		 /*
		  //Smooth Scrolling Using Navigation Menu
		  $('a[href*="#"]').on('click', function (e) {
			$('html,body').animate({
			  scrollTop: $($(this).attr('href')).offset().top - 100
			}, 500);
			e.preventDefault();
		  });
		 */

		  //Toggle Menu
		  $('#menu-toggle').on('click', () => {
			$('#menu-toggle').toggleClass('closeMenu');
			$('ul').toggleClass('showMenu');

			$('li').on('click', () => {
			  $('ul').removeClass('showMenu');
			  $('#menu-toggle').removeClass('closeMenu');
			});
		  });

		});
	</script>
	<!-- //sticky nav bar -->

	<script src="js/smoothscroll.js"></script><!-- Smooth scrolling -->

    <!-- start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            /*
			var defaults = {
				  containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			 };
			*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!-- //end-smoth-scrolling -->

</body>
</html>