<?php 
include_once './class/Movie.php';
include_once './db/db.php';

if($_SERVER['HTTP_HOST'] == 'localhost'){
  $folder = "PHP-OOP-1/";
}else{ $folder = '';};
$userLogged = false;
if(isset($_SESSION['userLogged'])){
  $userLogged = true;
}
$baseUrl = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'] . '/' . $folder;

$string = file_get_contents('./db/routes.json');
$navigation = json_decode($string, true);

?>
<?php  include_once './partials/head.php' ?>

  <header>

  <!-- Log Out and Catalogue won't show up after log in -->

    <nav class="row w-100 justify-content-between align-items-center">
      <div class="logo col-3">
        LOGO
      </div>
      <div class="menu col-6 ">
        <ul class="d-flex justify-content-evenly">
          <?php foreach($navigation as $link) : ?>
            <?php if($link['public'] || (!$link['public'] && $userLogged)) : ?>
            <li>
              <a 
              href="<?php $baseUrl ?><?php echo $link['href'] ?>"> 
                <?php echo $link['name'] ?> 
              </a>
            </li>
            <?php endif; ?>
            <?php endforeach; ?>
        </ul>
      </div>
    </nav>
  </header>
