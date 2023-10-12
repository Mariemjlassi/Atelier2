<?php
$ch1="Au début,ils rient de vous, ensuite ils vous combattent, et à la fin, vous gagnez";
$ch1=ucwords($ch1);
$tab=explode(' ',$ch1);
$n=count ($tab);
$tab[$n-1]=strtoupper($tab[$n-1]);
$ch1=implode(' ',$tab);
echo $ch1."<br>";
echo "Le nombre de mot dans la chaine est :".str_word_count($ch1);
