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
      <h1> Тест 2</h1>
      <form method = "POST" action=""> <ol>
        <li>Од­но­го ру­ло­на обоев хва­та­ет для оклей­ки по­ло­сы от пола до по­тол­ка ши­ри­ной 1,6 м.
          Сколь­ко ру­ло­нов обоев нужно ку­пить для оклей­ки пря­мо­уголь­ной ком­на­ты раз­ме­ра­ми 2,3 м на 4,2 м?
          <input type="text" name="task1" placeholder="Ответ" required></li>

        <li>Ма­те­ри­аль­ная точка дви­жет­ся от на­чаль­но­го до ко­неч­но­го по­ло­же­ния. На ри­сун­ке изоб­ражён гра­фик её дви­же­ния.
           На оси абс­цисс от­кла­ды­ва­ет­ся время в се­кун­дах, на оси ор­ди­нат — рас­сто­я­ние от на­чаль­но­го по­ло­же­ния точки (в мет­рах).
           Най­ди­те сред­нюю ско­рость дви­же­ния точки. Ответ дайте в мет­рах в се­кун­ду.
        <input type="text" name="task2" placeholder="Ответ" required>  <img src ="test2_images/512488.svg"> </li>

        <li>Най­ди­те ра­ди­ус окруж­но­сти, впи­сан­ной в изоб­ра­жен­ный на ри­сун­ке тре­уголь­ник ABC, счи­тая сто­ро­ны квад­рат­ных кле­ток рав­ны­ми 1.
        <input type="text" name="task3" placeholder="Ответ" required>
      <img src ="test2_images/504842.svg"></li>

      <li>Агрофирма закупает куриные яйца в двух домашних хозяйствах. 40% яиц из первого хозяйства — яйца высшей категории, а из второго хозяйства — 20% яиц высшей категории.
        Всего высшую категорию получает 35% яиц.
        Найдите вероятность того, что яйцо, купленное у этой агрофирмы, окажется из первого хозяйства.
        <input type="text" name="task4" placeholder="Ответ" required>
      </li>

      <li>Решите уравнение <img src ="test2_images/31dbace41c57795f142f55ebf139090e.svg">
      <input type="text" name="task5" placeholder="Ответ" required></li>

      <li>К окруж­но­сти, впи­сан­ной в тре­уголь­ник ABC, про­ве­де­ны три ка­са­тель­ные.
        Пе­ри­мет­ры от­се­чен­ных тре­уголь­ни­ков равны 6, 8, 10. Най­ди­те пе­ри­метр дан­но­го тре­уголь­ни­ка.
        <input type="text" name="task6" placeholder="Ответ" required>
      <img src ="test2_images/треугольник41.svg"></li>

      <li>Пря­мая <img src="test2_images/2259560b226a72ef9b6aead9686f770f.svg">
        яв­ля­ет­ся ка­са­тель­ной к гра­фи­ку функ­ции <img src="test2_images/32c2dd53d5b0f95bd59d7cf1d9c4246a.svg">.
        Най­ди­те b, учи­ты­вая, что абс­цис­са точки ка­са­ния боль­ше 0.
        <input type="text" name="task7" placeholder="Ответ" required>
      </li>

      <li>Объем куба равен 24*sqrt(3). Най­ди­те его диа­го­наль.<input type="text" name="task8" placeholder="Ответ" required>
      <img src ="test2_images/27098.svg"> </li>

      <li>Найдите <img src ="test2_images/8ec9e1abc9d9b337f0616370045079c65.svg"> если
      <img src ="test2_images/87e29f942e47042017bcc697522e2c2d.svg">
      <input type="text" name="task9" placeholder="Ответ" required> </li>

      <li>Дат­чик скон­стру­и­ро­ван таким об­ра­зом, что его ан­тен­на ловит ра­дио­сиг­нал, ко­то­рый затем пре­об­ра­зу­ет­ся в элек­три­че­ский сиг­нал, из­ме­ня­ю­щий­ся со вре­ме­нем по за­ко­ну
        <img src ="test2_images/c085ef0ec394411325fd95b3fe1e7bf8.svg">, где t - время в се­кун­дах, ам­пли­ту­да U0 = 2 В, ча­сто­та w = 120 град/c, фаза ф = -30 град.
         Дат­чик на­стро­ен так, что если на­пря­же­ние в нeм не ниже чем  В, за­го­ра­ет­ся лам­поч­ка. Какую часть вре­ме­ни (в про­цен­тах) на про­тя­же­нии пер­вой се­кун­ды после на­ча­ла ра­бо­ты лам­поч­ка будет го­реть?
    <input type="text" name="task10" placeholder="Ответ" required></li>

    <li>Семья со­сто­ит из мужа, жены и их до­че­ри сту­дент­ки. Если бы зар­пла­та мужа уве­ли­чи­лась вдвое, общий доход семьи вырос бы на 67%.
      Если бы сти­пен­дия до­че­ри умень­ши­лась втрое, общий доход семьи со­кра­тил­ся бы на 4%.
      Сколь­ко про­цен­тов от об­ще­го до­хо­да семьи со­став­ля­ет зар­пла­та жены?
      <input type="text" name="task11" placeholder="Ответ" required>
    </li>

    <li>Най­ди­те наи­боль­шее зна­че­ние функ­ции <img src ="test2_images/c1ebb3dfddeee4b7033a123495605425.svg">
    на отрезке [-19; -1].<input type="text" name="task12" placeholder="Ответ" required></li>
    </ol>
    <br/>
    <input type ="submit" value='Отправить'>
    <br/>
    </form>
    </div>
    <br/><br/>
    <form method ='POST' action =''>
        Введите комментарий:
        <textarea name='text_comment' cols='40' rows='2'></textarea>&nbsp;&nbsp;
        <input type='hidden' name='page_id' value= 2 >
        <input type='submit' value='Отправить'>
    </form>
    <br/><br/>
    <form action='' method ='post'>
      Введите оценку:
      <input type='hidden' name='page_id' value= 2>
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
     $query = "SELECT rate FROM rating WHERE page_id =2";
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
    $query ="SELECT login, text_comment FROM comments WHERE page_id =2";
    $result =mysqli_query($connection, $query);
    while ($row =mysqli_fetch_assoc($result)){
      echo $row['login']. ': '. $row['text_comment'].'<br/><br/>';
    }
   ?>
  </body>
</html>

<?php
  $connection = mysqli_connect('localhost', 'root', '', 'my_site');
  if(!empty($_POST['task1'])){
    echo $_POST[0];
    $right = 0;
    $query = "SELECT answer FROM test2";
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
    $login_in_table = mysqli_query($connection, "SELECT * FROM rating WHERE login = '$login'and page_id=$page_id");
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
