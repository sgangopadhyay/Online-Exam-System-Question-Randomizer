<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>OES</title>
    <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
    <header>Online Exam System giving Random Questions Everytime</header>
    <div id="frm1">
    <form action="#" method="post">
    <?php
    require_once('database.php');
    $sql = "SELECT * FROM oes ORDER BY rand()";
    $result = mysqli_query($connection,$sql);
    $sl_no=0;
    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
      $sl_no = $sl_no+1;
      $question=$row['question'];
      $ans1=$row['ans1'];
      $ans2=$row['ans2'];
      $ans3=$row['ans3'];
      $ans4=$row['ans4'];
      echo "<div id='q_blk'>";
      echo "<div>".$sl_no."</div><br>";
      echo "<div id='question'>".$question."</div><br>";
      echo "<input type='radio' name='question' value=$ans1>".$ans1."<br>";
      echo "<input type='radio' name='question' value=$ans2>".$ans2."<br>";
      echo "<input type='radio' name='question' value=$ans3>".$ans3."<br>";
      echo "<input type='radio' name='question' value=$ans4>".$ans4."<br>";
      echo "</div>";
    }
    ?>
  </form>
  </body>
</html>
