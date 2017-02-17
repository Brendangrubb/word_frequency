<?php
    class RepeatCounter
    {
        function countRepeats($input1, $input2)
        {
            $word_counter = 0;

            if ($input1 == $input2) {
                ++ $word_counter;
            }
            else
            {
                $input2_word_split = explode(" ", $input2);
                foreach ($input2_word_split as $input2_word)
                {
                    if ($input2_word == $input1)
                    {
                        ++ $word_counter;
                    }
                }
            }

            return $word_counter;
        }
    }
?>
