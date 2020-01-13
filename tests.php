<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel ="stylesheet" href = ex_style.css>
    <meta charset="utf-8">
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
     <div class ="content">
       <h1> Тесты:</h1>
       <ul>
         <li><a href ="test1.php"> Тест 1 </a></li><br/>
         <li><a href = "test2.php"> Тест 2</a></li><br/>
         <li><a href = "test3.php"> Тест 3</a></li><br/>
       </ul>
     </div>
  </body>
</html>
