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
       <h1>Задание 10. Задачи с физическим содержанием.</h1>
       <p>Можно сказать что это задачи по физике, а не по математике, но все
необходимые формулы и величины даны в условии. Задачи сводятся к решению
линейного или квадратного уравнения, либо линейного или квадратного
неравенства. Поэтому необходимо уметь решать такие уравнения и неравенства, и
определять ответ (есть задачи, в которых нужно выбрать одно из двух решений,
имеются и другие нюансы, мы их рассмотрим). Ответ в любом случае, должен
получиться в виде целого числа или конечной десятичной дроби.
На что необходимо обратить внимание:</p>
<ul>
<li>если в вопросе прозвучало «определить наибольшее значение», «определить
наименьшее значение», то задача в большинстве случаев решается через
составление неравенства.</li>
<li>правильно определяйте знак при составлении неравенства. Например: b не
менее 21 записывается как b≥21 (b равно или больше 21).</li>
<li>если в вопросе задачи прозвучало «сколько», то составляется уравнение.
<li>не забывайте перевести единицы измерения, если это необходимо (метры с
сантиметры и пр.)</li>
<li>не упускайте из виду, в каких единицах измерения требуется записать ответ
(например, решив задачу, вы получили 0,5 часа, в условии сказано записать
ответ в минутах, получается 30 минут; если запишите 0,5 – это ошибка и
потерянный бал, хотя задача решена, верно).</li>
     </div>
  </body>
</html>
