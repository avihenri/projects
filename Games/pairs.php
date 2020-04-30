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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/577f18dc97.js" crossorigin="anonymous"></script>

</head>

<body class="bg-dark">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="row width-100">
      <div class="col-md-3 col-sm-2 col-2">
        <a class="navbar-brand" href="index.html"><span class="navSm-hide">Simple Games</span> <i class="fas fa-dice white"></i></a>
      </div>
      <div class="col-md-9 col-sm-10 col-10 nav-contents">
        <ul class="nav pull-right">
          <li class="nav-item active white pull-right">
            Matches: <span id="matches" class="ml-2"></span>/12
          </li>    
          <li class="nav-item active white pull-right">
            Tries: <span id="tries" class="ml-2"></span>
          </li>     
          <li class="nav-item active white pull-right">
          <label id="minutes">00</label>:<label id="seconds">00</label>
          </li>    
        </ul> 
      </div> 
    </div>     
  </nav>

  <!-- Page Content -->
  <div class="container height-100 mb-5">
    <div class="flex-container height-70" id="cardContainer"></div>    
    <div >
      <table id="statsTable">
        <thead>
          <th>Game</th>
          <th>Time</th>
          <th>Tries</th>
        </thead>
        <tbody id="statsTableBody">
        </tbody>
      </table>
    </div>
  </div>

  <!-- Footer -->
  <footer class="py-3 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">&copy; Henri Code <script>document.write(new Date().getFullYear())</script></p>
    </div>
  </footer>

  <!-- START MODAL -->
  <div class="modal fade" id="startModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">                            
            <h4 class="text-center my-3"><span class="uppercase">Ready?</span></h4>
            <button class="btn btn-dark my-3 mx-3" id="playBtn">Play</button>
        </div>
    </div>
</div>
  <!-- GAME EXPIRED MODAL -->
  <div class="modal fade" id="expiredModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">                            
            <h4 class="text-center my-3"><span class="uppercase">Game Expired</span></h4>
            <button class="btn btn-dark my-3 mx-3" id="startAgainBtn">Play Again?</button>
        </div>
    </div>
</div>
  <!-- ALL MATCHED MODAL -->
  <div class="modal fade" id="completeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">                            
            <h4 class="text-center my-3"><span class="uppercase">Your Stats</span></h4>
            <p class="ml-4">Total time: <span id="time"></span></p>
            <p class="ml-4">Number of tries: <span id="totalTries"></span></p>
            <p class="text-center">See if you can beat your stats..</p>
            <button class="btn btn-dark my-3 mx-3" id="playAgain"><i class="fas fa-sync"></i> Play Again</button>
        </div>
    </div>
</div>

  <!-- Bootstrap core JavaScript -->  
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/confetti.min.js"></script>
  <script>
    $(document).ready(function() {
      
      let count = 24;
      let id = 1;
      let arrIndex = 0;
      let flipped = false;
      let first, second;
      let lockCards = false;
      let matched = 0;
      let totalTries = 0;
      let timer;
      let stats = {};
      let game = 1;
      let cards;
      document.getElementById('matches').innerHTML = matched;
      document.getElementById('tries').innerHTML = totalTries;      
      $('#startModal').modal({backdrop: 'static', keyboard: false});
     
      

      let playBtn = document.getElementById("playBtn");
      playBtn.addEventListener('click', startGame);

      // Start Game
      function startGame() {
        $('#startModal').modal('hide');
        startTimer();
      }
      
      // Pair images
      var imgSrcArr = [
        "a.PNG", "b.PNG", "c.PNG", "d.PNG", "e.PNG", "f.PNG", "g.jpg", "h.PNG", "i.PNG", "j.png", "k.png", "l.PNG",
        "a.PNG", "b.PNG", "c.PNG", "d.PNG", "e.PNG", "f.PNG", "g.jpg", "h.PNG", "i.PNG", "j.png", "k.png", "l.PNG"
       ];
       loadImages();         
       addFlipListerner();       

      // Display Cards
      function loadImages() {
       shuffle(imgSrcArr);       
        for (let i = 0; i < count; i++) {
          $('#cardContainer').append(`<div class="card-items mb-3" data-img="${imgSrcArr[arrIndex]}"><img src="img/pair-cards/${imgSrcArr[arrIndex]}" class="card-img front" width="100%" height="100%" onmouseover="this.style.cursor='pointer'" style=""display:none;> <img src="img/playing-card.jpg" data-id="img-${id}" class="card-img back" width="100%" height="100%" onmouseover="this.style.cursor='pointer'"><div class="card-show" style="display:none;"></div></div>`);
          arrIndex++;
          id++;
        }    
        
      }

      // Add click listener to flipcard
     function addFlipListerner() {
      cards = document.querySelectorAll('.card-items');
      cards.forEach(card => card.addEventListener('click', flipCard)); 
     }

    // Flip
      function flipCard() {
        if (lockCards) return;
        if (this === first) return;
        this.classList.add('flip');
        if(!flipped) {
          flipped = true;
          first = this;
          return;
        }
        second = this;
        checkMatched();
      }
      
      // Check cards match
      function checkMatched() {
        totalTries++;
        document.getElementById('tries').innerHTML = totalTries;
        if (first.dataset.img === second.dataset.img) {
          disableMatched(); 
          matched++; 
          document.getElementById('matches').innerHTML = matched;          
          if (matched === 12) {
              gameover() 
          }          
          return;
        }
        flipBack();
      }

      // Disable if matched
      function disableMatched() {
        first.removeEventListener('click', flipCard);
        second.removeEventListener('click', flipCard);
        resetCards();
      }

      // Flip back if not matched
      function flipBack() {
        lockCards = true;
        setTimeout(() => {
          first.classList.remove('flip');
          second.classList.remove('flip');
          resetCards();
        }, 800);
      }

      // Reset cards not matched
      function resetCards() {
        [flipped, lockCards] = [false, false];
        [first, second] = [null, null];
      }

      // Shuffle array
      function shuffle(array) {
        array.sort(() => Math.random() - 0.5);
      }

      // Gameover
      function gameover() {
        clearInterval(timer);
        let min = document.getElementById("minutes").innerHTML;
        let sec = document.getElementById("seconds").innerHTML;
        let time = min + ":" + sec;
        document.getElementById('time').innerHTML = time;
        document.getElementById('totalTries').innerHTML = totalTries;
        confetti.start(2000);   
        stats[game] = {timeTaken: time, triesTaken: totalTries};       
        document.getElementById("statsTable").style.display = "inline-table";
        $('#statsTableBody').empty();
        let rowNum = 0;
        Object.keys(stats).forEach(key => {
          let statsTable = document.getElementById("statsTableBody");
          let row = statsTable.insertRow(rowNum);
          let cellGame = row.insertCell(0);
          let cellTime = row.insertCell(1);
          let cellTries = row.insertCell(2);
          cellGame.innerHTML = key;
          cellTime.innerHTML = stats[key].timeTaken;
          cellTries.innerHTML = stats[key].triesTaken;
          rowNum++;
        });
        game++;
        setTimeout(() => {
          $('#completeModal').modal({backdrop: 'static', keyboard: false});          
        }, 2000);
      }

      let playAgainBtn = document.getElementById('playAgain');
      playAgainBtn.addEventListener('click', resetGame);

      // Reset the game
      function resetGame() {
        [id, arrIndex, matched, totalTries] = [1, 0, 0, 0];
        document.getElementById('matches').innerHTML = matched;
        document.getElementById('tries').innerHTML = totalTries;
        document.getElementById("seconds").innerHTML = '00';
        document.getElementById("minutes").innerHTML = '00';
        resetCards();      
        cards.forEach(card => card.classList.remove('flip'));        
        $('#cardContainer').empty();
        loadImages();
        addFlipListerner();
        $('#completeModal').modal('hide'); 
        startTimer();  
      }      

      // Timer
     function startTimer() {
      let sec = 0;
      function pad(val) {
          return val > 9 ? val : "0" + val;
      }
     timer = setInterval(function () {
          document.getElementById("seconds").innerHTML = pad(++sec % 60);
          document.getElementById("minutes").innerHTML = pad(parseInt(sec / 60, 10));
      }, 1000);
      setTimeout(() => {
        clearInterval(timer);
        $('#expiredModal').modal({backdrop: 'static', keyboard: false});
      }, 600000);
     }
     let startAgainBtn = document.getElementById('startAgainBtn');
     startAgainBtn.addEventListener('click', playAgain);

     function playAgain() {
      resetGame();
      $('#expiredModal').modal('hide');       
     }

    });
  </script>

</body>

</html>
