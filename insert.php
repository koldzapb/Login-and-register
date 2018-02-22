<?php
session_start();
require 'db.php' ;

try{
    // Prepare an insert statement
    $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
    $stmt = $pdo->prepare($sql);
    
    // Bind parameters to statement
    $stmt->bindParam(':username', $_REQUEST['username'], PDO::PARAM_STR);
    $stmt->bindParam(':email', $_REQUEST['email'], PDO::PARAM_STR);
    $stmt->bindParam(':password', $_REQUEST['password'], PDO::PARAM_STR);
    
    // Execute the prepared statement
    $stmt->execute();
    $_SESSION['username'] = $_REQUEST['username'];
    header("Location: index.php");
	
} catch(PDOException $e){
    die("ERROR: Could not prepare/execute query: $sql. " . $e->getMessage());
}




?>