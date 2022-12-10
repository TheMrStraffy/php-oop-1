<?php 
include_once './class/Movie.php';
include_once './db/db.php';
include_once './partials/head.php';
?>
<body>
<?php include_once './partials/header.php' ?>

<main>

  <div class="container-fluid">
    <div class="mc-container w-75 text-center m-auto">
      <h1>OOP Movies</h1>

      <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Poster</th>
      <th scope="col">categories</th>
      <th scope="col">Language</th>
      <th scope="col">Length</th>
      <th scope="col">Publisher</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data as $movie) : ?>
    <tr>

      <td ><?php echo $movie->name ?></td>
      <td>
      <img class="thumbnail" src="<?php echo $movie->getPoster() ?>" alt="">  
      </td>
      <td><?php $movie->getCategory() ?></td>
      <td><?php echo $movie->language ?></td>
      <td><?php echo $movie->length ?> mins</td>
      <td><?php echo $movie->publisher ?></td>

    </tr>
    <?php endforeach; ?>
    
  </tbody>
</table>

    </div>

  </div>
</main>
</body>
<?php include_once './partials/footer.php' ?> 