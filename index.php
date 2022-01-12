<?php

$list = include('data.php');

$id = array_rand($list, 1);

echo $list[$id];
