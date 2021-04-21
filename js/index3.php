<?php session_start();ini_set("display_errors", 0);?>
<!DOCTYPE html>
<html>
<head> 
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
 <style>
table, tr, td, th
{
    border: 1px solid black;
    border-collapse:collapse;
}

body{ background-image: url(/led.jpg);}
</style>
  

<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
</head>
<body>
 <?php
 $mysqli = @new mysqli('localhost', 'id15267461_root', '^EtgwnE9yjma%s}L', 'id15267461_base3');
  if (mysqli_connect_errno()) {
    echo "Подключение невозможно: ".mysqli_connect_error();
  }
  $email = $_SESSION['name'];

          $date = date('Y-m-d H:i:s');


          $result_set19 = $mysqli->query('SELECT * FROM zay, user_zay WHERE user_zay.id_zay=zay.id_zay AND user_zay.cost=zay.High AND timee<"'.$date.'"');

?>

 <div style="    width: 60%;
    margin-left: 20%;
    border: 1px solid #FFAF35;
    border-radius: 20px;
    padding: 15px 25px;
    margin-bottom: 30px;
    line-height: 1.7;">
    <div class="dws-form">
       
       <p>Лоты:</p> 
       <table border="1">
<tr> 
<td> <?php
?> <p> Название лота </p> </td>
<td> <p> Стартовая цена </p> </td>
<td> <p> Цена по которой был куплен </p> </td>
<td> <p> Покупатель </p> </td>
<tr>
 <?php
 while($row19 = mysqli_fetch_array($result_set19)) {

          ?><td> <p><?php print_r(" ".$row19['Name']);?>
            
          </p></td><td>   <p><?php print_r(" ".$row19['Start']);?>
            
          </p></td> <td> <p><?php print_r(" ".$row19['High']);?>
            
          </p><td>  
<p><?php 
$result_set43 = $mysqli->query('SELECT * FROM user WHERE id="'.$row19['id'].'"');
$row43 = mysqli_fetch_array($result_set43);
print_r(" ".$row43['FIO']);?>
            
          </p></td></tr>
           <?php
         } ?> 
     </table>
<div><a href="index.php"><h2>Вернуться к списку заявок</h2></a></div>
<div><a href="index.php?logout"><h2>Выход</h2></a></div>
</body>
</html>