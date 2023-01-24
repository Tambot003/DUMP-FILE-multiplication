<!DOCTYPE html>
<html>
   <head>
      <title>moltiplacation</title>
      <link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
   </head>
   <body>
      <h1>EXERCICE 8</h1>
      <p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme:</p>
      <hr>
      <form name="frm" method="post">
       <h1>enter number to find table:</h1>
       
       <input type="number" name="n">
       <input type="submit" name="sub" >
</form>

<?php

$rolo = $_POST['n']; //in this way any value to php variable

$sub = $_POST['sub'];
if($sub)


 for($i=1; $i<=10; $i++)
{
  $sum = $rolo *  $i;
  echo  "$rolo  *  $i = $sum<br>";
}   
?>
   </body>
</html>