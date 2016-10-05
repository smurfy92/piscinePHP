#!/usr/bin/php
<?php

$string = ltrim(rtrim(preg_replace("/\t/", " ", preg_replace("/\s\s+/", " ", $argv[1]))));
echo $string."\n";
