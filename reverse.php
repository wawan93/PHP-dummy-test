<?php

function reverse_and_replace($str)
{
	if(!$str) return '';

	$vowel = array('a','e','i','o','u');

	$result = strrev((string)$str);
	$result = str_replace($vowel, '', $result);

	return $result;
}