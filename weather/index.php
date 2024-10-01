<?php 


  $content= file_get_contents('data/index.json');
$data = json_decode($content, true);

echo '<pre>' ;
print_r($data[0]['city']) . "<br/>" ;
echo' </pre>' ;