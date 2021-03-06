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
  <!-- <link rel="stylesheet" href="css/style.min.css"> -->
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
      flex-wrap: wrap;
      align-content: center;
      justify-content: space-around;
    }

    .flex-container-feat > div {
      font-size: 17px;
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

    /* .button1 {
      color: darkorange;
      width: 150px;
      border-radius: 25px;
      background-color: black;
    } */

    .button-order {
      position: relative;
      color: #fb8e17;
      width: 360px;
      border-radius: 25px;
      background-color: transparent;
      border-style: none;
      font-family: 'SFNSText Bold';
      border: 1px solid white;
      letter-spacing: 3px;
      transition: 0.5s ease-in-out;
    }

    .button-order:hover {
      background-color: rgb(0, 0, 0, 0.9);
      transform: translateY();
    }

    .button2 {
      color: black;
      width: 150px;
      border-radius: 25px;
      background-color: #fb8e17;
    }

    .colr {
      color: #fb8e17;
      font-size: 40px;
    }

    /* .button1:hover {
      color: white;
      height: 40px;
    } */

    .icon-img {
      width: 60%;
      height: 60%;
    }

    .ex1 {
      background-image: url(img/web\ landscape\ 2.jpg);
      background-position: center center;
      background-size: cover;
    }

    .ex2 {
      background-image: url(img/desk_banner.jpg);
      background-position: center center;
    }

    #white {
      color: white;
    }

    .black {
      background-color: black;
    }

    #black {
      color: black;
    }

    #overlay {
      position: relative;
      display: flex;
      background-color: rgb(0, 0, 0, 0.5);
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      color: #fff;
      flex-direction: column;
    }

    #text{
      /* position: absolute; 
      top: 50%;
      left: 50%; */
      font-size: 60px;
      color: #fb8e17;
      /* transform: translate(-50%,-50%);
      -ms-transform: translate(-50%,-50%); */
    }

    body {
      height: 100vh;
    }

    .underline {
      text-decoration: underline;
    }

    .feat-text {
      color: #fb8e17;
      font-size: 18px;
    }

    /* Responsive layout */

    @media screen and (max-width: 767px) {
      .flex-container-feat {
        flex-wrap: wrap;
      }
      .flex-container-feat > div {
        width: 150px;
      }
      .ex1 {
        background-image: url(img/web\ image\ 3\ .jpg);
        background-size: cover;
      }
      .ex2 {
        background-image: url(img/mobile_banner.jpg);
      }
      .button-order {
        width: 300px;
      }
      .icon-img {
        height: 50%;
      }
      .button-order {
        background-color:rgb(0, 0, 0, 0.8);
      }
      #text {
        font-size: 35px;
      }
      .colr {
        font-size: 30px;
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
        <a class="navbar-brand" href="index.html">FineOak</a>
      </div>

      <div id="navbar-collapse" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a id="white" data-nav-section="welcome">Home</a></li>
          <li><a id="white" onclick="window.open ('about.html', '_self')" href="javascript:void(0);">About</a></li>
          <li><a id="white" onclick="window.open ('/franchise.html', '_self');" href="javascript:void(0);">Franchise</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="flexslider ex1" data-section="welcome">
    <div id="overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div id="text" class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading">
                <h1 id="text" class="primary-heading shadow">Welcome to The Fatfox</h1>
                <h2 class="text colr shadow">Click here to <a id="white" class="colr underline" href="https://wa.link/2bv0rp">ORDER</a></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <h1 id="text" class="primary-heading shadow">Welcome to the Fatfox<br>click here to order<br><button class="button-order">Order Now</button></h1> -->
  </section>

  <section class="probootstrap-section-feat probootstrap-heading1 text-center">
    <h2 class="primary-heading" style="margin-bottom: 5%;">Features<br></h2>
    <div class="flex-container-feat">
      <div><img src="img/icon 1 w.png" class='icon-img'>
        <p class="sub-heading feat-text"><br>Available All Days Of The week</p>
      </div>
      <div><img src="img/icon 2 w.png" class='icon-img'>
        <p class="sub-heading feat-text"><br>Order Using Our App</p>
      </div>
      <div><img src="img/icon 3 w.png" class='icon-img'>
        <p class="sub-heading feat-text"><br>Super Fast Delivery</p>
      </div>
      <div><img src="img/icon 4 w.png" class='icon-img'>
        <p class="sub-heading feat-text"><br>Food For All Types Of Cravings</p>
      </div>
      <div><img src="img/icon 5 w.png" class='icon-img'>
        <p class="sub-heading feat-text"><br>We Accept Bulk Orders</p>
      </div>
    </div>
    </section>

  <section class="probootstrap-section-bg ex2" data-section="specialties">
    <div id="text" class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading-desc">
      <h1 id="text" class="primary-heading shadow">Something For Every Hungry Stomach</h1>
    </div>
  </section>

  <!-- probootstrap-bg-white -->
  
  <section class="probootstrap-section overlay black">
    <div class="container">
      <div class="row">
        <div class="probootstrap-cell-retro">
          <div class="half">

            <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
              <div class="image" style="background-image: url(img/burgers.jpg);"></div>
              <div class="text text-center">
                <h3>BURGERS</h3>
                <p>Looking for a no-frills meal? One burger should do the trick, but we???d recommend you try two!</p>
              </div>
            </div>
            <div class="probootstrap-cell reverse probootstrap-animate" data-animate-effect="fadeIn">
              <div class="image" style="background-image: url(img/pasta.jpg);"></div>
              <div class="text text-center">
                <h3>PASTA</h3>
                <p>Need a filling Conti meal that???s not messy?<br>Pasta to the rescue!</p>
              </div>
            </div>
            <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
              <div class="image" style="background-image: url(img/moms.jpg);"></div>
              <div class="text text-center">
                <h3>MOMOS</h3>
                <p>Bringing in the delightfull flavours of the Oriental North to your homes</p>
              </div>
            </div>

          </div>
          <div class="half">

            <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
              <div class="image" style="background-image: url(img/beverages.jpg);"></div>
              <div class="text text-center">
                <h3>BEVERAGES</h3>
                <p>Quench your thirst in style with our refreshing<br>mocktails and creamilicious shakes!</p>
              </div>
            </div>
            <div class="probootstrap-cell reverse probootstrap-animate" data-animate-effect="fadeIn">
              <div class="image" style="background-image: url(img/starter.jpg);"></div>
              <div class="text text-center">
                <h3>STARTERS</h3>
                <p>Bites that are light on your pocket, not on your plate.<br><span id="black">blackblack</span></p>
              </div>
            </div>
            <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
              <div class="image" style="background-image: url(img/pizza.jpg);"></div>
              <div class="text text-center">
                <h3>PIZZA</h3>
                <p>This ain???t your rozi roti, try some of our signature pizzas and go ahh!</p>
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
          <div class="probootstrap-heading1 dark">
            <h1 class="primary-heading">MEET THE FOX!</h1>
            <!-- <h2 class="SFNS">Let's Chat</h2> -->
          </div>
          <p><br>If you have any requirements, queries or suggestions, our team is always happy to assist you. Get in touch with us using this contact form.</p>
        </div>
        <div class="col-md-6 col-md-push-1 probootstrap-animate">
          <form method="post" action="insert.php" class="probootstrap-form">
            <div class="form-group">
              <label for="c_name">Your Name</label>
              <div class="form-field">
                <input type="text" name="c_name" id="c_name" class="form-control"/>
              </div>
            </div>
            <div class="form-group">
              <label for="c_email">Your Email</label>
              <div class="form-field">
                <input type="text" name="c_email" id="c_email" class="form-control"/>
              </div>
            </div>
            <div class="form-group">
              <label for="c_message">Your Message</label>
              <div class="form-field">
                <textarea name="c_message" id="c_message" cols="30" rows="10" class="form-control"></textarea>
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
            <h3 style="color: #fb8e17;">Delivering in</h3>
            <div class="row">
              <div class="col-md-6">
                <p class="location-del"> MANGALORE</p>
              </div>
              <div class="col-md-6">
                <p class="location-del"> DERALAKATTE</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 probootstrap-animate">
          <div class="probootstrap-footer-widget">
            <h3 style="color: #fb8e17;">Open Hours</h3>
            <div class="row">
              <div class="col-md-4">
                <p>Monday - Friday <br> 6:00pm - 12:00am</p>
              </div>
              <div class="col-md-4">
                <p>Saturday - Sunday <br> 9:00am - 12:00am</p>
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
          <p class="copyright-text">&copy; Foxwel IT 2021</p>
        </div>
        <div class="col-md-4">
          <ul class="probootstrap-footer-social ">
            <li><a href="https://wa.link/2bv0rp"><i class="icon-whatsapp"></i></a></li>
            <li><a href="https://instagram.com/fatfox.in?utm_medium=copy_link"><i class="icon-instagram"></i></a></li>
            <li><a href="https://www.facebook.com/thefatfoxin-100644388721940/?ref=py_c"><i class="icon-facebook"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <script src="https://smtpjs.com/v3/smtp.js"></script>
  <script src="js/scripts.min.js"></script>
  <script src="js/custom.min.js"></script>
  <script type="text/javascript">
    function sendmail() {

      console.log('trying to send mail')
      var email = document.getElementById('c_email').value
      var message = document.getElementById('c_message').value
      console.log(email, message)
      Email.send({
        Host: "smtp.elasticemail.com",
        Username: "thejas.s.shetty@gmail.com",
        Password: "DBF618701E0684178BCCDBD0982088E847A3",
        To: email,
        From: 'thejas.s.shetty@gmail.com',
        Subject: "Sending Email using javascript",
        Body: message
      })
        .then(function (message) {
          alert(message)
        });
    }
  </script>

</body>

</html>