<?php
    $Connection = mysqli_connect('localhost', 'root', '');
    $Selected = mysqli_select_db($Connection, 'phpsamples');
    $id = $_POST['id'];
    $query = "DELETE FROM todo WHERE id='$id'";
    $result = mysqli_query($Connection, $query);

    if (!$result) {
        echo "Couldn't remove data - query problem!";
    }

  
?>
