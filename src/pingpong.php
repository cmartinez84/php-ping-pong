<?php
  class PingPongGenerator
  {
    function generatePingPongArray($inputNumber)
    {
      $outputArray = array();
      for ($i = 1; $i <= $inputNumber; $i++ ){
        array_push($outputArray, $i);
      }
      return $outputArray;
    }
  }
?>
