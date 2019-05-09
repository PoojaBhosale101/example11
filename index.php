<?php
$text = "hellow world,this is my first alexa skill!!!";
$array = array("version"=>"1.0", "response"=>array("Speech"=>array("type"=>"PlainText","text"=>$text)));
echo json_encode($array);
?>
