
<?php
$connection = mysqli_connect("sql303.epizy.com","epiz_30140545","g7W8aYtlfYGVl");
$db = mysqli_select_db($connection,"epiz_30140545_lms");
if(!$db)
{
  echo"connection error";
  echo"please check manually!";  
}
?>