<?php

namespace Hexlet\Phpunit\Utils;

function reverseString(string $string): string
{
    return implode(array_reverse(str_split($string)));
}

function capitalize(string $text): string
{
    if (strlen($text) == 0) {
        return $text;
    }
    $firstChar = strtolower($text[0]);
    $firstCharUpper = strtoupper($firstChar);
    if ($firstChar == $firstCharUpper) {
        return $text;
    }
    return $firstCharUpper . substr($text, 1);
}
