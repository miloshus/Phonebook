<?php
if(isset($_GET['id'])){
	$id = $_GET['id'];
	require 'inc/connect.php';
	$query = "DELETE FROM contacts WHERE id = {$id}";
	mysqli_query($conn, $query);
	header("Location: remove.php");
}