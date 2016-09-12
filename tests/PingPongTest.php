<?php
    require_once "src/pingpong.php";
    class PingPongTest extends PHPUnit_Framework_TestCase
    {
        function test_pingPong_makeArray()
        {
            //Arrange
            $test_TitleCaseGenerator = new PingPongGenerator;
            $input = 2;
            $resultArray = $test_TitleCaseGenerator->generatePingPongArray($input);

            //Act
            $result = $resultArray[$input-1];
            //Assert
            $this->assertEquals("2", $result);
        }

        function test_pingPong_divBy15()
        {
          //Arrange
          $test_TitleCaseGenerator = new PingPongGenerator;
          $input = 15;
          //Act
          $resultArray = $test_TitleCaseGenerator->generatePingPongArray($input);
          $result = $resultArray[$input-1];
          //Assert
          $this->assertEquals("ping-pong", $result);
        }

        function test_pingPong_divBy5()
        {
          //Arrange
          $test_TitleCaseGenerator = new PingPongGenerator;
          $input = 5;
          //Act
          $resultArray = $test_TitleCaseGenerator->generatePingPongArray($input);
          $result = $resultArray[$input-1];
          //Assert
          $this->assertEquals("pong", $result);
        }

        function test_pingPong_divBy3()
        {
          //Arrange
          $test_TitleCaseGenerator = new PingPongGenerator;
          $input = 3;
          //Act
          $resultArray = $test_TitleCaseGenerator->generatePingPongArray($input);
          $result = $resultArray[$input-1];
          //Assert
          $this->assertEquals("ping", $result);
        }
    }
?>
