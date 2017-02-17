<?php
    class RepeatCounter
    {
        function countRepeats($input1, $input2)
        {
            $word_counter = 0;

            if ($input1 == $input2) {
                ++ $word_counter;
            }
            
            return $word_counter;
        }
    }
?>
