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
       <h2 style="color:white;text-align: center;"> Тест по Механике!</h2> </div>


   <form>
  <p>1. Связи, сумма работ реакций которых на любых перемещениях системы равна нулю, называются:<br>
    <label>
      А<input type="radio" name="myname" value="1">
       излучения в диапазоне длин волн от 0.1 мм до 100 м. Радиоволны испускаются, например: такими холодными объектами как межзвёздный газ и пылевые облака; Реликтовым излучением, являющимся отголоском Большого Взрыва; Пульсарами, впервые обнаруженными в микроволновом диапазоне; Далёкими радиогалактиками и квазарами.    </label>
    <br>
    <label>
      Б<input type="radio" name="myname" value="0">
      Изучает физические процессы в астрономических объектах, таких как звёзды, галактики, экзопланеты и т. д. Физические свойства материи в самых больших масштабах и возникновение Вселенной изучает космология.</label>
    <br>
    <label>
      В<input type="radio" name="myname" value="0">
       Физические свойства и (наряду с космохимией) химический состав Солнца, планет, комет или звёзд и туманностей. </label>
    <br>

  </p>
  <br>
 <p>2. Абсолютная скорость точки — это скорость ...<br>
    <label>
      А<input type="radio" name="myname1" value="0">
     выраженная в км/ч
   </label>
    <br>
    <label>
      Б<input type="radio" name="myname1" value="0">
     скорость тела, которое представляет эта точка  </label>
    <br>
    <label>
      В<input type="radio" name="myname1" value="1">
     в абсолютном движении, равная геометрической сумме двух скоростей: переносной и относительной
</label>
    <br>

  </p>
  <br>
<p>3.Вращательное движение твердого тела — это такое движение, при котором ...
    <label style="margin-left: 12px;">
      А<input type="radio" name="myname2" value="0">
       скорости всех точек тела направлены по касательным к их траекториям

 
</label>
    
    <label>
      Б<input type="radio" name="myname2" value="0">
одна из точек, принадлежащих телу и называемая полюсом вращения, остается неподвижной
 
   </label> 
    <label>
      В<input type="radio" name="myname2" value="1">одна из прямых, принадлежащих телу и называемая осью вращения, остается неподвижной
      </label>
    <br>

  </p>
  <br>
<p>4. Механическое взаимодействие тел — это взаимодействие ...





 <br>

    <label>
      А<input type="radio" name="myname3" value="1">
   результатом которого является изменение скорости или деформация тел
   </label>
    <br>
    <label>
      Б<input type="radio" name="myname3" value="0">
   при котором тело приобретает ускорение  </label>
    <br>
    <label>
      В<input type="radio" name="myname3" value="0">
   
возникающее под действием гравитации </label>
    <br>

  </p>
  <br>
<p>5.Колебания в системах, вызванные и поддерживаемые параметрическим возбуждением, — это __________________ колебания.



 <br>
    <label>
      А<input type="radio" name="myname4" value="0">
   вынужденные </label>
    <br>
    <label>
      Б<input type="radio" name="myname4" value="0">
   свободные    </label>
    <br>
    <label>
      В<input type="radio" name="myname4" value="1">
    параметрические
 </label>
    <br>

  </p>
  <br>

<p>6. Сила инерции материальной точки — это векторная величина, равная ...



 

 

 <br>
    <label>
      А<input type="radio" name="myname5" value="0">
     геометрической сумме всех активных сил, приложенных к точке      </label>
    <br>
    <label>
      Б<input type="radio" name="myname5" value="0">
  геометрической сумме всех сил реакции связей</label>
    <br>
    <label>
      В<input type="radio" name="myname5" value="1">
    
произведению массы данной точки на ее ускорение и направленная в сторону, противоположную ускорению
 </label>
    <br>

  </p>
    <br>
<p>7.Раздел теоретической механики, в котором рассматривается движение материальных объектов под действием приложенных сил, — это:

 <br>
    <label>
      А<input type="radio" name="myname6" value="1">
     динамика      </label>
    <br>
    <label>
      Б<input type="radio" name="myname6" value="0">
аналитическая механика     </label>
    <br>
    <label>
      В<input type="radio" name="myname6" value="0">
    теория колебаний</label>
    <br>

  </p>
<br>

<p> 8. К числу принципов аналитической механики относится принцип:



 <br>
    <label>
      А<input type="radio" name="myname7" value="1">
    возможных перемещений   </label>
    <br>
    <label>
      Б<input type="radio" name="myname7" value="0">
    сохранения кинетического момента
    </label>
    <br>
    <label>
      В<input type="radio" name="myname7" value="0">
     сохранения механической энергии </label>
    <br>

  </p>

  <br>
<p>   9. Можно ли отличить на небе звезду от планеты? <br>
    <label>
      А<input type="radio" name="myname8" value="1">
   Можно. По форме траектории годового движения
    </label>
    <br>
    <label>
      Б<input type="radio" name="myname8" value="0">
 Можно. По яркости светила.         </label>
    <br>
    <label>
      В<input type="radio" name="myname8" value="0">
    Вечером и утром – нельзя, ночью – можно.</label>
    <br>

  </p> <br>
<p> 10. Момент инерции материальной точки или твердого тела в системе единиц СИ измеряется в единицах



 

<br>
    <label>
      А<input type="radio" name="myname9" value="1">
   кг∙м2     </label>
    <br>
    <label>
      Б<input type="radio" name="myname9" value="0">
  кг∙м/с2</label>
    <br>
    <label>
      В<input type="radio" name="myname9" value="0">
кг∙м2/с2
  
</label>
    <br>

  </p>


    <input type="button" id="calc" value="Подсчитать результаты">
    <input type="reset" value="Сброс">
  </p>
    <p style="color: white;">Правильных ответов: </p><input name="result" id="result" readonly>
    <p style="color: white;"> Ваша оценка: </p><input name="result1" id="result1" readonly>
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
  //location.href = "https://testtovepag.000webhostapp.com/test_el_res.php?id=" + myform.result1.value;
}   
 if(myform.result.value>7 )
  {
       alert('Ваша оценка 5');
  myform.result1.value = "5";
  //location.href = "https://testtovepag.000webhostapp.com/test_el_res.php?id=" + myform.result1.value;
}   
}

 </script>
  
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

     </div>

     

</body>
</html>