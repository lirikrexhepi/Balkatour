<?php

	include_once('../config.php');	


	if(isset($_POST['submit']))
	{

		$name = $_POST['name'];
		
	



		$sql = "INSERT INTO states(name) VALUES ( :name)";

		$prep = $con->prepare($sql);
					

					
		$prep->bindParam(':name', $name);
	

		$prep->execute();
		header('Location:searchAdmin.php');	

  		

		}
				


?>