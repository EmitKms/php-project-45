### Hexlet tests and linter status:
[![Actions Status](https://github.com/EmitKms/php-project-45/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/EmitKms/php-project-45/actions)
[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=EmitKms_php-project-45&metric=alert_status)](https://sonarcloud.io/summary/new_code?id=EmitKms_php-project-45)
[![Bugs](https://sonarcloud.io/api/project_badges/measure?project=EmitKms_php-project-45&metric=bugs)](https://sonarcloud.io/summary/new_code?id=EmitKms_php-project-45)
[![Code Smells](https://sonarcloud.io/api/project_badges/measure?project=EmitKms_php-project-45&metric=code_smells)](https://sonarcloud.io/summary/new_code?id=EmitKms_php-project-45)
[![Duplicated Lines (%)](https://sonarcloud.io/api/project_badges/measure?project=EmitKms_php-project-45&metric=duplicated_lines_density)](https://sonarcloud.io/summary/new_code?id=EmitKms_php-project-45)
[![Lines of Code](https://sonarcloud.io/api/project_badges/measure?project=EmitKms_php-project-45&metric=ncloc)](https://sonarcloud.io/summary/new_code?id=EmitKms_php-project-45)
[![Reliability Rating](https://sonarcloud.io/api/project_badges/measure?project=EmitKms_php-project-45&metric=reliability_rating)](https://sonarcloud.io/summary/new_code?id=EmitKms_php-project-45)
[![Security Rating](https://sonarcloud.io/api/project_badges/measure?project=EmitKms_php-project-45&metric=security_rating)](https://sonarcloud.io/summary/new_code?id=EmitKms_php-project-45)
[![Technical Debt](https://sonarcloud.io/api/project_badges/measure?project=EmitKms_php-project-45&metric=sqale_index)](https://sonarcloud.io/summary/new_code?id=EmitKms_php-project-45)
[![Maintainability Rating](https://sonarcloud.io/api/project_badges/measure?project=EmitKms_php-project-45&metric=sqale_rating)](https://sonarcloud.io/summary/new_code?id=EmitKms_php-project-45)
[![Vulnerabilities](https://sonarcloud.io/api/project_badges/measure?project=EmitKms_php-project-45&metric=vulnerabilities)](https://sonarcloud.io/summary/new_code?id=EmitKms_php-project-45)

## Описание:

«Игры разума» — набор из пяти консольных игр, построенных по принципу популярных мобильных приложений для прокачки мозга. Каждая игра задает вопросы, на которые нужно дать правильные ответы. После трех правильных ответов считается, что игра пройдена. Неправильные ответы завершают игру и предлагают пройти ее заново.

## Игры:

1. Определение четного числа.<br>
2. Калькулятор. Арифметические выражения, которые необходимо вычислить.<br>
3. Определение наибольшего общего делителя.<br>
4. Прогрессия. Поиск пропущенных чисел в последовательности чисел.<br>
5. Определение простого числа.<br>

## Требования к игре:

* Ubuntu Linux (https://ubuntu.com/)
* PHP версии 8 и выше (https://www.php.net/downloads.php)
* Composer (https://getcomposer.org/download/)
* Утилита Make
```sh
$ sudo apt update
$ sudo apt install make
```


## Установка:

```sh
$ git clone git@github.com:EmitKms/php-project-45.git

$ cd php-project-45

$ make install
```

## Запуск игр:

```sh
$ make brain-even

$ make brain-calc

$ make brain-gcd

$ make brain-progression

$ make brain-prime
```

## Пример работы игр:


Игра определение четного числа. Игроку показывается случайное число. И ему нужно ответить yes, если число чётное, или no — если нечётное.

Правильный ответ

[![asciicast](https://asciinema.org/a/3kBjsbPkVin60w2V.svg)](https://asciinema.org/a/3kBjsbPkVin60w2V)

Неправльный ответ

[![asciicast](https://asciinema.org/a/22yFeFy6jfy2NuX7.svg)](https://asciinema.org/a/22yFeFy6jfy2NuX7)

Игра Калькулятор. Игроку показывается случайное математическое выражение, например 35 + 16, которое нужно вычислить и записать правильный ответ.

Правильный ответ

[![asciicast](https://asciinema.org/a/NHfpuD7ppbz7PUr7.svg)](https://asciinema.org/a/NHfpuD7ppbz7PUr7)

Неправильный ответ

[![asciicast](https://asciinema.org/a/f3yvcLCUXz2La89Z.svg)](https://asciinema.org/a/f3yvcLCUXz2La89Z)

Игра наибольший общий делитель (НОД). Игроку показывается два случайных числа, например, 25 50. Пользователь должен вычислить и ввести наибольший общий делитель этих чисел.

Правильный ответ

[![asciicast](https://asciinema.org/a/66c7KMMNMHuTtKrG.svg)](https://asciinema.org/a/66c7KMMNMHuTtKrG)

Неправильный ответ

[![asciicast](https://asciinema.org/a/1aeHd7J3UrCl2RAB.svg)](https://asciinema.org/a/1aeHd7J3UrCl2RAB)

Игра "Арифметичекая прогрессия". Игроку показывается ряд чисел, образующий арифметическую прогрессию, в прогрессии есть промежуток выделенный двумя точками. Игрок должен определить в этом промежутке число.

Правильный ответ

[![asciicast](https://asciinema.org/a/NRFZcP6KNGQYile5.svg)](https://asciinema.org/a/NRFZcP6KNGQYile5)

Неправильный ответ

[![asciicast](https://asciinema.org/a/gLXCgK0kNL9wCHnY.svg)](https://asciinema.org/a/gLXCgK0kNL9wCHnY)


Игра "Простое ли число?". Игрок выпадает число нужно определить простое число или оно составное?
Если число простое ответить yes, или ответить no.

Правильный ответ

[![asciicast](https://asciinema.org/a/V1DuBb4uVPaSqVG2.svg)](https://asciinema.org/a/V1DuBb4uVPaSqVG2)

Неправильный ответ

[![asciicast](https://asciinema.org/a/Nak3S7p3Uk2m8Io5.svg)](https://asciinema.org/a/Nak3S7p3Uk2m8Io5)
