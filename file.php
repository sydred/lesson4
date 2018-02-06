<?php

$content = file_get_contents('text.json');

$result = json_decode($content, true);
echo '<pre>';
print_r($result);