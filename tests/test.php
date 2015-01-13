<?php

require_once __DIR__."/../vendor/autoload.php";

use HelloWorld\SayHello;

assert(SayHello::world() === 'Hello World, Composer!', 'It\'s not working!');