<?php
	session_start();
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
        };
    </script>

<div class="container" id="container">
	<div class="navigation flex">
		<div class="logo">
			<img src="https://tse1.mm.bing.net/th?id=OIP.0BqPvfe7tNnck20G4VEDnwHaEj&pid=Api&rs=1&c=1&qlt=95&w=186&h=114" alt="">
		</div>
		
		<div class="navbar flex" id="navbar">
			<div class="left-nav flex" >
				<ul class="flex menu">
					<li><a href="#container">Home</a></li>
					<li><a href="#tv_show">TV Shows</a></li>
					<li><a href="#movies">Movies</a></li>
					<li><a href="#top_search">News & Popular</a></li>
					<li><a href="#">My List</a></li>
				</ul>
			</div>
			<div class="right-nav flex" >
				<input class="form-control" id="myInput" type="text" placeholder="Search..">
				<span class="fa fa-search fa" aria-hidden="true" style="height: 10px;width: 30px;"></span>
		          <a href="kids.php" style="text-decoration: none;color: white;">Kids&nbsp;&nbsp;</a>
	

	<img src="https://tse1.mm.bing.net/th?id=OIP.r0tUF3DZIXWmm62AiNW5oQHaHa&pid=Api&P=0" style="height: 50px;width: 50px;">
	<span class="fa fa-caret-down fa" aria-hidden="true">

	<span class="togglebtn" onclick="toggle()" >&#9776;></span>
	<?php
	    $query= "SELECT * FROM signup WHERE id='{$_SESSION['id']}'";
	    $data=mysqli_query($conn,$query);
	    $result=mysqli_num_rows($data);
	    if($result)
	    {
	    	while($row=mysqli_fetch_array($data))
	    	{
	    		?>
	<button style="width:70px;height:40px;background-color:red;border-radius: 5px;"><a href="update.php?id=<?php echo $row['id'];?>" type="submit" name="update_btn" style="text-decoration: none;color: white;"> UPDATE</a></button>
	<?php
	}
	}
	?>
	<button style="width:70px;height:40px;background-color:red;border-radius: 5px;"><a href="logout.php"style="text-decoration: none;color: white;">Logout</a></button>
			</div>
		</div>
	</div>

	<div class="inner">
		<div class="banner flex">
		<h3>Marvel's Studio</h3>
		<h1>Stranger Things</h1>
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
						<img src="https://tse1.mm.bing.net/th?id=OIP.yZdWnSG1QlQxv-eu4LWvugHaLH&pid=Api&P=0" alt="">
					</div>
					<div class="carousel-items">
						<img src="https://tse1.mm.bing.net/th?id=OIP.COvxWEW6tpRcJNttWTPUTgHaLH&pid=Api&P=0" alt="">
					</div>
					<div class="carousel-items">
						<img src="https://tse4.mm.bing.net/th?id=OIP.vzxBl2rlCfX0fCEtzshiogHaLu&pid=Api&P=0" alt="">
					</div>
					<div class="carousel-items">
						<img src="https://tse1.mm.bing.net/th?id=OIP.lYGWtSUukExDXuvELn7yZQHaER&pid=Api&rs=1&c=1&qlt=95&w=205&h=118" alt="">
					</div>
					<div class="carousel-items">
						<img src="https://tse1.mm.bing.net/th?id=OIP.FpwZg_nGATjYASVV2zlKJgHaHa&pid=Api&P=0" alt="">
					</div>
					<div class="carousel-items">
						<img src="https://tse2.mm.bing.net/th?id=OIP.SG9hyLRJBrJxh-0az2h39QHaHa&pid=Api&P=0" alt="">
					</div>
					<div class="carousel-items">
						<img src="https://tse3.mm.bing.net/th?id=OIP.bk9spYU2crlacM_NMZkWPAHaD5&pid=Api&P=0" alt="">
					</div>
					<div class="carousel-items">
						<img src="https://tse2.mm.bing.net/th?id=OIP.FgW2nAHbIwBbxhbhgfUE_wHaK9&pid=Api&P=0" alt="">
					</div>
					<div class="carousel-items">
						<img src="https://tontonmania123.com/wp-content/uploads/2022/12/Troll.jpg" alt="">
					</div>
					<div class="carousel-items">
						<img src="https://m.media-amazon.com/images/M/MV5BZmUwMGI4M2QtYmRlYy00NDQ1LThjNDAtYTI4NDNiNDg5MDViXkEyXkFqcGdeQXVyMzgxODM4NjM@.jpg" alt="">
					</div>
					<div class="carousel-items">
						<img src="https://tse3.mm.bing.net/th?id=OIP.KTj0kZU7x62BHsVSpDxSQQHaJX&pid=Api&P=0" alt="">
					</div>
					<div class="carousel-items">
						<img src="https://tse2.mm.bing.net/th?id=OIP.BD1Gdb5euMryUhivOQIEIQHaK4&pid=Api&P=0" alt="">
					</div>
					<div class="carousel-items">
						<img src="https://tse4.mm.bing.net/th?id=OIP.dAT_OfwUypexUe0bsSFIBgEsEo&pid=Api&P=0" alt="">
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
		<source src="st.mp4">
	</video>
</div>

<div class="container2" id="tv_show">
	<br><br>
	<h3>TV Shows</h3><br>
	<div class="box">
		<img src="https://tse1.mm.bing.net/th?id=OIP.edyQyYfeg5xyE6BzzKbbcAHaLH&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse4.mm.bing.net/th?id=OIP.08-rPqJvXRH_lrPUvwqv5QHaK9&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse4.mm.bing.net/th?id=OIP.lOg4u0LbZm1_0pfeUsZxWgHaFq&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse1.mm.bing.net/th?id=OIP.WlXlrnON3aSu9Pbtnd4vWgHaFj&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse3.mm.bing.net/th?id=OIP.O8eKqCJ3HhAcq-CyOfsnlQHaK9&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse2.mm.bing.net/th?id=OIP.BnGRSXl2VVv4MgZTB54unQHaGp&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse1.mm.bing.net/th?id=OIP.QTzh0GoOiORZBBQA_04cEwHaKd&pid=Api&P=0"><br><br>
	</div>
	<h3>Korean TV Shows</h3><br>
	<div class="box">
		<img src="https://tse4.mm.bing.net/th?id=OIP.NQzannCX1uT5bqxw4Hg9uQHaEo&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse1.mm.bing.net/th?id=OIP.yzds8jAfg4lS2HW79GIJswAAAA&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse4.mm.bing.net/th?id=OIP.w_gADg6orKCGKNnE01VexQHaFb&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse4.mm.bing.net/th?id=OIP.KUn-TEZ0YUjk3rc9Bmm4MgHaLH&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse2.mm.bing.net/th?id=OIP.DSTjJI7Vuj6JADQNZ3b3AwHaK5&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse2.mm.bing.net/th?id=OIP.FgW2nAHbIwBbxhbhgfUE_wHaK9&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse1.mm.bing.net/th?id=OIP.OQAGWAcW_oap9k_7Hpi05QHaKl&pid=Api&P=0">&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
	</div>
</div>
<div class="container3">
	<div class="textbox">
		<h3>Most Trending</h3>
		<h2>1899</h2><br><br>
		<p>Stranger Things is set in the fictional rural town of Hawkins, Indiana, during the 1980s. The nearby Hawkins National Laboratory ostensibly performs scientific research for the United States Department of Energy, but secretly does experiments into the paranormal and supernatural, including those that involve human test subjects. Inadvertently, they have created a portal to an alternate dimension, "the Upside Down." The influence of the Upside Down starts to affect the unknowing residents of Hawkins in calamitous ways</p>
	</div>
	<div class="vidbox">
	<video autoplay loop muted>
		<source src="1899.mp4">
	</video>
	</div>
</div>

<div class="container2" style="width: 100%; height: 50vh; object-fit: cover; background:black ;">
	<h3>Critically Acclaimed TV Shows</h3><br><br>
	<div class="box">
		<img src="https://tse3.mm.bing.net/th?id=OIP.J3O92Br4BHI3o1wLFDZAnQHaJw&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse4.mm.bing.net/th?id=OIP.tD4RWLoF3d2p2M-Y1iWP8AHaKo&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse1.mm.bing.net/th?id=OIP.a5xb0ih-kjoMO6x6Oy9e5gAAAA&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse3.mm.bing.net/th?id=OIP.IUDnY-GPvGzc17C3Mvw-egHaEt&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse3.mm.bing.net/th?id=OIP.v1iqEwUODpib1TNZYpAt1wHaKM&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse2.mm.bing.net/th?id=OIP.xztRQ8r3BDycTDB01ZZzZgHaKY&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse4.mm.bing.net/th?id=OIP.jIKK6HUt4WN1xGNegV-5FgHaEQ&pid=Api&P=0">&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
	</div>
</div>

<div class="container2" id="movies">
	<h3>Action Movies</h3><br>
	<div class="box">
		<img src="https://tse3.mm.bing.net/th?id=OIP.RYev0lrzsiO-8X3JoHWh_gHaK-&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse2.mm.bing.net/th?id=OIP.d7Zk6HVSB8VA0Z9iH8tujAHaK9&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse1.mm.bing.net/th?id=OIP.b7h-e7mHRy_WlBqTaMV4VQHaK0&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse3.mm.bing.net/th?id=OIP.AtT7sIW1T-koGP86DIAiAQHaKS&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse2.mm.bing.net/th?id=OIP.Y0jNeVI6t0gQ2Ab-gb99mwHaKe&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse4.mm.bing.net/th?id=OIP.WjDv0i-gbkwYISDZ_Bwl8wHaK-&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse4.mm.bing.net/th?id=OIP.1bti9MM2nTkjiExwLz3WXwHaEg&pid=Api&P=0">
    </div>
	<h3>Suspense Movies</h3><br>
	<div class="box">
		<img src="https://tse3.mm.bing.net/th?id=OIP.bY8p9Fu33Ot0kXmJRiWczAAAAA&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse1.mm.bing.net/th?id=OIP.orTXOwv2ogJnzglL8HsKhQHaLH&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse4.mm.bing.net/th?id=OIP.d8vfZR9knWHZ2muPZ0D4GgHaHa&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse1.mm.bing.net/th?id=OIP.398yyAIhogCjV_WJAjjfXgHaK-&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse1.mm.bing.net/th?id=OIP.-D_abAia2yfrZzdpn8qpFQHaJ4&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse3.mm.bing.net/th?id=OIP.NerFPxG3Hp494YDnBr9dHQHaJ4&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse3.mm.bing.net/th?id=OIP.bgqPQDJsW60XQqxUNzCBywHaLH&pid=Api&P=0"><br><br>
	</div>
</div>

<div class="container3">
	<div class="textbox">
		<h3>Kids Adventure</h3>
		<h2 style="font-size: 4rem;background: linear-gradient(to right, orange,red,yellow);-webkit-text-fill-color: transparent;-webkit-background-clip: text;">Stuart Little 2</h2><br><br>
		<p>Stranger Things is set in the fictional rural town of Hawkins, Indiana, during the 1980s. The nearby Hawkins National Laboratory ostensibly performs scientific research for the United States Department of Energy, but secretly does experiments into the paranormal and supernatural, including those that involve human test subjects. Inadvertently, they have created a portal to an alternate dimension, "the Upside Down." The influence of the Upside Down starts to affect the unknowing residents of Hawkins in calamitous ways</p>
	</div>
	<div class="vidbox">
	<video autoplay loop muted>
		<source src="stuart_little_2.mp4">
	</video>
	</div>
</div>

<div class="container2">
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
		<img src="https://tse3.mm.bing.net/th?id=OIP.ZGxWEp5VphZc8aQxYDOc6wHaLP&pid=Api&P=0">
    </div>
    <h3>Binge-Worthy Fantasy Movies</h3><br>
	<div class="box">
		<img src="https://tse2.mm.bing.net/th?id=OIP.68pKJc6ASS8iCTC-OzioxAAAAA&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse3.mm.bing.net/th?id=OIP.1LxJL7XtcFTb3qQCuzqroQHaK-&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse4.mm.bing.net/th?id=OIP.KK-xBdmBRbkE8EN-f90CYgHaK-&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse2.mm.bing.net/th?id=OIP.L3ZgOISwzFw9pNS292aJ4gHaLH&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse3.mm.bing.net/th?id=OIP.O8eKqCJ3HhAcq-CyOfsnlQHaK9&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse2.mm.bing.net/th?id=OIP.BnGRSXl2VVv4MgZTB54unQHaGp&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse3.mm.bing.net/th?id=OIP.F2j93sVsBSI_sRDhwZmKHQHaEd&pid=Api&P=0">
    </div>
</div>

<div class="container2" id="top_search">
	<br>
		<h3>Top Searches</h3><br>
	<div class="box">
		<img src="https://s.yimg.com/fz/api/res/1.2/XsHBwR2rszjPnJQEfTPnEA--~C/YXBwaWQ9c3JjaGRkO2ZpPWZpdDtoPTI2MDtxPTgwO3c9MTk0/https://s.yimg.com/zb/imgv1/7bfdded7-93ab-37d9-a5aa-70775eb40abd/t_500x300">
	</div>
	<div class="box">
		<img src="https://tse4.mm.bing.net/th?id=OIP.dAT_OfwUypexUe0bsSFIBgEsEo&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse4.mm.bing.net/th?id=OIP.J4osKUn5cjRUog3Nd_dU2AHaJ3&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse3.mm.bing.net/th?id=OIP.8b2U8Rq86B21CSQgtnLK6wHaHJ&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse3.mm.bing.net/th?id=OIP.SmQ2chaxdrzFy3b_CF7ClAHaLG&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse2.mm.bing.net/th?id=OIP.gNyt1uT0oEnAo9clqKXSVgHaEK&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse1.mm.bing.net/th?id=OIP.h2Y_1VTkl8Eo500VrNr96AHaK-&pid=Api&P=0">
    </div>
	<h3>Only On Netflix</h3><br><br>
	<div class="box">
		<img src="https://tse2.mm.bing.net/th?id=OIP.SMT2fTVuDOzNDVjg-2ZIGQHaE4&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse2.mm.bing.net/th?id=OIP.IsbWs73m0BR9KeOGKZvR_wHaHa&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse1.mm.bing.net/th?id=OIP.iq1ZPEN76G6kM1I2uqnwWwHaK-&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse4.mm.bing.net/th?id=OIP.08-rPqJvXRH_lrPUvwqv5QHaK9&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse4.mm.bing.net/th?id=OIP.r8jPuyRA8Jz2PKdbBIkR0wAAAA&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse4.mm.bing.net/th?id=OIP.8BcjoAtNYKpk2aV2b7E_QgHaK-&pid=Api&P=0">
	</div>
	<div class="box">
		<img src="https://tse4.mm.bing.net/th?id=OIP.ZSMkF0ynq1zFT9ux9XoFZwHaLG&pid=Api&P=0">&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
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
					<li><a href="contactform.php">Contact Us</a></li>
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
      