<?php
$file_contents = readfile( "storedxss.txt" );
echo  $file_contents;
?>