<?php

class RepeatCounter
{
    function countRepeats($word_to_find, $phrase)
    {
        $phrase_words = explode(" ", $phrase);
        $occurences = 0;
        $word_to_find = strtolower($word_to_find);

        foreach ($phrase_words as $word) {
            if ($word == $word_to_find) {
                $occurences++;
            }
        }

        return $occurences;
    }
}


 ?>
