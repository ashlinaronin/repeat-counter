<?php

class RepeatCounter
{
    function countRepeats($word_to_find, $phrase)
    {
        /* Before executing anything else, check that:
            -- $word_to_find exists and is solely comprised of alphanumeric chars.
            -- $phrase exists. It's fine to include punctuation or other chars
                because we will strip them before searching anyway. */
        if (!empty($word_to_find) && ctype_alnum($word_to_find) && !empty($phrase)) {

            // Strip all non-alphanumeric chars from phrase using find and replace regular expression
            // Arg 1 is pattern, arg 2 is replacement, arg 3 is subject to act on
            $phrase = preg_replace("/[^\da-z ]/i", "", $phrase);

            $phrase_words = explode(" ", strtolower($phrase));
            $word_to_find = strtolower($word_to_find);
            $occurences = 0;

            foreach ($phrase_words as $word) {
                if ($word == $word_to_find) {
                    $occurences++;
                }
            }

            return $occurences;

        } else {
            // Error cases
            return -1;
        }
    }
}


 ?>
