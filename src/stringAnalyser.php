<?php

/**
 * A simple string analyser module
 * 
 * It contains functions to get information on strings
 */

declare(strict_types=1);

// TODO add your countVowels function

function countVowels(string $testString): array { 
    $testString = strtolower($testString);
    $results = [
        "a" => substr_count($testString, 'a'),
        "e" => substr_count($testString, 'e'),
        "i" => substr_count($testString, 'i'),
        "o" => substr_count($testString, 'o'),
        "u" => substr_count($testString, 'u'),
        "y" => substr_count($testString, 'y')
    ];
    return $results;
}