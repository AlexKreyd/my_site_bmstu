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
       <h1>Задание 7. Производная.</h1>
       <p>Для решения данной группы задач необходимо знать:</p>
       <ul>
        <li> таблицу производных и правила дифференцирования</li>
        <li> геометрический смысл производной</li>
        <li> свойства производной для исследования функций</li>
        <li> физический (механический) смысл производной</li>
        </ul>
        <h3> Геометрический смысл производной</h3>
        <p>Из курса алгебры известно, что уравнение прямой имеет вид .
ЗАПОМНИТЬ! Производная функции в точке есть угловой коэффициент
касательной к графику этой функции в этой точке. В этом и состоит
геометрический смысл производной.</p>
<p>То есть производная функции в точке равна угловому коэффициенту
касательной.</p>
<h3> Какие выводы мы можем сделать, когда дан график функции?</h3>
<ol>
<li>Можем определить интервалы возрастания (убывания) функции, знак
производной на этом интервале.</li>
<li> Можем определить точки максимума (минимума) функции (если задан
масштаб), их количество.</li>
<li>Можем определить количество экстремумов.</li>
<li>Можем определить количество точек, в которых производная равна нулю.</li>
<li>Количество касательных к графику функции, параллельных оси ox</li>
<li>Количество касательных, параллельных какой-либо данной касательной.</li>
<li>Значение производной функции в некоторой точке, если даны две точки, через
которые проходит касательная.</li>
</ol>
<h3>Какие выводы мы можем сделать, когда дан график производной функции?</h3>
<ol>
<li>Можем определить интервалы, на которых функция возрастает (убывает).</li>
<li>Точки минимума (максимума) функции.</li>
<li>Количество точек минимума (максимума) функции.</li>
<li>Количество экстремумов функции.</li>
<li>Можем определить точки, в которых функция приобретает максимальное
(минимальное) значение на заданном интервале.</li>
</ol>
     </div>
  </body>
</html>
