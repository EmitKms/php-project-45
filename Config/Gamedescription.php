<?php

namespace Config\Gamedescription;

function gameDesc(string $key): string
{
    $messages = [
        'brain-calc' => 'What is the result of the expression?',
        'brain-even' => 'Answer "yes" if the number is even, otherwise answer "no".',
        'brain-gcd' => 'Find the greatest common divisor of given numbers.',
        'brain-prime' => 'Answer "yes" if given number is prime. Otherwise answer "no".',
        'brain-progression' => 'What number is missing in the progression?'
    ];

    return $messages[$key];
}
