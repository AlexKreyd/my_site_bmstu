<?php
session_start();
if (!isset($_SESSION['login'])){
  header('Location:redirect.php');
}
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
    <div class ="test">
      <h1> Тест 1</h1>
      <form method = "POST" action=""> <ol>
        <li>В книге Елены Молоховец «Подарок молодым хозяйкам» имеется рецепт пирога с черносливом.
          Для пирога на 10 человек следует взять 1/10 фунта чернослива.
          Сколько граммов чернослива следует взять для пирога, рассчитанного на 3 человек? Считайте, что 1 фунт равен 0,4 кг.
          <input type="text" name="task1" placeholder="Ответ" required></li>

        <li>В ходе химической реакции количество исходного вещества (реагента), которое еще не вступило в реакцию, со временем постепенно уменьшается.
          На рисунке эта зависимость представлена графиком.
          На оси абсцисс откладывается время в минутах, прошедшее с момента начала реакции, на оси ординат – масса оставшегося реагента, который еще не вступил в реакцию (в граммах).
          Определите по графику, сколько граммов реагента вступило в реакцию за три минуты?
        <input type="text" name="task2" placeholder="Ответ" required>  <img src ="test1_images/263865.svg"> </li>

        <li>На клетчатой бумаге с размером клетки 1 1 изображён угол. Найдите тангенс этого угла.
        <input type="text" name="task3" placeholder="Ответ" required>
      <img src ="test1_images/27456y.svg"></li>

      <li>В кармане у Пети было 2 монеты по 5 рублей и 4 монеты по 10 рублей. Петя, не глядя, переложил какие-то 3 монеты в другой карман.
        Найдите вероятность того, что пятирублевые монеты лежат теперь в разных карманах.
        <input type="text" name="task4" placeholder="Ответ" required>
      </li>

      <li>Решите уравнение <img src ="test1_images/f27f92949c41a57f69db3f005c118a3b.svg">
      <input type="text" name="task5" placeholder="Ответ" required></li>

      <li>В треугольнике АВС угол С равен 90°, СН — высота, AB = 13, tgA = 5. Найдите ВН.
        <input type="text" name="task6" placeholder="Ответ" required>
      <img src ="test1_images/27265.svg"></li>

      <li>На рисунке изображен график производной функции , определенной на интервале
        Найдите промежутки возрастания функции
        В ответе укажите сумму целых точек, входящих в эти промежутки.
        <input type="text" name="task7" placeholder="Ответ" required>
      <img src ="test1_images/get_file.png" height = "20%" width ="20%"></li>

      <li>Одна из граней прямоугольного параллелепипеда — квадрат.
        Диагональ параллелепипеда равна  и образует с плоскостью этой грани угол 45°.
        Найдите объем параллелепипеда.<input type="text" name="task8" placeholder="Ответ" required>
      <img src ="test1_images/27103.svg"> </li>

      <li>Найдите <img src ="test1_images/87eab94ef91f8443eb55630c695c152f.svg"> если
      <img src ="test1_images/1613b55cb724b1f652955a6218f8868a.svg"> при |x| != 2
      <input type="text" name="task9" placeholder="Ответ" required> </li>

      <li>Амплитуда колебаний маятника зависит от частоты вынуждающей силы, определяемой по формуле <img src ="test1_images/730fedd5f249ca0a0682208c83a1a052.svg">
      где w – частота вынуждающей силы, A0 - постоянный параметр, Wp=-360 c^-1.– резонансная частота.
      Найдите максимальную частоту, меньшую резонансной,для которой амплитуда колебаний превосходит величину не более чем на 12,5%  Ответ выразите в c^-1.
    <input type="text" name="task10" placeholder="Ответ" required></li>

    <li>В понедельник акции компании подорожали на некоторое количество процентов, а во вторник подешевели на то же самое количество процентов.
      В результате они стали стоить на 4% дешевле, чем при открытии торгов в понедельник.
      На сколько процентов подорожали акции компании в понедельник?
      <input type="text" name="task11" placeholder="Ответ" required>
    </li>

    <li>Найдите точку максимума функции <img src ="test1_images/d77c0ecdd6c9bae45aa516130f8142a0.svg">
    , принадлежащую периоду (0, p/2).<input type="text" name="task12" placeholder="Ответ" required></li>
    </ol>
    <input type ="submit" value='Отправить'>
    </form>
    <br/><br/>
    <form method ='POST' action =''>
        Введите комментарий:
        <textarea name='text_comment' cols='40' rows='2'></textarea>&nbsp;&nbsp;
        <input type='hidden' name='page_id' value= 1 >
        <input type='submit' value='Отправить'>
    </form>
    <br/><br/>
        <form action='' method ='post'>
          Введите оценку:
          <input type='hidden' name='page_id' value= 1>
          <select name =' rate' required>
            <option value=1> 1 </option>
            <option value=2> 2 </option>
            <option value=3> 3 </option>
            <option value=4> 4 </option>
            <option value=5> 5 </option>
          </select>
          <input type = 'submit' value ='Отправить'>
        </form>
        <br/>
        <h3> Средний рейтинг этого теста:
        <?php
         $connection = mysqli_connect('localhost', 'root', '', 'my_site');
         $query = "SELECT rate FROM rating WHERE page_id=1";
         $result = mysqli_query($connection, $query);
         $n=0;
         $sredn=0;
         while ($row =mysqli_fetch_assoc($result)){
           $sredn = $sredn + $row['rate'];
           $n++;
         }
         $sredn= $sredn/$n;
         echo   $sredn. '</h3><br/>';
         ?>
        <h3> Комментарии: </h3>
      <?php
        $connection = mysqli_connect('localhost', 'root', '', 'my_site');
        $query ="SELECT login, text_comment FROM comments WHERE page_id =1";
        $result =mysqli_query($connection, $query);
        while ($row =mysqli_fetch_assoc($result)){
          echo $row['login']. ': '. $row['text_comment'].'<br/><br/>';
        }
       ?>
    </div>
  </body>
</html>

<?php
  $connection = mysqli_connect('localhost', 'root', '', 'my_site');
  if(!empty($_POST['task1'])){
    echo $_POST[0];
    $right = 0;
    $query = "SELECT answer FROM test1";
    $result = mysqli_query($connection, $query);
    $i = 1;
    while($row = mysqli_fetch_assoc($result)){
      if ($_POST["task$i"] == $row["answer"]){
        $right++;
      }
      $i++;
    }
    echo "<h3> Вы выполнили ".$right." / 12 номеров правильно.</h3>";
  }

  if(isset($_POST['text_comment'])){
    $page_id = $_POST['page_id'];
    $login = $_SESSION['login'];
    $text_comment = $_POST['text_comment'];
    $query = "INSERT INTO comments (page_id, login, text_comment)
    VALUES($page_id, '$login','$text_comment')";
    $result = mysqli_query($connection, $query);
    if ($result){
      echo "Комментарий добавлен успешно";
    }
    else{
      echo "Ошибка";
    }
  }

  if(isset($_POST['rate'])){
    $page_id = $_POST['page_id'];
    $login = $_SESSION['login'];
    $rate = $_POST['rate'];
    $login_in_table = mysqli_query($connection, "SELECT * FROM rating WHERE login = '$login' and page_id=$page_id");
    $num =mysqli_num_rows($login_in_table);
    if ($num != 0){
      $login_exist = True;
    }
    if(!$login_exist){
    $result = mysqli_query($connection, "INSERT INTO rating (page_id, login, rate)
    VALUES ('$page_id', '$login', '$rate' )");
    if ($result){
      echo "Оценка поставлена";
    }
    else{
      echo "Ошибка";
    }
  }

  else{
    $result = mysqli_query($connection, "UPDATE rating SET rate=$rate WHERE login = '$login' and page_id=$page_id");
    if ($result){
      echo "Ваша оценка поменялась";
    }
    else{
      echo "Ошибка";

  }
}
}
 ?>
