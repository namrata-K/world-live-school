<?php
    $Connection = mysqli_connect('localhost', 'root', '');
    $Selected = mysqli_select_db($Connection, 'live_school');
    $todo = mysqli_real_escape_string($Connection, trim($_POST['todo']));
    $date = date('Y-m-d');


    $query = "INSERT INTO todo (content, post_date)
             VALUES ('$todo','$date')";
    $result = mysqli_query($Connection, $query);
    if (!$result) {
        echo "Coulnd't enter data - query problem";
    }

?>
