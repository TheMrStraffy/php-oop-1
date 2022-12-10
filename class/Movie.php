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
?>