<?php
include"02.php";
$myStr1=$_POST['mystr01'];
$myStr2=$_POST['mystr02'];

count02($myStr1,$myStr2);
// function count02($myS5,$myS4)
// {
//     static $count01=0;
//     // echo strpbrk($myStr,"abcdefg")."<br>";
    
//     $myS1=strpbrk($myS5,$myS4);
//     $myS3=substr($myS1,1);
//     $myS2=$myS1?1:0;
//     // echo strpbrk($myS1,"abcdefg");
//     while($myS2==1){
//         $myS1=strpbrk($myS3,$myS4);
//         $myS3=substr($myS1,1);
//         $myS2=$myS1?1:0;
//         $count01=$count01+1;
//     }
//     echo $count01;
// }

?>