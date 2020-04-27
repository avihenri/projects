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
      <a class="navbar-brand" href="index.html">Simple Games <i class="fas fa-dice white"></i></a>
  </nav>

  <!-- Page Content -->
  <div class="container height-100 mb-5">

    <!-- Page Features -->
    <div class="row text-center pb-3">
      <div class="col-md-12">
      <table class="margin-auto white">
        <tbody>
          <tr>
            <td>Matches: <span id="matches" class="ml-4"></span>/12</td>
          </tr>
        </tbody>
      </table>
      </div>
    </div>

    <div class="flex-container height-70" id="cardContainer"></div>    

  </div>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">&copy; Henri Design Studio <script>document.write(new Date().getFullYear())</script></p>
    </div>
  </footer>

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
      document.getElementById('matches').innerHTML = matched;
      // Pair images
      var imgSrcArr = [
        "a.PNG", "b.PNG", "c.PNG", "d.PNG", "e.PNG", "f.PNG", "g.jpg", "h.PNG", "i.PNG", "j.png", "k.png", "l.PNG",
        "a.PNG", "b.PNG", "c.PNG", "d.PNG", "e.PNG", "f.PNG", "g.jpg", "h.PNG", "i.PNG", "j.png", "k.png", "l.PNG"
       ];
       // shuffle array on page load
       shuffle(imgSrcArr);
      
      // Display Cards
      for (let i = 0; i < count; i++) {
        $('#cardContainer').append(`<div class="card-items mb-3" data-img="${imgSrcArr[arrIndex]}"><img src="img/pair-cards/${imgSrcArr[arrIndex]}" class="card-img front" width="100%" height="100%" onmouseover="this.style.cursor='pointer'" style=""display:none;> <img src="img/playing-card.jpg" data-id="img-${id}" class="card-img back" width="100%" height="100%" onmouseover="this.style.cursor='pointer'"><div class="card-show" style="display:none;"></div></div>`);
        arrIndex++;
        id++;
      }

      // Flip
      const cards = document.querySelectorAll('.card-items');
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
      cards.forEach(card => card.addEventListener('click', flipCard));
      
      // Check cards match
      function checkMatched() {
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
        }, 1500);
      }

      // resetCards cards not matched
      function resetCards() {
        [flipped, lockCards] = [false, false];
        [first, second] = [null, null];
      }

      // shuffle array
      function shuffle(array) {
        array.sort(() => Math.random() - 0.5);
      }

      // Show confetti once all matched
      function gameover() {
        confetti.start();
      }
      

    });
  </script>

</body>

</html>
