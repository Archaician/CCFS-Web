<?php
include("database.php");

if(!$mysqli){
  die("Could not connect:".mysqli_connect_error());
} else {

		$query = "INSERT INTO `section`(sename, gradelvl, adviserlname, yearid) values ('$_POST[sename]', '$_POST[gradelvl]', '$_POST[adviserlname]', '$_POST[yearid]')";

  if(mysqli_query($mysqli, $query)){
    echo "<span style='color:#0AC02A;'>" . '<i class="fas fa-check-circle"></i>' . " Successfully created a new account." . "</span>";
    $_POST = array();
  } else {
    echo "<span style='color:#FF0004;'>" . '<i class="fas fa-exclamation-circle"></i>' . " Failed to create a new account." . "</span>";
  }

  mysqli_close($mysqli);
}
?>
