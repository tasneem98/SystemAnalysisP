<?php

//DataBase Information
    $dsn = "mysql:host=localhost;dbname=studentsystem";
    $host = "localhost";
    $user = "root";
    $password = "";

//Contact US Form Information
	$name = "";
    $email = "";
    $comment = "";

    function getposts1() {
        $posts = array();
        $posts[0] = $_POST['name'];
        $posts[1] = $_POST['email'];
        $posts[2] = $_POST['comment'];
        return $posts;
    }
//Create Connection
    try {
        $connect = new PDO($dsn, $user, $password);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $ex) {
        echo 'Connection Failed' . $ex->getMessage();
    }
	
//Inserting Data        
    if (isset($_POST['submit'])) {
        $data = getposts1();
        if (empty($data[0]) || empty($data[1]) || empty($data[2])) {
           echo 'Enter Your data!';
		} else {
            $insertstmt = $connect->prepare("INSERT INTO `contactus`( `name`, `email`, `comment`) VALUES(:name, :email, :message)");
            $insertstmt->execute(array(
                ':name' => $data[0],
                ':email' => $data[1],
                ':comment' => $data[2],
            ));

            if ($insertstmt) {
                echo 'Data Inserted';
            }
        }
	}
?>