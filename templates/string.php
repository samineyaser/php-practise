<?php
// single quated
$string = 'Hello my name is samin';
echo $string;
echo PHP_EOL;
// Double quated
$newString = "Here is my details : {$string}";
echo $newString;
echo PHP_EOL;

// heredoc
$newString2 = <<<EOD
{$string}
I am a professional
Web developer
EOD;
echo $newString2;
echo PHP_EOL;

// Nowdoc
$newString3 = <<<'EOD'
{$string}
I am a professional
Web developer
EOD;
echo $newString3;
echo PHP_EOL;

// Some string function
echo strlen($string) . PHP_EOL; //String lenth found
echo strrev($string) . PHP_EOL; //String reverse
echo substr($string, 5, -5) . PHP_EOL; // String spacific word
$newarray = explode(" ", $string); //string to array
print_r($newarray);
$arraytostr = implode(" ", $newarray); //alias join() array to string
echo $arraytostr;
print_r(str_split($arraytostr)); //string to array in letter
echo strpos($arraytostr, "is") . PHP_EOL; //string position check sencitive
echo strrpos($arraytostr, "samin") . PHP_EOL; //string position check reverse sencitive
echo strripos($arraytostr, "IS") . PHP_EOL; //string position check reverse insencitive
echo stripos($arraytostr, "Is") . PHP_EOL; //string position check insencitive
echo str_replace("samin", "Eyaser", $arraytostr) . PHP_EOL; //single string change
echo str_replace(["name", "samin"], ["last name", "Eyaser"], $arraytostr) . PHP_EOL; //multiple string change
$trimString = " Hello this is another string ";
echo $trimString . PHP_EOL;
echo trim($trimString, " "); // string trim from both side
echo ltrim($trimString, " "); // string trim from left side
echo rtrim($trimString, " "); // string trim from right side
