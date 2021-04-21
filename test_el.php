<?php session_start();ini_set("display_errors", 0);?><!DOCTYPE html>
<html>
<head>
  
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
 <style>
.leftimg {
    float:right;
    width: 30%; /* Выравнивание по левому краю */
    margin: 17px 17px 17px 17px; /* Отступы вокруг картинки */
   }

.dance24{
  float:left;
  margin-top:2%;
 margin-left:2%;
  margin-right:2%;
  margin-bottom:8px;
  position:relative;
}
p{color:white;}
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
label{color: white;}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
</head>
<body>


   <div style="    width: 60%;
    margin-left: 20%;
    border: 1px solid #FFAF35;
    border-radius: 20px;
    padding: 15px 25px;
    margin-bottom: 30px;
    line-height: 1.7;
    margin-top: 10%;
    ">
    <div class="dws-form">
       <h2 style="color:white;text-align: center;"> Тест по Электричеству!</h2> </div>


   <form>
  <p>1. Кем введен термин электричество?<br>
    <label>
      А<input type="radio" name="myname" value="0">
     Теслой во время его экспериментов, в начаое 20 века    </label>
    <br>
    <label>
      Б<input type="radio" name="myname" value="1">
     Термин введён английским естествоиспытателем Уильямом Гильбертом в его сочинении «О магните, магнитных телах и о большом магните — Земле»</label>
    <br>
    <label>
      В<input type="radio" name="myname" value="0">
      Ньютоном во время его исследований в 1727 году</label>
    <br>

  </p>

 <p>2. Кто рассматривал электричество как «нематериальную жидкость»?<br>
    <label>
      А<input type="radio" name="myname1" value="1">
       Бенджамин Франклин   </label>
    <br>
    <label>
      Б<input type="radio" name="myname1" value="0">
     Дмитрий Менделеев  </label>
    <br>
    <label>
      В<input type="radio" name="myname1" value="0">
     Исаак Ньютон</label>
    <br>

  </p>

<p>3. Основоположник учения об электромагнитном поле<br>
    <label>
      А<input type="radio" name="myname2" value="1">
       </label><img width="20%;" src="img/far.jpg">
    
    <label>
      Б<input type="radio" name="myname2" value="0">
   </label> <img width="20%;" src="img/2121.jpg">
    
    <label>
      В<input type="radio" name="myname2" value="0">
      </label><img width="20%;" src="img/65.jpg">
    <br>

  </p>

<p>4. В некоторых странах, например — в ..., были даже приняты законодательные нормы, ограничивающие или полностью запрещающие использование электрических средств отопления в новых домах <br>
<img width="20%;" src="img/112.gif"><br>
    <label>
      А<input type="radio" name="myname3" value="1">
     Дании  </label>
    <br>
    <label>
      Б<input type="radio" name="myname3" value="0">
    Китае   </label>
    <br>
    <label>
      В<input type="radio" name="myname3" value="0">
    России</label>
    <br>

  </p>

<p>5. Кто изобрел микросхемы? <br>
    <label>
      А<input type="radio" name="myname4" value="0">
     Шокли    </label>
    <br>
    <label>
      Б<input type="radio" name="myname4" value="1">
    Килби     </label>
    <br>
    <label>
      В<input type="radio" name="myname4" value="0">
    Лебедев </label>
    <br>

  </p>


<p>6. Ярким проявлением электричества в природе служат ..., электрическая природа которых была установлена в XVIII веке.  <br>
    <label>
      А<input type="radio" name="myname5" value="1">
     Молнии      </label>
    <br>
    <label>
      Б<input type="radio" name="myname5" value="0">
   Громы   </label>
    <br>
    <label>
      В<input type="radio" name="myname5" value="0">
    дожди</label>
    <br>

  </p>
<p>7.  Атмосфера Земли представляет собой гигантский ..., нижняя обкладка которого (земная поверхность) заряжена отрицательно, а верхняя обкладка (верхние слои атмосферы до высоты 50 км) положительно.  <br>
    <label>
      А<input type="radio" name="myname6" value="0">
     компьютер      </label>
    <br>
    <label>
      Б<input type="radio" name="myname6" value="1">
 конденсатор     </label>
    <br>
    <label>
      В<input type="radio" name="myname6" value="0">
    маятник</label>
    <br>

  </p>


<p> 8. Многие рыбы используют электричество для защиты и поиска добычи под водой. Южноамериканский электрический угорь способен генерировать электрические ... напряжением до 500 вольт.  <br>
    <label>
      А<input type="radio" name="myname7" value="0">
    Удары   </label>
    <br>
    <label>
      Б<input type="radio" name="myname7" value="0">
    Импульсы    </label>
    <br>
    <label>
      В<input type="radio" name="myname7" value="1">
    Разряды </label>
    <br>

  </p>


<p>   9. В целом, начиная с XIX века, электричество плотно входит в жизнь современной цивилизации. Электричество используют не только для освещения, но и для ... информации (телеграф, телефон, радио, телевидение). <br>
    <label>
      А<input type="radio" name="myname8" value="0">
 Телепортации       </label>
    <br>
    <label>
      Б<input type="radio" name="myname8" value="0">
Трансформации         </label>
    <br>
    <label>
      В<input type="radio" name="myname8" value="1">
    Передачи</label>
    <br>

  </p>
<p> 10. Сколько человек живут без электричества по данным Всемирного Банка на сегодняшний день? <br>
    <label>
      А<input type="radio" name="myname9" value="1">
    Более миллиарда     </label>
    <br>
    <label>
      Б<input type="radio" name="myname9" value="0">
 Два миллиона </label>
    <br>
    <label>
      Сто сорок миллионов<input type="radio" name="myname9" value="0">
   самолетов 
</label>
    <br>

  </p>


    <input type="button" id="calc" value="Подсчитать результаты">
    <input type="reset" value="Сброс">
  </p>
    <input type="hidden" name="result" id="result" readonly>
      <input type="hidden" name="result1" id="result1" readonly>
</form>


 <script type="text/javascript">
calc.onclick = function(){
    var myform = this.form;
    myform.result.value = +myform.myname.value + +myform.myname1.value + +myform.myname2.value + +myform.myname3.value + +myform.myname4.value + +myform.myname5.value + +myform.myname6.value+ +myform.myname7.value + +myform.myname8.value + +myform.myname9.value;
    var btnResutl = myform.result.value;

if(myform.result.value==0 )
  {
  myform.result1.value = "2";
  alert('Ваша оценка 2');
  //location.href = "https://testtovepag.000webhostapp.com/test_el_res.php?id=" + myform.result1.value;
}

if(0<myform.result.value && myform.result.value < 6 )
  { alert('Ваша оценка 3');
  myform.result1.value = "3";
  //location.href = "https://testtovepag.000webhostapp.com/test_el_res.php?id=" + myform.result1.value;
}
 
 if(5<myform.result.value && myform.result.value < 8 )
  {
       alert('Ваша оценка 4');
  myform.result1.value = "4";
 // location.href = "https://testtovepag.000webhostapp.com/test_el_res.php?id=" + myform.result1.value;
}   
 if(myform.result.value>7 )
  {
       alert('Ваша оценка 5');
  myform.result1.value = "5";
  //location.href = "https://testtovepag.000webhostapp.com/test_el_res.php?id=" + myform.result1.value;
}   
}

 </script>
 <h2 style="color: white;">Найди правильно пары!</h2>
 
   <form class="tab-form" method="post" action="?log">
         
            <input type="submit" value="На главную страницу">
         </form>
  
     </div>
 
     
     <?php

if (isset($_GET['log'])) 
{ 
    ?><script>document.location.href="index.php"</script><?php
  }
?>

</body>
</html>