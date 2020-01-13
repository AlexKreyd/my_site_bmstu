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
       <h1>Задание 8. Стереометрия.</h1>
       <p>Для решения задач по стереометрии необходимо знать формулы площадей фигур и
формулы объемов тел. Сложных задач нет, все они решаются в 1-2 действия (редко в
три действия). Важно увидеть путь решения и какую формулу необходимо
применить.</p>
<h1>Необходимая теория:</h1>
<ol>
<li>теорема Пифагора</li>
<li>теорема косинусов</li>
<li>определения синуса, косинуса, тангенса и котангенса в прямоугольном</li>
треугольнике</li>
<li>формулы площадей фигур</li>
<li>формулы объѐмов тел</li>
<li>отношение площадей подобных фигур</li>
<li>отношение объѐмов подобных тел</li>
</ol>
     </div>
  </body>
</html>
