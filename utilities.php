<?php


trait Utilities{

  function addNewClients($arrayTo , $arrayFrom ){
      try{
          array_push($arrayTo, $arrayFrom );
      }
      catch(Exception $e){
          echo $e->getMessage();

      }
     
  }


}

?>