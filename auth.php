<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel ="stylesheet" href = ex_style.css>
    <title></title>
  </head>
  <body>
    <div class="header">
        <h1> Ege-trainer </h1>
        <a href = "theory.php"> Теория</a>&nbsp;&nbsp;
        <a href ="tests.php"> Тесты </a>&nbsp;&nbsp;
        <?php
         if(isset($_SESSION['login'])){
           echo "<a href = 'logout.php'>Выйти</a>";
         }
         else{
           echo "<a href = 'reg.php'> Зарегистрироваться</a>&nbsp;&nbsp;";
           echo "<a href = 'auth.php'> Войти </a>";
         }
        ?>
     </div>
     <div class =" reg_auth">
       <h2> Авторизация </h2>
       <form method ="POST" action="">
         <input type = "text" name ="login" placeholder="Введите логин" required><br/>
         <input type = "password" name ="password" placeholder="Введите пароль" required><br/>
         <input type = "submit"><br/>
       </form>
     </div>
  </body>
</html>
<?php
  $connection = mysqli_connect('localhost', 'root', '', 'my_site');
  if(isset($_POST['login']) && isset($_POST['password'])){
    $login = $_POST['login'];
    $password = $_POST['password'];
    $pass_hash = password_hash($password, PASSWORD_DEFAULT);
    $query = "SELECT password FROM users WHERE login = '$login' and password ='$pass_hash'";
    $result = mysqli_query($connection, $query);
  if ($result){
    echo "<h3> Вы вошли.</h3>";
    $_SESSION['login'] = $login;
  }
}

?>
