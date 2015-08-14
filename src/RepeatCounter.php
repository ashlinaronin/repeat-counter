<?php

class RepeatCounter
{
    function countRepeats($word, $phrase)
    {
        $phrase_words = explode(" ", $phrase);

        return $word == $phrase_words[0];
    }
}


 ?>
