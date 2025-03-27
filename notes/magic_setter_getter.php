<?php

// magic setter, __set() and getter, __get() for php
// only triggers for PRIVATE, PROTECTED and NON-EXISTING properties
    // PUBLIC properties are accessed directly, without triggering the magic methods

class Example {
    public string $foo = 'default'; 

    public function __get(string $name) {
        echo "__get called for $name\n";
    }

    public function __set(string $name, $value) {
        echo "__set called for $name with value $value\n";
    }
}

$example = new Example();
$example->foo = 'CHANGED'; // __set(foo, CHANGED) called
echo $example->foo; // __get(foo) called
