<?php
$fibseq = [0, 1];
for ($a = 2; $a < 10; $a++) {
    $fibseq[$a] = $fibseq[$a - 1] + $fibseq[$a - 2];
}
foreach ($fibseq as $num) {
    if ($num % 2 == 0) {
        echo "$num\n";
    }
}
?>
