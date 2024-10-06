<?php 

$pod = new PDO('mysql:host=localhost;dbname=cms_project','root','', 
[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]); //  connection to database



//$id= $_GET['id'];
 //$stmt= $pod->prepare("SELECT * FROM `users` WHERE `user_id` = $id  ORDER BY `user_name` DESC"); // select query from database 
 //$stmt->execute(); // execute query
 //$results = $stmt->fetchAll(PDO::FETCH_ASSOC); // fetch all data


 //more efficient and sucurer way
 $query = 'SELECT * FROM `users` WHERE `user_id` =:id ';
 $stmt= $pod->prepare($query);
 $stmt->bindValue('id', (int) $_GET['id']);
 $stmt->execute();
 $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

 echo '<ul>';
 foreach ($results as $result) {
    echo '<li> ' . $result['user_name'] . '</li>';
 }
 echo '</ul>';


// insert data to database
// $USERNAME = 'AHMED';
// $PASSWORD = '1234568SS';
//  $query = "INSERT INTO `users` (`user_name` , user_password)  VALUES (:name , :password)";
//  $stmt= $pod->prepare($query);
// //  $stmt->bindValue('id', (int) $_POST['id']);
//   $stmt->bindValue('name', $USERNAME);
//   $stmt->bindValue('password', $PASSWORD);
//  $stmt->execute();


// UPDATE data to database
// $USERNAME = 'ahmedhassan';
// $id = $_GET['id'];
//  $query = "UPDATE `users` SET `user_name` = :name  WHERE `user_id` = :id";
//  $stmt= $pod->prepare($query);
//  $stmt->bindValue('id', (int) $id);
//   $stmt->bindValue('name', $USERNAME);
//  $stmt->execute();



// DELETE data to database
// $id = $_GET['id'];
//  $query = "DELETE FROM `users` WHERE `user_id` = :id";
//  $stmt= $pod->prepare($query);
//  $stmt->bindValue('id', (int) $id);
//  $stmt->execute();