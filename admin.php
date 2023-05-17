<?php
ob_start();
session_start();
include "dbconfig.php";
include "head.php"; 
include "admin-navbar.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!--HOME SECTION-->
<section class="home" id="home">

    <div class="image">
        <img src="image/home.gif" alt="">
    </div>

    <div class="content">
    <h1 class="heading"> ADMIN <span> DASHBOARD</span> </h1>
    <div class="content" id="users">
    <h3>Manage Users</h3>
		<?php
			$sql = "SELECT * FROM `users` WHERE isDeleted=0;";
			$result = mysqli_query($conn, $sql);
			
			if (mysqli_num_rows($result) > 0) {
				echo '<table class="table table-striped">';
				echo "<tr><td>User ID</td><td>Username</td><td>Email</td><td>Contact</td><td>Blood Type</td><td>User Type</td><td>Status</td><td>Operation</td></tr>";
				
				while($row = mysqli_fetch_assoc($result)) {
					$id = $row['id'];
					echo "<tr><td>" . $row['id'] . "</td><td>" . $row['username'] . "</td><td>" . $row['email'] . "</td><td>" . $row['contactno'] . "</td><td>" . $row['bloodtype'] . "</td><td>" . $row['usertype'] . "</td><td>" . $row['status'] . "</td>
					<td>
					<a href='adminApprove.php?id=".$id."' class='text-light' name='admin-approve'>Approve</a><span> | </span> 
					<a  href='adminDelete.php?id=".$id."' class='text-light delete-link'>Delete</a>
					</td>
					</tr>";	
				}
				echo "</table>";
			} else {
				echo "<p>No new registered accounts available.</p>";
			}
		?>        
    </div>
    </div>

</section>


<section class="home" id="request">

    <div class="content">
        <h3>Manage Requests</h3>
		<?php
			$user = $_SESSION['username'];
			$sql = "SELECT * FROM `requests` WHERE isDeleted=0;";
			$result = mysqli_query($conn, $sql);
			
			if (mysqli_num_rows($result) > 0) {
				echo '<table class="table table-striped">';
				echo "<tr><td>User ID</td><td>Name</td><td>Address</td><td>Blood Type</td><td>Purpose</td><td>Remarks</td><td>Status</td><td>Actions</td></tr>";
				
				while($row = mysqli_fetch_assoc($result)) {
					$id = $row['id'];
					echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['address'] . "</td><td>" . $row['bloodtype'] . "</td><td>" . $row['purpose'] . "</td><td>" . $row['remarks'] . "</td><td>" . $row['status'] . "</td>
					<td>
					<a href='adminApproveReq.php?id=".$id."' class='text-light'>Approve</a><span> | </span> 
					<a  href='adminDeleteReq.php?id=".$id."' class='text-light delete-link'>Delete</a>
					</td>
					</tr>";	
				}
				echo "</table>";
			} else {
				echo "<p>No new blood requests were made.</p>";
			}
		?>        
    </div>
    </div>
    <div class="image">
        <img src="image/schedule.gif" alt="">
    </div>

</section>

<?php
include "donor-footer.php";
?>

<script>
    let menu = document.querySelector('#menu-btn');
    let navbar = document.querySelector('.navbar');

    menu.onclick = () =>{
        menu.classList.toggle('fa-times');
        navbar.classList.toggle('active');
    }

    window.onscroll = () =>{
        menu.classList.remove('fa-times');
        navbar.classList.remove('active');
    }

    function toggleTimes(id) {
        var button = document.getElementById(id);
        var schedule = button.nextElementSibling;

        if (schedule.style.display == "block") {
            $(schedule).fadeOut(500);
        } else {
            schedule.style.display = "block";
        }
    }



</script>

</body>
</html>