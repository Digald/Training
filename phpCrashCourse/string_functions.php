<?php
# substr()
# returns a portion of a string;
// $output = substr('Hello', 1, 3);
// $output = substr('Hello', -2);
// echo $output;

# strlen()
# Reutnrs the length of a string
// $output = strlen('Hello World');
// echo $output;

# strpos()
# Finds the position of the first occurence of a sub string
// $output = strpos('Hello World', 'o');
// echo $output;

# strrpos()
# Finds the position of the last occurence of a sub string
// $output = strrpos('Hello World', 'o');
// echo $output;

# trim()
# strips whitespace
// $text = 'Hello World                                        ';
// // var_dump($text);
// $trimmed = trim($text);
// var_dump($trimmed);

# strtoupper
# Makes everything uppercase
// $output = strtoupper('Hello World');
// echo $output;

# strtolower
# Makes everything uppercase
// $output = strtolower('Hello World');
// echo $output;

# ucworlds()
# Capitilize ever word
// $output = ucwords('hello world');
// echo $output;

# str_replace()
# replace all occurences of a search string with a replacement
// $text = 'Hello World';
// $output = str_replace('World', 'Everyone', $text);
// echo $output;

# is_string()
# check if string
// $val  = '22';
// $output = is_string($val);
// echo $output;

// $values = array(true, false, null, 'abc', 33, '33', 33.5, '22.4', '', ' ', 0, '0');
// foreach($values as $value) {
//     if (is_string($value)) {
//         echo "{$value} is a string<br>";
//     }
// }

# gzcompress()
# compress a string
$string = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum pellentesque est sit amet euismod. Donec lorem lacus, condimentum et ornare eu, vehicula in massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris diam odio, scelerisque vitae mi sed, ullamcorper tristique est. Nulla scelerisque tincidunt magna, sed consectetur mauris malesuada sed. Donec convallis dignissim orci, nec dictum erat auctor vitae. Morbi tempus est ac erat euismod, in venenatis augue tincidunt. Donec non erat orci. Sed maximus placerat nisi, tristique posuere lectus volutpat vel. Pellentesque ut libero at quam luctus cursus. Fusce sed ipsum ac est ullamcorper semper non a nisi. In suscipit est est, vitae pretium diam pharetra non. Aliquam in urna at risus lacinia aliquam a ut sem. Donec id bibendum est. Fusce aliquet nulla tellus.';
$compressed = gzcompress($string);
echo $compressed;

$original = gzuncompress($compressed);
echo $original;