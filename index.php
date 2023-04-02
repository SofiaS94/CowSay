<?php

require 'vendor/autoload.php';

use CowSay\Cow;

$say = new Cow('Hello, je suis une vache !');

$say->setTongue('\\', '  ', '  ');

echo $say;
