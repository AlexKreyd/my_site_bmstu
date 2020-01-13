<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href = "ex_style.css">
    <title></title>
  </head>
  <body>
    <div class="header">
        <h1> Ege-trainer </h1><br/>
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
     <div class="reg_auth">
       <h1> Регистрация</h1>
       <form method="POST" action="">
         <input type="text" name = "login" placeholder= "Логин" required><br/>
         <input type="password" name= "password" placeholder= "Пароль" required><br/>
         <input type="password" name= "password1" placeholder= "Повторите Пароль" required><br/>
         <input type = "submit"> <br/>
       </form>
    </div>
  </body>
</html>

<?php
  $connection = mysqli_connect('localhost', 'root', '', 'my_site');

  if(isset($_POST['login']) && isset($_POST['password'])){
    $login = $_POST['login'];
    $password = $_POST['password'];
    $password1 = $_POST['password1'];

  $login_in_table = mysqli_query($connection, "SELECT * FROM users WHERE login = '$login'");
  $num =mysqli_num_rows($login_in_table);
  if ($num != 0){
    $login_exist = True;
  }
  $pass_hash = password_hash($password, PASSWORD_DEFAULT);
  if($password == $password1 && !$login_exist){
    $query = "INSERT INTO users (login, password) VALUES ('$login', '$pass_hash')";
  }
  $result = mysqli_query($connection, $query);

  if($result){
    echo "<h2>Регистрация прошла успешно.</h2>";
  }
  else{
    echo  "<h2>Ошибка</h2>";
    if ($login_exist){
      echo "<h2> Пользователь с таким логином уже существует.</h2>";
    }
    if($password != $password1){
      echo "<h2>Пароли не совпадают.</h2>";
    }

  }
}
?>
