<?php
  class PingPongGenerator
  {
    function generatePingPongArray($inputNumber)
    {
      $outputArray = array();
      for ($i = 1; $i <= $inputNumber; $i++ ){
        if ($i % 15 == 0) {
          array_push($outputArray, "ping-pong");
        } else {
          array_push($outputArray, $i);
        }
      }
      return $outputArray;
    }
  }
?>
