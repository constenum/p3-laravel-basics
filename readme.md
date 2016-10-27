# P3: Laravel Basics

## Description
This project creates developer tools using the Laravel framework. The first tool
is a Lorem Ipsum generator. The Lorem Ipsum generator creates between 1 and 12
words, sentences, or paragraphs.

The second tool is a random user generator. The random user generator creates
between 1 and 20 dummy users. The dummy users can have up to 12 attributes, but
the first name and last name are required.

The last tool is a xkcd password generator. The xkcd password generator creates
a password of 4 to 8 words. Optionally, 1 to 9 random digits may be added to the
last word, 1 to 3 symbols may be added to the last word, and all words may be
capitalized.

## Live URL
<http://p3.constenum.us>

## Screenscast
<http://www.screencast.com/users/mmiller.43460/folders/Default/media/7d9492ab-aaa1-4052-bc80-aa1234cca680>

## Details for teaching team
For the packages, I used [badcow/lorem-ipsum](https://packagist.org/packages/badcow/lorem-ipsum),
which I installed using Composer, and [fzaninotto/faker](https://packagist.org/packages/fzaninotto/faker),
which is now included in Laravel.

The web pages were validated using [W3C Markup Validation Service](https://validator.w3.org/)
and the CSS stylesheet was validated using [W3C CSS Validation Service](https://jigsaw.w3.org/css-validator/).
The website was tested on a MacBook Pro using Google Chrome, Firefox, and Safari.
I did not have access to a Windows machine to validate and I did not validate on
a mobile device.

## Outside code
Badcow/lorem-ipsum:  https://github.com/Badcow/LoremIpsum
