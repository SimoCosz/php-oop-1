<?php
  require_once __DIR__.'/movie.php';

  $dune = new movie(
    'https://pad.mymovies.it/filmclub/2019/01/033/imm.jpg',
    'Dune',
    'en',
    'Denis Villeneuve',
    '16 settembre 2021'
  );

  $fast = new movie(
    'https://pad.mymovies.it/filmclub/2017/10/059/imm.jpg',
    'Fast & Fourius 9',
    'en',
    'Justin Lin',
    '18 agosto 2021'
  );

  $lookUp = new movie(
    'https://pad.mymovies.it/filmclub/2021/02/052/imm.jpg',
    'Don\'t look up',
    'en',
    'Adam McKay',
    ''
  );

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="app.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <title>PHP-OOP-1</title>
</head>
<body>
  <div class="container">
    <div class="card-wrap">
      <figure>
        <img src="<?php echo $dune->poster ?>" alt="">
      </figure>
      <div class="info">
        <h2>
          <?php echo $dune->title ?>
        </h2>
        <span><?php echo $dune->language ?></span>
        <span>Directed by: <a href="https://www.mymovies.it/persone/denis-villeneuve/163328/" target="_blank"><?php echo $dune->director ?></a></span>
        <span>Release date: <?php echo $dune->exist() ?></span>
      </div>
    </div>
    
    <div class="card-wrap">
      <figure>
        <img src="<?php echo $fast->poster ?>" alt="">
      </figure>
      <div class="info">
        <h2>
          <?php echo $fast->title ?>
        </h2>
        <span><?php echo $fast->language ?></span>
        <span>Directed by: <a href="https://www.mymovies.it/persone/justin-lin/51582/" target="_blank""><?php echo $fast->director ?></a></span>
        <span>Release date: <?php echo $fast->exist() ?></span>
      </div>
    </div>
    
    <div class="card-wrap">
      <figure>
        <img src="<?php echo $lookUp->poster ?>" alt="">
      </figure>
      <div class="info">
        <h2>
          <?php echo $lookUp->title ?>
        </h2>
        <span><?php echo $lookUp->language ?></span>
        <span>Directed by: <a href="https://www.mymovies.it/persone/adam-mckay/46199/" target="_blank""><?php echo $lookUp->director ?></a></span>
        <span>Release date: <?php echo $lookUp->exist() ?></span>
      </div>
    </div>
  </div>
</body>
</html>