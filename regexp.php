<?php
class RegExp
{
    public static function deleteLastWord($subject){
        echo  preg_replace('/\w+\s*$/', '$1', $subject);
        echo "<hr>";
    }
    public static function deleteSpaces($subject)
    {
        echo preg_replace('/\s/', '', $subject);
        echo "<hr>";
    }
    public static function onlyNumbers($subject)
    {
        echo  preg_replace('/[^0-9,.]/', '', $subject);
        echo "<hr>";
    }
    public static function word_in_brackets($subject)
    {
        preg_match_all('/\(\w+\)/',$subject, $result);
        var_dump($result);
        echo "<hr>";
    }
    public static function words_and_numbers($subject)
    {
        echo  preg_replace('/[^ a-z A-Z 0-9]/', '', $subject);
        echo "<hr>";
    }

}

RegExp::deleteLastWord( "The quick brown fox");
RegExp::deleteSpaces("The quick brown fox");
RegExp::onlyNumbers( "$123,34.00A");
RegExp::word_in_brackets("The quick brown (fox)");
RegExp::words_and_numbers('abcde$ddfd @abcd )der]');

