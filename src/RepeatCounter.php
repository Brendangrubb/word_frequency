<?php
    class RepeatCounter
    {
        function countRepeats($input1, $input2)
        {
            $word_counter = 0;
            // echo "before if: " . $word_counter;
            if ($input1 == $input2) {
                ++ $word_counter;
                // echo " after 1st if: " . $word_counter;

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
                    // echo " after 2nd if: " . $word_counter;

                }
            }

            return $word_counter;
        }
    }
?>
