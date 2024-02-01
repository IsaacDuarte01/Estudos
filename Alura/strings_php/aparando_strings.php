<?php
//csv = valores sepados por virgula.
$csv = ',Isaac Duarte,22,';

echo trim($csv, ',') . PHP_EOL;
echo ltrim($csv, ',') . PHP_EOL; //Ltrim apara do lado esquerdo >left< 
echo rtrim($csv, ',') . PHP_EOL; //Rtrim apara do lado direito >right<