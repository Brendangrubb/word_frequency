<?php
    require_once __DIR__.'/../src/RepeatCounter.php';

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_countRepeats_oneToOne()
        {
            $test_RepeatCounter = new RepeatCounter;
            $input1 = shiny;
            $input2 = shiny;

            $result = $test_RepeatCounter->countRepeats($input1, $input2);

            $this->assertEquals(1, $result);
        }
    }
?>
