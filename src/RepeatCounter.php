<?php
    class RepeatCounter
    {
        function countRepeats($input1, $input2)
        {
            $word_counter = 0;
            $lowercase_input1 = strtolower($input1);
            $lowercase_input2 = strtolower($input2);
            $punctuation = array("!", "?", ".", ",", "-", ":", "'", '"', );
            $no_punctuation_input1 = str_replace($punctuation, " ", $lowercase_input1);
            $no_punctuation_input2 = str_replace($punctuation, " ", $lowercase_input2);

            if ($lowercase_input1 == $no_punctuation_input2) {
                ++ $word_counter;
            }
            else
            {
                $input2_word_split = explode(" ", $no_punctuation_input2);
                foreach ($input2_word_split as $input2_word)
                {
                    if ($input2_word == $lowercase_input1)
                    {
                        ++ $word_counter;
                    }
                }
            }

            return $word_counter;
        }
    }
?>
