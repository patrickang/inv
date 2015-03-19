<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function clean_string_for_url($str)
{
   // Remove all characters except A-Z, a-z, 0-9, dots, hyphens and spaces
// Note that the hyphen must go last not to be confused with a range (A-Z)
// and the dot, being special, is escaped with \
$str = preg_replace('/[^A-Za-z0-9\. -]/', '', $str);

// Replace sequences of spaces with hyphen
$str = preg_replace('/  */', '-', $str);

// The above means "a space, followed by a space repeated zero or more times"
// (should be equivalent to / +/)

// You may also want to try this alternative:
$str = preg_replace('/\\s+/', '-', $str);

// where \s+ means "zero or more whitespaces" (a space is not necessarily the
// same as a whitespace) just to be sure and include everything

return $str;
}
?>