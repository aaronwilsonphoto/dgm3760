<?php

	require_once('variables.php');
	$id = $_GET['id'];
	$page = 'approveEmployee';

    // BUILD THE DATABASE CONNECTION
	$dbconnection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die ('connection failed'); 

    // DELETE SELCETED RECORD (FROM POST)

    // BUILD A SELECT QUERY
    $query = "DELETE FROM employee_simple WHERE id=$id";

    // TALK TO DATABASE
    $result = mysqli_query($dbconnection, $query) or die ('delete query failed');

      // REDIRECT
      header("Location: /dgm3760/06-secureApp/approveEmployee.php");

      // MAKE SURE CODE DOESN'T EXECUTE ON REDIRECT
      exit;




?>