<?php
$text = "hello world, this is my first alexa skill";
$array = array("version"=>"1.0", "response"=>array("outPutSpeech"=>array("type"=>"PlainText","text"=>$text)));
echo json_encode($array);
?>