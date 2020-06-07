<?php

$id = $_GET['id'];

include 'db.php';

$result = mysqli_query($con,"SELECT * FROM employee where ID=$id ORDER BY id DESC");

if(mysqli_num_rows($result) > 0)
{
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$position = $row['position'];


#$skill1 = 2;
#$skill2 = 30;
#$skill3 = 50;

$regdate = $row['regdate'];
$is_reg = $row['is_reg'];

$reg_msg = ($is_reg == 1) ? "Зарегистрирован" : "Не зарегистрирован";

$tab_nr = $row['tab_nr'];
$education = "Высшее";

$is_pos_approved = $row['is_pos_approved'];
$pos_approved_msg = ($is_pos_approved == 1) ? "Должность учреждена" : "Должность не учреждена";

$lvl = $row['lvl'];

$is_health = $row['is_health'];
$health_msg = ($is_health == 1) ? "Здоров(-à)" : "На больничном";

$skill1 = $row['skill1'];
$skill2 = $row['skill2'];
$skill3 = $row['skill3'];
$skill4 = $row['skill4'];
$skill5 = $row['skill5'];
$skill6 = $row['skill6'];
}
else die("Invalid ID");

echo '<!DOCTYPE html>';
echo '<html>';
echo '<title>W3.CSS Template</title>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
echo '<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">';
echo '<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">';
echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
echo '<style>';
echo 'html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}';
echo '</style>';
echo '<body class="w3-light-grey">';

echo '<!-- Page Container -->';
echo '<div class="w3-content w3-margin-top" style="max-width:1400px;">';

echo '  <!-- The Grid -->';
echo '<div class="w3-row-padding">';
  
echo '    <!-- Left Column -->';
echo '    <div class="w3-third">';
    
     

echo '    <!-- End Left Column -->';
echo '    </div>';

echo '    <!-- Right Column -->';


echo "<div class=\"w3-white w3-text-grey w3-card-4\">
        <div class=\"w3-display-container\">
          <img src=\"avatar_hat.jpg\" style=\"width:100%\" alt=\"Avatar\">
          <div class=\"w3-display-bottomleft w3-container w3-text-black\">
            <h2>$name</h2>
          </div>
        </div>
        <div class=\"w3-container\">";

echo "  <div class=\"w3-container w3-white w3-margin-bottom\">
        <h2 class=\"w3-text-grey w3-padding-16\"><i class=\"fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal\"></i>$position</h2>
        <div class=\"w3-container\">
         
        
       
        
      </div>";
        
echo "<h6 class=\"w3-text-teal\"><i class=\"fa fa-calendar fa-fw w3-margin-right\"></i>$regdate - <span class=\"w3-tag w3-teal w3-round\">$reg_msg</span></h6>";
             
echo " <p><i class=\"fa fa-id-badge fa-fw w3-margin-right w3-large w3-text-teal\"></i>$tab_nr</p>
          <p><i class=\"fa fa-graduation-cap fa-fw w3-margin-right w3-large w3-text-teal\"></i>$education</p>
           <p><i class=\"fa fa-suitcase fa-fw w3-margin-right w3-large w3-text-teal\"></i>$pos_approved_msg</p>
            <p><i class=\"fa fa-trophy fa-fw w3-margin-right w3-large w3-text-teal\"></i>$lvl-й уровень квалификации</p>
          <p><i class=\"fa fa-heartbeat fa-fw w3-margin-right w3-large w3-text-teal\"></i>$health_msg</p>";

echo "<hr>

          <p class=\"w3-large\"><b><i class=\"fa fa-asterisk fa-fw w3-margin-right w3-text-teal\"></i>Пройденные тесты</b></p>
          <p>Уровень 0</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge w3-teal\" style=\"width:$skill1%\">$skill1%</div>
          </div>
          <p>Уровень 1</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge w3-teal\" style=\"width:$skill2%\">
              <div class=\"w3-center w3-text-white\">$skill2%</div>
            </div>
          </div>
          <p>Уровень 2</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge w3-teal\" style=\"width:$skill3%\">$skill3%</div>
          </div>
          <p>Уровень 3</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge w3-teal\" style=\"width:$skill4%\">$skill4%</div>
          </div>
          <p>Уровень 4</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge w3-teal\" style=\"width:$skill5%\">$skill5%</div>
          </div>
          <p>Уровень 5</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge w3-teal\" style=\"width:$skill6%\">$skill6%</div>
          </div>
          <br>

          
      </div><br>";
      
      

echo "      <div class=\"w3-container w3-card w3-white\">
        <h2 class=\"w3-text-grey w3-padding-16\"><i class=\"fa fa-book fa-fw w3-margin-right w3-xxlarge w3-text-teal\"></i>База знаний</h2>
        <div class=\"w3-container\">
  <h2>Уровень 0</h2>
  </div>
        
        <div class=\"w3-container\">
          
          <button onclick=\"myFunction('Demo1')\" class=\"w3-btn w3-block w3-black w3-left-align\">Начальный уровень</button>
<div id=\"Demo1\" class=\"w3-container w3-hide\">
 <div class=\"w3-row w3-container w3-row-padding\">
  <div class=\"w3-panel w3-pale-green\">
    <p>После прохождения этого уровня вы получите допуск к этому пункту навыка</p>
  </div>
  <h4>Общий балл</h4>
  <div class=\"w3-light-grey\">
  <div class=\"w3-container w3-green\" style=\"width:25%\">25%</div>
</div><br>
  
  <div class=\"w3-col s4 w3-center\">
   <div class=\"w3-card-4\" style=\"width:100%;\">
    <header class=\"w3-container \"><br>
    <div class=\"w3-xxxlarge\">
    <h3>
    Основы рыночной экономики
    </h3>
    </div>
      </header>
<div class=\"w3-container\">
      <br>
    </div>
<footer class=\"w3-container w3-blue\">
      <h5>Пройти тест</h5>
      </footer>
  </div>
  </div>
  
   <div class=\"w3-col s4 w3-center\">
   <div class=\"w3-card-4\" style=\"width:100%;\">
    <header class=\"w3-container \"><br>
    <div class=\"w3-xxxlarge\">
    <h3>Внутренний трудовой распорядок</h3>
    </div>
      </header>
<div class=\"w3-container\">
      <br>
    </div>
<footer class=\"w3-container w3-blue\">
      <h5>Пройти тест</h5>
      </footer>
  </div>
  </div>
  
  
  
   <div class=\"w3-col s4 w3-center\">
   <div class=\"w3-card-4\" style=\"width:100%;\">
    <header class=\"w3-container \"><br>
    <div class=\"w3-xxxlarge\">
    <h3>Правила и нормы охраны труда</h3>
    </div>
      </header>
<div class=\"w3-container\">
      <br>
    </div>
<footer class=\"w3-container w3-blue\">
      <h5>Пройти тест</h5>
      </footer>
  </div>
  </div>
  
  
  
</div><br>
        </div><br>
      </div>







<div class=\"w3-container\">
  <h2>Уровень 1</h2>
  </div>
        
        <div class=\"w3-container\">
          
          <button onclick=\"myFunction('Demo2')\" class=\"w3-btn w3-block w3-black w3-left-align\">Организация закупок товаров</button>
<div id=\"Demo2\" class=\"w3-container w3-hide\">
 <div class=\"w3-row w3-container w3-row-padding\">
  <div class=\"w3-panel w3-pale-green\">
    <p>После прохождения этого уровня вы получите допуск к этому пункту навыка</p>
  </div>
  <h4>Ïðîéäåíî</h4>
  <div class=\"w3-light-grey\">
  <div class=\"w3-container w3-green\" style=\"width:25%\">25%</div>
</div><br>
  
  <div class=\"w3-col s4 w3-center\">
   <div class=\"w3-card-4\" style=\"width:100%;\">
    <header class=\"w3-container \"><br>
    <div class=\"w3-xxxlarge\">
    <h3>Порядок оформления документов</h3>
    </div>
      </header>
<div class=\"w3-container\">
      <br>
    </div>
<footer class=\"w3-container w3-blue\">
      <h5>Пройти обучение</h5>
      </footer>
  </div>
  </div>
  
   <div class=\"w3-col s4 w3-center\">
   <div class=\"w3-card-4\" style=\"width:100%;\">
    <header class=\"w3-container \"><br>
    <div class=\"w3-xxxlarge\">
    <h3>Порядок оформления документов</h3>
    </div>
      </header>
<div class=\"w3-container\">
      <br>
    </div>
<footer class=\"w3-container w3-blue\">
      <h5>Пройти тест</h5>
      </footer>
  </div>
  </div>
  
  
  
  
  
  
 
  
  
  
</div><br>
        </div><br>






    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<footer class=\"w3-container w3-teal w3-center w3-margin-top\">
 
</footer>
<script>
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf(\"w3-show\") == -1) {
    x.className += \" w3-show\";
  } else { 
    x.className = x.className.replace(\" w3-show\", \"\");
  }
}
</script>
</body>
</html>";



?>
