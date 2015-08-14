<?php

class RepeatCounter
{
    function countRepeats($word_to_find, $phrase)
    {
        // Strip all punctuation from phrase using find and replace regular expression
        // Arg 1 is pattern, arg 2 is replacement, arg 3 is subject to act on
        $phrase = preg_replace("#[[:punct:]]#", "", $phrase);

        $phrase_words = explode(" ", strtolower($phrase));
        $word_to_find = strtolower($word_to_find);
        $occurences = 0;

        foreach ($phrase_words as $word) {
            if ($word == $word_to_find) {
                $occurences++;
            }
        }

        return $occurences;
    }
}


 ?>
