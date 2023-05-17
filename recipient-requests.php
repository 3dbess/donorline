<?php 
ob_start();
session_start();
include "dbconfig.php";
include "head.php"; 
include "recipient-navbar.php";
?>


<section class="home" id="home">

    <div class="image">
        <img src="image/home.gif" alt="">
    </div>

    <div class="content">
        <h3>Your Requests</h3>
		<?php
			$user = $_SESSION['username'];
			$sql = "SELECT * FROM `requests` WHERE username = '$user';";
			$result = mysqli_query($conn, $sql);
			
			if (mysqli_num_rows($result) > 0) {
				echo '<table class="table table-striped">';
				echo "<tr><td>Name</td><td>Address</td><td>Units Requested</td><td>Blood Type </td><td>Purpose</td><td>Remarks</td><td>Status</td><td>Actions</td></tr>";
				
				while($row = mysqli_fetch_assoc($result)) {
					$id = $row['id'];
					echo "<tr><td>" . $row['name'] . "</td><td>" . $row['address'] . "</td><td>" . $row['units'] . "</td><td>" . $row['bloodtype'] . "</td><td>" . $row['purpose'] . "</td><td>" . $row['remarks'] . "</td><td>" . $row['status'] . "</td>
					<td>
					<a href='recipientApp-update.php?updateid=".$id."' class='text-light'>Update</a><span> | </span> 
					<a href='recipientApp-delete.php?deleteid=".$id."' class='text-light delete-link'>Delete</a>
					</td>
					</tr>";	
				}
				echo "</table>";
			} else {
				echo "<p>No recent blood requests.</p>";
			}
		?>        
    </div>

</section>

<section class="home" id="home">

    <div class="content">
        <h3>Completed Requests</h3>
		<?php
			$user = $_SESSION['username'];
			$sql = "SELECT * FROM `requests` WHERE username = '$user' AND isCompleted='1';";
			$result = mysqli_query($conn, $sql);
			
			if (mysqli_num_rows($result) > 0) {
				echo '<table class="table table-striped">';
				echo "<tr><td>Name</td><td>Address</td><td>Units Requested</td><td>Blood Type </td><td>Purpose</td><td>Remarks</td><td>Status</td></tr>";
				
				while($row = mysqli_fetch_assoc($result)) {
					$id = $row['id'];
					echo "<tr><td>" . $row['name'] . "</td><td>" . $row['address'] . "</td><td>" . $row['units'] . "</td><td>" . $row['bloodtype'] . "</td><td>" . $row['purpose'] . "</td><td>" . $row['remarks'] . "</td><td>" . $row['status'] . "</td>
					</tr>";	
				}
				echo "</table>";
			} else {
				echo "<p>No recently completed blood requests recorded.</p>";
			}
		?>        
    </div>

	
    <div class="image">
        <img src="image/schedule.gif" alt="">
    </div>


</section>
</body>
</html>