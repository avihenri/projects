<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pair Memory Game</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/main-style.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="../logo/dice.png">
  <script src="https://kit.fontawesome.com/577f18dc97.js" crossorigin="anonymous"></script>

</head>

<body class="bg-dark">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <!-- <div class="container"> -->
      <a class="navbar-brand" href="index.html">Simple Games <i class="fas fa-dice white"></i></a>
      
      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <!-- <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul> -->
      </div>
    <!-- </div> -->
  </nav>

  <!-- Page Content -->
  <div class="container mb-5">

    <!-- Page Features -->
    <div class="row text-center">
    <div class="col-md-12">
      <h3 class="white">Score</h3>
    </div>
    </div>

    <div class="flex-container" id="cardContainer">
      
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">&copy; Henri Design Studio <script>document.write(new Date().getFullYear())</script></p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
    $(document).ready(function() {
      
      let count = 28;
      let id = 1
      for (let i = 0; i < count; i++) {
        $('#cardContainer').append('<div class="card-items mb-3"><img src="img/playing-card.jpg" class="card-img" width="100%" height="auto"> <div class="card-show" style="display:none;"></div></div>');
      }

      // PAIRS.JS
      var counter = 0;    
      var openCard = "";
      var openImg = "";
      var foundAll = 0;
      var imgSrcArr = [
        "a.PNG", "b.PNG", "c.PNG", "d.PNG", "e.PNG", "f.PNG", "g.jpg", "h.PNG", "i.PNG", "j.png", "k.png", "l.PNG", "m.PNG", "n.PNG",
        "a.PNG", "b.PNG", "c.PNG", "d.PNG", "e.PNG", "f.PNG", "g.jpg", "h.PNG", "i.PNG", "j.png", "k.png", "l.PNG", "m.PNG", "n.PNG"
       ];

      $('#counter').innerHTML = counter;
      function random(max, min) {
        return Math.round(Math.random() * (max - min) + min);
      }
      

    });
  </script>

</body>

</html>
