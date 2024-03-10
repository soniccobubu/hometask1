<?php
echo "Enter text: (up to 200 words) ";
$input = fgets(STDIN);
$input = rtrim($input);
$input1='';
$spaces=0;

$inputArray = str_split($input);

foreach ($inputArray as $i){
    if ($i == " "){
        $spaces+=1;
    }
}

if ($spaces <= 200){
    foreach ($inputArray as $i){
        $char = ord($i);
        if (($char >= 65 && $char <= 90) || ($char >= 97 && $char <= 122)) {
            if ($char >= 65 && $char <= 90){
                $i1 = strtolower($i);
            } elseif ($char >= 97 && $char <= 122){
                $i1 = strtoupper($i);
            }
            $input1 .= $i1;
        }
    }
    echo $input1;
}
?>