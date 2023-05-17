<?php 
ob_start();
session_start();
include "dbconfig.php";
include "head.php"; 
include "donor-navbar.php";
?>


<section class="home" id="home">

    <div class="image">
        <img src="image/home.gif" alt="">
    </div>

    <div class="content">
        <h3>Your Appointments</h3>
		<?php
			$user = $_SESSION['username'];
			$sql = "SELECT * FROM `appointments` WHERE username = '$user' AND status='approved';";
			$result = mysqli_query($conn, $sql);
			
			if (mysqli_num_rows($result) > 0) {
				echo '<table class="table table-striped">';
				echo "<tr><td>Name</td><td>Contact</td><td>Email</td><td>Location</td><td>DateTime</td><td>Operation</td></tr>";
				
				while($row = mysqli_fetch_assoc($result)) {
					$id = $row['id'];
					echo "<tr><td>" . $row['name'] . "</td><td>" . $row['contact'] . "</td><td>" . $row['email'] . "</td><td>" . $row['location'] . "</td><td>". date('Y-m-d h:i:a', strtotime($row['date'])) ."</td>
					<td>
					<a href='donorApp-update.php?updateid=".$id."' class='text-light'>Update</a><span> | </span> 
					<a href='donorApp-delete.php?deleteid=".$id."' class='text-light delete-link'>Delete</a>
					</td>
					</tr>";	
				}
				echo "</table>";
			} else {
				echo "<p>No approved appointments found.<br><br><br> Please schedule an appointment or wait for your appointment's approval.</p>";
			}
		?>        
    </div>

</section>
</body>
</html>