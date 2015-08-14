<?php

class RepeatCounter
{
    function countRepeats($word_to_find, $phrase)
    {
        $phrase_words = explode(" ", $phrase);
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
