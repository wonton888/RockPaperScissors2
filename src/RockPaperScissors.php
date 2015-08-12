<?php

        class RockPaperScissors
        {



            function rockGame($input_1, $input_2)
            {
                $input = array ("scissors", "paper", "rock");
                $total_array = count($input);

                /*if (isset($_GET['choice1'], $_GET['choice2'])) {

                    $choice = $_GET['choice1'];
                    $choice = $_GET['choice2'];

                }
                */

                    var_dump($input_1);
                    var_dump($input_2);


                        if ($input_1 == 'rock' && $input_2 == 'scissors'){

                            return 'Player 1 wins!';

                        }

                        elseif ($input_1 == 'rock' && $input_2 == 'paper'){

                            return 'Player 1 loses!';
                        }

                        elseif ($input_1 == 'paper' && $input_2 == 'rock'){

                            return 'Player 1 wins!';

                        }

                        elseif ($input_1 == 'paper' && $input_2 == 'scissors'){
                             //we want this
                            return 'Player 1 loses!';

                        }

                        elseif ($input_1 == 'scissors' && $input_2 == 'paper'){

                            return 'Player 1 wins!';
                        }

                        elseif ($input_1 == 'scissors' && $input_2 == 'rock'){

                            return 'Player 1 loses!';

                        }

                        elseif ($input_1 == $input_2){

                            return 'Its a tie!';
                        }



                }

            }

 ?>
