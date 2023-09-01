
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Hospital</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-html5'></i>
      <span class="logo_name">Admin</span>
    </div>
    <ul class="nav-links">
        <li>
          <a href="adminDashboard.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Users</span>
          </a>
        </li>
       
    
        <li>
          <a href="">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Test</span>
          </a>
        </li>
       
      
        <li>
        <a href="">
            <i class='bx bx-user' ></i>
            <span class="links_name">Test</span>
          </a>
        </li>
          <li>
          <a href="">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Test</span>
          </a>
        </li>
        <li>
        <a href="">
            <i class='bx bx-message' ></i>
            <span class="links_name">Test</span>
          </a>
        </li>
       
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Test</span>
          </a>
        </li>
        <li class="log_out">
          <a href="index.html">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      
    
    </nav>

    <div >
      <table>
        <th>
          <td>edonis</td>
          <td>bislimi</td>
          <td>17</td>
        </th>
      </table>
    </div>

  <div class="home-content">
      

      <div class="sales-boxes">
        
        <div class="recent-sales box">
          <div class="title">Patients Table</div>
     	<div class="col-md-3"></div>
	<div class="col-md-12 well">
	
	
		<div class="col-md-12">
			<form method="POST" action="">
				<div class="form-inline">
					<input type="text" class="form-control" name="keyword" placeholder="Search here..." required="required"/>
					<button class="btn btn-success" name="search" id="submitMedicalH">Search</button>
				</div>
			</form>
			<br /><br />
			<?php include'searchAdminDashboard.php'?>
            
		</div>

    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>







		

