<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Film Club</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/grayscale.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">FILM CLUB</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5"></h2>
        <a href="#rules" class="btn btn-primary js-scroll-trigger">Get Started</a>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section id="about" class="about-section text-center">
    <div class="rules-container">
      <div class="row">
        <div class="col-lg-10 col-12 mx-auto">
          <h2 class="mb-4" id="rules">RULES</h2>
          <ul class="noliststyle justify-text rules-list">
            <li><span class="num-labels btn-primary btn">1</span> <span class="rules">First rule of film club..</span> <span class="rule-items">You must not tell anyone your movie!</span></li>
            <li><span class="num-labels">2</span> <span class="rules">Second rule..</span> <span class="rule-items">Each film club should have a </span></li>
            <li><span class="num-labels">3</span> <span class="rules">Third rule..</span> <span class="rule-items">You must have seen your movie</span></li>
            <li><span class="num-labels">4</span> <span class="rules">Fourth rule..</span> <span class="rule-items">Always have a back up</span></li>
            <li><span class="num-labels">5</span> <span class="rules">Fifth rule..</span> <span class="rule-items">Each movie should be in one sitting</span></li>
            <li><span class="num-labels">6</span> <span class="rules">Sixth rule..</span> <span class="rule-items">Minimum of 3 people or if you are a couple, minimum of 2 movies each</span></li>
            <li><span class="num-labels">7</span> <span class="rules">Seventh rule..</span> <span class="rule-items">Don&apos;t forget the snacks!</span></li>
          </ul>
        </div>
      </div>
        <!-- Featured Project Row -->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5" >
         <div class="" style="width:100%;"> 
          <div id='popcorn-img'></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="projects-section bg-light">
    <div class="container">
      <div class="row mb-4">
        
      <!-- PEOPLE COUNT -->
        <div class="col-md-8 margin-auto" id="peopleCountWrapper">
          <h2 id="club-details">Let&apos;s go..</h2>
            <label for="inp-people">How many people are in your club?</label>
            <input type="number" name="people" class="form-control mr-0 mr-sm-2 mb-3 mb-sm-0" id="inp-people">
             <div class="center-text">
              <button id="peopleCount" class="btn btn-primary mt-3">Enter</button>
            </div>
        </div>

        <!-- MOVIES -->
        <div class="col-md-8 margin-auto" id="getMovies" style="display: none;">
          <h2 id="club-movies">Now the movies..</h2>
            <label for="inp-movie">Enter movie number <span id="count"></span></label>
            <input type="movie" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inp-movie" placeholder="Enter your movie..">
            <div class="center-text">
              <button id="enterMovie" class="btn btn-primary mt-3">Enter</button>
            </div>
        </div>

        <!-- ALL ENTERED -->
        <div class="col-md-8 margin-auto center-text" id="allMovies" style="display: none;">
          <h2 id="club-movies">Great, click below to see your movies in the order they should be watched..</h2>
            <div class="center-text">
              <button id="randomiseMovies" class="btn btn-primary mt-3">Show Movies</button>
            </div>
        </div>

      </div>
    </div>
  </section>


  <!-- Contact Section -->
  <section class="contact-section bg-black" id="section-filmClub" style="display: none;"> 
    <div class="movie-container">
   <div>
   <h4 class="text-white text-center uppercase">Your Film Club</h4>      
   </div>
      <div class="row">       
        <div id="moviesOrder" style="width:100%; margin: 0 auto;"></div> 
        <p class="text-white text-center" style="width:100%;"><small>Take a screenshot to save this moment!</small></p>
      </div>  
    </div>

    <div class="movie-container">
   <div>
   <h4 class="text-white text-center uppercase">Points</h4>      
   </div>
      <div class="row">       
        <<ul class="noliststyle justify-text rules-list" style="margin: 0 15px;">
            <li><span class="dash-labels btn-primary btn">-</span> <span class="text-white">1 point for every movie you guess correctly (whos is whos)</span></li>
            <li><span class="dash-labels btn-primary btn">-</span> <span class="text-white">1 point for every person that has not seen your movie</span></li>
            <li><span class="dash-labels btn-primary btn">-</span> <span class="text-white">1 point if your movie was voted the best in the club</span></li>
          </ul>
      </div>  
      <h4 class="text-white text-center mb-5 mt-4" style="width:100%;"><small>Good Luck!</h4>
    </div>

    <div class="row align-items-center no-gutters mb-4 mb-lg-5" >
         <div class="text-center" style="width:100%;"> 
          <img src="img/end.jpg" alt="" width="50%" style="max-width:400px;">
        </div>
      </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
       &copy; Henri Design Studio <script>document.write(new Date().getFullYear())</script>
      <div class="social d-flex justify-content-center">
        <a href="https://github.com/avihenri" class="mb-2">
          <i class="fab fa-github"></i>
        </a>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/grayscale.js"></script>
  <script>
    $(document).ready(function() {
      let count = 0;
      let movieArr = [];
      let countArr = [];

        $('#peopleCount').click(function() {
          count = $('#inp-people').val();
          numOfPeeps(count);
          $('#peopleCountWrapper').hide();
          $('#getMovies').show();    
          $('#count').text(countArr[0]);      
          console.log(countArr);
        });

        function numOfPeeps(count) {
          for (i = 1; i <= count; i++) {
            countArr.push(i);
          }          
          return countArr;
        }

        $('#enterMovie').click(function() {
          countArr.shift();
          $('#count').text(countArr[0]); 
            var movie = $('#inp-movie').val();
            $('#inp-movie').val('');
            movieArr.push(movie);
          if (countArr.length === 0) {
            $('#getMovies').hide();
            $('#allMovies').show(); 
          } 
        })

     
        $('#randomiseMovies').click(function() {
          $('#projects').hide();          
          $('#section-filmClub').show();
          index = 1;
          randsort(movieArr);
          $.each(movieArr, function(e, val) {            
            $('#moviesOrder').append('<div class="col-md-12 mb-3 "><div class="card"><div class="card-body text-center"><h4 class="text-uppercase m-0">Movie ' + index + '</h4><hr class="my-2"><div class="text-black-50">' + val + '</div></div></div></div>');
            index++;
          });          
        });

      function randsort(c) {
          var o = new Array();
          for (var i = 0; i < c; i++) {
              var n = Math.floor(Math.random()*c);
              if( jQuery.inArray(n, o) > 0 ) --i;
              else o.push(n);
          }
          return o;
      }


    });
  </script>

</body>

</html>
