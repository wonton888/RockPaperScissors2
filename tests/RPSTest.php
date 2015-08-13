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
            $this->assertEquals('Player 1 wins!', $result);
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
            $this->assertEquals('Player 1 loses!', $result);
        }

        function testRockRock()
        {
            //Arrange
            $test = new RockPaperScissors;
            $first_input ="rock";
            $second_input = "rock";

            //Act
            $result = $test->rockGame($first_input, $second_input);

            $tie = 'Its a tie!';

            //Assert
            $this->assertEquals($tie, $result);
        }



        function testPaperScissors()
        {
            //Arrange
            $test = new RockPaperScissors;
            $first_input = "paper";
            $second_input = "scissors";

            //Act
            $result = $test->rockGame($first_input, $second_input);

            //Assert
            $this->assertEquals('Player 1 loses!', $result);
        }

        function testPaperPaper()
        {
            //Arrange
            $test = new RockPaperScissors;
            $first_input = "paper";
            $second_input = "paper";

            //Act
            $result = $test->rockGame($first_input, $second_input);

            $tie = 'Its a tie!';

            //Assert
            $this->assertEquals($tie, $result);

        }

        function testScissorsPaper()
        {
            //Arrange
            $test = new RockPaperScissors;
            $first_input = "scissors";
            $second_input = "paper";

            //Act
            $result = $test->rockGame($first_input, $second_input);

            //Assert
            $this->assertEquals('Player 1 wins!', $result);
        }

        function testScissorsRock()
        {
            //Arrange
            $test = new RockPaperScissors;
            $first_input = "scissors";
            $second_input = "rock";

            //Act
            $result = $test->rockGame($first_input, $second_input);

            //Assert
            $this->assertEquals('Player 1 loses!', $result);
        }

        function testScissorsScissors()
        {
            //Arrange
            $test = new RockPaperScissors;
            $first_input = "scissors";
            $second_input = "scissors";

            //Act
            $result = $test->rockGame($first_input, $second_input);

            $tie = 'Its a tie!';

            //Assert
            $this->assertEquals($tie, $result);

        }

    }

?>
