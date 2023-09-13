#! /usr/bin/env php

<?php

$options = getopt('h::', ["min::", "max::"]);

if (isset($options['h'])) {
    printf("This is a guessing game application");
} else {
    $min = (int) ($options['min'] ?? 1);
    $max = (int) ($options['max'] ?? 100);

    $number = rand($min, $max);

    while (true) {
        $user_input = (int) readline("Enter a number: ");

        if ($user_input > $number) {
            printf("Try a lower number.\n");
        } else if ($user_input < $number) {
            printf("Try a bigger number.\n");
        } else {
            printf("Congrats! You guessed it right!");
            break;
        }
    }
}
