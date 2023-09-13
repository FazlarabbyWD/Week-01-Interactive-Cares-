#!/usr/bin/env php
<?php

$options = getopt('h', ["sentence"]);

if (isset($options['h'])) {
    echo "This is an Alphabet Count Application\n";
    echo "Write --sentence For start the Application";
} elseif (isset($options['sentence'])) {
    echo "Enter a sentence: ";
    $userInput = readline();

    $filteredSentence = preg_replace('/[^a-zA-Z]/', '', $userInput);
    $alphaCount = strlen($filteredSentence);

    echo "Total Alphabet  in the given sentence: {$alphaCount}\n";
} else {
    echo "OOPS! Enter a sentence using --sentence\n";
}
