<?php 
class Movie{
  public $name;
  public $category;
  public $language;
  public $length;
  public $poster;
  public $publisher;

  /**
   * @param String $name
   * @param String $category
   * @param String $language
   * @param Number $length
   */
  
  public function __construct($_name, $_category, $_language, $_length)
  {
    $this->name = $_name;
    $this->category = $_category;
    $this->language = $_language;
    $this->length = $_length;
  }

  public function getAllInfo(){
    return "This movie is called: $this->name - category: $this->category and it's: $this->length mins long.";
  }
}

$movie1= new Movie("WhoAmI","Thriller","German",105);
$movie2= new Movie("Interstellar","Fantascienza","English",169);
$movieList = [$movie1, $movie2];
var_dump($movieList);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
  <title>Document</title>
</head>
<body>
  <div class="container-fluid">
    <div class="mc-container text-center">
      <h1>OOP Movies</h1>
    </div>

  </div>
</body>
</html>