<?php

        $dsn = "mysql:host=localhost;dbname=studentsystem";
        $host = "localhost";
        $user = "root";
        $password = "";
		
		$id = "";
		$name = "";
        $class = "";
        $arabic = "";
		$english = "";
		$math = "";
		$total = "";
		$percentage = "";
		$grade = "";

        function getposts1() {
            $posts = array();
            $posts[0] = $_POST['id'];
            $posts[1] = $_POST['name'];
            $posts[2] = $_POST['class'];
			$posts[3] = $_POST['arabic'];
			$posts[4] = $_POST['english'];
			$posts[5] = $_POST['math'];
			$posts[6] = $_POST['total'];
			$posts[7] = $_POST['percentage'];
			$posts[8] = $_POST['grade'];
            return $posts;
        }
//Create Connection
        try {
            $connect = new PDO($dsn, $user, $password);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            echo 'Connection Failed' . $ex->getMessage();
        }
//Selecting Data        
        if (isset($_POST['submit'])) {
            $data = getposts1();
            if (empty($data[0])) {
                echo 'Enter Your ID!';
            } else {
                $searchstmt = $connect->prepare("SELECT * FROM `resultskg` WHERE id = :id");
                $searchstmt->execute(array(
                    ':id' => $data[0],
                ));

                if ($searchstmt) {
                    $resultskg = $searchstmt->fetch();
					
					$id = $resultskg[0];
					$name = $resultskg[1];
        				$class = $resultskg[2];
        				$arabic = $resultskg[3];
					$english = $resultskg[4];
					$math = $resultskg[5];
					$total = $resultskg[6];
					$percentage = $resultskg[7];
					$grade = $resultskg[8];

                }
            }
		}
?>