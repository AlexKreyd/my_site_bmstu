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
        <li>Уста­нов­ка двух счётчи­ков воды (хо­лод­ной и го­ря­чей) стоит 3300 руб­лей. До уста­нов­ки счётчи­ков за воду пла­ти­ли 800 руб­лей еже­ме­сяч­но.
           После уста­нов­ки счётчи­ков еже­ме­сяч­ная опла­та воды стала со­став­лять 300 руб­лей.
          Через какое наи­мень­шее ко­ли­че­ство ме­ся­цев эко­но­мия по опла­те воды пре­вы­сит за­тра­ты на уста­нов­ку счётчи­ков, если та­ри­фы на воду не из­ме­нят­ся?
          <input type="text" name="task1" placeholder="Ответ" required></li>

        <li>На гра­фи­ке изоб­ра­же­на за­ви­си­мость кру­тя­ще­го мо­мен­та дви­га­те­ля от числа его обо­ро­тов в ми­ну­ту.
          На оси абс­цисс от­кла­ды­ва­ет­ся число обо­ро­тов в ми­ну­ту, на оси ор­ди­нат — кру­тя­щий мо­мент в Н · м.
          Ско­рость ав­то­мо­би­ля (в км/ч) при­бли­жен­но вы­ра­жа­ет­ся фор­му­лой v = 0,036n, где n — число обо­ро­тов дви­га­те­ля в ми­ну­ту.
           С какой наи­мень­шей ско­ро­стью дол­жен дви­гать­ся ав­то­мо­биль, чтобы кру­тя­щий мо­мент был не мень­ше 120 Н · м? Ответ дайте в ки­ло­мет­рах в час.
        <input type="text" name="task2" placeholder="Ответ" required>  <img src ="test3_images/26863.svg"> </li>

        <li>Най­ди­те вы­со­ту тре­уголь­ни­ка ABC, опу­щен­ную на сто­ро­ну BC, если сто­ро­ны квад­рат­ных кле­ток равны sqrt(5).
        <input type="text" name="task3" placeholder="Ответ" required>
      <img src ="test3_images/27804y.svg"></li>

      <li>тобы по­сту­пить в ин­сти­тут на спе­ци­аль­ность «Линг­ви­сти­ка», аби­ту­ри­ент дол­жен на­брать на ЕГЭ не менее 70 бал­лов по каж­до­му из трёх пред­ме­тов — ма­те­ма­ти­ка, рус­ский язык и ино­стран­ный язык.
        Чтобы по­сту­пить на спе­ци­аль­ность «Ком­мер­ция», нужно на­брать не менее 70 бал­лов по каж­до­му из трёх пред­ме­тов — ма­те­ма­ти­ка, рус­ский язык и об­ще­ст­во­зна­ние.
        Ве­ро­ят­ность того, что аби­ту­ри­ент З. по­лу­чит не менее 70 бал­лов по ма­те­ма­ти­ке, равна 0,6, по рус­ско­му языку — 0,8, по ино­стран­но­му языку — 0,7 и по об­ще­ст­во­зна­нию — 0,5.
        Най­ди­те ве­ро­ят­ность того, что З. смо­жет по­сту­пить хотя бы на одну из двух упо­мя­ну­тых спе­ци­аль­но­стей.
        <input type="text" name="task4" placeholder="Ответ" required>
      </li>

      <li>Решите уравнение <img src ="test3_images/0c5ca324a0bc4c7d6927f143f554a1cb.svg"> В ответе напишите наименьший положительный корень.
      <input type="text" name="task5" placeholder="Ответ" required></li>

      <li>В тре­уголь­ни­ке ABC про­ве­де­на бис­сек­три­са AD и AB = AD = CD. Най­ди­те мень­ший угол тре­уголь­ни­ка ABC. Ответ дайте в гра­ду­сах.
        <input type="text" name="task6" placeholder="Ответ" required>
      <img src ="test3_images/27768.svg"></li>

      <li>Ма­те­ри­аль­ная точка M на­чи­на­ет дви­же­ние из точки A и дви­жет­ся по пря­мой на про­тя­же­нии 12 се­кунд.
         Гра­фик по­ка­зы­ва­ет, как ме­ня­лось рас­сто­я­ние от точки A до точки M со вре­ме­нем.
         На оси абс­цисс от­кла­ды­ва­ет­ся время t в се­кун­дах, на оси ор­ди­нат — рас­сто­я­ние s.
         Опре­де­ли­те, сколь­ко раз за время дви­же­ния ско­рость точки M об­ра­ща­лась в ноль (на­ча­ло и конец дви­же­ния не учи­ты­вай­те).
         <img src ="test3_images/get_file.png">
        <input type="text" name="task7" placeholder="Ответ" required>
      </li>

      <li>Гра­нью па­рал­ле­ле­пи­пе­да яв­ля­ет­ся ромб со сто­ро­ной 1 и ост­рым углом 60°.
        Одно из ребер па­рал­ле­ле­пи­пе­да со­став­ля­ет с этой гра­нью угол в 60° и равно 2.
        Най­ди­те объем па­рал­ле­ле­пи­пе­да.
        <input type="text" name="task8" placeholder="Ответ" required>
        <img src ="test3_images/27104.svg">
      </li>

      <li>Най­ди­те зна­че­ние вы­ра­же­ния <img src ="test3_images/86baae03ee0ba64c454ffa882981403b.svg"> при x <= 2.
      <input type="text" name="task9" placeholder="Ответ" required>
    </li>

      <li>Уста­нов­ка для де­мон­стра­ции адиа­ба­ти­че­ско­го сжа­тия пред­став­ля­ет собой сосуд с порш­нем, резко сжи­ма­ю­щим газ. При этом объeм и дав­ле­ние свя­за­ны со­от­но­ше­ни­ем
        <img src ="test3_images/a16ffffd7a5bf24d2b50e8c3ef529df1.svg">, дав­ле­ние в газе, V – объeм газа в лит­рах. Из­на­чаль­но объeм газа равен 1,6 л, а его дав­ле­ние равно одной ат­мо­сфе­ре.
         В со­от­вет­ствии с тех­ни­че­ски­ми ха­рак­те­ри­сти­ка­ми пор­шень на­со­са вы­дер­жи­ва­ет дав­ле­ние не более 128 ат­мо­сфер.
         Опре­де­ли­те, до ка­ко­го ми­ни­маль­но­го объeма можно сжать газ. Ответ вы­ра­зи­те в лит­рах.
    <input type="text" name="task10" placeholder="Ответ" required>
    </li>

    <li>Рас­сто­я­ние между го­ро­да­ми A и B равно 150 км.
       Из го­ро­да A в город B вы­ехал ав­то­мо­биль, а через 30 минут сле­дом за ним со ско­ро­стью 90 км/ч вы­ехал мо­то­цик­лист, до­гнал ав­то­мо­биль в го­ро­де C и по­вер­нул об­рат­но.
       Когда он вер­нул­ся в A, ав­то­мо­биль при­был в B Най­ди­те рас­сто­я­ние от  до  Ответ дайте в ки­ло­мет­рах.
      <input type="text" name="task11" placeholder="Ответ" required>
    </li>

    <li>Най­ди­те точку мак­си­му­ма функ­ции <img src ="test3_images/a3bc78a416595bb75c6bd46be87bbc3f.svg">
      <input type="text" name="task12" placeholder="Ответ" required>
    </li>

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
        <input type='hidden' name='page_id' value= 3 >
        <input type='submit' value='Отправить'>
    </form>
    <br/><br/>
    <form action='' method ='post'>
      Введите оценку:
      <input type='hidden' name='page_id' value= 3>
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
     $query = "SELECT rate FROM rating WHERE page_id =3";
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
    $query ="SELECT login, text_comment FROM comments WHERE page_id =3";
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
    $query = "SELECT answer FROM test3";
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
