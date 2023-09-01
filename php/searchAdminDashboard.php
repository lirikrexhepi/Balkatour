<?php
	require '../config.php';
	if(ISSET($_POST['search'])){
?>
	<table class="table table-bordered">
		<thead class="alert-info">
			<tr>
            <th>Id</th>
				<th>Fullname</th>
				<th>Email</th>
				<th>Username</th>
                <th>Gender</th>
                <th>Birthday</th>
                <th>Registered</th>
                <th>City</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$keyword = $_POST['keyword'];
				$query = $con->prepare("SELECT * FROM `users` WHERE `fullName` LIKE '%$keyword%'");
				$query->execute();
				while($row = $query->fetch()){
			?>
			<tr>
            <td><?php echo $row['id']?></td>
				<td><?php echo $row['fullName']?></td>
				<td><?php echo $row['email']?></td>
				<td><?php echo $row['username']?></td>
                <td><?php echo $row['gender']?></td>
                <td><?php echo $row['birthday']?></td>
                <td><?php echo $row['registered']?></td>
             
			</tr>
			
			
			<?php
				}
			?>
		</tbody>
	</table>
<?php		
	}else{
?>
	<table class="table table-bordered">
		<thead class="alert-info">
		  <tr>
            <th>Id</th>
				<th>Fullname</th>
				<th>Email</th>
				<th>Username</th>
				<th>Gender</th>
                <th>Birthday</th>
                <th>Registered</th>
            
			</tr>
		</thead>
		<tbody>
			<?php
				$query = $con->prepare("SELECT * FROM `users`");
				$query->execute();
				while($row = $query->fetch()){
			?>
			<tr>
                <td><?php echo $row['id']?></td>
				<td><?php echo $row['fullName']?></td>
				<td><?php echo $row['email']?></td>
				<td><?php echo $row['username']?></td>
                <td><?php echo $row['gender']?></td>
                <td><?php echo $row['birthday']?></td>
           
                <td><?php echo $row['registered']?></td>
            

			</tr>
			
			<?php
				}
			?>
		</tbody>
	</table>
<?php
	}
?>