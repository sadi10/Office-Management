<!DOCTYPE html>
<html lang="en">

<head>
  <title>LIZ Fashion Ind. Ltd.</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {
      height: 450px
    }

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #dcdcdc;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }

      .row.content {
        height: auto;
      }
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Logo</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="circularpage.php">DROP CV</a></li>
          <li><a href="contactpage.php">CONTACT</a></li>
          <li><a href="adress.php">ADDRESS</a></li>
          <li><a href="index.php">Back to Home</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid text-center">
    <div class="row content">
      <div class="col-sm-2 sidenav">
        <p><a href="about.php">About Us</a></p>
        <p><a href="viewerp.php">ERP DEPARTMENT</a></p>
        <p><a href="it.php">IT DEPARTMENT</a></p>
      </div>
      <div class="col-sm-8 text-left">
        <section>
          <img class="mySlides" src="image2.jpg" style="width:40%">
        </section>
        <h1>Liz Fashion Industry Limited</h1>

        <p>Liz Fashion Industry Limited is a company of LDC Group. Liz Fashion ind. Ltd. Founded in 1997. It is a prominent Chinese textile and apparel manufacturer and exporter based in Bangladesh the second largest exporting country in the world. Equipped with modern technology and vertically integrated textile and apparel manufacturing facilities. It is manned by a dedicated and well-trained workforce of eighteen thousand strong. Liz fashion provide high quality products and services for global renowned fashion brands, exporting worldwide to Europe, North America and Australia. </p>

        <!-- <hr>
      <div class="col-sm-8 text-left">
       <img src="lida.jpg" alt="Snow" style="width:30%">       <img src="lid.jpg" alt="Snow" style="width:30%">
      </div> -->
        <h3>Vision</h3>
        <p>Liz Fashion strives to be a global leader in the textile and apparel industry by offering quality garment manufacturing, innovative products and outstanding services. We create a socially responsible organization that complies with international standards.</p>
        <h3>Mission</h3>
        <p>Our mission is to drive strong synergy with our partners throughout the world who share our commitment to safe and healthy workplaces, to deliver high-quality products and services. We realize customers’ expectations and improve on them continuously.</p>
        <h3>History</h3>
        <p>Our mission is to drive strong synergy with our partners throughout the world who share our commitment to safe and healthy workplaces, to deliver high-quality products and services. We realize customers’ expectations and improve on them continuously.</p>
      </div>

      <div class="col-sm-2 sidenav">
        <div class="well">
          <p><a href="about.php">HISTORY</a></p>
        </div>
        <div class="well">
          <p><a href="about.php">Mission & Vision</a></p>
        </div>
      </div>
    </div>
  </div>

  <footer class="container-fluid text-center">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="filesLogic.php">DROP CV</a></li>
        <li><a href="contact.php">CONTACT</a></li>
        <li><a href="adress.php">ADDRESS</a></li>
      </ul>
  </footer>

</body>

</html>