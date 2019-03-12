<?php

//add_comment.php

$connect = new PDO('mysql:host=localhost;dbname=live_school', 'root', '');

$error = '';
$comment_name = '';
$comment_content = '';
$link = '';
//echo "hey";
//$video = $_FILES["file"];

if(empty($_POST["comment_name"]))
{
 $error .= '<p class="text-danger">Name is required</p>';
}
else
{
 $comment_name = $_POST["comment_name"];
}

$link = $_POST["comment_link"];


if(empty($_POST["comment_content"]))
{
 $error .= '<p class="text-danger">Comment is required</p>';
}
else
{
 $comment_content = $_POST["comment_content"];
}



if($error == '')
{
 $query = "
 INSERT INTO tbl_comment 
 (parent_comment_id, comment, comment_sender_name, link) 
 VALUES (:parent_comment_id, :comment, :comment_sender_name, :link)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':parent_comment_id' => $_POST["comment_id"],
   ':comment'    => $comment_content,
   ':comment_sender_name' => $comment_name,
   ':link' => $link
  )
 );
 $error = '<label class="text-success">Comment Added</label>';
}

$data = array(
 'error'  => $error
);

echo json_encode($data);

?>
