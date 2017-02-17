<?php
    require_once __DIR__.'/../src/RepeatCounter.php';

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_countRepeats_oneToOne()
        {
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "shiny";
            $input2 = "shiny";

            $result = $test_RepeatCounter->countRepeats($input1, $input2);

            $this->assertEquals(1, $result);
        }

        function test_countRepeats_oneToPhraseNoMatch()
        {
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "shiny";
            $input2 = "boots of leather";

            $result = $test_RepeatCounter->countRepeats($input1, $input2);

            $this->assertEquals(0, $result);
        }

        function test_countRepeats_oneToPhraseOneMatch()
        {
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "shiny";
            $input2 = "shiny boots of leather";

            $result = $test_RepeatCounter->countRepeats($input1, $input2);

            $this->assertEquals(1, $result);
        }

        function test_countRepeats_oneToPhraseMultiMatch()
        {
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "shiny";
            $input2 = "shiny shiny shiny boots of leather";

            $result = $test_RepeatCounter->countRepeats($input1, $input2);

            $this->assertEquals(3, $result);
        }

        function test_countRepeats_oneToPhraseCaseInsensitive()
        {
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "ShInY";
            $input2 = "shiny SHINY ShInY boots of leather";

            $result = $test_RepeatCounter->countRepeats($input1, $input2);

            $this->assertEquals(3, $result);
        }
    }
?>
