<?php


trait Utilities{

  function addNewClients($arrayTo , $arrayFrom ){
      try{
          foreach($arrayFrom as $key=>$value){
              array_push($arrayTo, new ClientPrime($value['id'],
               $value['name'],
               $value['surname'],
               $value['adress'],
               $value['cart'],
               $value['paymentdata'],
               $value['prime'],
               $value['discount']));
          }
      }
      catch(Exception $e){
          echo $e->getMessage();
      }

      var_dump($arrayTo);
  }
}

?>