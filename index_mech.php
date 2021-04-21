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
       <h2 style="color:white;text-align: center;">Механика!</h2> </div>
    
<div class="filter-wrap">
  <div class="param">
    <span class="param_title" style="color:white;"><h3>Основные понятия</h3></span>
    <div class="param_list" style="text-align:justify;display:none;z-index:999;color:white;">
          &nbsp;&nbsp;&nbsp;Меха́ника (греч. μηχανική — искусство построения машин) — раздел физики, наука, изучающая движение материальных тел и взаимодействие между ними; при этом движением в механике называют изменение во времени взаимного положения тел или их частей в пространстве
          </div>
            </div>
              </div>
<div class="filter-wrap">
  <div class="param">
    <span class="param_title" style="color:white;"><h3>Предмет механики и её разделы</h3></span>
    <div class="param_list" style="display:none;z-index:999;color:white;">
          &nbsp;&nbsp;&nbsp;По поводу предмета механики уместно сослаться на слова авторитетного учёного-механика С. М. Тарга из введения к 4-му изданию его широко известного учебника теоретической механики: «Механикой в широком смысле этого слова называется наука, посвящённая решению любых задач, связанных с изучением движения или равновесия тех или иных материальных тел и происходящих при этом взаимодействий между телами. Теоретическая механика представляет собою часть механики, в которой изучаются общие законы движения и взаимодействия материальных тел, то есть те законы, которые, например, справедливы и для движения Земли вокруг Солнца, и для полёта ракеты или артиллерийского снаряда и т. п. Другую часть механики составляют различные общие и специальные технические дисциплины, посвящённые проектированию и расчёту всевозможных конкретных сооружений, двигателей, механизмов и машин или их частей (деталей)».
 &nbsp;&nbsp;&nbsp;<br>
В приведённом высказывании упущен из виду тот факт, что изучением общих законов движения и взаимодействия материальных тел занимается также и механика сплошных сред (или механика сплошной среды) — обширная часть механики, посвящённая движению газообразных, жидких и твёрдых деформируемых тел. В этой связи академик Л. И. Седов отмечал: «В теоретической механике изучаются движения материальной точки, дискретных систем материальных точек и абсолютно твёрдого тела. В механике сплошной среды … рассматриваются движения таких материальных тел, которые заполняют пространство непрерывно, сплошным образом, и расстояния между точками которых во время движения меняются»[4].
 &nbsp;&nbsp;&nbsp;<br>
Таким образом, по предмету изучения механика подразделяется на:
 &nbsp;&nbsp;&nbsp;<br>
теоретическую механику; &nbsp;&nbsp;&nbsp;<br>
механику сплошных сред; &nbsp;&nbsp;&nbsp;<br>
 &nbsp;&nbsp;&nbsp;<br>специальные механические дисциплины: теорию механизмов и машин, сопротивление материалов, гидравлику, механику грунтов и др.
 &nbsp;&nbsp;&nbsp;<br>Другой важнейший признак, используемый при подразделении механики на отдельные разделы, основан на тех представлениях о свойствах пространства, времени и материи, на которые опирается та или иная конкретная механическая теория. &nbsp;&nbsp;&nbsp;<br> По данному признаку в рамках механики выделяют такие разделы:
 &nbsp;&nbsp;&nbsp;<br>
классическая механика; &nbsp;&nbsp;&nbsp;<br>
релятивистская механика; &nbsp;&nbsp;&nbsp;<br>
квантовая механика. &nbsp;&nbsp;&nbsp;<br>

    </div>
  </div>
</div>

<div class="filter-wrap">
  <div class="param">
    <span class="param_title"><h3 style="color:white;">Механическое движение. Основные определения кинематики.</h3></span>
    <div class="param_list" style="display:none;z-index:999;color:white;">
  <div> 
<iframe width="560" height="315" src="https://www.youtube.com/embed/eZy2wp5XINY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

    </div>
  </div>
</div>



<script type="text/javascript">$('.param').click(function() {
  $(this).find('.param_list').slideToggle();
  $(".filter-wrap .param").not($(this)).find('.param_list').slideUp();
});</script>

          



      
<h2 style="text-align: center;"><a style="text-decoration: none;color:white;"href="test_mech.php" id="card-link-click">Пройти тест по теме</a>
</h2>
     </div>


</body>
</html>