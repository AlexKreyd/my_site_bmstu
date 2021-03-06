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
       <h1>Задание 11. Движение, работа, смеси, прогрессия.</h1>
       <h3> Задачи на движение</h3>
       <p>Здесь два правила:</p>
       <ol>
<li>Эти задачи решаются по формуле: S= v*t то есть расстояние скорость время.</li>
<li>В качестве переменной x удобнее всего (в большинстве случаев) выбирать
скорость. Тогда задача точно решится! </li></ol>
<p>На ЕГЭ вам может также встретиться задача о нахождении средней скорости.
Запомним, что средняя скорость НЕ РАВНА среднему арифметическому скоростей.</p>


<h3> Задачи на работу </h3>
<p>Задачи на работу также решаются с помощью одной-единственной формулы: A = p * t</p>
<p>Здесь A — работа, t — время, а величина p, которая по смыслу является скоростью
работы, носит специальное название — производительность. Она показывает,
сколько работы сделано в единицу времени. Например, Вася красит забор.
Количество метров, которые он красит за час — это и есть его производительность
Количество метров, которые он красит за час — это и есть его производительность.</p>
<p>Правила решения задач на работу.</p>
  <ol>
<li>A = p * t, то есть работа = производительность время. Из этой формулы легко
найти t или p.</li>
<li>Если объем работы не важен в задаче и нет никаких данных, позволяющих его
найти — работа принимается за единицу. Построен дом (один), покрашен
забор (один), наполнен резервуар. А вот если речь идет о количестве кирпичей,
количестве деталей, литрах воды — работа как раз и равна этому количеству.</li>
<li>Если трудятся двое рабочих (два экскаватора, два мастера, Даша и Маша...) или
трое (не важно) — их производительности складываются. Очень логичное
правило.</li>
<li>В качестве переменной x удобно взять именно производительность. Так же,
как в задах на движение мы за x принимаем скорость.</li></ol>
<p>Вы убедитесь, что задачи на работу и движение очень схожи.</p>

<h3> Задачи на прогрессии </h3>
<p>Текстовые задачи на прогрессии, которые встречаются в ЕГЭ, просты. Нужно
запомнить несколько формул (шесть - они выделены) и главное – понять суть: что
такое прогрессия. Итак:</p>
<p>Арифметическая прогрессия - числовая последовательность определяемая
условиями:</p><ol>
<li>a(n) = a</li>
<li>a(n+1) = a(n) + d  n = 1, 2, 3, 4(d - разность арифметической прогрессии).</li></ol>
<p>Каждый последующий член арифметической прогрессии равен сумме
предыдущего и числа d.</p>
<p>Формулы суммы n первых членов: S(n) = (a(1) + a(n)) * n * 1/2</p>
<p>Геометрическая прогрессия - числовая последовательность определяемая
условиями:</p><ol>
<li>b(n) = b (b!=0)</li>
<li>b(n+1) = b(n) * q n = 1, 2, 3... (q - знаменатель геометрической прогрессии).</li></ol>
<p>Каждый последующий член геометрической прогрессии равен произведению
предыдущего и числа q.</ol>
<p> Формулы суммы n первых членов q!=0: S(n) = ( b(n) * q - b(1) ) / (q - 1)</p>


     </div>
  </body>
</html>
