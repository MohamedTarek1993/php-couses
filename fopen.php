<?Php

$handle = fopen('php://stdin', 'r'); // open file for reading
$handle = fopen('php://stdout', 'w'); // open file for writing
$handle = fopen('php://stdin', 'r+'); // open file for reading and writing
$handle = fopen('php://stdin', 'w+'); // open file for reading and writing 

echo fgets($handle); // read line from file 
echo fread($handle, 10); // read 10 bytes from file
echo fgetc($handle); // read 1 byte from file
echo fgetss($handle); // read line from file without newline
fclose($handle); // close file

echo '<pre>'  ;
print_r(file('php://stdin')) ; // read line from file
echo '</pre>' ;

echo feof($handle); // check if end of file
echo ferror($handle); // check error
echo fflush($handle); // flush buffer
echo fgetc($handle); // read 1 byte from file
echo fgetcsv($handle); // read line from file without newline

echo rename('php://stdin' , 'php://stdout') ; // rename file
echo copy('php://stdin' , 'php://stdout') ; // copy file
echo unlink(); // delete file


echo get_include_path() ; // get include path
echo set_include_path('path') ; // set include path
echo file_get_contents('php://stdin' ,true , null , 4 , 10) ; // read file as string
                                               // TRUE get include path 
                                                // 4 start reading from index 4
                                                // 10 read 10 bytes from file
echo file_put_contents('php://stdout' , 'hello' , FILE_APPEND) ; // write string to file 
                                                                 // FILE_APPEND append string to file in                                                  