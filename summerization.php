
<!DOCTYPE html>
<html lang="en">
<head>
<title>BetterGrade</title>
<link rel="icon" href="images/ico.png" type="image/x-icon" />
<!-- for-mobile-apps -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
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

    
    .container{
      height: auto;
      text-align:center;
    }
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
      padding-top: 5vh;
      text-align:center;
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

.h1{
  color:white;
}
.card{
  padding: 5px;
  background:rgba(255,255,255, 0.2);
}
.card-body{
  background:rgba(255,255,255, 0.2);
}


    </style>
</head>







<body>


<!-- header -->
<header class="index-banner">
    <!-- nav -->
    
    <!-- //nav -->
	<!-- banner -->
	<div class="banner layer" id="home">
		<div class="container">
			<div class="row banner-text">
				
            <div class="col-lg-12 col-md-6 mt-lg-0 mt-5 banner-form" data-aos="fade-left">
            <div class="w3agile banner-bottom">
            <h1 style="color:white;" data-aos="fade-down">Summarization</h1> <br />

                <div class="card" >
                <!--div class="card-header bg-dark text-white">
                    Insert Paragraph summarize
                </div-->
                <div class="card-body">
                <div class="card-header bg-dark text-white">Number of Rank
                 
                </div>
                    <!-- <label for="">Rank Number</label> -->
                    <input type="text" id="rrank" name="rrank" name="rank" class="form-control" placeholder="Rank" value="1">
                </div>
        </div>
        <br />
        <div class="card" >
                <div class="card-header bg-dark text-white">
                    Insert Paragraph to summarize
                </div>
                <div class="card-body">
                    <textarea class="form-control" rows="5" aria-label="With textarea" id="paragraph" name="paragraph"></textarea>
                </div><br />
        </div>
        <br />
        <button type="button" class="btn btn-info btn-lg" onclick="adddata()">Click here to summarize</button>
        <br /><br />


        <div id='loadingmessage' style='display:none'>
  <img src='ajax-loader.gif'/>
  Loading.......
</div>


        <div class="card" >
        <div class="card-header bg-dark text-white">
                    Summarized Paragraph
                </div>
                <div class="card-body">
                    <textarea id="summarizeText" type="text" rows="5" class="form-control" aria-label="ans" aria-describedby="inputGroup-sizing-default" readonly></textarea>
                </div>
        </div>

        
    </div>

        
        
      </div>
      <!-- //banner -->





      <!--//welcome-->
      <div class="w3agile agileinfo_copy_right">
          <div class="agileinfo_copy_right_left">
            <!-- <p>© 2019 Better Grade. All rights reserved | Design by Gayan Chandima </p> -->
          </div>
            </div>
            
					</div>
					</div>
				
			</div>
		</div>
	</div>
	<!-- //banner -->
</header>
<!-- //header -->

      <!-- banner -->
  
      </div>
    </div>
  </div>
</div>

<script>


function adddata(){
  


  document.getElementById("summarizeText").value = "";

  var para = document.getElementById("paragraph").value;
  var prank = document.getElementById("rrank").value;

  if(para ==""){
    // alert("Please enter a paragraph to summerize!");
    Swal.fire({
  title: 'Please Enter a Paragraph',
  showClass: {
    popup: 'animated fadeInDown faster'
  },
  hideClass: {
    popup: 'animated fadeOutUp faster'
  }
})
 }  
 else{


  let timerInterval

Swal.fire({
  title: '',
  html: 'Loading..........!',
  timer: 5000,
  onBeforeOpen: () => {
    Swal.showLoading()

  },
  onClose: () => {
    clearInterval(timerInterval)

  }
}).then((result) => {
  if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.timer
  ) {
    console.log('I was closed by the timer')
    var xhr = new XMLHttpRequest();

  // xhr.onload = function() { alert("Connected!"); }
  xhr.onerror = function() { 
    alert("Not Connected");
    Swal.fire({
  title: 'Please Check the Internet Connection',
  showClass: {
    popup: 'animated fadeInDown faster'
  },
  hideClass: {
    popup: 'animated fadeOutUp faster'
  }
})
     }

  var url = "http://ec2-54-169-26-125.ap-southeast-1.compute.amazonaws.com:8080/api/summarize";
  // var url = "http://localhost:5005/api/summarize";
  xhr.open("POST", url, true);
  xhr.setRequestHeader("Content-Type", "application/json");

  xhr.onreadystatechange = function() {
    if (xhr.readyState == XMLHttpRequest.DONE) {
        let data = JSON.parse(xhr.responseText);
        console.log("data",data);
        if(data.status = 200) {
          if(data.msg !="Error"){

          console.log(data.result);
          document.getElementById("summarizeText").value = data.result;
          }
          else{
          Swal.fire({
  title: 'Please Enter a valid Paragraph',
  showClass: {
    popup: 'animated fadeInDown faster'
  },
  hideClass: {
    popup: 'animated fadeOutUp faster'
  }
})
        }
        }


    }
  }

  var data = {
    "text": para,
    "number":prank
  };
    xhr.send(JSON.stringify(data)); 
  }
})


}
}






</script>




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