<?php 
function hi(){
    $text = 'Stilqn';
    $age = 16;

    echo "Az se kazvam" ,$text, "i sum na" ,$age;
}
function hello(){
    $a = 5;
    $b = 4;

    echo $a * $b;
}
hi();
hello();

$age = 17;
if($age<"18"){
    echo 'Im sorry your not allowed';
}else{
    echo'Come right in';
}
$number = 18;
if($number > 18){
 echo 'mercedess e320 2011';
} else{
    echo 'mercedess e200 2010';
}
$name = 'Stilqn';
if($name == 'Stilqn'){
  echo 'Mr', "$name";
}else{
    echo 'Mrs', "$name";
}
?>
