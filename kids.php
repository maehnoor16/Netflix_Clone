<?php
	session_start();
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>
		Home Page
	</title>
	
</head>
<body>

	<script src="js/jssor.slider-28.1.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: 1,
              $Idle: 0,
              $SlideDuration: 5000,
              $SlideEasing: $Jease$.$Linear,
              $PauseOnHover: 4,
              $SlideWidth: 230,
              $Align: 0
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            var MAX_WIDTH = 2080;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>

<div class="container" id="container">
	<div class="navigation flex">
		<div class="logo">
			<img src="https://tse1.mm.bing.net/th?id=OIP.0BqPvfe7tNnck20G4VEDnwHaEj&pid=Api&rs=1&c=1&qlt=95&w=186&h=114" alt="">
		</div>
		
		<div class="navbar flex" id="navbar">
			<div class="left-nav flex">
				<ul class="flex menu">
					<li><a href="#container">Home</a></li>
					<li><a href="#disney">Disney Hub</a></li>
					<li><a href="#movies">Movies</a></li>
					<li><a href="#popular">News & Popular</a></li>
					<li><a href="#">My List</a></li>
				</ul>
			</div>
			<div class="right-nav flex">
				<input class="form-control" id="myInput" type="text" placeholder="Search..">
				<span class="fa fa-search fa" aria-hidden="true" style="height: 10px;width: 30px;"></span>
		          <a href="netflix.php" style="text-decoration: none;color: white;">Adult&nbsp;&nbsp;</a>

	<img src="https://tse1.mm.bing.net/th?id=OIP.r0tUF3DZIXWmm62AiNW5oQHaHa&pid=Api&P=0">
	<span class="fa fa-caret-down fa" aria-hidden="true"></span>
	
	<button style="width:70px;height:40px;background-color:red;border-radius: 5px;"><a href="logout.php"style="text-decoration: none;color: white;">Logout</a></button>
			</div>
		</div>
		<span class="togglebtn" onclick="toggle()" >&#9776;</span>
	</div>
	
	<div class="inner">
		<div class="banner flex">
		<h3>Marvel's Studio</h3>
		<h1>Tom & Jerry</h1>
		<div><br><br>
			<button class="btn"><span class="fa fa-play play" aria-hidden="true"></span> Play </button>
			<button class="btn"><span class="fa fa-info-circle play" aria-hidden="true"></span> More Info </button>
		</div>			
		</div>

		<div class="carousel"><br><br><br><br>
			<h3>New Releases</h3>
			<div class="carousel-slider" id="jssor_1" style="position:relative; margin:30px auto; top:0px;left:0px;width:980px;height:200px;overflow:hidden;visibility:hidden;">
				<div class="carousel-list"  data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:200px;overflow:hidden;">
					<div class="carousel-items">
						<img src="https://tse4.mm.bing.net/th?id=OIP.-9akyFgE9F069oBfGJFtlgHaFj&pid=Api&P=0" alt="">
					</div>
					<div class="carousel-items">
						<img src="https://tse3.mm.bing.net/th?id=OIP.DNmJvipTaSioR3N-l8bz6wHaFj&pid=Api&P=0" alt="">
					</div>
					<div class="carousel-items">
						<img src="https://tse1.mm.bing.net/th?id=OIP.s5U34lNqu_QmR91IKl0p5wHaFj&pid=Api&P=0" alt="">
					</div>
					<div class="carousel-items">
						<img src="https://tse1.mm.bing.net/th?id=OIP.GboO_etTO9lWdE1W8tIVRQHaEK&pid=Api&P=0" alt="">
					</div>
					<div class="carousel-items">
						<img src="https://tse2.mm.bing.net/th?id=OIP.nY0HuYB4N6UbxOcPokyb7AHaKX&pid=Api&P=0" alt="">
					</div>
					<div class="carousel-items">
						<img src="https://tse2.mm.bing.net/th?id=OIP.peQ6g_bIR5bQd_TmOKHaMAHaFj&pid=Api&P=0" alt="">
					</div>
					<div class="carousel-items">
						<img src="https://tse1.mm.bing.net/th?id=OIP.l7QucAJ5GiddU7QQm06q2AHaLB&pid=Api&P=0" alt="">
					</div>
					<div class="carousel-items">
						<img src="https://tse3.mm.bing.net/th?id=OIP.COjHXrQl0FLDnbOXQHCAogHaFj&pid=Api&P=0" alt="">
					</div>
					<div class="carousel-items">
						<img src="https://tse3.mm.bing.net/th?id=OIP.aLYoDXlTQSkbNPZcmQ089AHaFj&pid=Api&P=0" alt="">
					</div>
					<div class="carousel-items">
						<img src="https://tse3.mm.bing.net/th?id=OIP.jzsSzzg6g-I-F9OB7nqJSgHaEK&pid=Api&P=0" alt="">
					</div>
					<div class="carousel-items">
						<img src="https://tse1.mm.bing.net/th?id=OIP.3MIko0Y0OT57YJhAAsVY2wHaEK&pid=Api&P=0" alt="">
					</div>
					<div class="carousel-items">
						<img src="https://tse4.mm.bing.net/th?id=OIP.wfRe9Re97MAVJ6DZW5mMBwHaD5&pid=Api&P=0" alt="">
					</div>
					<div class="carousel-items">
						<img src="https://tse2.mm.bing.net/th?id=OIP.OkOVFFVsfODdhB9dPC2mTQHaEp&pid=Api&P=0" alt="">
					</div>
				</div>
			</div>
			<script type="text/javascript">jssor_1_slider_init();
			</script>
		</div>
	</div>
</div>
<div class="video-container">
	<div class="color-overlay"></div>
	<video autoplay loop muted>
		<source src="tom_jerry.mp4">
	</video>
</div>


<div class="container2" id="movies">
	<br><br>
	<h3>Movies</h3><br>
	<div class="box">
		<img src="https://tse4.mm.bing.net/th?id=OIP.vDiYCoDJX6AsIklaAkmEZAHaKm&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse3.mm.bing.net/th?id=OIP.96vipkiAYe5EB8F2IfIWtQHaKW&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse2.mm.bing.net/th?id=OIP.0q5nhcXhRLXdcKIyUR4pEwHaLH&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse4.mm.bing.net/th?id=OIP.DKfu3UzIeDCXsrTyvrKjRAHaHa&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse4.mm.bing.net/th?id=OIP.G_Qof8ZoMwN_cLTWSrC40AHaKj&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse2.mm.bing.net/th?id=OIP.k1i19J0WLMDcaR-nDwbT9wHaKr&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse2.mm.bing.net/th?id=OIP.xO1Pa-MLU6kQJHwNjvN5JgHaKf&pid=Api&P=0"><br><br><br>
	</div>
	<br><br>
	<div class="box">
		<img src="https://tse1.mm.bing.net/th?id=OIP.L1mCIRROgWiIYPsZsBmHyQHaK3&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse2.mm.bing.net/th?id=OIP.9E-5yS9VcGbpZHcbjoqFkgHaLH&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse4.mm.bing.net/th?id=OIP.fWIGduzXi6XrOlxdIDNzzwHaLH&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse4.mm.bing.net/th?id=OIP.loHoqJ6LCR73Qu3drgk44wHaKu&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse1.mm.bing.net/th?id=OIP.DnTOdNSTupqhIb-P77-kIwHaLG&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse1.mm.bing.net/th?id=OIP.cc2bCx-C6BD60Lu25AfsMAHaK-&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse2.mm.bing.net/th?id=OIP.TYK35t7bJf3k1ZtrZTKluQHaLG&pid=Api&P=0">&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
	</div>
</div>


<div class="container3">
	<div class="textbox">
		<h3>Kids</h3>
		<h2 style="font-size: 4rem;background: linear-gradient(to right, blue,white,purple);-webkit-text-fill-color: transparent;-webkit-background-clip: text;">Snow Day</h2><br><br>
		<p>Stranger Things is set in the fictional rural town of Hawkins, Indiana, during the 1980s. The nearby Hawkins National Laboratory ostensibly performs scientific research for the United States Department of Energy, but secretly does experiments into the paranormal and supernatural, including those that involve human test subjects. Inadvertently, they have created a portal to an alternate dimension, "the Upside Down." The influence of the Upside Down starts to affect the unknowing residents of Hawkins in calamitous ways</p>
	</div>
	<div class="vidbox">
	<video autoplay loop muted>
		<source src="snow_day.mp4">
	</video>
	</div>
</div>



<div class="container2" style="width: 100%; height: 50vh; object-fit: cover; background:black ;">
	<br>
	<div class="box">
		<img src="https://tse4.mm.bing.net/th?id=OIP.q1gghCcsKDTB4EpLKGEwcgHaLG&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse3.mm.bing.net/th?id=OIP.YYyYMEGjHMqkx9HjOQqzrQHaG7&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse4.mm.bing.net/th?id=OIP.luF2dRCNqhs_GTG9s_EhTwHaEK&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse2.mm.bing.net/th?id=OIP.FELyF75kiZZMVKUeUg7PZgHaOG&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse1.mm.bing.net/th?id=OIP.QPsim9wJRjDhxDY1ZiqeygHaLH&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse3.mm.bing.net/th?id=OIP.ULCkGtBuHezJ2DmOYaLFgwHaHa&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse3.mm.bing.net/th?id=OIP.NjR2o9VR60xOKgmAxlJ0ggHaKk&pid=Api&P=0">&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
	</div>
</div>


<div class="container3">
	<div class="textbox">
		<h3>Marvel Studio</h3>
		<h2 style="font-size: 4rem;background: linear-gradient(to right,white,blue,blue);-webkit-text-fill-color: transparent;-webkit-background-clip: text;">Marvel's</h2><br><br>
		<p>Stranger Things is set in the fictional rural town of Hawkins, Indiana, during the 1980s. The nearby Hawkins National Laboratory ostensibly performs scientific research for the United States Department of Energy, but secretly does experiments into the paranormal and supernatural, including those that involve human test subjects. Inadvertently, they have created a portal to an alternate dimension, "the Upside Down." The influence of the Upside Down starts to affect the unknowing residents of Hawkins in calamitous ways</p>
	</div>
	<div class="vidbox">
	<video autoplay loop muted>
		<source src="marvel.mp4">
	</video>
	</div>
</div>


<div class="container2" id="disney">
	<h3>Disney Gala</h3><br>
	<div class="box">
		<img src="https://tse2.mm.bing.net/th?id=OIP.xhbchi7CffEo1Pyd3T357gAAAA&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse2.mm.bing.net/th?id=OIP.Q0MvqhoYQls3-kj-Iil5ZgAAAA&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse4.mm.bing.net/th?id=OIP.i_5aekn9SgrXRaSRYQSMbgHaLH&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse4.mm.bing.net/th?id=OIP.Im5ikyLV1gG0mWI9NmHKbwHaLH&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse1.mm.bing.net/th?id=OIP.0ykcDV7Zrpxpp8M4iV02hAHaLT&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse2.mm.bing.net/th?id=OIP.lI1FDGA5LMADINlXcYtX8wHaJ3&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse1.mm.bing.net/th?id=OIP.lWLdJ4e0QZTZikHeIYWa4wHaLH&pid=Api&P=0"><br><br>
    </div>
	<br>
	<div class="box">
		<img src="https://tse3.mm.bing.net/th?id=OIP.lOeYzKk5WzRb170DTXBhVAHaLE&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse3.mm.bing.net/th?id=OIP.4MZ4tPlmtbbGdnEz5tPNlAHaKl&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse1.mm.bing.net/th?id=OIP.1W2BWLNzk5gmYxtE039uzwHaLB&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse3.mm.bing.net/th?id=OIP.5m6lFe5TWB9OLcstzwtjbAHaLF&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse1.mm.bing.net/th?id=OIP.Q8lRZ6eDJSCj5nKPRtZ2oQHaLC&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse2.mm.bing.net/th?id=OIP.9MLRUKRmI9MDMzXBamVpOgHaKj&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse1.mm.bing.net/th?id=OIP.LinQbL-B-sYzlWdsuS1VigHaJ2&pid=Api&P=0"><br><br>
	</div>
</div>

<div class="container3" id="popular">
	<div class="textbox">
		<h3>Adventure Hits</h3>
		<h2 style="font-size: 4rem;background: linear-gradient(to right, orange,red,yellow);-webkit-text-fill-color: transparent;-webkit-background-clip: text;">Fight For Family</h2><br><br>
		<p>Stranger Things is set in the fictional rural town of Hawkins, Indiana, during the 1980s. The nearby Hawkins National Laboratory ostensibly performs scientific research for the United States Department of Energy, but secretly does experiments into the paranormal and supernatural, including those that involve human test subjects. Inadvertently, they have created a portal to an alternate dimension, "the Upside Down." The influence of the Upside Down starts to affect the unknowing residents of Hawkins in calamitous ways</p>
	</div>
	<div class="vidbox">
	<video autoplay loop muted>
		<source src="fight.mp4">
	</video>
	</div>
</div>

<div class="container2" style="width: 100%; height: 50vh; object-fit: cover; background:black;">
    <h3>Kids & Family Movies</h3><br>
	<div class="box">
		<img src="https://tse1.mm.bing.net/th?id=OIP.g89-foNMthxSkcJqEKk49QAAAA&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse3.mm.bing.net/th?id=OIP.53Aa0qKIiAYp7PCeLCwzEgHaKu&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse4.mm.bing.net/th?id=OIP.-1j8AQ_I3XJFXBFuofKvgQHaK5&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse4.mm.bing.net/th?id=OIP.eur0lKmjjZ79Ug-KlqWMQAAAAA&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse4.mm.bing.net/th?id=OIP.gnzWgIn-l53SHBfV9BsSTAHaLH&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse4.mm.bing.net/th?id=OIP.NYwCUJRZeA4yYNwEZEYZdwAAAA&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse3.mm.bing.net/th?id=OIP.ZGxWEp5VphZc8aQxYDOc6wHaLP&pid=Api&P=0"><br><br><br>
    </div>
</div>


<div class="container3">
	<div class="textbox">
		<h3>Kids Adventure</h3>
		<h2 style="font-size: 4rem;background: linear-gradient(to right, yellow,yellow,red);-webkit-text-fill-color: transparent;-webkit-background-clip: text;">Stuart Little 2</h2><br><br>
		<p>Stranger Things is set in the fictional rural town of Hawkins, Indiana, during the 1980s. The nearby Hawkins National Laboratory ostensibly performs scientific research for the United States Department of Energy, but secretly does experiments into the paranormal and supernatural, including those that involve human test subjects. Inadvertently, they have created a portal to an alternate dimension, "the Upside Down." The influence of the Upside Down starts to affect the unknowing residents of Hawkins in calamitous ways</p>
	</div>
	<div class="vidbox">
	<video autoplay loop muted>
		<source src="stuart_little_2.mp4">
	</video>
	</div>
</div>




<div class="footer">
	<div class="container5">
		<div class="row">
			<div class="footer-col">
				<h4>FAQ</h4>
				<ul>
					<li><a href="#">Investor Relations</a></li>
					<li><a href="#">Privacy</a></li>
					<li><a href="#">Speed Test</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>Help Center</h4>
				<ul>
					<li><a href="#">Jobs</a></li>
					<li><a href="#">Cookie Preferences</a></li>
					<li><a href="#">Legal Notices</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>Account</h4>
				<ul>
					<li><a href="#">Ways To Watch</a></li>
					<li><a href="#">Corporate Information</a></li>
					<li><a href="#">Only On Netflix</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>Media Center</h4>
				<ul>
					<li><a href="#">Terms Of Use</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4><br><br>Follow Us</h4>
				<div class="social-links">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
				</div>
			</div>

		</div>
	</div>
</div>


</body>
</html>