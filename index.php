<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body onload="realTimeClock()">
    <section>
        <!-- navigation logo and menu start -->
        <nav>
            <!-- logo -->
        
            <a href="index.html" class="logo">MD.Sabbih Sarker</a>
        
            <!-- menu -->
            <!-- real clock -->
            <div id="clock">
                
            </div>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Skills</a></li>
                <li><a href="#">Contact</a></li>

            </ul>
        </nav>
        <!-- navigation logo and menu end -->

        <!-- text start -->

        <div class="text-container">
            <p>Hello,</p>
            <p>I'M Sabbih</p>
            <p>I am Web Developer <br>& Designer</p>
            <button class="hire-btn">Hire Me</button>
            <button class="down-cv">Download CV</button>
        </div>

        <!-- my image start -->
        
        <img src="images/image.png" class="image" alt="image">
        <!-- my image end -->
        <!-- text end -->
    </section>

    <!--  about section start -->

    <div class="about-container">
        <img src="images/image.png" alt="image">
	<!--about-me-text-->
		<div class="about-text">
		<p>About Me</p>
		<p>Devolper & Designer</p>
		<p>Hello,My name is Sabbih Sarker. 
            I am a Devolper and also a Designer.
            If you have asany Project or if you want make a software for your bisnes conatact me.
            I make as soon as possibale.
            You really like my work,if you don&#8217;t i change this until
             you like I give you seticfaction result.</p>
		<p>I am a Devolper and also a Designer.If you have asany Project or 
            if you want make a software for your bussniess conatact me.
            I make your project as soon as possible.</p>
		<button>SignIN</button>
		<button>SignUp</button>
		</div>
    </div>
      <!--  about section end -->

       <!--Skill-container start------->
	<div class="services ">
		<!--text-->
		<div class="services-text ">
	<p>Skills</p>
	<p>Qualites Requaid</p>
	<p>if you want make a software for your bussniess conatact me.I make as soon as possibale.
        You really like my work, if you don&#8217;t 
        i change this until you like if you want make a software for your bussniess conatact me.
        I make as soon</p>
			</div>
		<div class="box-container">
           
		<!--1------------->
			<div class="box-1">
            <input type="checkbox" id="check">
			<span>1</span>
			<p class="heading">HTML & CSS</p>
			<p class="details">If you want make a software for your bussniess conatact me.
                I make as soon as possibale.You really like my work, 
                if you don&#8217;t i change this until you like if you want................
            </p>
            <div class="content">
                <p class="details">if you want make a software for your bussniess conatact me.
                </p> 
            </div>
			<label for="check">Read More</label>
			</div>
	   <!--2------------->
			<div class="box-2">
                <input type="checkbox" id="check2">
                <span>2</span>
                <p class="heading">BASIC JAVASCRIPT</p>
                <p class="details">If you want make a software for your bussniess conatact me.
                    I make as soon as possibale.You really like my work, 
                    if you don&#8217;t i change this until you like if you want................
                </p>
                <div class="content">
                    <p class="details">if you want make a software for your bussniess conatact me.
                    </p> 
                </div>
                <label for="check2">Read More</label>
			</div>
		<!--3------------->
			<div class="box-3">
                <input type="checkbox" id="check3">
                <span>3</span>
                <p class="heading">BASIC PHP</p>
                <p class="details">If you want make a software for your bussniess conatact me.
                    I make as soon as possibale.You really like my work, 
                    if you don&#8217;t i change this until you like if you want................
                </p>
                <div class="content">
                    <p class="details">if you want make a software for your bussniess conatact me.
                    </p> 
                </div>
                <label for="check3">Read More</label>
			</div>
		</div>
	</div>
<!--Skill-container end------->



<!-- contact me section start-->
<div class="contact-me">
    <p>If You Have Any Project In Your Mind ?</p>
    <button>Contact me</button>
</div>

<!-- contact me section end-->

<!-- footer section start -->



<footer>
    <!--heading-->
 <p>Connect-To-Internet</p>
    <!--paragraph-->
    <p>If You really like my work,if you don&#8217;t i change this until you like I give you seticfaction result!!</p>
    <!--social-->
   <div class="social-icons">
    <a href="https://www.facebook.com/groups/webdeveloperbd" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
   </div>
    <!--copyright-->
	<p class="copyright">Copyright &copy; By SKR</p>
</footer>
   <!--social-attach-bar-->
   <div class="social">
   <a href="https://www.facebook.com/groups/webdeveloperbd" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
   <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
   <a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
   <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
   </div>
<!-- footer section end -->

<script>

    function realTimeClock(){
        var rtClock = new Date();

        var hours = rtClock.getHours();
        var minutes = rtClock.getMinutes();
        var seconds = rtClock.getSeconds();

        var ampm = (hours <= 12) ? "AM" : "PM";

        hours = (hours => 12) ? hours - 12 : hours;


        hours = ("0" + hours).slice(-2);
        minutes = ("0" + minutes).slice(-2);
        seconds = ("0" + seconds).slice(-2);


        document.getElementById('clock').innerHTML = 
        hours + " : " + minutes + " : " + seconds + " " + ampm;
        var t = setTimeout(realTimeClock, 500);
    }
</script>
</body>
</html>