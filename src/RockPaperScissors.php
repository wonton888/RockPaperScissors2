<?php

        class RockPaperScissors
        {



            function rockGame($input_1, $input_2)
            {
                $input = array ("scissors", "paper", "rock");
                $total_array = count($input);

                if (isset($_GET['choice1'], $_GET['choice2'])) {

                    $choice = $_GET['choice1'];
                    $choice = $_GET['choice2'];
                }

                    if ($input_1 == 'rock' && $input_2 == 'scissors'){

                        echo 'You chose <b>rock, </b> Your opponent chose <b>scissors</b><br>
                        Player 1 wins! '

                    }

                        elseif ($input_1 == 'rock' && $input_2 == 'paper'){

                            echo 'You chose <b>rock, </b> Your opponent chose <b>paper</b><br>

                            Player 1 loses! '
                    }

                        elseif ($input_1 == 'paper' && $input_2 == 'rock')

                        {
                            echo 'You chose <b>paper</b>, your opponent chose <b>rock</b><br>
                            Player 1 wins!'
                        }

                        elseif ($input_1 == 'paper' && $input_2 == 'scissors')

                        {
                            echo 'You chose <b>paper</b>, your opponent chose <b>scissors</b><br>
                            Player 1 loses!'
                        }

                        elseif ($input_1 == 'scissors' && $input_2 == 'paper')

                        {
                            echo 'You chose <b>scissors</b>, your opponent chose <b>paper</b><br>
                            Player 1 wins!'
                        }

                        elseif ($input_1 == 'scissors' && $input_2 == 'rock')

                        {
                            echo 'You chose <b>scissors</b>, your opponent chose <b>rock</b><br>
                            Player 1 loses!'
                        }

                        elseif ($input_1 == $input_2)
                        {
                            echo 'Its a tie!'
                        }

                        else
                        {
                            echo 'sorry, only paper, rock, and scissors are allowed!'
                        }



                }

            }
        
 ?>
