<?php
    session_start();
    $Connection = mysqli_connect('localhost', 'root', '');
    $Selected = mysqli_select_db($Connection, 'live_school');


if (isset($_POST['Submit'])) {
if(isset($_POST['answer']))
{
echo "You have selected :".$_POST['answer'];  
}
?>

