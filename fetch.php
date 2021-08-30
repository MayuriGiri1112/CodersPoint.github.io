<?php

	$con = mysqli_connect("localhost","root","","clone1");
	if($con->connect_error)
	{
		die("Failed to connect!!".$con->connect_error);
	}
	if(isset($_POST['search']))
	{
		$inpText = $_POST['search'];
		$query = "SELECT * FROM search WHERE topic_name LIKE '%$inpText%'";
		$result = $con->query($query);
		if($result->num_rows>0)
		{
			while($row=$result->fetch_assoc())
			{
				echo '<a href="'.$row['topic_link'].'" class="list-group-item list-group-item-action border-1">'.$row['topic_name'].'</a>';
			}
		}
		else
		{
			echo "<p class='list-group-item border-1'>No Record Found!!</p>";
		}
	}

?>