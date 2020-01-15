<?php
session_start();
unset($_SESSION['chatbot']) ;
$_SESSION['cffhatbot'] = 444;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>My chatbot</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta charset utf="8">
<!--font-awsome-css-->
<link rel="stylesheet" href="css/font-awesome.min.css">
<!--bootstrap-->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<!--custom css-->
<link href="css/style2.css" rel="stylesheet" type="text/css"/>
<!--component-css-->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--script-->
<script src="js/modernizr.custom.js"></script>
<script src="js/bigSlide.js"></script>




<script>
                    $(document).ready(function() {
                    $('.menu-link').bigSlide();
                    });
         </script>
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts -->
<!-- pop-up-box -->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script>
                $(document).ready(function() {
                    $('.popup-top-anim').magnificPopup({
                        type: 'inline',
                        fixedContentPos: false,
                        fixedBgPos: true,
                        overflowY: 'auto',
                        closeBtnInside: true,
                        preloader: false,
                        midClick: true,
                        removalDelay: 300,
                        mainClass: 'my-mfp-zoom-in'
                    });																							
                }); 
            </script>
</head>

<style>
  .containall{
    position:fixed;
  }

  .content{
    padding-top:10px;
    border : 1px solid #04ECF0;
    /* margin-top: 0px; */ 
  }
  .rcvChat{
    padding-top: -15px;
   
  }
  .sentChat{ 
  }
.bg-img{
  filter: blur(1px);
  filter: contrast(100%) ;
  filter: brightness(60%) ;
}
#chatContainer{
  position: fixed;
  width: 80vw;
  height: 80vh;
  top: 0;
  margin:5% 10% 20% 10%;
  padding: 10vh 0 0 0;
  background-color : rgba(105,105,105, 0.6);
  overflow: auto;
  /* overflow: hidden; */
  
}
.header2{
  position:fixed;
  text-align:center;
  margin-top: -9em;
  display: inline-block;

}
#chatInput{
  margin:0 9% 0 9%;
  
}
.logo2{
  position: absolute;
  left: 0px;
  top: 0px;
}
</style>

<body>
<div class="containall">

<img src="images/banner.jpg" class="bg-img" alt="Smiley face">

<audio   id="audionewmsg">
<source src="newmsg.mp3" type="audio/mpeg">
</audio>
<audio   id="audioerror">
<source src="error.mp3" type="audio/mpeg">
</audio>
 


<div  id="chatContainer" >
 <div class="header2">
    <h1 style="color:white;">Professor Teachy</h1> <br/>
    </div>
   <div class="rcvChat"  >
   <div class="content">

     <div><strong><u>Welcome to Professor Teachy</u></strong></div>
     <div><strong><u><br>
     </u></strong></div>
     <div><strong>What do you want to do with Teachy?</strong></div>
     <div><strong><br>
     </strong></div>
     <div>Option 1.Practise English Tenses<br>
     </div>
     <div>Option 2.Practise Basic English conversation</div>
   </div>

   </div>
  </div>
  </div>

  <div  id="chatInput" >
   <div class="row">
   <div class="col-sm-10 col-xs-9 col-lg-11  col-md-11"> 
     <textarea id="txtChatInput" class="form-control"  ></textarea>
   </div>
   <div class="col-sm-2 col-xs-3 col-lg-1 col-md-1" >
   <input type="button" class="btn btn-success btn-block" id="btnChatInput" value="Send" />
   </div>
   </div>
  </div> 	  
	  
	  
    </div>
  </div>
</div>
</div>
</body>

<script>


$(document).ready(function(){	

	$('#btnChatInput').on('click', function() {
		getGrammar(  {   input: $("#txtChatInput").val()  }    ) ;
	}); 


	$('#txtChatInput').on('keypress',   function(e) {
 			if (e.which == 13) {
			getGrammar(  {   input: $("#txtChatInput").val()  }    ) ;	 
			}
	});
}) ; 

function getGrammar(data) {
	  	
 		var request = $.ajax({
		url: "output.php"   ,
		type: "POST",
		data:  data ,
		 dataType: "json",
		//dataType: "text",
		cache: false
		});

 		request.done(function( data ) {
		var addClass = "" ; 
		var stateMsg = ""  ;
		if ( data.state ) {
		 $("#audionewmsg").trigger('play');
		 addClass = 'successCls' ;
		if (data.msg.length>0) stateMsg = '<br><span class="label label-success">'+data.msg+'</span>' ;
		
		}else{
		$("#audioerror").trigger('play');
		if (data.msg.length>0) stateMsg = '<br><span class="label label-danger">'+data.msg+'</span>' ;
		 addClass = 'errorCls' ;
		}	
		
 		 $("#chatContainer").append('<div class="sentChat"><div class="content ">'+data.chat  +'</div></div>') ;
		$("#chatContainer").append('<div class="rcvChat"><div class="content ' + addClass   +'">'+data.msg +'</div></div>').animate({ scrollTop: $('#chatContainer')[0].scrollHeight }, 1000); 

		 //.scrollTop(1E10);  ;
		  $("#txtChatInput").val("");
 		});
 
		request.fail(function( jqXHR, textStatus , errorThrown  ) {
		 alert(errorThrown) ; 
			console.log(data);
		}); 
 
}


</script>
<style>
.label { font-size:12px } 




#chatInput{
 position:fixed; 
 bottom:0px; 
 height:60px; 
 left:0px;
 right:0px; 
 border-top: medium #999999 solid;
 padding:10px;

}

#txtChatInput,#btnChatInput {

height:40px;

}

.rcvChat { text-align: left ;  overflow: auto; ;margin-top: -60px; } 
.sentChat { text-align:right ;  overflow: auto;}

.rcvChat .content{
border-radius: 0px 10px 10px 10px;
background:#D9DAE1;
display: table;
padding:15px;
margin:10px;
max-width:70%;
float:left; 
line-height:22px;
 

}

.sentChat .content{
border-radius:10px 10px 0px 10px;
background:#FFCCCC;
display: table;
padding:15px;
margin:10px;
max-width:70%;
float:right; 
 
}

.errorCls{ border:#FF0000 thin solid ;} 
.successCls{ border:#33CC66 thin solid ;} 
 
</style>
</html>