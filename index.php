<?php 
class Movie{
  public $name;
  public $categories = [];
  public $language;
  public $length;
  public $poster = null;
  public $publisher;

  /**
   * @param String $name
   * @param String $categories
   * @param String $language
   * @param Number $length
   */
  
  public function __construct($_name, $_categories, $_language, $_length,$_publisher)
  {
    $this->name = $_name;
    $this->categories = $_categories;
    $this->language = $_language;
    $this->length = $_length;
    $this->publisher = $_publisher;
  }

  public function getCategory(){
    foreach($this->categories as $category){
      echo $category;
      echo " ";

    }
  }
  public function setPoster($_poster){
    $this->poster = $_poster;
  }
  public function getPoster(){
    $placeholder='https://www.runningin.info/wp-content/uploads/2018/07/no-image.jpg';
    if($this->poster){
      return $this->poster;
    }
    return $placeholder;
  }
}

$movie1= new Movie("WhoAmI",["Thriller","Techno"],"German",105,"Sony");
$movie1->setPoster('https://upload.wikimedia.org/wikipedia/en/5/5c/Who_am_I_movie_poster.jpg');

$movie2= new Movie("Interstellar",["Fantascienza","Drammatico"],"English",169,"Warner Bros");
$movie2->setPoster('https://m.media-amazon.com/images/I/91e4IzkgrKL.jpg');

$movieList = [$movie1, $movie2];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
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
    <?php foreach($movieList as $movie) : ?>
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
</body>
</html>