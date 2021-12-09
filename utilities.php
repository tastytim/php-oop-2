<?php


trait Utilities{

  function addNewClients($arrayTo , $arrayFrom ){
      try{
          foreach($arrayFrom as $key=>$value){
              array_push($arrayTo, $value);
              
          }
      }
      catch(Exception $e){
          echo $e->getMessage();
      }

      var_dump($arrayTo);
  }
}

?>