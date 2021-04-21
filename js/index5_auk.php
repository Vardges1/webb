<?php session_start();ini_set("display_errors", 0);?><!DOCTYPE html>
<html>
<head>
  
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
 <style>

body{ background-image: url(/led.jpg);}
.dance24{
  float:left;
  margin-top:2%;
 margin-left:2%;
  margin-right:2%;
  margin-bottom:8px;
  position:relative;
}


table, tr, td, th
{
    border: 1px solid black;
    border-collapse:collapse;
}
tr.header
{
    cursor:pointer;
}
td.header
{
    cursor:pointer;
}

</style>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
</head>
<body>

<h2> Доброго времени суток,здесь вы можете добавить заявку на лот</h2>
<form action="?ti" method="post" enctype="multipart/form-data" style="margin-top:3%;
margin-left:40%;
margin-right:40%;">
      
    <table>

<tr>
</tr>

<tr>
<td>Время до которого идет аукцион</td>
<td>Введите торги на повышение или нет (введите "да" или "нет")</td></tr>
<tr>
<td><input type="hidden" name="t" value="<?php print_r($_GET['id']);?>">

 <input type='datetime-local' name="calendar"></td>
 <td><input type='text' name="da"></td>
</tr>
</table>
<button>Изменить</button>

      </form>


<?php

if (isset($_GET['ti'])) 

{ 
    $new_id = $_POST['t'];   
    $new_price = $_POST['calendar'];
    $da = $_POST['da']; 
    $user_id = $_SESSION['id'];

 $mysqli = @new mysqli('localhost', 'id15267461_root', '^EtgwnE9yjma%s}L', 'id15267461_base3');
     $result_set13 = $mysqli->query('UPDATE `zay` SET timee="'.$new_price.'" WHERE id_zay="'.$new_id.'"');
     $result_set13 = $mysqli->query('UPDATE `zay` SET adm=1 WHERE id_zay="'.$new_id.'"');
      $result_set13 = $mysqli->query('UPDATE `zay` SET Pub=1 WHERE id_zay="'.$new_id.'"');
        $result_set13 = $mysqli->query('UPDATE `zay` SET pok=0 WHERE id_zay="'.$new_id.'"');
     if($da=="да")
     {
  $result_set13 = $mysqli->query('UPDATE `zay` SET Raise=1 WHERE id_zay="'.$new_id.'"');
     
     }
     else{$result_set13 = $mysqli->query('UPDATE `zay` SET Raise=2 WHERE id_zay="'.$new_id.'"');
    }
?><script>document.location.href="index_auk.php"</script> <?php

 }

?>



<div><a href="index_auk.php"><h2>Выход</h2></a></div>

</body>
</html>