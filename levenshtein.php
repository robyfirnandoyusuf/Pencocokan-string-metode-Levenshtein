<?php
$input = 'nanda';

$words  = array('nando','aza','noval','atok','firman','obien','wahyu');

$shortest = -1;

foreach ($words as $word) {
    $lev = levenshtein($input, $word);
    if ($lev == 0) {
        $closest = $word;
        $shortest = 0;
        break;
    }

    if ($lev <= $shortest || $shortest < 0) {
        $closest  = $word;        
        $shortest = $lev;
    }
}
echo "Input word: $input<br>";
if ($shortest == 0) {
    echo "Exact match found: $closest\n";
} else {
    echo "Did you mean: $closest?\n";
}

?>