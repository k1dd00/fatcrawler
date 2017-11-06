<?php  
  file_put_contents('files_enumerated.txt', $_POST['files'] . "\n", FILE_APPEND);  
  echo 'OK';    
?>
