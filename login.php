<?php 
if(isset($_SESSION['userLogged'])){
  header('Location: catalogue.php');
}

if(empty($_POST['mail']) || empty($_POST['password'])){
  $errormessage ='Username e password richiesti';
} else{
  $stringUsers = file_get_contents('./db/users.json');
  $users = json_decode($stringUsers, true);
  $validUser = false;
  foreach ($users as $user){
    if($_POST['mail'] == $user['mail'] && $_POST['password'] ==  $user['password']){
      $validUser = true;
      $logUser = $user;
      
    }
    if($validUser){
      $_SESSION['userLogged'] = true;
      header('Location: catalogue.php');
    }else{
      $errormessage = 'Username o password errati!';
    }
  }
}

?>

<?php include_once './partials/head.php' ?>

<body>

<?php include_once './partials/header.php' ?>

  <h1>Login</h1>
  <h3><?php echo $errormessage ?></h3>
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
  <label for="mail">Email</label>
  <input type="email" name="mail" id="mail">
  <label for="password">Password</label>
  <input type="password" name="password" id="password">
  <button type="submit">Log In</button>
  </form>
</body>


<?php include_once './partials/footer.php' ?>