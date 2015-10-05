<?php


 include '../model/generated/include_dao.php';
 
$list=  DAOFactory::getDirectionitDAO()->queryAll();
 
  $content=<<<CP
 
 <form action="modificar.php" method="get">
  <select name="oldName">       
CP;

  
  echo $content;
  
  
  foreach ($list as $directionsIT){
      echo "<option>". $directionsIT->getDirectionITName()."</option>";
  }
 
 
  $content=<<<CP
          
 </select><br><br>
 <input type="text" name="newName"><br><br>
  <input type="submit" value="Actualizar"><br>
</form>     
CP;
  
  echo $content;