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
     <div class = "content">
       <h1> Задание 9. Преобразование выражений.</h1>
       <p>Что необходимо знать для решения заданий? Это:</p>
       <ol>
<li>Формулы сокращенного умножения</li>
<li>Свойства показателей степени</li>
<li>Свойства корней</li>
<li> Основное логарифмическое тождество и свойства логарифмов</li>
<li>Основное тригонометрическое тождество и следствия из него; формулы
тангенса, котангенса; синуса и косинуса суммы и разности двух аргументов,
формулы синуса и косинуса двойного аргумента</li>
<li>Знаки тригонометрических функций</li>
<li>Четность и нечетность тригонометрических функций</li>
<li>Периодичность тригонометрических функций</li>
<li> Значения тригонометрических функций</li>
<li>Формулы приведения</li>
</ol>
<p>Необходимо уметь оперировать действиями с дробями (сокращение дроби,
нахождение общего знаменателя) и переводить градусную меру угла в радианную и
наоборот.</p>

     </div>
  </body>
</html>
