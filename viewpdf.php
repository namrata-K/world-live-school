<?php

$file1='curriculum.pdf';
header('Content-type:application/pdf');
header('Content-Description:inline; filename="'.$file1.'"');
header('Content-Transfer-Encoding:binary');
header('Accept-ranges:bytes');
@readfile($file1);

?>


