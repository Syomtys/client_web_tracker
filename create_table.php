<?php 
$link = mysqli_connect("localhost", "a0792378_Scam_best", "pmFsoRTE", "a0792378_Scam_best");
mysqli_set_charset($con, "utf8");
$sql = 'CREATE TABLE user (
  datetime DATE,
  user_agent VARCHAR(200),
  user_ip VARCHAR(30)
);';
mysqli_query($link, $sql);
mysqli_close($link);
?>