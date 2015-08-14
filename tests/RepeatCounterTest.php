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

        function test_countRepeats_onceMiddle()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "brown";
            $input_phrase = "the quick brown fox";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_word, $input_phrase);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_countRepeats_onceEnd()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "fox";
            $input_phrase = "the quick brown fox";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_word, $input_phrase);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_countRepeats_twiceBeginning()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "bye";
            $input_phrase = "bye bye friend";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_word, $input_phrase);

            //Assert
            $this->assertEquals(2, $result);
        }

        function test_countRepeats_thriceAnywhere()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "the";
            $input_phrase = "i wonder about the well-being of the animals in the zoo";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_word, $input_phrase);

            //Assert
            $this->assertEquals(3, $result);
        }

        function test_countRepeats_notInPhrase()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "hello";
            $input_phrase = "goodbye world";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_word, $input_phrase);

            //Assert
            $this->assertEquals(0, $result);
        }

        function test_countRepeats_mixedCaseWord()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "heLLo";
            $input_phrase = "hello world hello hello";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_word, $input_phrase);

            //Assert
            $this->assertEquals(3, $result);
        }

        function test_countRepeats_mixedCasePhrase()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "hElLo";
            $input_phrase = "hEllO WOrLd heLLo Hello";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_word, $input_phrase);

            //Assert
            $this->assertEquals(3, $result);
        }

        function test_countRepeats_ignorePhrasePunctuation()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "you";
            $input_phrase = "Hey you! How are you?";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_word, $input_phrase);

            //Assert
            $this->assertEquals(2, $result);
        }

        function test_countRepeats_numericalWord()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "l33t";
            $input_phrase = "Wow wouldja look at that l33t hackz0r!";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_word, $input_phrase);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_countRepeats_partialMatches()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "the";
            $input_phrase = "There are many of these in their thesis.";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_word, $input_phrase);

            //Assert
            $this->assertEquals(0, $result);
        }

        function test_countRepeats_specialCharsWord()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "#%479042@{}{ }34???";
            $input_phrase = "Welcome to the matrix!";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_word, $input_phrase);

            //Assert
            $this->assertEquals(-1, $result);
        }

        function test_countRepeats_noWord()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "";
            $input_phrase = "Your phrase here.";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_word, $input_phrase);

            //Assert
            $this->assertEquals(-1, $result);
        }

        function test_countRepeats_noPhrase()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "word";
            $input_phrase = "";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_word, $input_phrase);

            //Assert
            $this->assertEquals(-1, $result);
        }
    }
 ?>
