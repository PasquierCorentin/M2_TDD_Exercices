Exercice TDD 3
==========

L'objectif est d'écrire une fonction qui prend une chaine de caractères en
paramètre et vérifie que si celle-ci contient des parenthèses, ces parenthèses
sont "équilibrées". Dans cet exercice, des parenthèses sont dites équilibrées
si :
- il y a autant de parenthèses ouvrantes que de parenthèses fermantes
- les parenthèses fermantes n'apparaissent qu'après avoir été "ouvertes"

Par exemple, les chaines suivantes devraient être jugées équilibrées :
- ""
- "()"
- "(foo(bar))"
- "foo"

alors que celles-ci ne le sont pas :
- "((foo)"
- "())"
- ")(()"


## Installation

Install Composer dependencies

    composer install

## Run the tests

    .\vendor\bin\phpunit tests
