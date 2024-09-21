<?php 


echo round( disk_total_space("C:/") /1024 / 1024 / 1024 ). "<br/>" ; //
echo round( disk_free_space("C:/") /1024 / 1024 / 1024 ). "<br/>" ; //
//   file_exists("C:/") ? echo "true" : echo "false" ; //
  if(file_exists("C:/")) {
    echo "true" ;
  }
  else {
    echo "false" ;
  }
  // is_dir check if directory
  // is_file check if file

  // mkdir create directory
  // mk_file create file
  mkdir("D:/"); ;
//basename used to get base name

echo basename("index.php") . "<br/>" ;