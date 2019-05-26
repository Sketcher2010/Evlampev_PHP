<?php

$links = array(
    'http://en.wikipedia.org/wiki/2016_Chinese_Grand_Prix'
);

$terminRegex = '/Earth/g';
$linkRegex = '/<a href="(?\'link\'\/wiki\/[a-zA-Z_0-9]*)" title="[\w\s]*">[\w\s]*<\/a>/gm';
$link = array_shift($links);

$text = file_get_contents($link);

echo $text;