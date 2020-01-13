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
           echo "<a href = 'reg.php'> Зарегистрироваться</a>"&nbsp;&nbsp;;
           echo "<a href = 'auth.php'> Войти </a>";
         }
        ?>
     </div>
     <h1 align ="middle"> Незарегистрированные пользователи не могут решать тесты.</h1>

  </body>
</html>
