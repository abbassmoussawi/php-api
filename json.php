<?php
$word = $_GET['word'];

if(strrev($word) == $word){
echo "it's a palindrome";
echo json_encode($word);
}else{
    echo"it's not a palindrome";
}



