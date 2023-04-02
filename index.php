<?php

require 'vendor/autoload.php';

use Gipetto\CowSay\Cow;

$say = new Cow('Hello, je suis une vache !');

$say->setTongue(new Gipetto\CowSay\Tongue());

echo $say;
