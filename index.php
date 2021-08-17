<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FatFox - Pop up Kitchen</title>
  <meta name="description" content="Free Bootstrap Theme by uicookies.com">
  <meta name="keywords"
    content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Pinyon+Script" rel="stylesheet">
  <link rel="stylesheet" href="css/styles-merged.css">
  <link rel="stylesheet" href="css/style.min.css">
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <style>
    /* CSS Grid */
    .grid-container {
      display: grid;
      width: 90%;
      margin: auto;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      padding-top: 70px;
    }

    .grid-container>div {
      text-align: center;
      justify-content: space-between;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    /* End of Grid */

    .flex-container-feat {
      display: flex;
      flex-direction: row;
      flex-wrap: nowrap;
      align-content: center;
      justify-content: space-around;
      margin: 18px;
    }

    .flex-container-feat > div {
      font-size: 26px;
      text-align: center;
      width: 250px;
    }

    * {
      box-sizing: border-box;
    }

    /* Creates equal columns that float next to each other */
    .column {
      background-color: black;
      float: left;
      width: 33.33%;
      padding: 10px;
      height: 300px;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    .small {
      width: 25%;
    }

    .little {
      width: 35%;
    }

    .half {
      width: 50%;
    }

    .seventy {
      width: 65%;
    }

    .button1 {
      color: darkorange;
      width: 150px;
      border-radius: 25px;
      background-color: black;
    }

    .button2 {
      color: black;
      width: 150px;
      border-radius: 25px;
      background-color: darkorange;
    }

    .colr {
      color: darkorange;
    }

    button:hover {
      color: white;
      height: 40px;
    }

    .icon-img {
      width: 60%;
      height: 50%;
      border-radius: 0px;
    }

    .ex1 {
      background-image: url(img/main_banner.jpg);
    }

    .ex2 {
      background-image: url(img/hero_bg_2.jpg);
    }

    .ex3 {
      background-image: url(img/hero_bg_3.jpg);
    }

    .ex4 {
      background-image: url(img/main_banner.jpg);
	  background-size: cover;
    }
	
	.txtshdw {
		text-shadow: 2px 2px 8px black;
    }
	
	.boxshdw {
		box-shadow: 2px 2px 5px black;
	}

    /*body {
      background-image: url(img/hero_bg_1.jpg);
    }*/

    /* Responsive layout */
    @media screen and (max-width: 600px) {
      .column {
        width: 100%;
      }
    }

    @media screen and (max-width: 786px) {
      .flex-container-feat {
        flex-wrap: wrap;
      }
      .flex-container-feat > div {
        width: 150px;
      }
      .ex1 {
        background-image: url(img/banner1.jpg);
        background-size: 100% 100%;
		background-position: center center;
      }
      .ex2 {
        background-image: url(img/banner2.jpg);
        background-size: 100% 100%;
		background-position: center center;
      }
      .ex3 {
        background-image: url(img/banner3.jpg);
        background-size: 100% 100%;
		background-position: center center;
      }
    }
  </style>

  <!-- Fixed navbar -->

  <nav class="navbar navbar-default navbar-fixed-top probootstrap-navbar">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">T</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand">FineOak</a>
      </div>

      <div id="navbar-collapse" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="index.html" data-nav-section="welcome">Home</a></li>
          <li><a onclick="window.open ('/about.html', ''); return false" href="javascript:void(0);">About</a></a></li>
          <li><a onclick="window.open ('/about.html', ''); return false" href="javascript:void(0);"">Franchise</a></li>
         
        </ul>
      </div>
    </div>
  </nav>

  <section class="flexslider" data-section="welcome">
    <ul class="slides">
      <li class="ex1">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading">
              </div>
            </div>
          </div>
        </div>
      </li>
      
      <li class="ex2">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading">
              </div>
            </div>
          </div>
        </div>
      </li>

      <li class="ex3">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading">
              </div>
            </div>
          </div>
        </div>
      </li>

    </ul>
  </section>

  <section class="probootstrap-section probootstrap-heading text-center">
    <h2 class="primary-heading txtshdw"><b>Features</b></h2>
    <div class="flex-container-feat">
      <div><img src="img/First.png" class='icon-img'>
        <p class="sub-heading" style="color: black;font-size: 18px;"><br><br>Available All Days Of The week</p>
      </div>
      <div><img src="img/Second.png" class='icon-img'>
        <p class="sub-heading" style="color: black;font-size: 18px;"><br><br>Order Using Our App</p>
      </div>
      <div><img src="img/Third.png" class='icon-img'>
        <p class="sub-heading" style="color: black;font-size: 18px;"><br><br>Super Fast Delivery</p>
      </div>
      <div><img src="img/Fourth.png" class='icon-img'>
        <p class="sub-heading" style="color: black;font-size: 18px;"><br><br>Food For All Types Of Cravings</p>
      </div>
      <div><img src="img/Fifth.png" class='icon-img'>
        <p class="sub-heading" style="color: black;font-size: 18px;"><br><br>We Accept Bulk Orders</p>
      </div>
    </div>
  </section>

  <section class="probootstrap-section-bg" data-section="specialties">
    <div class="">
      <div class="row">
        <div class="col-md-12 text-center probootstrap-animate">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- probootstrap-bg-white -->
  
  <section class="probootstrap-section overlay">
    <div class="container">
      <div class="row">
        <div class="probootstrap-cell-retro">
          <div class="half">

            <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
              <div class="image"></div>
              <div class="text text-center">
                <h3>BURGERS</h3>
                <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam.</p>
              </div>
            </div>
            <div class="probootstrap-cell reverse probootstrap-animate" data-animate-effect="fadeIn">
              <div class="image"></div>
              <div class="text text-center">
                <h3>PASTA</h3>
                <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam.</p>
              </div>
            </div>
            <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
              <div class="image" style="background-image: url(img/img_square_3.jpg);"></div>
              <div class="text text-center">
                <h3>MOMOS</h3>
                <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam.</p>
              </div>
            </div>

          </div>
          <div class="half">

            <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
              <div class="image" style="background-image: url(img/img_square_4.jpg);"></div>
              <div class="text text-center">
                <h3>ENGLISH BREAKFAST</h3>
                <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam.</p>
              </div>
            </div>
            <div class="probootstrap-cell reverse probootstrap-animate" data-animate-effect="fadeIn">
              <div class="image" style="background-image: url(img/img_square_5.jpg);"></div>
              <div class="text text-center">
                <h3>STARTERS</h3>
                <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam.</p>
              </div>
            </div>
            <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
              <div class="image" style="background-image: url(img/img_square_1.jpg);"></div>
              <div class="text text-center">
                <h3>SANDWICH</h3>
                <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam.</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- 

    <section class="probootstrap-section-bg overlay" style="background-image: url(img/hero_bg_5.jpg); background-size: 100% 100%;"  data-stellar-background-ratio="0.5" data-section="franchise">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center probootstrap-animate">
            <div class="probootstrap-heading">
              <h2 class="primary-heading">Franchise</h2>
              <h3 class="secondary-heading">Business of building business</h3>
              <button class="button2" onclick="window.location.href='franchise.html'" id="nwpg">Apply Now</button>
            </div>
          </div>
        </div>
      </div>
    </section> 
  
  -->

  <section class="probootstrap-section probootstrap-bg-white" data-section="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-5 text-center probootstrap-animate">
          <div class="probootstrap-heading dark">
            <h1 class="primary-heading">Contact</h1>
            <h3 class="secondary-heading">Let's Chat</h3>
          </div>
          <p>Voluptatibus quaerat laboriosam fugit non Ut consequatur animi est molestiae enim a voluptate totam natus
            modi debitis dicta impedit voluptatum quod sapiente illo saepe explicabo quisquam perferendis labore et
            illum suscipit</p>
        </div>
        <div class="col-md-6 col-md-push-1 probootstrap-animate">

          <form method="post" action="insert.php" class="probootstrap-form">

            <div class="form-group">
              <label for="c_name">Your Name</label>
              <div class="form-field">
                <input type="text" name="c_name" id="c_name"  class="form-control"/>
              </div>
            </div>

            <div class="form-group">
              <label for="c_email">Your Email</label>
              <div class="form-field">
                <input type="text" name="c_email" id="c_email"  class="form-control"/>
              </div>
            </div>

            <div class="form-group">
              <label for="c_message">Your Message</label>
              <div class="form-field">
                <textarea type="text" name="c_message" id="c_message" cols="30" rows="10" class="form-control"></textarea>
              </div>
            </div>

            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary btn-lg">
            </div>

          </form>
         
        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 probootstrap-animate">
          <div class="probootstrap-footer-widget">
            <h3>Locations</h3>
            <div class="row">
              <div class="col-sm-4 col-md-6">
                <p> 198 West 21th Street, Suite 721 <br> New York NY 10016</p>
              </div>
              <div class="col-sm-4 col-md-6">
                <p> 198 West 21th Street, Suite 721 <br> New York NY 10016</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 probootstrap-animate">
          <div class="probootstrap-footer-widget">
            <h3>Open Hours</h3>
            <div class="row">
              <div class="col-md-4">
                <p>Monday - Thursday <br> 5:30pm - 10:00pm</p>
              </div>
              <div class="col-md-4">
                <p>Friday - Sunday <br> 5:30pm - 10:00pm</p>
              </div>
              <div class="col-md-4">
                <p>Available for Catering <br> Email or Call Us</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="probootstrap-copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <p class="copyright-text">&copy; 2017 <a href="https://uicookies.com/">uiCookies:Resto</a>. All Rights
            Reserved. Images by <a href="https://graphicburger.com/">GraphicBurger</a> &amp; <a
              href="https://unsplash.com/">Unsplash</a></p>
        </div>
        <div class="col-md-4">
          <ul class="probootstrap-footer-social right">
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-facebook"></i></a></li>
            <li><a href="#"><i class="icon-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <script src="https://smtpjs.com/v3/smtp.js"></script>
  <script src="js/scripts.min.js"></script>
  <script src="js/custom.min.js"></script>
  

</body>

</html>