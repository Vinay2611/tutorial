<?php

$category = array("one","two","three","four","five","six","seven","eight","nine","ten","eleven","twelve","thirteen","fouteen","fifteen","sixteen","asd");
$i=0;
echo '<pre>';
var_dump($category);

//echo "<div class="row">
foreach($category as $cat)
{
if($i %4 ==0)
  {
     echo"</div><div class='row'> <div class='item'> $cat </div>";  
  }
  else
  {
    echo"<div class='item'>$cat </div>";  
  }
  $i++;
}
//echo"</div>";
 
?>