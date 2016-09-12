<?php
    require_once "src/pingpong.php";
    class PingPongTest extends PHPUnit_Framework_TestCase
    {
        function test_pingPong_makeArray()
        {
            //Arrange
            $test_TitleCaseGenerator = new PingPongGenerator;
            $input = 3;
            //Act
            $result = $test_TitleCaseGenerator->generatePingPongArray($input);
            //Assert
            $this->assertEquals("123", implode("", $result));
        }
    }
?>
