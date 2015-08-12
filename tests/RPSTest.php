<?php

    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {

        function test_rock_scissors()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "rock";
            $second_input = "scissors";

            //Act
            $result = $test_RockPaperScissors->rockGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1", $result);
        }

        function test_rock_paper()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "rock";
            $second_input = "paper";

            //Act
            $result = $test_RockPaperScissors->rockGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 2", $result);
        }

        function test_rock_rock()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input ="Rock";
            $second_input = "Rock";

            //Act
            $result = $test_RockPaperScissors->rockGame($first_input, $second_input);

            $tie = array("Tie, no one wins!");

            //Assert
            $this->assertEquals($tie, $result);
        }

        function test_paper_scissors()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "Paper";
            $second_input = "Scissors";

            //Act
            $result = $test_RockPaperScissors->rockGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 2", $result);
        }

        function test_paper_paper()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "Paper";
            $second_input = "Paper";

            //Act
            $result = $test_RockPaperScissors->rockGame($first_input, $second_input);

            $tie = array("Tie, no one wins");

            //Assert
            $this->assertEquals($tie, $result);

        }

        function test_scissors_paper()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "Scissors";
            $second_input = "Paper";

            //Act
            $result = $test_RockPaperScissors->rockGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1", $result);
        }

        function test_scissors_rock()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $fisrt_input = "Scissors";
            $second_input = "Rock";

            //Act
            $result = $test_RockPaperScissors->rockGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 2", $result);
        }

        function test_scissors_scissors()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "Scissors";
            $second_input = "Scissors";

            //Act
            $result = $test_RockPaperScissors->rockGame($first_input, $second_input);

            $tie = array("Tie, no one wins");

            //Assert
            $this->assertEquals($tie, $result);

        }
    }

?>
