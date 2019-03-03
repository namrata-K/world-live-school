<?php
    $Connection = mysqli_connect('localhost', 'root', '');
    $Selected = mysqli_select_db($Connection, 'live_school');
    $query = "SELECT id, content,post_date FROM todo";
    $result = mysqli_query($Connection, $query);
    if (!$result) {
        echo "Coulnd't get resulsts - query problem!";
        exit();
    }
    while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
        $date = date("d-m-Y", strtotime($row[2])); // changing from mysqls year-month-date to date-month-year
        echo '<article class="todo '.$row[0].'">
            <div class="row">
                <div class="col-xs-12 article-content">'.$row[1].'</div></div>
                <div class="row">
                    <div class="col-xs-12 text-center date">'.$date.'</div>
                    </div>
        </article>';
    }
   
?>
