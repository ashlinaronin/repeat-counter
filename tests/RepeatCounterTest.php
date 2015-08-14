<?php

    require_once __DIR__."/../src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_countRepeats_equivalent()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "the";
            $input_phrase = "the";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_word, $input_phrase);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_countRepeats_onceBeginning()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "the";
            $input_phrase = "the quick brown fox";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_word, $input_phrase);

            //Assert
            $this->assertEquals(1, $result);
        }




    }


 ?>
