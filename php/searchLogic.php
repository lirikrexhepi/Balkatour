<?php
	require 'config.php';
	if(ISSET($_POST['search'])){
?>
	<table class="table table-bordered">
		<thead class="alert-info">
			<tr>
			    <th>Id</th>
				<th>Fullname</th>
				<th>Mobile Number</th>
				<th>Visit Date</th>
				<th>Medical History</th>
				<th>Age</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$keyword = $_POST['keyword'];
				$query = $con->prepare("SELECT * FROM `medicalhistory` WHERE `name` LIKE '%$keyword%'");
				$query->execute();
				while($row = $query->fetch()){
			?>
			<tr>
            <td><?php echo $row['id']?></td>
				<td><?php echo $row['name']?></td>
				<td><?php echo $row['mobileNumber']?></td>
				<td><?php echo $row['VisitDate']?></td>
                <td><?php echo $row['MedicalHistory']?></td>	
				<td><?php echo $row['age']?></td>
                
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
				<th>Mobile Number</th>
				<th>Visit Date</th>
				<th>Medical History</th>
				<th>Age</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$query = $con->prepare("SELECT * FROM `medicalhistory`");
				$query->execute();
				while($row = $query->fetch()){
			?>
			<tr>
                <td><?php echo $row['id']?></td>
				<td><?php echo $row['name']?></td>
				<td><?php echo $row['mobileNumber']?></td>
				<td><?php echo $row['VisitDate']?></td>
                <td><?php echo $row['MedicalHistory']?></td>	
				<td><?php echo $row['age']?></td>	
			</tr>
			
			<?php
				}
			?>
		</tbody>
	</table>
<?php
	}
?>