<?php

namespace Config\Messages;

function message(string $key): string
{
    $messages = [
        'welcome'    => 'Welcome to the Brain Game!',
        'welcomes'   => 'Welcome to the Brain Games!',
        'ask_name'   => 'May I have your name?',
        'hello'      => 'Hello, %s!',
        'question'   => 'Question: %s',
        'your_answer' => 'Your answer',
        'correct'    => 'Correct!',
        'wrong' => "'%s' is wrong answer! ;(. Correct answer was '%s'.",
        'try_again'  => "Let's try again, %s!",
        'congrats'   => "Congratulations, %s!",
    ];

    return $messages[$key];
}
