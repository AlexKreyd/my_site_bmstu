<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="ex_style.css">
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
    <div class="content"><h1>Теория по заданиям:</h1>
    <ul>
      <li><a href="ex1.php"> Задание 1. Проценты.</a> </li><br/>
      <li><a href="ex2.php"> Задание 2. Чтение графиков.  </a></li><br/>
      <li><a href="ex3.php"> Задание 3. Планиметрия. </a></li><br/>
      <li><a href="ex4.php"> Задание 4. Теория вероятностей. </a></li><br/>
      <li><a href="ex5.php"> Задание 5. Уравнения.</a></li><br/>
      <li><a href="ex6.php"> Задание 6. Планиметрия. </a></li><br/>
      <li><a href="ex7.php"> Задание 7. Производная.</a></li><br/>
      <li><a href="ex8.php"> Задание 8. Стереометрия.</a></li><br/>
      <li><a href="ex9.php"> Задание 9. Преобразование выражений.</a></li><br/>
      <li><a href="ex10.php"> Задание 10. Задачи с физическим содержанием.</a></li><br/>
      <li><a href="ex11.php"> Задание 11. Движение, работа, смеси, прогрессия.</a></li><br/>
      <li><a href="ex12.php"> Задание 12. Максимум(минимум) функции.</a></li><br/>
    </ul>
</div>
  </body>
</html>
