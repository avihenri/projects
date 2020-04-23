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
  <link rel="shortcut icon" type="image/png" href="../logo/film.PNG">

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

  <!-- Rules Section -->
  <section id="about" class="about-section text-center">
  <div class="idea-container">
      <div class="row">
      <div class="col-lg-10 col-12 mx-auto">
      <h2 class="mb-2 mt-3 uppercase" id="rules">The idea</h2>
      <p class="mb-1">You have a minimum group of 3 people and each person brings a movie from a theme you have already chosen.
       It's a secret so don&apos;t tell anyone your movie &amp; maybe bring a back up just in case! If the movie exists already we will let you know.</p>
       <p class="mb-1">Once you have entered the number of people in your club (below), you will each need to enter your movies.
       You will then be presented with a random order in which you should watch them in. Screenshet this to save your order. </p>
       <p class="mb-1">Once you have watched them all, you can then gain points. <a href="#section-points">See points section.</a></p>
       <p class="mb-0 mt-1 text-center"> Happy viewing!
      </p>
      </div>
</div>
</div>
    <div class="rules-container">
      <div class="row">
        <div class="col-lg-10 col-12 mx-auto">
          <h2 class="mb-2 mt-4 uppercase" id="rules">Rules</h2>
          <ul class="noliststyle justify-text rules-list">
            <li><span class="num-labels btn-primary btn">1</span> <span class="rules">First rule of film club..</span> <span class="rule-items">You must not tell anyone your movie!</span></li>
            <li><span class="num-labels">2</span> Each film club should have a theme</li>
            <li><span class="num-labels">3</span> You must have seen your movie</li>
            <li><span class="num-labels">5</span> Each movie should be in one sitting</li>
            <li><span class="num-labels">6</span> Minimum of 3 people </li> 
            <li><span class="num-labels">7</span> Don&apos;t forget the snacks!</li>
          </ul>
        </div>
      </div>
      <div class="row align-items-center no-gutters mb-4 mb-lg-5" >
         <div class="" style="width:100%;"> 
          <div id='popcorn-img'></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Film Club Details Section -->
  <section id="projects" class="projects-section bg-light">
    <div class="container">
      <div class="row mb-4">
        
      <!-- PEOPLE COUNT -->
        <div class="col-md-8 margin-auto" id="peopleCountWrapper">
          <h2 id="club-details">Let&apos;s go..</h2>
            <label for="inp-people">How many people are in your club?</label>
            <input type="number" name="people" class="form-control mr-0 mr-sm-2 mb-3 mb-sm-0" id="inp-people" required>
            <div id="showPeopleError" style="display:none;"><span class="red">*</span>Minimum of people is 3</div>
             <div class="center-text">
              <button id="peopleCount" class="btn btn-primary mt-3">Enter</button>
            </div>
        </div>

        <!-- MOVIES -->
        <div class="col-md-8 margin-auto" id="getMovies" style="display: none;">
          <h2 id="club-movies">Now the movies..</h2>
            <label for="inp-movie">Enter movie number <span id="count"></span></label>
            <input type="text" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inp-movie" placeholder="Enter your movie.." pattern=".{3,}" >
            <div id="showMovieError" style="display:none;"><span class="red">*</span>Please enter your movie</div>
            <div id="showDupMovie" style="display:none;"><span class="red">*</span>Opps, sorry duplicate movie!</div>
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

  <!-- Film Club Section -->
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
    <div class="movie-container"></div>  
  </section>

  <section class="contact-section bg-black" id="section-points"> 
  <div class="rules-container">
  <div>
   <h4 class="text-white text-center uppercase">Points</h4>      
   </div>
      <div class="row p-3">       
        <<ul class="noliststyle justify-text rules-list" style="margin: 0 15px;">
            <li><span class="dash-labels btn-primary btn">-</span> <span class="text-white">1 point for every movie you guess correctly (whos is whos)</span></li>
            <li><span class="dash-labels btn-primary btn">-</span> <span class="text-white">1 point for every person that has not seen your movie</span></li>
            <li><span class="dash-labels btn-primary btn">-</span> <span class="text-white">1 point if your movie was voted Best in Club</span></li>
          </ul>
      </div>  
      <h4 class="text-white text-center mb-5 mt-4" style="width:100%;"><small>Good Luck!</h4>
    </div>
    <div class="row align-items-center no-gutters mb-4 mb-lg-5" >
         <div class="text-center" style="width:100%;"> 
          <img src="img/end.jpg" alt="" width="50%" style="max-width:400px;">
        </div>
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

      // First step - Get people count
        $('#peopleCount').click(function() {
          dealWithPeopleTot();
        });

        $('#inp-people').keypress(function(event){
          var keycode = (event.keyCode ? event.keyCode : event.which);
          if(keycode == '13'){
            dealWithPeopleTot();
          }          
        });

        function dealWithPeopleTot() {
          count = $('#inp-people').val();
          if (count < 3) {
            $('#showPeopleError').show();
            return false;
          } else {
            $('#showPeopleError').hide();
            numOfPeeps(count);
            $('#peopleCountWrapper').hide();
            $('#getMovies').show();    
            $('#count').text(countArr[0]); 
          }
        }

        // create new array to count through movies (no of peeps)
        function numOfPeeps(count) {
          for (i = 1; i <= count; i++) {
            countArr.push(i);
          }          
          return countArr;
        }

        // Second Step - Enter each movie into movie array
        $('#enterMovie').click(function() {          
          dealWithMovies();
        });

        $('#inp-movie').keypress(function(event){
          var keycode = (event.keyCode ? event.keyCode : event.which);
          if(keycode == '13'){
            dealWithMovies();
          }          
        });

        function dealWithMovies() {
          var movie = $('#inp-movie').val().toLowerCase();           
            if (movie.length < 2) {
              $('#showMovieError').show();
              return false;
            } else {
              $('#showMovieError').hide();
              if (!$.inArray(movie, movieArr)) {
                $('#showDupMovie').show(); 
                return false;
              } else {
                $('#showDupMovie').hide(); 
                countArr.shift();
              $('#count').text(countArr[0]); 
              $('#inp-movie').val('');
                movieArr.push(movie);
              }
              if (countArr.length === 0) {
                $('#getMovies').hide();
                $('#allMovies').show(); 
              } 
            } 
        }
     
      // Third step - present movies in random order
        $('#randomiseMovies').click(function() {
          $('#projects').hide();          
          $('#section-filmClub').show();
          index = 1;
          shuffleArray(movieArr);
          $.each(movieArr, function(e, val) {            
            $('#moviesOrder').append('<div class="col-md-12 mb-3 "><div class="card"><div class="card-body text-center"><h4 class="text-uppercase m-0">Movie ' + index + '</h4><hr class="my-2"><div class="text-black-50 capitalise">' + val + '</div></div></div></div>');
            index++;
          });          
        });

      // Shuffle array (for movies)
      function shuffleArray(array) {
        for (let i = array.length - 1; i > 0; i--) {
          const j = Math.floor(Math.random() * (i + 1));
          [array[i], array[j]] = [array[j], array[i]];
        }
        return array;
      }

    });
  </script>

</body>

</html>
