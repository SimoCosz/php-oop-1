<?php
  require_once __DIR__.'/movie.php';

  $dune = new movie(
    'https://pad.mymovies.it/filmclub/2019/01/033/imm.jpg',
    'Dune',
    'en',
    'Denis Villeneuve',
    '16 settembre 2021'
  );

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <span><?php echo $dune->director ?></span>
        <span><?php echo $dune->releaseDate ?></span>
      </div>
    </div>
   
  </div>
</body>
</html>