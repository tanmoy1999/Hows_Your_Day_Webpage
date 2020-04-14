<?php
	$yourName = $_POST['yourName'];
	$feeling = $_POST['feeling'];
	$content = $_POST['content1'];

	//Database Connection

	if(!empty($yourName)){ 
		if(!empty($content)) {
			$host = "localhost";
			$dbusername = "root";
			$dbpassword="";
			$dbname = "myday";

			//connection
			$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

			if (mysqli_connect_error()) {
				die();
			}else{
				$sql = "INSERT INTO content (yourName, feeling, content)
				values('$yourName','$feeling','$content')";
				if ($conn->query($sql)) {
					echo "Have a nice day ahead!!";
				}else{
					echo "Error: ". $sql ."<br>". $conn->error;
				}
				$conn->close();
			}

		}
		else{
			echo "Write how was your day...";
			die();
		}
	}else{
		echo "write your name";
		die();
	}
?>