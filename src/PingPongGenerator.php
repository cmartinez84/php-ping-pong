<?php
  class PingPongGenerator
  {
    function generatePingPongArray($inputNumber)
    {
      $outputArray = array();
      for ($i = 1; $i <= $inputNumber; $i++ ){
        if ($i % 15 == 0) {
          array_push($outputArray, "ping-pong");

        } elseif ($i % 5 == 0){
          array_push($outputArray, "pong");
        } elseif ($i % 3 == 0){
          array_push($outputArray, "ping");
        } else {
          array_push($outputArray, $i);
        }
      }
      return $outputArray;
    }
  }
?>
