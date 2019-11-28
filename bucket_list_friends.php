<?php
echo "Hoeveel vrienden zal ik vragen om hun droom? ";
$a = readline();
$Bucket = array();

if (!is_numeric($a)) {
exit ($a . " is geen geldige getal, probeer het opnieuw ");
}

for ($i=0; $i < $a ; $i++) {
    echo " Wat is jouw naam? ";
    $Bucket[$b = readline()] = $c = readline("wat is jou droom? ");
}
foreach ($Bucket as $key => $value) {

  echo $key . " heeft dit als droom: " . $value .PHP_EOL;
}

?>
