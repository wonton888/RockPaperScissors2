<?php

    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {

        function testRockScissors()
        {
            //Arrange
            $test = new RockPaperScissors;
            $first_input = "rock";
            $second_input = "scissors";

            //Act
            $result = $test->rockGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1", $result);
        }

        function testRockPaper()
        {
            //Arrange
            $test = new RockPaperScissors;
            $first_input = "rock";
            $second_input = "paper";

            //Act
            $result = $test->rockGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 2", $result);
        }

        function testRockRock()
        {
            //Arrange
            $test = new RockPaperScissors;
            $first_input ="Rock";
            $second_input = "Rock";

            //Act
            $result = $test->rockGame($first_input, $second_input);

            $tie = array("Tie, no one wins!");

            //Assert
            $this->assertEquals($tie, $result);
        }

        function testPaperScissors()
        {
            //Arrange
            $test = new RockPaperScissors;
            $first_input = "Paper";
            $second_input = "Scissors";

            //Act
            $result = $test->rockGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 2", $result);
        }

        function testPaperPaper()
        {
            //Arrange
            $test = new RockPaperScissors;
            $first_input = "Paper";
            $second_input = "Paper";

            //Act
            $result = $test->rockGame($first_input, $second_input);

            $tie = array("Tie, no one wins");

            //Assert
            $this->assertEquals($tie, $result);

        }

        function testScissorsPaper()
        {
            //Arrange
            $test = new RockPaperScissors;
            $first_input = "Scissors";
            $second_input = "Paper";

            //Act
            $result = $test->rockGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1", $result);
        }

        function testScissorsRock()
        {
            //Arrange
            $test = new RockPaperScissors;
            $fisrt_input = "Scissors";
            $second_input = "Rock";

            //Act
            $result = $test->rockGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 2", $result);
        }

        function testScissorsScissors()
        {
            //Arrange
            $test = new RockPaperScissors;
            $first_input = "Scissors";
            $second_input = "Scissors";

            //Act
            $result = $test->rockGame($first_input, $second_input);

            $tie = array("Tie, no one wins");

            //Assert
            $this->assertEquals($tie, $result);

        }
    }

?>
