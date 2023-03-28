<?php 
$ua = $_SERVER['HTTP_USER_AGENT'];
$ip = $_SERVER['REMOTE_ADDR'];
$date = date('Y-m-d H:i:s');
if (strpos($ua,"DROP")){
	$ua = "user-scamers";
};
$link = mysqli_connect("localhost", "a0792378_Scam_best", "pmFsoRTE", "a0792378_Scam_best");
mysqli_set_charset($con, "utf8");
$sql2 = "INSERT INTO user (datetime, user_agent, user_ip) VALUES ('".$date."', '".$ua."', '".$ip."')";
mysqli_query($link, $sql2);
$result = mysqli_query($link, "SELECT datetime, user_agent, user_ip FROM user");
echo '<table>';
echo'<tr><td><h3>datetime</h3></td><td><h3>user_agent</h3></td><td><h3>user_ip</h3></td></tr>';
while ($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";
	echo "<td>" . $row["datetime"] . "</td>";
	echo "<td>" . $row["user_agent"] . "</td>";
	echo "<td>" . $row["user_ip"] . "</td>";
	echo "</tr>";
};
echo '</table>';
mysqli_close($link);
?>