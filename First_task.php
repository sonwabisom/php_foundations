<?php 

function checkAge() {

 $number =6;
 $numbers=7;
 $comment="VERY old ";

 if ($number < $numbers){

return $comment;

 }
 return "Not Young";
}
echo checkAge();

function checkStatus() {
    $isOld= true;
    $isYoung=False;

    if ($isOld) {
        echo "The person is old.";
    } elseif ($isYoung) {
        echo "The person is young.";
    } else {
        echo "The person's age status is unknown.";
    }
   
   }
echo checkStatus() ;
?>
